<?php
require "../../backend/database_connection.php";
require "../../backend/loginSession.php";

if(empty($_SESSION['email'])){
    echo "
            <script>
                alert('Please Login');
                window.location.href = '../../login.php';
            </script>";
}
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
    <link rel="stylesheet" href="./Assets/css/orderHistory.css">

</head>

<body>


        <!----------------------
     Dashboard Header - start 
    ------------------------>
    

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
            <div class="orderHistoryHeader">
                <h2>Your Orders</h2>
            </div>
            <div class="orderHistorySection">
            <?php
                $email = $_SESSION['email'];
                $selectQuery = "SELECT orders.order_id, orders.userEmail,orders.created_at, products.productName, products.detail, products.price, products.productImage 
                FROM orders JOIN products ON orders.product_id = products.product_id WHERE orders.userEmail = '$email'";

                // Run the query
                $result = mysqli_query($conn, $selectQuery);

                // Check if the query was successful and if there are any results
                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="orderContainer">
                    <div class="orderTopDetails">
                        <div class="orderId">
                            <p>ORDER</p>
                            <p><?php echo $row['order_id'] ?></p>
                        </div>
                        <div class="viewOrderDetailsAndInvoice">
                            <div class="viewOrderDetails">
                                <pre>View Order Details |</pre>
                            </div>
                            <div class="invoice">
                                <pre>  Invoice <i class="fa-solid fa-angle-down"></i></pre>
                            </div>
                        </div>
                    </div>
                    <div class="orderBottomDetails">
                        <div class="orderLeftDetails">
                            <div class="bottomHeading">
                                <div>   
                                    <p>SHIP TO</p>
                                    <H6><?php echo $row['userEmail'] ?></H6>
                                </div>
                                <div>
                                    <p>TOTAL</p>
                                    <h6><?php echo $row['price'] ?></h6>
                                </div>
                                <div>
                                    <P>ORDER PLACED</P>
                                    <h6><?php echo $row['created_at'] ?></h6>
                                </div>
                            </div>
                            <div class="product">
                                <div class="productImage">
                                <?php echo '<img src="../../backend/productImageUpload/' . $row['productImage'] . '" alt="' . $row['productName'] . '">' ?>
                                </div>
                                <div class="productName">
                                    <h6><?php echo $row['productName'] ?></h6>
                                    <p><?php echo $row['detail'] ?></p>
                                    <div class="buyViewButtons">
                                        <button type="button">Buy it again</button>
                                        <button type="button">View your item</button>
                                        <button type="button">Product Review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="archiveOrder">Archive Order</p>
                </div>
                <?php
                }
            } else {
                echo "No orders found.";
            }
            ?>
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
    <script src="../../Assets/js/common.js"></script>


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>
</body>

</html>