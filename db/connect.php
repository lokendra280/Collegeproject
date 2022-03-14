<?php
    $host ="127.0.0.1";
    $username = "root";
    $password = "";
    $dbname ="project";
    $conn = mysqli_connect($host,$username,$password,$dbname);
    
    if(!$conn){
        die("can not connect with database");
      }

?>