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
    <div class="productSection" id="productSection">
        <div class="productSort">
            <label for=""> Short By </label>
            <select name="" id="">
                <option value=""> Short By Latest</option>
                <option value=""> Short By Rating : High To Low</option>
                <option value=""> Short By Rating : Low To High</option>
                <option value=""> Short By Price : High To Low</option>
                <option value=""> Short By Price : Low To High</option>
            </select>
        </div>
        <div class="productContainer" id="productContainer">
            <div class="productSlider">
                <div class="productBox">
                    <div class="productImage">
                        <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                    </div>
                    <div class="productDetail">
                        <div class="productRating">
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="">&#9733;</span>
                        </div>
                        <div class="productName">
                            <p>Product Name</p>
                        </div>
                        <div class="productPrice">
                            <p>Price: 120&#8377;</p>
                        </div>
                        <div class="addToCart">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <p>Add to Cart</p>
                        </div>
                    </div>
                </div>

                <div class="productBox">
                    <div class="productImage">
                        <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                    </div>
                    <div class="productDetail">
                        <div class="productRating">
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="">&#9733;</span>
                        </div>
                        <div class="productName">
                            <p>Product Name</p>
                        </div>
                        <div class="productPrice">
                            <p>Price: 120&#8377;</p>
                        </div>
                        <div class="addToCart">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <p>Add to Cart</p>
                        </div>
                    </div>
                </div>

                <div class="productBox">
                    <div class="productImage">
                        <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                    </div>
                    <div class="productDetail">
                        <div class="productRating">
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="">&#9733;</span>
                        </div>
                        <div class="productName">
                            <p>Product Name</p>
                        </div>
                        <div class="productPrice">
                            <p>Price: 120&#8377;</p>
                        </div>
                        <div class="addToCart">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <p>Add to Cart</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="productSliderButton">  </div>
        </div>
    </div>
    <!------------------
     Product - End 
    ------------------->

   
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