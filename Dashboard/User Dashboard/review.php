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
    <link rel="stylesheet" href="./Assets/css/review.css">

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
        <div class="rightSide">

            <div class="reviewForm">
                <div class="container">
                    <h3>Review Form</h3>
                    <form action="">
                        
                        <p>Product</p>
                        <input type="text" placeholder="Product Name">
                        <p>Product Category</p>
                        <select>
                            <option value="">Mobile</option>
                            <option value="">Smart Watch</option>
                            <option value="">Air Burds</option>
                            <option value="">Laptop</option>
                        </select>
                        <p>Feedback</p>
                        <textarea rows="10" cols="47" placeholder="Message"></textarea>
                        <div class="ratingStar">
                            <p>What's Your Experience ? </p>
                            <div class="stars">  
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <button type="submit"> submit </button>
                    </form>
                </div>
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
    <script src="./Assets/js/review.js"></script>


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>
</body>

</html>