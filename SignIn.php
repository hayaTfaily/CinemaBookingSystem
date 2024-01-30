<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/owl.carousel.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="container">
        <form action="" id="signinform">
            <h1>Sign In</h1>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" id="email">
                <i class='bx bxs-user'></i>
            </div>
            <div class="error" id="erroremail"></div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" id="password">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="error" id="errorpassword"></div>
            <div class="input-box">
                <input type="password" placeholder="Confirm password" name="cpassword" id= "cpassword">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="error" id="errorconfirm"></div>
            <button type="submit" class="btn" name="submit" id="submit">Sign In</button>
            <div class="register-link">
                <p>Already have an account?<a href="Login.php">Login</a></p>
            </div>
        </form>
    </div>

    <script src="assets/js/signIn.js"></script>
</body>
</html>