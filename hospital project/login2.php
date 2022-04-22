<?php
session_start();
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
include 'db.php';
if(mysqli_fetch_array(mysqli_query($con,"SELECT * FROM patients where email ='$email' and password ='$password' ")))
{
$_SESSION['email']= $email;  // now local variable email become global variable i put value of email in session variable
echo "login successfully";
header("Location:login.php");
}
else 
{
    echo "Login failed";
}

?>