<?php 
session_start();
require 'source/functions.php';

if( isset($_SESSION["login"]) ){
	header("Location: index.php");
	exit;
}

if( isset( $_POST["login"] ) ){
	if( !login() ){
		echo "<script>document.location.href = 'login.php'</script>";
	} else {
			$_SESSION["login"] = $_POST["username"];
			if( isset($_POST["cookie"]) ){
				setcookie("UAI", $_POST["username"], time()+10);
			}
		echo "<script>document.location.href = 'index.php'</script>";
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css?d=<?= time();  ?>">
</head>
<body>
	<div class="content"><center>
		<img class="avatar" src="source/avatar.png"></img>
		<h1>Login</h1>
		<form method="post">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" placeholder="Your Username" maxlength="12" autocomplete="off" autofocus>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" placeholder="Your Password" maxlength="16">
			<button type="submit" id="submit" name="login">Login</button><br>
			<input type="checkbox" name="cookie" id="box">
			<label for="box" class="cookie">Remember Me</label>
		</form>
		<a href="register.php">Not have account ?</a>
	</center></div>
</body>
</html>