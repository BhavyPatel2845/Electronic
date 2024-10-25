<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forget password</title>
    <link rel="stylesheet" href="./CSS/forgetpassword.css">
</head>
<body>
    <div class="login" id="login">
        <div class="loginCointainer">   
            <div class="loginTitle">
                <h2>Reset Password</h2>
            </div>
            <form action="">
                <input type="email" placeholder="Email...">
                <div class="otpSection">
                    <input type="OTP" placeholder="OTP...">
                    <button class="btn_otp">Generate OTP</button>
                </div>
                <input type="newpassword" placeholder="New Password..."> 
                <input type="conformpassword" placeholder="Conform Password..."> 
                 <div class="loginButton">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    
   
        <script src="./JS/forgetPassword.js"></script>    
</body>
</html>