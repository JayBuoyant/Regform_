<?php
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);
}

function registerUser($username, $email, $password){
    $filename = "./users.csv";
    $filecontent = $username. "\n" .$email. "\n" .$password;
    $handle =fopen ($filename, "a");
    fwrite ($handle, $filecontent);
    fclose ($handle);


}
echo $username. "\n'USER REGISTERED SUCCESSFULLY!' ";

if (!isset($_SESSION["email"]))
    header("Location: ../dashboard.php");
    exit;


