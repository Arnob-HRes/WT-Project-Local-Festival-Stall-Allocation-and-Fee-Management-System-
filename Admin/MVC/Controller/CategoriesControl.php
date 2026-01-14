<?php
require_once '../Database_or_Model_Files/Database.php';
$conn = connectsql();

// cat dropdown er jonno shudhu name gula
$sql = "SELECT name FROM categories WHERE status='Active' ORDER BY display_order, name";
$res = $conn->query($sql);

$cats = [];
while ($row = $res->fetch_assoc()) {
    $cats[] = $row['name'];
}

header('Content-Type: application/json');
echo json_encode(['success' => true, 'data' => $cats]);
