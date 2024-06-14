<?php

    $connection = mysqli_connect('localhost','root','','ayubo_dphcs');

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    else {
        //echo "Connection Successful";
    }
?>