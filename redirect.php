<?php
session_start();
$_SESSION['count1']= $_SESSION['count1'] -2;
header("Location: index.php");
?>