<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location:../View Files/HOME_PAGE.php");
    exit();
}
?>