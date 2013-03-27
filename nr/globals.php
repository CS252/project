<?php
    $db = mysql_connect('localhost', 'root', 'logmein');
 
    if (!$db) {
        echo "Unable to establish connection to database server";
        exit;
    }
 
    if (!mysql_select_db('images', $db)) {
        echo "Unable to connect to database";
        exit;
    }
?>