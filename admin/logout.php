<?php
session_start();
session_destroy();
$e=$_COOKIE['email'];
$p=$_COOKIE['pass'];
unset($e);
unset($p);
setcookie($e,'',time()-3600);
setcookie($p,'',time()-3600);

header("location:../admin.php");
?>