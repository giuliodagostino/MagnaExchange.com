<?php session_destroy();
$e=$_COOKIE['username'];
$p=$_COOKIE['password'];
unset($e);
unset($p);
setcookie($e,'',time()-3600);
setcookie($p,'',time()-3600);
header("location:../login.php");
?>