<?php
session_start();
if(isset($_POST['submit'])){
    $username = $_POST ['email'];
    $password = $_POST ['password'];
    $handle = fopen ("users.csv" , "r");
    // $errors= array();
    $_SESSION['email'] = $username;
    $_SESSION['success'] = "You have successfully logged in";
   // loginUser($email, $password);
}

/*if (count($errors) > 0 );
foreach ($errors as $error);
echo $errors;
//endforeach;
//endif;*/

function loginUser($username, $password) {
    if (isset($_POST['submit'])){
        $username = $handle ($_POST['email']);
        $password = $handle ($_POST['password']);

        if (loginUser($username)) {
            array_push($errors, "Username is required");
        }
        if (loginUser($password)) {
            array_push($errors, "Password is required");
        }
    }
        $password= md5($password);

        $query = "SELECT * FROM users WHERE email = '$username' AND password = '$password'";
        $results = ($handle. $query);
        if ($handle ($results) == 1) {

        $_SESSION ['email'] = $username;
        $_SESSION['success'] = "You have successfully logged in";
        header('Location: ./dashboard.php'); 
        }
        else array_push($errors, "Username or password incorrect");
 }
    

?>