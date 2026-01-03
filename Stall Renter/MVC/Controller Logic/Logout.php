<?php
session_start();
session_destroy();

header("Location:LOGIN_PAGE.php");
exit();
?>