<?php 
session_start();
setcookie("UAI", '', time() - 60);
session_destroy();
$_SESSION = [];

echo "<script>document.location.href = '../login.php';</script>"

 ?>