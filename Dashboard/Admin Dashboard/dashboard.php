<?php
    // require "../../backend/adminSession.php";
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!-----------
     Custom CSS 
     ----------->
    <link rel="stylesheet" href="./Assets/css/dashboard.css">

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
                <a href="user.php"><li><img src="Assets/images/sidebarImg/users.png" alt="">User Contact</li></a>
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
            <div class="detailSection">
                <div class="heading">
                    <h1>Analytics Overview</h1>
                    <select>
                        <option value="">last 9 month</option>
                        <option value="">last 4 month</option>
                        <option value="">last 3 month</option>
                        <option value="">last 1 month</option>
                    </select>
                </div>
                <div class="detailSectionContainer">
                    <div class="detailContainer">
                        <div class="imageContainer">
                            <div class="image">
                                <i class="fa-solid fa-recycle"></i>
                            </div>
                        </div>
                        <div class="detail">
                        <?php
                                require "../../backend/database_connection.php";
                                $sql = "SELECT COUNT(DISTINCT product_id) AS unique_product FROM products";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();                               
                            ?>
                            <h6>Products</h6>
                            <p><?php echo $row['unique_product']  ?></p>
                            <?php
                                } else {
                                    echo "0";
                                }
                            ?>
                        </div>
                        <div class="moreInfo">
                            <p>More Info</p>
                        </div>
                    </div>
                    
                    <div class="detailContainer">
                        <div class="imageContainer">
                            <div class="image">
                                <i class="fa-solid fa-recycle"></i>
                            </div>
                        </div>
                        <div class="detail">
                        <?php
                                require "../../backend/database_connection.php";
                                $sql = "SELECT COUNT(DISTINCT userEmail) AS unique_customer FROM orders";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();                               
                            ?>
                            <h6>Customer</h6>
                            <p><?php echo $row['unique_customer']  ?></p>
                            <?php
                                } else {
                                    echo "0";
                                }
                            ?>
                        </div>
                        <div class="moreInfo">
                            <p>More Info</p>
                        </div>
                    </div>
                    <div class="detailContainer">
                        <div class="imageContainer">
                            <div class="image">
                                <i class="fa-solid fa-recycle"></i>
                            </div>
                        </div>
                        <div class="detail">
                        <?php
                                require "../../backend/database_connection.php";
                                $sql = "SELECT COUNT(DISTINCT order_id) AS unique_customer FROM orders";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();                               
                            ?>
                            <h6>Total Order</h6>
                            <p><?php echo $row['unique_customer']  ?></p>
                            <?php
                                } else {
                                    echo "0";
                                }
                            ?>
                        </div>
                        <div class="moreInfo">
                            <p>More Info</p>
                        </div>
                    </div>
                    
                    <div class="detailContainer">
                        <div class="imageContainer">
                            <div class="image">
                                <i class="fa-solid fa-recycle"></i>
                            </div>
                        </div>
                        <div class="detail">
                        <?php
                                require "../../backend/database_connection.php";
                                $sql = "SELECT COUNT(DISTINCT order_id) AS unique_customer FROM orders where orderStatus = 'pending'";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();                               
                            ?>
                            <h6>Pending Order</h6>
                            <p><?php echo $row['unique_customer']  ?></p>
                            <?php
                                } else {
                                    echo "0";
                                }
                            ?>
                        </div>
                        <div class="moreInfo">
                            <p>More Info</p>
                        </div>
                    </div>
                    
                    <div class="detailContainer">
                        <div class="imageContainer">
                            <div class="image">
                                <i class="fa-solid fa-recycle"></i>
                            </div>
                        </div>
                        <div class="detail">
                        <?php
                                require "../../backend/database_connection.php";
                                $sql = "SELECT COUNT(DISTINCT order_id) AS unique_customer FROM orders where orderStatus = 'Delivered'";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();                               
                            ?>
                            <h6>Deleveried Order</h6>
                            <p><?php echo $row['unique_customer']  ?></p>
                            <?php
                                } else {
                                    echo "0";
                                }
                            ?>
                        </div>
                        <div class="moreInfo">
                            <p>More Info</p>
                        </div>
                    </div>
                    <div class="detailContainer">
                        <div class="imageContainer">
                            <div class="image">
                                <i class="fa-solid fa-recycle"></i>
                            </div>
                        </div>
                        <div class="detail">
                        <?php
                                require "../../backend/database_connection.php";
                                $sql = "SELECT COUNT(DISTINCT order_id) AS unique_customer FROM orders where orderStatus = 'CANCEL'";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();                               
                            ?>
                            <h6>Cancel Order</h6>
                            <p><?php echo $row['unique_customer']  ?></p>
                            <?php
                                } else {
                                    echo "0";
                                }
                            ?>
                        </div>
                        <div class="moreInfo">
                            <p>More Info</p>
                        </div>
                    </div>
                    <div class="detailContainer">
                        <div class="imageContainer">
                            <div class="image">
                                <i class="fa-solid fa-recycle"></i>
                            </div>
                        </div>
                        <div class="detail">
                            <?php
                                require "../../backend/database_connection.php";
                                $sql = "SELECT price from orders where orderStatus = 'Confirmed'";
                                $result = $conn->query($sql);
                                $price = 0;
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()){
                                        $price = $price + $row['price'];
                                    }                               
                            ?>
                            <h6>Total Sale</h6>
                            <p>&#8377;<?php echo $price  ?></p>
                            <?php
                                } else {
                                    echo "0";
                                }
                            ?>
                        </div>
                        <div class="moreInfo">
                            <p>More Info</p>
                        </div>
                    </div>                
                    <div class="detailContainer">
                        <div class="imageContainer">
                            <div class="image">
                                <i class="fa-solid fa-recycle"></i>
                            </div>
                        </div>
                        <div class="detail">
                            <?php
                                require "../../backend/database_connection.php";
                                $sql = "SELECT COUNT(DISTINCT user_id) AS unique_users FROM users";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();                               
                            ?>
                            <h6>Users</h6>
                            <p><?php echo $row['unique_users']  ?></p>
                            <?php
                                } else {
                                    echo "0";
                                }
                            ?>
                        </div>
                        <div class="moreInfo">
                            <p>More Info</p>
                        </div>
                    </div>
                    
                </div>

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
    <script src="./Assets/js/dashboard.js"></script>


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>
</body>

</html>