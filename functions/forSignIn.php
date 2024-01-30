<?php 
require('../config/db.php');
$email=$_POST['email'];
$password=$_POST['password'];
function generateUsername($email) {

    $cleanedEmail = preg_replace('/[^a-zA-Z0-9]/', '', $email);
    $username = substr($cleanedEmail, 0, 10);
    return $username;
}
$username=generateUsername($email);
if(isset($email)  && isset($password))
{
    $query="select email from users where email='$email'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0)
    {
        echo "Email already exist";
    }
    else
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query2="insert into users(username, email,password) values ('$username', '$email','$hashedPassword')";
        $result2=mysqli_query($con,$query2);
    }
}
?>