<?php 
session_start();

if (!isset($_SESSION["email"]))
    header("Location: ../forms/login.html");
    //exit;

else  
    echo $_SESSION["email"]." WELCOME TO ZURI TRAINING ". ' <a href="../php/logout.php"> <b> LOGOUT <b> </a>';
    
?>
