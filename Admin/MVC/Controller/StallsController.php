<?php
require_once '../Database_or_Model_Files/Database.php';

$conn = connectsql();


$isAjax = isset($_GET['ajax']) && $_GET['ajax'] === '1';

if ($isAjax) {
    header('Content-Type: application/json');

    $status   = $_GET['status']   ?? 'all';
    $category = $_GET['category'] ?? 'all';
    $search   = $_GET['search']   ?? '';

    $where  = [];
    $params = [];
    $types  = '';

    if ($status !== 'all') {
        $where[]  = 'status = ?';
        $params[] = $status;
        $types   .= 's';
    }
    if ($category !== 'all') {
        $where[]  = 'category = ?';
        $params[] = $category;
        $types   .= 's';
    }
    if ($search !== '') {
        $where[]  = '(stall_id LIKE ? OR zone LIKE ?)';
        $like = '%'.$search.'%';
        $params[] = $like;
        $params[] = $like;
        $types   .= 'ss';
    }

    $sql = "SELECT stall_id, zone, category, width, `lenth`, base_fee, status
            FROM stalls";
    if ($where) {
        $sql .= " WHERE ".implode(' AND ', $where);
    }
    $sql .= " ORDER BY created_at DESC";

    $stmt = $conn->prepare($sql);
    if ($params) {
        $stmt->bind_param($types, ...$params);
    }
    $stmt->execute();
    $res = $stmt->get_result();

    $rows = [];
    while ($r = $res->fetch_assoc()) {
        $rows[] = $r;
    }

    echo json_encode(['success' => true, 'data' => $rows]);
    exit;
}

// ---------- INSERT ----------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stallId     = trim($_POST['stall_id'] ?? '');
    $zone        = trim($_POST['zone'] ?? '');
    $category    = trim($_POST['category'] ?? '');
    $width       = (int)($_POST['width'] ?? 0);
    $lenth      = (int)($_POST['lenth'] ?? 0);
    $baseFee     = (int)($_POST['base_fee'] ?? 0);
    $status      = $_POST['status'] ?? 'Available';
    $priority    = $_POST['priority'] ?? 'Normal';
    $description = trim($_POST['description'] ?? '');

    if ($stallId !== '' && $zone !== '' && $category !== '' && $width > 0 && $lenth > 0 && $baseFee > 0) {
        $sql = "INSERT INTO stalls
                (stall_id, zone, category, width, lenth, base_fee, status, priority, description)
                VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "sssiiisss",
            $stallId, $zone, $category,
            $width, $lenth, $baseFee,
            $status, $priority, $description
        );
        $stmt->execute();
    }

    header("Location: ../View Files/Stalls.php");
    exit;
}

// dashboard er jonno total
$resultStalls = $conn->query("SELECT * FROM stalls");
$totalStalls  = $resultStalls ? $resultStalls->num_rows : 0;