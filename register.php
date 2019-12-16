<?php  
require 'source/functions.php';

if( isset($_POST["register"]) ){
	if( register($_POST) > 0 ){
		echo"<script>alert('Success to Register !'); document.location.href = 'login.php';</script>";
	} else{
		echo"<script>alert('Failed to Register !'); document.location.href = 'register.php';</script>";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="register.css?d=<?= time(); ?>">
</head>
<body><center>
	<div class="content">
		<img class="avatar" src="source/avatar.png"></img>
		<h1 class="register">Register</h1>
		<form method="post">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" placeholder="Insert Username" autocomplete="off" maxlength="12">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" placeholder="Insert Password" autocomplete="off" maxlength="16">
		<label for="password_c">Confirmation Password</label>
		<input type="password" name="password_c" id="password_c" placeholder="Insert Confirmation" autocomplete="off" maxlength="16">
		<label for="email">Email</label>
		<input type="text" name="email" id="email" placeholder="Insert Email" autocomplete="off">
		<button type="submit" id="submit" name="register">Register</button>
		</form>
		<a href="index.php">Have an account ?</a>
	</div>
</center></body>
</html>