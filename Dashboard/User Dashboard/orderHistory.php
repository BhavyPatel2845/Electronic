
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

// Handle cancel order request
if (isset($_GET['cancel_order_id'])) {
    $orderId = $_GET['cancel_order_id'];
    $deleteQuery = "UPDATE orders SET orderStatus = 'CANCEL' WHERE order_id = ?";
    
    if ($stmt = $conn->prepare($deleteQuery)) {
        $stmt->bind_param("i", $orderId);
        if ($stmt->execute()) {
            echo "<script>alert('Order cancelled successfully.'); window.location.href = 'orderHistory.php';</script>";
        } else {
            echo "<script>alert('Error cancelling order.'); window.location.href = 'orderHistory.php';</script>";
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/css/orderHistory.css">
    <style>
        /* Cancel Order button style */
.archiveOrder {
    background-color: #e74c3c; /* Red background for cancel action */
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
    display: inline-block; /* Ensure it is treated as a button */
}

/* Hover effect for Cancel button */
.archiveOrder:hover {
    background-color: #c0392b; /* Darker red on hover */
    transform: scale(1.05); /* Slightly enlarge the button */
}

/* Focus state for accessibility */
.archiveOrder:focus {
    outline: none;
    box-shadow: 0 0 5px rgba(231, 76, 60, 0.6); /* Add a glow effect when focused */
}

/* Disabled state (optional) */
.archiveOrder:disabled {
    background-color: #bdc3c7;
    cursor: not-allowed;
}

        </style>
</head>

<body>

    <div class="dashboardHeader" id="dashboardHeader">
        <div class="logoAndBars">
            <i id="bars" class="fa-solid fa-bars"></i>
            <img class="companyLogo" src="../../IMAGES/logo.png" alt="">
        </div>
        <div class="profile">
            <i class="fa-solid fa-user"></i>
        </div>
    </div>

    <div class="dashboardContainer" id="dashboardContainer">
        <div class="leftSide">
            <ul>
                <li><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-user"></i><a href="editProfile.php">Edit Profile</a></li>
                <li><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-user"></i><a href="orderHistory.php">Order History</a></li>
                <li><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-user"></i><a href="review.php">Review</a></li>
                <li><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-user"></i><a href="../../backend/logout.php">Log Out</a></li>
            </ul>
        </div>

        <div class="rightSide">
            <div class="orderHistoryHeader">
                <h2>Your Orders</h2>
            </div>
            <div class="orderHistorySection">
                <?php
                $email = $_SESSION['email'];
                $selectQuery = "SELECT orders.order_id, orders.userEmail, orders.created_at, orders.orderStatus,products.product_id, products.productName, products.detail, products.price, products.productImage 
                FROM orders 
                JOIN products ON orders.product_id = products.product_id 
                WHERE orders.userEmail = '$email'";

                $result = mysqli_query($conn, $selectQuery);

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
                                <pre>Invoice <i class="fa-solid fa-angle-down"></i></pre>
                            </div>
                        </div>
                    </div>
                    <div class="orderBottomDetails">
                        <div class="orderLeftDetails">
                            <div class="bottomHeading">
                                <div>   
                                    <p>SHIP TO</p>
                                    <h6><?php echo $row['userEmail'] ?></h6>
                                </div>
                                <div>
                                    <p>TOTAL</p>
                                    <h6><?php echo $row['price'] ?></h6>
                                </div>
                                <div>
                                    <P>ORDER PLACED</P>
                                    <h6><?php echo $row['created_at'] ?></h6>
                                </div>
                                <div>
                                    <p>ORDER STATUS</p>
                                    <h6><?php echo $row['orderStatus'] ?></h6>
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
                                        <a href="./review.php"><button type="button"> Product Review </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        if($row['orderStatus'] == 'Pending'){
                    ?>
                    <a href="#" class="archiveOrder" onclick="confirmCancelOrder(<?php echo $row['order_id']; ?>)">Cancel Order</a>
                    <?php
                        }
                        else{
                        }
                    ?>
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

    <script src="../../Assets/js/common.js"></script>
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>

    <script>
        function confirmCancelOrder(orderId) {
            if (confirm("Are you sure you want to cancel this order?")) {
                window.location.href = "orderHistory.php?cancel_order_id=" + orderId;
            }
        }
    </script>

</body>

</html>
