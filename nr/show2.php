<?php
 $con=mysqli_connect("localhost","root","batman","test");
 if(mysqli_connect_errno($con)){echo "Failed "; }
 echo "asd";
$sql = "SELECT * FROM test2";
echo "fgh";
 
        // the result of the query
        $result = mysqli_query($con,$sql) or die("Invalid query: " . mysql_error());
 
        // Header for the image
        header("Content-type: image/jpeg");
        echo mysql_result($result, 0,‘data’);
 
     
?>