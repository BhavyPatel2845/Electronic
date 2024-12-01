<?php
    require "../../backend/database_connection.php"; // Include your database connection

    // Handle the update request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $orderId = $_POST['orderId'];
        $orderStatus = $_POST['orderStatus'];

        // Update the order status in the database
        $updateQuery = "UPDATE orders SET orderStatus = ? WHERE order_id = ?";
        if ($stmt = $conn->prepare($updateQuery)) {
            $stmt->bind_param("si", $orderStatus, $orderId);
            if ($stmt->execute()) {
                echo "<script>alert('Order status updated successfully.');</script>";
            } else {
                echo "<script>alert('Error updating order status.');</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Error preparing the update query.');</script>";
        }
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
                        // Fetch orders from the database
                        $selectOrder = "SELECT * FROM orders  order by order_id DESC";
                        $result = mysqli_query($conn, $selectOrder);
                        if ($result && $result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                    ?>
                            <li class="listOfHistory">
                                <div class="id"><?php echo $row['order_id'] ?></div>
                                <div class="name"><?php echo $row['userEmail'] ?></div>
                                <div class="payment"><?php echo $row['paymentMethod'] ?></div>
                                <div class="type"><?php echo $row['orderStatus'] ?></div>
                                <div class="total"><?php echo $row['price'] ?></div>
                                <div class="action">
                                    <div class="actionbox" id="actionBox1">
                                        <!-- Order Status Dropdown -->
                                        <form action="" method="POST">
                                            <div class="dropdown">
                                                <select name="orderStatus" class="statusDropdown">
                                                    <option value="Pending" <?php if($row['orderStatus'] == 'Pending') echo 'selected'; ?>>Pending</option>
                                                    <option value="Confirmed" <?php if($row['orderStatus'] == 'Confirmed') echo 'selected'; ?>>Confirmed</option>
                                                    <option value="Rejected" <?php if($row['orderStatus'] == 'Rejected') echo 'selected'; ?>>Rejected</option>
                                                    <option value="Shipped" <?php if($row['orderStatus'] == 'Shipped') echo 'selected'; ?>>Shipped</option>
                                                    <option value="Out for Delivery" <?php if($row['orderStatus'] == 'Out for Delivery') echo 'selected'; ?>>Out for Delivery</option>
                                                    <option value="Delivered" <?php if($row['orderStatus'] == 'Delivered') echo 'selected'; ?>>Delivered</option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="orderId" value="<?php echo $row['order_id']; ?>">
                                            <button type="submit" class="updateButton">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                    <?php
                            }
                        } else {
                            echo "<li>No orders found.</li>";
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