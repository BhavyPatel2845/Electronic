<?php

require "./backend/database_connection.php";
require "./backend/loginSession.php";
if(empty($_SESSION['email'])){
    echo "<script> alert('Please Login') </script>";
    header("Location: ./login.php");
}
else{
     $email = $_SESSION['email'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    

    <!------------
     Google Fonts
     ------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!-----------
     Custom CSS 
     ----------->
    <link rel="stylesheet" href="./CSS/addToCart.css">

</head>

<body>

    <!----------------------------    HEADER     --------------------------------->
        
    <?php 
            include 'Header.php';
        ?>

        
    <!-- ---------------------
        Cart Section - Start 
    ------------------------->

    <div class="cartSection" id="cartSection">
       
        <section class="cartProductBox">
            <div class="header">
                <h1>Shopping Cart</h1> 
                <h4>Price</h4>   
            </div>
            <?php
                $selectQuery = "SELECT addtocart.cart_id, addtocart.quantity, products.productName,products.detail, products.price,products.productImage 
                FROM addtocart JOIN products ON addtocart.product_id=products.product_id
                WHERE addtocart.userEmail = '$email'";
                $result = mysqli_query($conn, $selectQuery); 
                    if (!empty($result)) {
                        $totalPrice = 0;
                        $productCount = 0;
                        while($row = $result->fetch_assoc()){
                            $productCount++;
            ?>
            <div class="cartBoxes">
                <div class="productCartImg">
                    <img src="./IMAGES/product1.png" alt="">
                </div>
                <div class="productCartDetails">
                    <div class="colProductDetails">
                        
                        <div class="cartBoxDetails">
                            <div class="aboutProduct"><?php echo $row['detail'] ?> </div>
                            <div class="Shipping">
                                Eligible for FREE Shipping
                            </div>
                            <div class="nameOfProduct">
                                <b>Style Name : </b><span><?php echo $row['productName'] ?></span>
                            </div>
                        </div>
                        <?php
                            $totalPrice = $totalPrice+$row['price']*$row['quantity'];
                        ?>

                        <div class="cartPriceBox"> <?php echo $row['price']*$row['quantity'] ?> &#8377;
                        </div>
                    </div>
                    <div class="rowProductDetails">
                        <select name="" id="">
                            <option value = "<?php echo $row['quantity'] ?>"><?php echo $row['quantity'] ?></option>
                            <option value="1">Qty:1</option>
                            <option value="2">Qty:2</option>
                            <option value="3">Qty:3</option>
                            <option value="4">Qty:4</option>
                            <option value="5">Qty:5</option>
                            <option value="6">Qty:6</option>
                            <option value="7">Qty:7</option>
                            <option value="8">Qty:8</option>
                            <option value="9">Qty:9</option>
                            <option value="10">Qty:10</option>
                        </select>
                        
                        <a href="#">| Delete</a>
                        <a href="#">| Share product</a>
                        <a href="#">| See more like this.</a>
                        <a href="#">| Save for later</a>
                    </div>
                </div>
            </div>
            <?php
                    }
                }
            ?>
        </section>
        <section class="cartTotalPriceBox">
            <div class="subtotalCarts">
            Subtotal (<?php echo $productCount ?> items) : <span>&#8377;<?php session_start(); echo $_SESSION['totalPrice'] = $totalPrice; ?></span>
            </div>
            <button type=""><a href="order.php">Check Out</a></button>
            <div class="otherProduct">
            <a href="#">
                See pair with your cart product.
            </a>
            </div>
        </section>
    </div>
   

    <!-- ---------------------
        Cart Section - End
    ------------------------->

   
        <!--------------------------------     FOOTER    ------------------------------>

        
        <?php 
                include 'Footer.php';
            ?>
    <!---------
     Custom Js  
    ----------->
    <script src="./JS/addToCart.js"></script>


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>

</body>

</html>