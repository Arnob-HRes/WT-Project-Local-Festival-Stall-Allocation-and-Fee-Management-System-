<?php
include('../Database or Model Files/DataBase.php');

$conn=connectsql();
$result=getuser($conn,$user,$pass);
$row=$result->num_rows;

?>