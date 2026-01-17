<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location:../View Files/HOME_PAGE.php");
    exit();
}
if(!isset($_COOKIE["username"])){
    header("Location:../View Files/HOME_PAGE.php");
    exit();
}
?>