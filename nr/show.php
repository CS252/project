<?php

$username = "root";
$password = "batman";
$host = "localhost";
$database = "images_2";

$mysqli = new mysqli('localhost', 'root', 'batman', 'images_2');

	if (mysqli_connect_errno()) {
			printf("Unable to connect to database: %s",mysqli_connect_error);
		exit();
	}

$id = $mysqli->real_escape_string($_POST['id']);

//if(!isset($id) || empty($id) || !is_int($id)){
//     die("Please select your image!");
//}else{

$query = mysql_query("SELECT * FROM tbl_images WHERE id='".$id."'");
$row = mysql_fetch_array($query);
$content = $row['image'];

header('Content-type: image/jpg');
     echo $content;
//}

?>