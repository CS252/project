<?php

if(!isset($_SESSION['logged_in'])) {
		redirect('login.php');
} 
else{
	$mysqli = new mysqli(DB_HOSTNAME_USER, DB_USERNAME_USER, DB_PASSWORD_USER, DB_DATABASE_USER);

	if (mysqli_connect_errno()) {
			printf("Unable to connect to database: %s",mysqli_connect_error);
		exit();
	}
	$connection=1;
	}
	

?>