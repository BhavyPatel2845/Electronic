<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <!------------
     Google Fonts
     ------------->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!-----------
     Custom CSS 
     ----------->
    <link rel="stylesheet" href="./CSS/forgetPassword.css">
</head>
<body>


<div class="forgetPassword" id="forgetPassword">

    <!----------------
      Login - start 
    ----------------->


    

    <div class="forgetPasswordContainer">
        <div class="container">
            <form action="./backend/generateOtp.php" method="POST">
            <?php if (isset($_REQUEST['otpMsg'])) {
                echo $_REQUEST['otpMsg'];
            }
                ?>
                <?php if(isset($_REQUEST['wrongEmailMsg'])) {
                echo $_REQUEST['wrongEmailMsg'];
            }
             else if(isset($_REQUEST['emptyEmail'])) {
                echo $_REQUEST['emptyEmail'];
            }
                ?> 
            <h3>Forget Password</h3> 
            <div class="byEmail">
                <input type="email" name="email" placeholder="Email..">
            </div>
            <div class="byPhoneNumber">
                <input type="number" name="number" placeholder="Phone Number..">
            </div>
            <div class="generateOtp">    
                <button id="btn" type="button">BY NUMBER</button>
                <button type="submit">GENERATE OTP</button>
            </div>
        </form>
        </div>

    </div>
    <!----------------
       Login - End 
    ----------------->

</div>



    <!---------
     Custom Js  
    ----------->
    <script src="./Assets/js/forgetPassword.js"></script>


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>

</body>
</html>