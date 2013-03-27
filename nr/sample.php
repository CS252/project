<?php
 $con=mysqli_connect("localhost","root","batman","test");
 if(mysqli_connect_errno($con)){echo "Failed"; }

if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) { 

  // Temporary file name stored on the server
  $tmpName  = $_FILES['image']['tmp_name'];  

  // Read the file 
  $fp      = fopen($tmpName, 'r');
  $data = fread($fp, filesize($tmpName));
  $data = addslashes($data);
  fclose($fp);


  // Create the query and insert
  // into our database.
  $sql="INSERT INTO test2 VALUES ('$_POST[name]','$data')";
  if (!mysqli_query($con,$sql))
  {
  die('Error');
  }
  // Print results
  print "Thank you, your file has been uploaded.";

  }
  else {
  print "No image selected/uploaded";
  }
?>
