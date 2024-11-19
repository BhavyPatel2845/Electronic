<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detailProduct</title>

    <!------------
     Google Fonts
     ------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!-----------
     Custom CSS 
     ----------->
    <link rel="stylesheet" href="./CSS/productDetail.css">

</head>

<body>

    <!----------------------------    HEADER     --------------------------------->
        
    <?php 
            include 'Header.php';
        ?>

        
    <!----------------
     Product - start 
    ----------------->
    <div class="product" id="product">
        
        <?php
        
        require "./backend/database_connection.php";
            if (isset($_GET['id'])) {
                $product_id = $_GET['id'];
            } else {
                echo "Product ID not provided.";
            }

            $selectQuery = "SELECT * FROM products WHERE product_id='$product_id'";
            $result = mysqli_query($conn,$selectQuery);
        
            if(!empty($result)){
                while($row = $result->fetch_assoc()){
        ?>
        <div class="productContainer">
            <div class="left">
                <div class="productImage">
                    <!-- <img src="./IMAGES/home-image.png" alt=""> -->
                    <?php
                    echo '<img src="./backend/productImageUpload/' . $row['productImage'] . '" alt="' . $row['productName'] . '">' 
                    ?>
                       
                </div>
                <!-- <div class="smallProductImage">
                    <img src="./IMAGES/home-image.png" alt="categories1">
                    <img src="./IMAGES/home-image.png" alt="categories2">
                    <img src="./IMAGES/home-image.png" alt="categories3">
                    <img src="./IMAGES/home-image.png" alt="categories4">
                </div> -->
            </div>
            <div class="right productDetail">
                <div class="productName">
                    <h3><?php echo $row['productName'] ?></h3>
                </div>
                <div class="rating">
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                </div>
                <div class="price">
                    <h4>price  :</h4>
                    <p>&#8377; <?php echo $row['price'] ?></p>
                </div>
                <div class="productDescription">
                    <p> <?php echo $row['detail'] ?> </p>
                </div>
                <div class="quantity">
                    <h4>Quantity  :</h4>
                    <input type="number" value="1">
                </div>
                <form class="addToCart" action="./backend/productAddToCart.php" method="post"> 
                    <input type="hidden" name="productId" id="productId" value="<?php echo $row['product_id'] ?>">  <!-- Make this hidden -->
                    <button type="submit" name="cart_btn" 
                    <?php echo 'data-productId="' . $row['product_id'] . '"'; ?>>Add To Cart</button>
                </form>
            </div>
        </div>
        <?php
            if($row['categoryName']=='Mobile'){
        ?>
        <div class="productTableInfo">
            <table>
                <tr>
                    <th>Processor</th>
                    <td><?php echo $row['processor'] ?></td>
                </tr>
                <tr>
                    <th>Memory Storage</th>
                    <td><?php echo $row['memoryStorage'] ?></td>
                </tr>
                <tr>
                    <th>RAM</th>
                    <td><?php echo $row['ram'] ?></td>
                </tr>
                <tr>
                    <th>Front-Camera</th>
                    <td><?php echo $row['frontCamera'] ?></td>
                </tr>
                <tr>
                    <th>Rear-Camera</th>
                    <td><?php echo $row['rearCamera'] ?></td>
                </tr>
                <tr>
                    <th>Battery</th>
                    <td><?php echo $row['frontCamera'] ?> </td>
                </tr>
                <tr>
                    <th>Warranty</th>
                    <td>1 Year</td>
                </tr>
            </table>
        </div>
        <?php
                    }
                }
            }
        ?>


    <div class="productSlider" id="productSlider">
        <div class="headingAndButton">
            <div class="heading">
                <h5>Hot <span>New Arrival</span> You May Like</h5>
            </div>
            <div class="buttons">
                <div class="productSwiperButtonPrev" onclick="previousButton('manual')">&#10094;</div>
                <div class="productSwiperButtonNext" id="nextSliderButton" onclick="nextButtonClick('manual')">&#10095;</div>
            </div>
        </div>

        <div class="productsContainer">
            <div class="swiperContainer">
                <div class="swiperWrapper">
                    <?php
                    for ($i=0; $i <20 ; $i++) { 
                    ?>
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./IMAGES/product1.png" alt="">
                        </div>
                        <p class="productName">Boat 172</p>
                        <p class="productPrice">&#8377; 1500.00</p>
                        <div class="productRating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                         </div>
                         <div class="cartButton">
                            <button>Add To Cart</button>
                         </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!----------------
     Product - End 
    ----------------->

        <!--------------------------------     FOOTER    ------------------------------>

        
        <?php 
                include 'Footer.php';
            ?>


    <!---------
     Custom Js  
    ----------->
    <script src="./JS/productDetail.js"></script>


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>

</body>

</html>