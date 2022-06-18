<?php
//include the connection
include '../config.php';

mysqli_select_db($conn, $database);
$sql = "CREATE TABLE Students (
	id INT AUTO_INCREMENT PRIMARY KEY,
	full_names VARCHAR(120) NOT NULL,
	email VARCHAR(32) NOT NULL,
    gender VARCHAR(10),
	country VARCHAR(60),	
    password VARCHAR (16) NOT NULL
	-- dob TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn) {
    if (mysqli_query($conn, $sql)) {
        echo "Students Table created successfully";
    } else {
        echo "Error creating table: " , mysqli_error($conn);
    }
    mysqli_close($conn);
}