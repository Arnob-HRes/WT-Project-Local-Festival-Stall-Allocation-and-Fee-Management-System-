<?php
include('../Database_or_Model_Files/DataBase.php');
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
        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
        if (!preg_match($pattern, $new_pass)) {
            $error = 'Password must be 8+ chars, with upper, lower, digit & special.';
        } else {
            $result = getusername($conn,$username);
            if ($result->num_rows === 0) {
                $error = 'No account found with this username.';
            } else {
               
                $result2=updatepass($conn,$username,$confirm);
                if ($result2) {
                    $success = 'Password reset successful. You can login now.';
                } else {
                    $error = 'Something went wrong. Try again.';
                }
            }
        }
    }
}
?>
