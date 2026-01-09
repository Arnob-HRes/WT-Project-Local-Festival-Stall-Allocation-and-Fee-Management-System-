<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location:../Views Files/HOME_PAGE.php");
    exit();
}
?>