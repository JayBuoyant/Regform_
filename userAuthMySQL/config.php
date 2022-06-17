<?php
    function db() 
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "zuriphp";

        $conn = mysqli_connect($host, $user, $password, $db);
        
        
        if($conn){
            echo "Connected to MYSQL database successfully!";
            
        }
        else {
            die ("ERROR: Could not connect.");
        }

        return $conn;
    }
    db();
?>