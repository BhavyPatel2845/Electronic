
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!------------
     Google Fonts
     ------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!-----------
     Custom CSS 
     ----------->
    <link rel="stylesheet" href="./Assets/css/editProfile.css">

</head>

<body>


    <!----------------------
     Dashboard Header - start 
    ------------------------>
    <div class="dashboardHeader" id="dashboardHeader">
        <div class="logoAndBars">
            <i id="bars" class="fa-solid fa-bars"></i>
            <img class="companyLogo" src="../../IMAGES/logo.png" alt="">
        </div>
        <div class="profile">
            <i class="fa-solid fa-user"></i>
        </div>
    </div>
    <!---------------------
     Dashboard Header - End 
    ---------------------->



    <!------------------
     Dashboard  - start 
    ------------------->
    <div class="dashboardContainer" id="dashboardContainer">

        <!-------------------------- 
        dashboard left side - start
        --------------------------->
        <div class="leftSide">
            <ul>
                <li><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-user"></i><a href="editProfile.php">Edit Profile</a></li>
                <li><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-user"></i><a href="orderHistory.php">Order History</a></li>
                <li><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-user"></i><a href="review.php">Review</a></li>
            </ul>
        </div>
        <!-------------------------- 
        dashboard left side - End
        --------------------------->

        <!-------------------------- 
        dashboard Right side - start
        --------------------------->

        <?php 
            require "../../backend/database_connection.php";
            require "../../backend/loginSession.php";

            if(empty($_SESSION['email'])){
                echo "<script> alert('Please Login') </script>";
                header("Location: ../../login.php");
            }
            else{
                $email = $_SESSION['email'];
            $selectQuery = "select * from users where email='$email'";
            $result = mysqli_query($conn, $selectQuery);
            if(!empty($result) && mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
             
        ?>
        <div class="rightSide">
            <!-- Edit profile page-->
            <div class="editProfile" id="editProfile">
                 <div class="registration" id="registration">
                    <div class="registrationCointainer">
                         <div class="registrationTitle">
                            <h2>Edit Profile</h2>
                        </div>
                        <form action="../../backend/editProfile.php" method="POST">
                            <input name="user_id" type="hidden" value = "<?php echo $row['user_id'] ?>" required>
                            <input name="userName" type="text" placeholder="Full Name" value = "<?php echo $row['name'] ?>" required>
                            <input name="dob" type="date" placeholder="Date Of Birth..." value = "<?php echo $row['dob'] ?>" required>
                            <input name="city" type="text" placeholder="City..." value = "<?php echo $row['city'] ?>" required> 
                            <input name="pincode" type="number" placeholder="Pincode..." value = "<?php echo $row['pincode'] ?>" required>
                            <input name="phoneNumber" type="number" placeholder="Phone Number..." value = "<?php echo $row['phoneNumber'] ?>" required> 
                            <input name="email" type="email" placeholder="Email..." value = "<?php echo $row['email'] ?>" required>
                            <div class="registrationButton">
                                <button type="submit" name="submit">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
       
                }
            }
            else{
                echo "no result found";
            }
        }
        ?>
        <!-------------------------- 
        dashboard Right side - End
        --------------------------->

    </div>
    <!------------------
     Dashboard  - End 
    ------------------->





    <!---------
     Custom Js  
    ----------->
    <script src="./Assets/js/editProfile.js"></script>


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>
</body>

</html>