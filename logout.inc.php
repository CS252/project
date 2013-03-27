<?php

session_start();


require_once('functions.inc.php');

if(check_login_status() == false){
		redirect('login.php');
} else {

	unset($_SESSION['logged_in']);
	unset($_SESSION['username']);
	
	session_destroy();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xlmns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-type" content="text/html;charset=utf-8"  />
	<title>Creating a Simple php and mysql login system</title>
</head>

<body>

<h1>Logged out</h1>

<p>You have succesfully logged out. BACK to <a href="login.php">home</a>
screen.</p>

</body>


</html>



	
