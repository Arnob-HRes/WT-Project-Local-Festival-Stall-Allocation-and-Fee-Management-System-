<?php
include("../Controller Logic/session_and_cookie_check.php");
include('../Database or Model Files/DataBase.php');

$conn=connectsql();
$result=getBook($conn,$_SESSION["username"]);

?>