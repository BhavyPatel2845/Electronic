<?php
    require "../../backend/adminSession.php";
?>
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
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">


    <!-----------
     Custom CSS 
     ----------->
    <link rel="stylesheet" href="./Assets/css/addCategory.css">

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
                <a href="dashboard.php"><li><img src="Assets/images/sidebarImg/dashboard.png" alt="">Dashboard</li></a>
                <a href="addCategory.php"><li><img src="Assets/images/sidebarImg/addproducts.png" alt="">Add Category</li></a>
                <a href="category.php"><li><img src="Assets/images/sidebarImg/products.png" alt="">Category</li></a>
                <a href="addProduct.php"><li><img src="Assets/images/sidebarImg/addproducts.png" alt="">Add Products</li></a>
                <a href="products.php"><li><img src="Assets/images/sidebarImg/products.png" alt="">Products</li></a>
                <a href="user.php"><li><img src="Assets/images/sidebarImg/users.png" alt="">Users</li></a>
                <a href="userContact.php"><li><img src="Assets/images/sidebarImg/users.png" alt="">User Contact</li></a>
                <a href="orderHistory.php"><li><img src="Assets/images/sidebarImg/orderhistory.png" alt="">Order History</li></a>
                <a href="feedback.php"><li><img src="Assets/images/sidebarImg/orderhistory.png" alt="">Feedback</li></a>
            </ul>
        </div>
        <!-------------------------- 
        dashboard left side - End
        --------------------------->

        <!-------------------------- 
        dashboard Right side - start
        --------------------------->
        <div class="rightSide">
        <div class="addCategoryForm">
                <div class="container">
                    <h3>Category Form</h3>
                    <form action="../../backend/addCategory.php" method="post" enctype="multipart/form-data">
                        <p>Category Name</p>
                        <input type="text" placeholder="category Name" name="categoryName">
                        <p>Category Details</p>
                        <textarea rows="10" cols="47" placeholder="category detail" name="categoryDetail"></textarea>
                        <p>Category Image</p>
                        <input type="file" name="categoryImage">
                        <button type="submit" name="submit"> submit </button>
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
    <script src="./Assets/js/addCategory.js"></script>


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>
</body>

</html>