 <?php
  $name = $_POST['firstname'];
  $lname  = $_POST['lastname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  include ('connect.php');
  $query = "INSERT INTO message(fname,lname,email,subject,message) 
  VALUES ('$name','$lname','$email','$subject','message')";
  if(mysqli_query($conn,$query)){
    echo "login sucessfully";
  }else{
    echo "login fail";
  }
?> 
