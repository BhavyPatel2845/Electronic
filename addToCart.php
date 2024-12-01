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
                    <?php
                        echo '<img src="./backend/productImageUpload/' . $row['productImage'] . '" alt="' . $row['productName'] . '">' 
                    ?>
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
                        <a class="productDelete" href="./backend/deleteCartItem.php?id=<?php echo $row['cart_id'] ?>">delete</a> 
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
            Subtotal (<?php echo $productCount ?> items) : <span>&#8377;<?php echo $_SESSION['totalPrice'] = $totalPrice; ?></span>
            </div>
            <!-- <button type=""><a href="order.php">Check Out</a></button> -->
             <!-- <a href="./order.php">check out</a> -->
            <a href="./order.php"><button type="">Check Out</button></a>
            <div class="otherProduct">
            
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

    <!-- =============j-script=================== -->

    <script>
        const togglebtn = document.querySelector('.toggle_btn')
        const togglebtnicn = document.querySelector('.toggle_btn i')
        const dropdown = document.querySelector('#sidebar')

        togglebtn.onclick = function () {
            dropdown.classList.toggle('open')
            const isopen = dropdown.classList.contains('open')

            togglebtnicn.classList = isopen
                 ?'fa-solid fa-xmark'
                 :'fa-solid fa-bars' 
                
        }

        let searchbtn= document.querySelector('.searchbtn');
        let closebtn= document.querySelector('.closebtn');
        let searchbox= document.querySelector('.search_box');

        searchbtn.onclick=function(){
            searchbox.classList.add('active');
            closebtn.classList.add('active');
            searchbtn.classList.add('active');
        }
        closebtn.onclick=function(){
            searchbox.classList.remove('active');
            closebtn.classList.remove('active');
            searchbtn.classList.remove('active');
        }

        let sidesearchbtn=document.querySelector('.sidesearchbtn');
        let sideclosebtn=document.querySelector('.sideclosebtn');

        sidesearchbtn.onclick=function(){
            searchbox.classList.add('active');
            sideclosebtn.classList.add('active');
            sidesearchbtn.classList.add('active');
        }
        sideclosebtn.onclick=function(){
            searchbox.classList.remove('active');
            sideclosebtn.classList.remove('active');
            sidesearchbtn.classList.remove('active');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>

</body>

</html>