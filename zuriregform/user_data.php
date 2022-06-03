<?php
$name = $_POST['name'];
$email = $_POST['email'];
$thedate = $_POST['birthday'];
$handle = fopen("userdata.csv", "a");
$firstline="NAME, EMAIL, BIRTHDAY"."\r";

$addline = $name.", ". $email.", ". $thedate."\n";
$filecontentts=" ";

if(filesize("userdata.csv") > 0){ //u cant read from an empty file?
    $handle = fopen("userdata.csv", "r"); // to read u must open in read mode
    $filecontentts=fread($handle, filesize("userdata.csv"));
    //echo $filecontentts;
}

$handle = fopen("userdata.csv", "a");
//$pos = strpos($mystring, $findme);

if(filesize("userdata.csv") == 0)
    fwrite($handle,$firstline);

fwrite($handle,$addline);

fclose($handle);

echo  $name.' Thanks for submitting the form'. " on this ". $thedate;


print_r($filecontentts);

?>