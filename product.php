<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <!------------
     Google Fonts
     ------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">

    <!-----------
    Custom CSS 
    ----------->
    <link rel="stylesheet" href="./CSS/product.css">

</head>

<body>

<!----------------------------    HEADER     --------------------------------->
        
        <?php 
            include 'Header.php';
        ?>

    <!------------------
     Product - start 
    ------------------->

    <?php
        require './backend/database_connection.php';
        session_start();
        $productSelectQuery = "select * from products";
        $result = mysqli_query($conn, $productSelectQuery);
    ?>

    <div class="productSection" id="productSection">
        <div class="productCategoryAndSort">
            <div class="productCategory">
                <label for=""> Category </label>
                <select name="" id="">
                    <option value=""> All Products </option>
                    <option value=""> Mobiles </option>
                    <option value=""> Smart Watches </option>
                    <option value=""> Air Burds </option>
                    <option value=""> Laptops </option>
                </select>
            </div>
            <div class="productSort">
                <label for=""> Short By </label>
                <select name="" id="">
                    <option value=""> Short By Latest</option>
                    <option value=""> Short By Price : High To Low</option>
                    <option value=""> Short By Price : Low To High</option>
                </select>
            </div>
        </div>
        <div class="product">
                <div class="productsContainer">
                    <?php
                        while($row = $result->fetch_assoc()){
                    ?>
                    <img src="" alt="">
                    <div class="individualProductBox">
                        <div class="individualProductImageContainer">
                            <?php echo '<img src="./backend/productImageUpload/' . $row['productImage'] . '" alt="' . $row['productName'] . '">' ?>
                        </div>
                        <p class="productName"> <?php echo $row['productName'] ?> </p>
                        <p class="productPrice">&#8377; <?php echo $row['price'] ?> </p>
                        <div class="productRating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <form class="addToCart" action="./backend/productAddToCart.php" method="post"> 
                            <input type="hidden" name="productId" id="productId" value="<?php echo $row['product_id'] ?>">  <!-- Make this hidden -->
                            <button type="submit" name="cart_btn" 
                            <?php echo 'data-productId="' . $row['product_id'] . '"'; ?>>Add To Cart</button>
                        </form>
                    </div>
                    <?php
                    }
                    ?>
            </div>
        </div> 
    </div>

    
    <!------------------
     Product - End 
    ------------------->

    
<!----------------------------    FOOTER     --------------------------------->
        
        <?php 
            include 'footer.php';
        ?>

   
    <!---------
    Custom Js  
    ----------->
    <script src="./JS/product.js"></script>


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>
</body>

</html>