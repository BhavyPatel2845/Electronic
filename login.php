<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <?php 
       include 'header.php';
    ?>
    <div class="login" id="login">
        <div class="loginCointainer">
            <div class="loginTitle">
                <h2>Login</h2>
            </div>
            <form action="">
                <input type="email" placeholder="Email...">
                <input type="password" placeholder="password..."> 
                <div class="forgetPassword">
                    <a href="forgetPassword.php">Forget Password</a>
                </div>
                <div class="loginButton">
                    <button type="submit">Sign In</button>
                </div>
                <div class="createAccount">
                    <p>Dont't Have An Account ?</p>
                    <a href="registration.php">Sign Up</a>
                </div>
            </form>
        </div>
    </div>

    
    <?php 
       include 'footer.php';
    ?>
        <script src="script.js"></script>    
</body>
</html>