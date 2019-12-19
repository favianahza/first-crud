<?php 
$connect = mysqli_connect("127.0.0.1", "root", "", "mydb");

function register($method){
	global $connect;
	$username = $method["username"]; $password = $method["password"];
	$confirmation = $method["password_c"]; $email = $method["email"];

	if( $password != $confirmation ){
		echo "<script>alert('Password confirmation is not same !');</script>";
		return false;
	}

	$check = mysqli_query($connect, "SELECT NAME FROM user WHERE NAME = '$username'");
	if( mysqli_num_rows($check) === 1 ){
		echo "<script>alert('Username already used !')</script>";
		return false;
	}

	$query = "INSERT INTO user VALUES ('', '$username', '$password', '$confirmation', '$email')";

	mysqli_query($connect, $query);

	return mysqli_affected_rows($connect);
}

function login(){
	global $connect;
	$user = $_POST["username"]; $pass = $_POST["password"];

	$check = mysqli_query($connect, "SELECT * FROM user WHERE NAME = '$user'");
	if( mysqli_num_rows($check) === 0 ){
		echo "<script>alert('Username does not exist !');</script>";
		return false;
	}
	 $rows = mysqli_fetch_assoc($check);

	 if( $rows["PASSWORD"] != $pass ){
	 	echo "<script>alert('Wrong Password !');</script>";
		return false;
	 }

	 return true;
	
}

function create($method){
	global $connect;

	$NAME = $_POST["name"]; 
	$AGE = $_POST["age"];
	$CLUB = $_POST["club"];
	if( !upload() )
	{
		return false;
	}
	$PICT = upload();

	var_dump($PICT); die;

	$query = "INSERT INTO football VALUES('', '$NAME', '$AGE', '$CLUB', '$PICT')";
	mysqli_query($connect, $query);

	return mysqli_affected_rows($connect);

}

function upload(){

	$NAME = $_POST["name"];
	$CLUB = $_POST["club"];
	$file_name = $_FILES["pict"]["name"];
	$tmp_name = $_FILES["pict"]["tmp_name"];
	$error = $_FILES["pict"]["error"];
	$file_size = $_FILES["pict"]["size"];

if( $error === 4 ){
	echo "<script>alert('You are not uploading files !')</script>";
	return false;
}

$valid_ext = ["jpg", "png", "gif", "jpeg"];
$ext = explode(".", $file_name);
$ext = strtolower(end($ext));

if( !in_array($ext, $valid_ext) ){
	echo "<script>alert('You are not uploading an image !')</script>";
	return false;
}

if( $file_size > 1000000 ){
	echo "<script>alert('You image size is too big !')</script>";
	return false;
}

$newfilename = $CLUB ."-" . $NAME . "." .  $ext;

move_uploaded_file($tmp_name, "image/".$newfilename);

return $newfilename;

}

function read($query){
	global $connect;

	$rows = [];
	$result = mysqli_query($connect, $query);

	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function update($method){
	global $connect;

	$id = $method["id"];
	$name = $method["name"];
	$age = $method["age"];
	$club = $method["club"];
		if( $_FILES["pict"]["error"] === 4 ){
			$pict = $method["picture"];	
		} else {
			$pict = upload();		
		}
	
	$query = "UPDATE football SET NAME = '$name', AGE = $age, CLUB = '$club', PICTURE = '$pict' WHERE ID = $id";

	$result = mysqli_query($connect, $query);

	return mysqli_affected_rows($connect);
}

function sch($keyword){
	$search = "SELECT * FROM football WHERE NAME LIKE '%$keyword%' LIMIT $limit, $data_per_page";

	return read($search);

}

if( isset($_COOKIE["check"]) ){
	header("Location: games.php");
}

 ?>
