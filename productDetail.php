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
                    <img src="./Assets/images/productImages/categories1.jpg" alt="">
                </div>
                <div class="smallProductImage">
                    <img src="./Assets/images/productImages/categories1.jpg" alt="categories1">
                    <img src="./Assets/images/productImages/categories2.jpg" alt="categories2">
                    <img src="./Assets/images/productImages/categories3.jpg" alt="categories3">
                    <img src="./Assets/images/productImages/categories4.jpg" alt="categories4">
                </div>
            </div>
            <div class="right productDetail">
                <div class="productName">
                    <h4>Product Name</h4>
                </div>
                <div class="rating">
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                </div>
                <div class="price">
                    <h4>price:</h4>
                    <p>$123.45</p>
                </div>
                <div class="productDescription">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati at incidunt,
                        eaque laudantium voluptatibus praesentium nulla mollitia qui non.
                        Quasi tempore dolor aliquid saepe alias quam error facere, officia beatae.
                    </p>
                </div>
                <div class="quantity">
                    <h4>Quantity:</h4>
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
                    <th>Fragrance Composition</th>
                    <td>Rich Sandalwood & Tropical Flowers</td>
                </tr>
                <tr>
                    <th>Burning Time</th>
                    <td>Approximately 60min</td>
                </tr>
                <tr>
                    <th>Length</th>
                    <td>9in</td>
                </tr>
                <tr>
                    <th>Weight</th>
                    <td>150g</td>
                </tr>
                <tr>
                    <th>Approx Count of Items</th>
                    <td>75</td>
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
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                        </div>
                        <p class="productName">1</p>
                        <p class="productPrice">&#8377; 350.00</p>
                    </div>
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                        </div>
                        <p class="productName">2</p>
                        <p class="productPrice">&#8377; 350.00</p>
                    </div>
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                        </div>
                        <p class="productName">3</p>
                        <p class="productPrice">&#8377; 350.00</p>
                    </div>
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                        </div>
                        <p class="productName">4</p>
                        <p class="productPrice">&#8377; 350.00</p>
                    </div>
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                        </div>
                        <p class="productName">5</p>
                        <p class="productPrice">&#8377; 350.00</p>
                    </div>
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                        </div>
                        <p class="productName">6</p>
                        <p class="productPrice">&#8377; 350.00</p>
                    </div>
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                        </div>
                        <p class="productName">7</p>
                        <p class="productPrice">&#8377; 350.00</p>
                    </div>
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                        </div>
                        <p class="productName">1</p>
                        <p class="productPrice">&#8377; 350.00</p>
                    </div>
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                        </div>
                        <p class="productName">2</p>
                        <p class="productPrice">&#8377; 350.00</p>
                    </div>
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                        </div>
                        <p class="productName">3</p>
                        <p class="productPrice">&#8377; 350.00</p>
                    </div>
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                        </div>
                        <p class="productName">4</p>
                        <p class="productPrice">&#8377; 350.00</p>
                    </div>
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                        </div>
                        <p class="productName">5</p>
                        <p class="productPrice">&#8377; 350.00</p>
                    </div>
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                        </div>
                        <p class="productName">6</p>
                        <p class="productPrice">&#8377; 350.00</p>
                    </div>
                    <div class="individualProductBox productSwiperSlide">
                        <div class="individualProductImageContainer">
                            <img src="./Assets/images/productImages/gulabDhoop.png" alt="">
                        </div>
                        <p class="productName">7</p>
                        <p class="productPrice">&#8377; 350.00</p>
                    </div>
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