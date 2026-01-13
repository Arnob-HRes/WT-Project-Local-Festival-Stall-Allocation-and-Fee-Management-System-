<?php
function connectsql(){
    $host ="localhost";
    $user ="root";
    $pass ="";
    $dbname ="Admin-database";   // phpMyAdmin e je DB create korle oita

    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error){
        die("Connection Fail: ". $conn->connect_error);
    }
    return $conn;
}

// Login er jonno; pore secure version banabo
function getuser($C, $user, $pass){
    $sql = "SELECT * FROM user WHERE Username='".$user."' AND Password='".$pass."'";
    return $C->query($sql);
}
?>
