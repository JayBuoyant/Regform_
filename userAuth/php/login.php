<?php
session_start();
if(isset($_POST['submit'])){
    $username = $_POST ['email'];
    $password = $_POST ['password'];

//echo "the submit isset".$_POST['submit']. $username . $password;
authUser($username, $password); //trying to authenticate users login password


}
//$users = file("users.csv"); //read contents of the file and retirns an array
//$checkthis = $users[6]; // get the vallue with key 6 in the returned array
//print_r($users) ;


function authUser ($username,  $password){
    //https://code-boxx.com/php-read-file/
    //6 Ways to Read Files In PHP – Into String, Array, And More!
    if(filesize("users.csv") > 0){ //u cant read from an empty file?
        $users = file("users.csv"); //read contents of the file and returns an array
        $checkthis = $users["1"]; // get the value with [key 1] in the returned array per user
        echo $checkthis;
    }  
    if (strpos($checkthis,$username)  && strpos($checkthis,$password) ){
        echo "EMAIL FOUND!"; 
        $_SESSION["email"] = $username;
       // header ("Location: ../index.php");
        header("Location: ../php/dashboard.php");
        exit;
    }
    else 
       
        $_SESSION["email"] = $username;
        echo "EMAIL NOT FOUND!";
        header("Location: ../forms/login.html");
        exit;
    
}

function loginUser($username, $password) {

    if(filesize("users.csv") > 0){ //u cant read from an empty file?
        $handle = fopen("users.csv", "r"); // to read u must open in read mode
        $filecontents=fread($handle, filesize("users.csv"));
        //echo $filecontents;
    }  

    if (strpos($filecontents,$username) != ""){//occurence of username in contents of the file 
        echo "EMAIL FOUND!"; 
        $_SESSION["email"] = $username;
        header("Location: ./index.php");
        exit;
    }
    else 
        echo "EMAIL NOT FOUND!";
}

?>