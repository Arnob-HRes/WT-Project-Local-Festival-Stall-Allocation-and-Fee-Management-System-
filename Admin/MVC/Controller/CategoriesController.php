<?php
require_once '../Database_or_Model_Files/Database.php';
$conn = connectsql();

header('Content-Type: application/json');

$action = $_REQUEST['action'] ?? '';


