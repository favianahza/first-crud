<?php 
session_start();
$name = $_SESSION["login"];
require 'source/functions.php';

if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
}

$players = read("SELECT * FROM `football`");

if ( isset($_POST["search"]) ){
	$players = sch($_POST["keyword"]);
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Football Player</title>
	<link rel="stylesheet" type="text/css" href="index.css?d=<?= time();  ?>">
</head>
<body><center>
<div class="topbar">
	<form class="sch" method="post">
		<input type="text" name="keyword" autocomplete="off" autofocus id="search" placeholder="Search data...">
		<button type="submit" class="box-sch" name="search">5</button>
	</form>
	<?php if ( $name == "admin" ): ?>
		<center><div class="crt"><a href="create.php" class="create">Add Data</a></div></center>
	<?php endif ?>
	<h1 class="user">Welcome, <?= $name; ?></h1>
	<a href="source/logout.php" class="logout">Logout</a>
</div>
	<table width="90%" border="1" class="table" cellspacing="1">
		<tr>
			<th class="no">NO</th>
			<th class="name">NAME</th>
			<th class="age">AGE</th>
			<th class="club">CLUB</th>
			<th class="pict">PICTURE</th>
			<?php if ( $name == "admin" ): ?>
			<th class="act">ACTION</th>
			<?php endif ?>
		</tr>
		<?php $id = 1 ?>
		<?php foreach( $players as $player ) : ?>
		<tr>
			<td><?= $player["ID"]; ?></td>
			<td><?= $player["NAME"]; ?></td>
			<td><?= $player["AGE"]; ?></td>
			<td><?= $player["CLUB"]; ?></td>
			<td><img src="image/<?= $player["PICTURE"]; ?>" title="This is picture of <?= $player["NAME"]; ?>"></td>
			<?php if ( $name == "admin" ): ?>
			<td><a href="update.php?id=<?= $player["ID"]; ?>">Update</a> | <a href="delete.php">Delete</a></td>
			<?php endif ?>
		<?php $id++; ?>
		<?php endforeach; ?>
		</tr>
	</table>
	</div>
</center></body>
</html>