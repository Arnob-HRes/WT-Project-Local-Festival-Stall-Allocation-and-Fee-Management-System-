<?php
session_start();
setcookie("cookie_name","",time()-10,"/");
session_destroy();
header("Location:../View Files/LOGIN_PAGE.php");
exit();
?>