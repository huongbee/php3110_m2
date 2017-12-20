<?php
session_start();
session_destroy();

setcookie('username',"admin",time()-120,'http://localhost/php3110_m2/');
setcookie('password',"111111",time()-120,'http://localhost/php3110_m2/');
header('Location:login.php');
?>