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
                SET name=?, slug=?, description=?, status=?, display_order=?, 
                WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            'ssssisi',
            $name, $slug, $description, $status, $order, $id
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
                    (name, slug, description, total_stalls, status, display_order)
                    VALUES (?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $total = $order;
            $stmt->bind_param(
                'sssisis', $name, $slug, $description, $total, $status, $order
            );
            $stmt->execute();
            $id = $stmt->insert_id;
        }
    }

     // updated row return korbe
    $res = $conn->query("SELECT * FROM categories WHERE id=$id");
    $row = $res->fetch_assoc();
    echo json_encode(['success' => true, 'data' => $row]);
    exit;
}

/* DELETE part */
if ($action === 'delete') {
    $id = (int)($_POST['id'] ?? 0);
    if ($id <= 0) {
        echo json_encode(['success' => false]);
        exit;
    }
    $stmt = $conn->prepare("DELETE FROM categories WHERE id=?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    echo json_encode(['success' => true]);
    exit;
}

echo json_encode(['success' => false, 'message' => 'Bad request']);




