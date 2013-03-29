<?php    // Set a cookie that expires in 24 hours
    setcookie("username",$username, time()+3600*24);
    setcookie("password",$password, time()+3600*24);
	
	require_once('fuctions.inc.php');
	redirect("index.php");

?>