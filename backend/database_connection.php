<?php
    $serverName="localhost";
    $userName="root";
    $password="";
    $database="st_store";

    $conn = new mysqli($serverName,$userName,$password,$database);

    if ($conn->connect_error) {
        die("connectin failed : " . $conn->connect_error);
    }
?>