<?php
include('../Database or Model Files/DataBase.php');

$conn=connectsql();
$result=getBook($conn,$_SESSION["username"]);
$result2=getPay($conn,$_SESSION["username"]);
?>