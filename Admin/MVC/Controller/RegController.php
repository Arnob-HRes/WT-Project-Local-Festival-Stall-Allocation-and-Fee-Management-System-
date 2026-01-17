<?php
require_once '../Database_or_Model_Files/Database.php';
header('Content-Type: application/json');

$conn = connectsql();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Invalid request method']);
    exit;
}

// Sanitize input
$username = trim($_POST['username'] ?? '');
$fullname = trim($_POST['fullname'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$address = trim($_POST['address'] ?? '');
$user_type = $_POST['user_type'] ?? 'renter';

// Validation
$errors = [];

if (empty($username) || empty($fullname) || empty($phone) || empty($email) || empty($password)) {
    $errors[] = 'All required fields must be filled';
}

if (strlen($password) < 6) {
    $errors[] = 'Password must be at least 6 characters';
}

if (!preg_match('/^\d{11}$/', $phone)) {
    $errors[] = 'Phone must be 11 digits';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format';
}

if (!empty($errors)) {
    echo json_encode(['success' => false, 'error' => implode(', ', $errors)]);
    exit;
}

// Check duplicate
$check_sql = "SELECT id FROM user WHERE Username = ? OR Email = ? OR ContactNumber = ?";
$stmt = $conn->prepare($check_sql);
$stmt->bind_param('sss', $username, $email, $phone);
$stmt->execute();
if ($stmt->get_result()->num_rows > 0) {
    echo json_encode(['success' => false, 'error' => 'Username, Email or Phone already exists']);
    exit;
}

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert
$sql = "INSERT INTO user (Username, FullName, ContactNumber, Email, Password, Address, UserType) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssssss', 
    $username, $fullname, $phone, $email, 
    $hashed_password, $address, $user_type
);

if ($stmt->execute()) {
    echo json_encode([
        'success' => true, 
        'message' => 'Registration successful! Please login to continue.',
        'user_id' => $conn->insert_id
    ]);
} else {
    echo json_encode(['success' => false, 'error' => 'Database error: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
