<?php
session_start();
session_unset();
session_destroy();
header("location:Login.php");
// delete cookie
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);
$_SESSION["login"] = false;
exit;
