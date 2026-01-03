<?php
session_start();
session_destroy();

header("Location:../View Files/LOGIN_PAGE.php");
exit();
?>