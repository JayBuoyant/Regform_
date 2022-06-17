<?php
Session_start();
require_once "../config.php";


//register users
//function registerUser($fullnames, $email, $password, $gender, $country)
function registerUser()
{
    //create a connection variable using the db function in config.php
    $conn = db();
    
     $select = mysqli_query ("INSERT INTO `students` (`id`, `full_names`, `country`, `gender`, `email`, `password`) VALUES (NULL, $fullnames, $country, $gender, $email, $password)");
     if($select)
     { 
         exit('New User Registered!');
         
     }
     else {
         echo "Error Registering User.";
     }
     //check if user with this email already exist in the database
    /* $select = mysqli_query ($conn, "SELECT * FROM `students` WHERE `email` = '". $_POST['email']);
    if(mysqli_num_rows($select))
    { 
        exit('This email address exists!');
        
    }
    else {
        echo "No such email";
    } */
    
}
    
//login users
function loginUser($email, $password)
{
    //create a connection variable using the db function in config.php
    $conn = db();

    echo "<h1 style='color: red'> LOG ME IN (IMPLEMENT ME) </h1>";
    //open connection to the database and check if username exist in the database
    $select = mysqli_query ($conn, "SELECT * FROM `students` WHERE `email` = ". $_POST['email']." AND  `password` = ".$_POST['password']);
    //if it does, check if the password is the same with what is given
    if (mysqli_num_rows($select))
    {
        echo 'Password matched!';
    }
    //if true then set user session for the user and redirect to the dasbboard
    $_SESSION["loginUser"] = $email;
   header ("location: ../dashboard.php");
}


function resetPassword($email, $password){
    //create a connection variable using the db function in config.php
    $conn = db();
    echo "<h1 style='color: red'>RESET YOUR PASSWORD (IMPLEMENT ME)</h1>";
    //open connection to the database and check if username exist in the database
    //if it does, replace the password with $password given
}

function getusers(){
    $conn = db();
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);
    //return users from the database
    //loop through the users and display them on a table
    echo"<html>
    <head></head>
    <body>
    <center><h1><u> ZURI PHP STUDENTS </u> </h1> 
    <table border='1' style='width: 700px; background-color: magenta; border-style: none'; >
    <tr style='height: 40px'><th>ID</th><th>Full Names</th> <th>Email</th> <th>Gender</th> <th>Country</th> <th>Action</th></tr>";
    if(mysqli_num_rows($result) > 0){
        while($data = mysqli_fetch_assoc($result)){
            //show data
            echo "<tr style='height: 30px'>".
                "<td style='width: 50px; background: blue'>" . $data['id'] . "</td>
                <td style='width: 150px'>" . $data['full_names'] .
                "</td> <td style='width: 150px'>" . $data['email'] .
                "</td> <td style='width: 150px'>" . $data['gender'] . 
                "</td> <td style='width: 150px'>" . $data['country'] . 
                "</td>
                <form action='action.php' method='post'>
                <input type='hidden' name='id'" .
                 "value=" . $data['id'] . ">".
                "<td style='width: 150px'> <button type='submit', name='delete'> DELETE </button>".
                "</tr>";
        }
        echo "</table></table></center></body></html>";
    }
    
}

 function deleteaccount($id)
 {
     $conn = db();
     $sql = ("DELETE FROM `students` WHERE `email` = ". $_POST['email']." AND  `password` = ".$_POST['password']);
     //delete user with the given id from the database
     IF ($conn -> query($sql) === TRUE)
     {
        echo "Record deleted successfully!";
     }
     else {
        echo "Error deleting record: " . $conn->close();
     }
 }
 // mysql_close($conn);
?>