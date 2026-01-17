<?php
session_start();
session_destroy();
setcookie("cookie_name","",time()-1800,"/");
header("Location:../View Files/LOGIN_PAGE.php");
exit();
?>