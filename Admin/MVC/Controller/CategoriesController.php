<?php
require_once '../Database_or_Model_Files/Database.php';
$conn = connectsql();

header('Content-Type: application/json');

$action = $_REQUEST['action'] ?? '';

if ($action === 'list') {
    $search = trim($_GET['search'] ?? '');
    $sql = "SELECT * FROM categories";
    if ($search !== '') {
        $sql .= " WHERE name LIKE ? OR slug LIKE ?";
        $stmt = $conn->prepare($sql);
        $like = "%$search%";
        $stmt->bind_param('ss', $like, $like);
        $stmt->execute();
        $res = $stmt->get_result();
    } else {
        $res = $conn->query($sql);
    }
    $rows = [];
    while ($r = $res->fetch_assoc()) {
        $rows[] = $r;
    }
    echo json_encode(['success' => true, 'data' => $rows]);
    exit;
}

if ($action === 'save') {
    $id          = (int)($_POST['id'] ?? 0);
    $name        = trim($_POST['name'] ?? '');
    $slug        = trim($_POST['slug'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $status      = $_POST['status'] ?? 'Active';
    $order       = (int)($_POST['display_order'] ?? 1);
    $color       = $_POST['color_tag'] ?? '#2563eb';

    $errors = [];

    if ($name === '') {
        $errors['name'] = 'Name is required.';
    }
    if ($slug === '') {
        $slug = strtolower(preg_replace('/[^a-z0-9]+/i','-',$name));
    }
    if (!in_array($status, ['Active','Inactive'], true)) {
        $errors['status'] = 'Invalid';
    }

    if ($errors) {
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }

    if ($id > 0) {
       
        $sql = "UPDATE categories
                SET name=?, slug=?, description=?, status=?, display_order=?, color_tag=?
                WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            'ssssisi',
            $name, $slug, $description, $status, $order, $color, $id
        );
        $stmt->execute();

    } else {
       
        $stmt = $conn->prepare("SELECT id, total_stalls FROM categories WHERE name=?");
        $stmt->bind_param('s', $name);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($row = $res->fetch_assoc()) {
            // same name → oi row e jog
            $id    = (int)$row['id'];
            $total = (int)$row['total_stalls'] + $order;

            $stmt2 = $conn->prepare(
                "UPDATE categories
                 SET total_stalls = ?, display_order = ?
                 WHERE id = ?"
            );
            $stmt2->bind_param('iii', $total, $order, $id);
            $stmt2->execute();

        } else {
            // new row
            $sql = "INSERT INTO categories
                    (name, slug, description, total_stalls, status, display_order, color_tag)
                    VALUES (?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $total = $order;
            $stmt->bind_param(
                'sssisis', $name, $slug, $description, $total, $status, $order, $color
            );
            $stmt->execute();
            $id = $stmt->insert_id;
        }
    }



