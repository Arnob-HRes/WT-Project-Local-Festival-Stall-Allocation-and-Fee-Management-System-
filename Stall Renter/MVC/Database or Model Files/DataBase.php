<?php
function connectsql(){
$host ="localhost";
$user="root";
$pass="";
$dbname="WebTechProject";
 
$conn = new mysqli($host,$user,$pass,$dbname);

if ($conn->connect_error)
{
    die("Connection Fail: ". $conn->connect_error);
}
return $conn;
}

function getuser($C,$user,$pass){
    $sql="SELECT * FROM user WHERE Username='".$user."' AND Password='".$pass."'";
    return $C->query($sql);
}

function getBook($C,$user){
    $sql="SELECT * FROM booking WHERE Username='".$user."'";
    return $C->query($sql);
}
?>