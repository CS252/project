<?php

session_start();

require_once('functions.inc.php');

if(check_login_status() == false) {
		redirect('login.php');
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
	
	<h1> ADMINISTRATION PANEL</h1>
	<form action="processinput.php" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>

	<p>You are currently logged in. You may want to logout using the button</p>
	<p><a href="logout.inc.php">Log Out</a></p>

</body>
</html>
