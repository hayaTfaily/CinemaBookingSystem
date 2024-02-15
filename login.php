<?php
session_start();

require('./config/db.php');

if(isset($_POST['submit'])){ 
    $email = mysqli_real_escape_string($con, $_POST['email']); 
    $pass = mysqli_real_escape_string($con, $_POST['password']); 

    $select_users = mysqli_query($con, "SELECT * FROM users WHERE email='$email'") or die(mysqli_error($con)); 

    if(mysqli_num_rows($select_users) > 0) {
        $row = mysqli_fetch_assoc($select_users); 

        if(password_verify($pass, $row['password'])) {
            if($row['role'] == 1){ //admin
                $_SESSION['adminname'] = $row['name']; 
                $_SESSION['adminemail'] = $row['email']; 
                $_SESSION['adminid'] = $row['id']; 
                header('location:dashboard.php'); 
            } else { //user
                $_SESSION['username'] = $row['username']; 
                $_SESSION['useremail'] = $row['email']; 
                $_SESSION['userid'] = $row['id']; 
               
                if(isset($_GET['redirect'])) {
   
                    header('Location: ' . $_GET['redirect']);
                } else {
                  
                    header('Location: index.php');
                }
            } 
        } else {
            $message[] = 'Incorrect email or password!'; 
        } 
    } else {
        $message[] = 'User not found!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="container">
        <form action="login.php" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" id="email">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" id="password">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="fp">
                <label for=""><a href="">Forget password?</a></label>
            </div>
            <button type="submit" class="btn" name="submit" id="submit">Login</button>
            <div class="register-link">
                <p>Don't have an account?<a href="SignIn.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>