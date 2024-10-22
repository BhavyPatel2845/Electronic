
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
            <img class="companyLogo" src="../../Assets/images/logo.png" alt="">
        </div>
        <div class="profile">
            <img src="../../Assets/images/profile.jpg" alt="">
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
                <li><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-user"></i><a href="ticketSupportForm.php">Support</a></li>
                <li><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-user"></i><a href="review.php">Review</a></li>
            </ul>
        </div>
        <!-------------------------- 
        dashboard left side - End
        --------------------------->

        <!-------------------------- 
        dashboard Right side - start
        --------------------------->

        <div class="rightSide">

            <!-- Edit profile page-->
            <div class="editProfile" id="editProfile">
                    <form action="../../backend/userEditProfile.php" method="post">
                        <h2>Edit Profile</h2>
                        <div class="names">
                            <input type="text" placeholder="Ex. First Name">
                            <input type="text" placeholder="Ex. Middle Name">
                            <input type="text" placeholder="Ex. Last Name">
                        </div>
                        <div class="emailContact">
                            <input type="email" placeholder="Email">
                            <input type="number" placeholder="Phone">
                        </div>
                        <div class="birthAgeAndGender">
                            <input type="text" placeholder="Date of Birth">
                            <input type="text"  placeholder="Gender">
                        </div>
                        <div class="zipAndCity">
                            <input type="number" placeholder="pin Code">
                            <input type="text" placeholder="City">
                        </div>
                        <div class="stateAndCountry">
                            <input type="text"  placeholder="State">
                            <input type="text"  placeholder="Country">
                        </div>

                        <button type="submit" name="submit">submit</button>
                    </form>
            </div>
        </div>
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