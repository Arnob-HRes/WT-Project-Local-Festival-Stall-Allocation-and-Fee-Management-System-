<?php
session_start();

function connectsql(){
    $host ="localhost";
    $user ="root";
    $pass ="";
    $dbname ="webtechproject";  

    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error){
        die("Connection Fail: ". $conn->connect_error);
    }
    return $conn;
}

function getuser($C, $user, $pass){
    $sql = "SELECT * FROM user WHERE Username='".$user."' AND Password='".$pass."'";
    return $C->query($sql);
}


function requireAdmin() {
    if (!isset($_SESSION['is_loggedin']) || ($_SESSION['role'] ?? '') !== 'admin') {
        header('Location: ../../LOGIN_PAGE.php');                   // i have to maintain exact path to all pages. It's a reminder.
        exit;
    }
}

function requireLogin() {
    if (!isset($_SESSION['is_loggedin'])) {
        header('Location: ../../LOGIN_PAGE.php');
        exit;
    }
}

function getUserName() {
    return $_SESSION['username'] ?? $_SESSION['fullname'] ?? 'User';
}

function isAdmin() {
    return ($_SESSION['role'] ?? '') === 'admin';
}
?>
