<?php
    $name = $_POST ['fname'];
    $email = $_POST ['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if($pass1===$pass2){
        $encryptedpassword = md5($pass1);
        include('connect.php');
        $query = "INSERT INTO registration (firstname,email,password) VALUES ('$name','$email','$encryptedpassword')";
        if(mysqli_query($conn,$query)){
            $echo = "signup sucessfull";
        }else {
            echo ="connection fail"
        }
    }
?>