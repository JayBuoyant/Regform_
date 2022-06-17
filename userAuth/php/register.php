<?php
if(isset($_POST['submit']))
{
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //registerUser($username, $email, $password);

}

    $array = array ($username, $email, $password);
    $handle = fopen("users.csv" , "a");
    fputcsv ($handle, $array);
    //fclose($handle);



    function registerUser($username, $email, $password){
                $row = array ($username, $email, $password);
                $file = fopen('users.csv' , 'a');
                    foreach ($row as $array) {
                        fputcsv($file, explode (',', $array));
                    }
                    
                    fclose ($file);
                }
                
        echo "User registered successfully!";
