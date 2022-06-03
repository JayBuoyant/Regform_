<?php
session_start();

session_unset();


function logout(){
   $email= array ("email" , "username" , "password");
   foreach ($users as $_POST){
       echo implode (",", $_SESSION);
       header("Location: ../form/login.html");
       echo "You have been looged out!";
   } 
} 
?>