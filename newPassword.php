<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


    </head>
    <body>
        
        <div class="forgetPassword" id="forgetPassword">
        <div class="forgetPasswordContainer">
           <div class="container">
            <?php
             if (isset($_REQUEST['passwordError'])) {
                echo $_REQUEST['passwordError'];
             }
             else if (isset($_REQUEST['updateError'])) {
                echo $_REQUEST['updateError'];
             }
            ?>
            <form action="./backend/generateOtp.php" method="post">
            <h3>Paaword</h3>
            <input type="password" name="newPassword" placeholder="New password..">
            <input type="password" name="conformpassword" placeholder="Conform password.."><br>
            <button type="submit">Submit</button>
            </form>
        </div>
        </div>

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