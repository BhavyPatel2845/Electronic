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
    <link rel="stylesheet" href="./Assets/css/orderHistory.css">

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
                <a href="products.php"><li><img src="Assets/images/sidebarImg/products.png" alt="">Products</li></a>
                <a href="addCategory.php"><li><img src="Assets/images/sidebarImg/addproducts.png" alt="">Add Category</li></a>
                <a href="addProduct.php"><li><img src="Assets/images/sidebarImg/addproducts.png" alt="">Add Products</li></a>
                <a href="user.php"><li><img src="Assets/images/sidebarImg/users.png" alt="">Users</li></a>
                <a href="orderHistory.php"><li><img src="Assets/images/sidebarImg/orderhistory.png" alt="">Order History</li></a>
            </ul>
        </div>
        <!-------------------------- 
        dashboard left side - End
        --------------------------->

        <!-------------------------- 
        dashboard Right side - start
        --------------------------->
        <div class="rightSide">
            <div class="orderHistoryBox">
                <ul>
                    <li id="headerOflist">
                        <div class="id">Id</div>
                        <div class="name">Email</div>
                        <div class="payment">Payment</div>
                        <div class="status">Status</div>
                        <div class="total">Total</div>
                        <div class="action">Action</div>
                    </li>
                    <?php
                        require "../../backend/database_connection.php";

                        $selectOrder = "SELECT * FROM orders";
                        $result = mysqli_query($conn,$selectOrder);
                        if ($result && $result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){

                       ?>
                            <li class="listOfHistory">
                        <div class="id"><?php echo $row['order_id'] ?></div>
                        <div class="name"><?php echo $row['userEmail'] ?></div>
                        <div class="payment"><?php echo $row['paymentMethod'] ?></div>
                        <div class="type"><?php echo $row['orderStatus'] ?></div>
                        <div class="total"><?php echo $row['price'] ?></div>
                        <div class="action">
                            <div class="actionbox" id="actionBox1">
                                <div class="refund danger"><a href="#" class="danger">Refund</a></div>
                                <div class="refund danger"><a href="#">Message</a></div>
                            </div>
                        </div>
                    </li> 
                       <?php
                            }
                        }
                        else{
                            echo "bbb";
                        }
                       ?>
                                      
                    
                </ul>

            </div>
        </div>
    </div>

    <!------------------
     Dashboard  - End 
    ------------------->




    <!---------
     Custom Js  
    ----------->
    <script src="./Assets/js/orderHistory.js"></script>


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>
</body>

</html>