<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_coffee_shop";
    
    $con = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$con) {
        die("Connection failed");
    }
?>