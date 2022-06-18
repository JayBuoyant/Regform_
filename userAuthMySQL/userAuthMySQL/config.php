<?php


function db()
{
    //set your configs here
    $host = "127.0.0.1";
    $user = "root";
    $db = "zuriphp";
    $password = "";

    $conn = mysqli_connect($host, $user, $password, $db);
    if ($conn) {
        echo " Connected to database Successfully";
    } else {
        die("ERROR: Not Connecting...");
    }
    return $conn;
}
db();