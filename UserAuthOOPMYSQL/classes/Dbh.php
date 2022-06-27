<?php
class dbh {
     public $hostname; 
     public $username; 
     public $password; 
     public $dbname;
     

    function __construct ($hostname, $username, $password, $dbname) 
    {
        $this->host = "localhost";
        $this->username = "root";
        $this->password = " ";
        $this->dbname = "zuriphp";
    }
}

protected function connect($conn)
{
    $conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
    or die ('Connection to database Successful!');
    
   $result= return $conn;
}

$mysqli_close($conn);

?>