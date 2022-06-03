<?php
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //registerUser($username, $email, $password);

}
$firstline= 'FULLNAME, EMAIL, PASSWORD' ."\n";
$addline=   $username. ", ".$email. ", ".$password; 
$filecontents=" ";

$list = array (
  array("$username", "$email" ,"$password")
);

$file = fopen("users.csv","w");

foreach ($list as $addline) {
  fputcsv($file, $addline);
}

fclose($file);
print_r($addline);
/*$handle=fopen("users.csv", "a+");
if (filesize("users.csv") == 0){
    $handle= fopen('users.csv', 'r'); //writes to the file
    $filecontents=fread($handle, filesize("users.csv"));
    echo $filecontents;
}
$handle= fopen ("users.csv" , "w");

if (filesize("users.csv")==0);
   fwrite($handle, $firstline);

fwrite($handle, $addline);
    fclose($handle);
   // session_start();*/



echo $username. "\n'User Successfully registered' ";

if (!isset($_SESSION["email"]))
    header("Location: ../index.php");
/*else
    echo $_SESSION["email"]." WELCOME TO ZURI TRAINING ". $username. ' <a href="../php/logout.php"> <b> LOGOUT <b> </a>';

    //print_r($output);

/* function registerUser($username, $email, $password){
    $filename = 'users.csv';
    $data = [];
    $f = fopen($filename, 'r');
    if ($f === false){
        die ('User cannot register' . $filename);
    while (($row = fgetcsv($f)) !== false){
        $data[]=$row;
    }
        }
    fclose($f);
    /* fopen("users.csv" , "a");
    fgetcsv("users.csv", array($username, $email, $password));
    fclose($csv);
}*/
//echo "HANDLE THIS PAGE";
?>