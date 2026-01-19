<?php
// forgot_password.php
session_start();
require_once('Admin/Database_or_Model_Files/Database.php'); // path adjust লাগলে করো
$conn = connectsql();

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $new_pass = trim($_POST['password'] ?? '');
    $confirm = trim($_POST['confirm_password'] ?? '');

    if ($username === '' || $new_pass === '' || $confirm === '') {
        $error = 'All fields are required.';
    } elseif ($new_pass !== $confirm) {
        $error = 'Passwords do not match.';
    } else {
        // Password requirements (server sideও check)
        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
        if (!preg_match($pattern, $new_pass)) {
            $error = 'Password must be 8+ chars, with upper, lower, digit & special.';
        } else {
            // Username exists?
            $stmt = $conn->prepare("SELECT * FROM user WHERE Username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 0) {
                $error = 'No account found with this username.';
            } else {
                // Password update (plain text; চাইলে hash ব্যবহার করো)
                $stmt = $conn->prepare("UPDATE user SET Password = ? WHERE Username = ?");
                $stmt->bind_param("ss", $new_pass, $username);
                if ($stmt->execute()) {
                    $success = 'Password reset successful. You can login now.';
                } else {
                    $error = 'Something went wrong. Try again.';
                }
            }
        }
    }
}
?>