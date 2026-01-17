<?php
require_once '../Database_or_Model_Files/Database.php';
$conn = connectsql();


header('Content-Type: application/json');


$action = $_REQUEST['action'] ?? '';


if ($action === 'save') {
   
    $username = mysqli_real_escape_string($conn, $_POST['u-username'] ?? '');
    $fullname = mysqli_real_escape_string($conn, $_POST['u-fullname'] ?? '');
    $email = mysqli_real_escape_string($conn, $_POST['u-email'] ?? '');
    $phone = mysqli_real_escape_string($conn, $_POST['u-phone'] ?? '');
    $password = password_hash($_POST['u-password'] ?? '', PASSWORD_DEFAULT); // Secure hash
    $address = mysqli_real_escape_string($conn, $_POST['u-address'] ?? '');


    if (empty($username) || empty($fullname) || empty($email)) {
        echo json_encode(['success' => false, 'error' => 'Username, Full Name and Email required.']);
        exit;
    }


    $sql = "INSERT INTO user (Username, FullName, ContactNumber, Email, Password, Address)
            VALUES ('$username', '$fullname', '$phone', '$email', '$password', '$address')";


    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'User created successfully']);
    } else {
        echo json_encode(['success' => false, 'error' => $conn->error]);
    }
    $conn->close();
    exit;
}


echo json_encode(['success' => false, 'error' => 'Invalid action']);
?>