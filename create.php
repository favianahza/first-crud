<?php 
session_start();
include 'source/functions.php';

if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
}

$name = $_SESSION["login"];

if( $name != "admin" ){
	header("Location: index.php");
}

if( isset($_POST["submit"]) ){
	if( create($_POST) > 0  ){
		echo "<script>alert('Success !');document.location.href = 'index.php';</script>";
	} else {
		echo "<script>alert('Failed !');document.location.href = 'create.php';</script>";
	}
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Create Data</title>
 	<link rel="stylesheet" type="text/css" href="create.css?d=<?= time(); ?>">
 </head>
 <body><center>
 	<div class="topbar">
	<form class="sch" method="post">
		<input type="text" name="keyword" autocomplete="off" autofocus id="search" placeholder="Search data...">
		<button type="submit" class="box-sch" name="search">5</button>
	</form>
	<h1 class="user">Welcome, <?= $name; ?></h1>
	<a href="source/logout.php" class="logout">Logout</a>
	</div>
	<div class="content">
	<h1>Create Data</h1>
 	<form method="post" enctype="multipart/form-data">
 		<table>
 			<tr>
 				<td><label class="name">Name</label></td>
 				<td><input type="text" name="name" id="name" autocomplete="off"><br></td>
 			</tr>
 			<tr> 				
 				<td><label class="age">Age</label></td>
 				<td><input type="text" name="age" id="age" maxlength="2" autocomplete="off"><br></td>
 			</tr>
 			<tr>
 				<td><label class="club">Club</label></td>
 				<td><input type="text" name="club" id="club" autocomplete="off"><br></td>
 			</tr>
 			<tr>
 				<td><label class="pict">Picture</label></td>
 				<td><input type="file" name="pict" id="pict"><br></td>
 			</tr>
 		</table>
 		<button type="submit" name="submit">Create</button>
 	</form>
 	</div>
 	<a href="index.php">Cancel</a>
 </center></body>
 </html>