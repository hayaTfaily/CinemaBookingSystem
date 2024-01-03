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
        <form action="">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Email">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="fp">
                <label for=""><a href="">Forget password?</a></label>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have an account?<a href="SignIn.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>