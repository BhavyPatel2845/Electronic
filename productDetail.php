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
        <div class="productContainer">
            <div class="left">
                <div class="productImage">
                    <img src="./IMAGES/home-image.png" alt="">
                </div>
                <div class="smallProductImage">
                    <img src="./IMAGES/home-image.png" alt="categories1">
                    <img src="./IMAGES/home-image.png" alt="categories2">
                    <img src="./IMAGES/home-image.png" alt="categories3">
                    <img src="./IMAGES/home-image.png" alt="categories4">
                </div>
            </div>
            <div class="right productDetail">
                <div class="productName">
                    <h3>Samsung S23 Ultra </h3>
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
                    <p>&#8377;97,000.00</p>
                </div>
                <div class="productDescription">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati at incidunt,
                        eaque laudantium voluptatibus praesentium nulla mollitia qui non.
                        Quasi tempore dolor aliquid saepe alias quam error facere, officia beatae.
                    </p>
                </div>
                <div class="quantity">
                    <h4>Quantity  :</h4>
                    <input type="number" value="1">
                </div>
                <div class="addToCart">
                    <button type="button">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="productTableInfo">
            <table>
                <tr>
                    <th>Processor</th>
                    <td>Snapdragon 8 Gen 2</td>
                </tr>
                <tr>
                    <th>Memory Storage</th>
                    <td>256 GB</td>
                </tr>
                <tr>
                    <th>RAM</th>
                    <td>12 GB</td>
                </tr>
                <tr>
                    <th>Front-Camera</th>
                    <td>12 MP</td>
                </tr>
                <tr>
                    <th>Rear-Camera</th>
                    <td>200 MP</td>
                </tr>
                <tr>
                    <th>Battery</th>
                    <td>4855mAh </td>
                </tr>
                <tr>
                    <th>Warranty</th>
                    <td>1 Year</td>
                </tr>
            </table>
        </div>


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