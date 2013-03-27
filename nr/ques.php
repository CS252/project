<?php 
 // Connects to your Database 
 mysql_connect("localhost", "root", "batman") or die(mysql_error()) ; 
 mysql_select_db("test") or die(mysql_error()) ; 
 
 //Retrieves data from MySQL 
 $data = mysql_query("SELECT * FROM test5") or die(mysql_error()); 
 //Puts it into an array 
 //while($info = mysql_fetch_array( $data )) 
 //{ 
 
 //Outputs the image and other data
 //Echo "<img src=http://localhost/Application/ques/".$info['photo'] ."> <br>"; 
 //Echo "<b>Name:</b> ".$info['sub'] . "<br> "; 
 //Echo "<b>Email:</b> ".$info['email'] . " <br>"; 
 //Echo "<b>Phone:</b> ".$info['phone'] . " <hr>"; 
 //}
 ?> 