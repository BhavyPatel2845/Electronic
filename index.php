<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-SHOP</title>
    <link rel="stylesheet" href="CSS/Header.css">
    <link rel="stylesheet" href="CSS/INDEX.css">
    <link rel="stylesheet" href="CSS/Footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


</head>
<body>
    <div class="container">
        
        <!----------------------------    HEADER     --------------------------------->
        
        <?php 
            include 'Header.php';
        ?>

        <!--------------------------------     HOME-PAGE    ------------------------------>

        <div class="home">
            <div class="slide active">
                <div class="slide-content">
                    <h2>Mobiles</h2>
                    <p>Welcome to the SmartTech store, a place where you can buy everything about mobiles,sale every day!</p>
                    <button>Buy Now</button>
                </div>
                <div class="slide-image">
                    <img src="IMAGES/home-image.png" alt="Slide 1 Image">
                </div>
            </div>
            
            <div class="slide">
                <div class="slide-content">
                    <h2>Smart Watches</h2>
                    <p>Welcome to the SmartTech store, a place where you can buy everything about smart watches,sale every day!</p>
                    <button>Buy Now</button>
                </div>
                <div class="slide-image">
                    <img src="IMAGES/product2.png" alt="Slide 2 Image">
                </div>
            </div>
    
            <div class="slide">
                <div class="slide-content">
                    <h2>Air Burds</h2>
                    <p>Welcome to the SmartTech store, a place where you can buy everything about air burds,sale every day!</p>
                    <button>Buy Now</button>
                </div>
                <div class="slide-image">
                    <img src="IMAGES/product3.png" alt="Slide 3 Image">
                </div>
            </div>
            
            <div class="slide">
                <div class="slide-content">
                    <h2>Laptops</h2>
                    <p>Welcome to the SmartTech store, a place where you can buy everything about laptops,sale every day!</p>
                    <button>Buy Now</button>
                </div>
                <div class="slide-image">
                    <img src="IMAGES/laptop1.png" alt="Slide 3 Image">
                </div>
            </div>
    
            <div class="navigation">
                <button class="nav-button" onclick="prevSlide()">&#10094;</button>
                <button class="nav-button" onclick="nextSlide()">&#10095;</button>
            </div>
        </div>

        
        <!--------------------------------     FEATURE    ------------------------------>

        <div class="feature">
            <div class="featureCointainer">
                <div class="icon">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                    <div class="info">
                    <h4>Free Delevery</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, animi?</p>
                </div>
            </div>
            <div class="featureCointainer">
                <div class="icon">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                    <div class="info">
                    <h4>Quality Guaranty</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, voluptate.</p>
                </div>
            </div>
            <div class="featureCointainer">
                <div class="icon">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                    <div class="info">
                    <h4>Daily Offer</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, sit.</p>
                </div>
            </div>
            <div class="featureCointainer">
                <div class="icon">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                    <div class="info">
                    <h4>100% Secure Payment</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, exercitationem.</p>
                </div>
            </div>
        </div>


        
        <!----------------------  PRODUCT-SLIDER -------------------------->
      

        <div class="productSlider" id="productSlider">
            <div class="mobileProduct">
                <div class="headingAndButton">
                    <div class="heading">
                        <h2>Mobile Products</h2>
                    </div>
                </div>
                <div class="productsContainer">
                    <div class="swiperContainer">
                        <div class="swiperWrapper">
                            <?php
                                for ($i=0; $i < 10; $i++) { 
                            ?>
                            <div class="individualProductBox productSwiperSlide">
                                <div class="individualProductImageContainer">
                                    <img src="./IMAGES/home-image.png" alt="">
                                </div>
                                <p class="productName">Sumsang S23 Ultra</p>
                                <p class="productPrice">&#8377; 96,000.00</p>
                                <div class="productRating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="addToCart">
                                    <button>Add To Cart</button>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                </div>
                    <div class="buttons">
                        <div class="productSwiperButtonPrev" onclick="previousButton('manual')">&#10094;</div>
                        <div class="productSwiperButtonNext" id="nextSliderButton" onclick="nextButtonClick('manual')">&#10095;</div>
                    </div>
                </div>
            </div> 
            <div class="smartWatchProduct">
                <div class="headingAndButton">
                    <div class="heading">
                        <h2>Smart Watch Products</h2>
                    </div>
                </div>
                <div class="productsContainer">
                    <div class="swiperContainer">
                        <div class="swiperWrapper">
                            <?php
                                for ($i=0; $i < 10; $i++) { 
                            ?>
                            <div class="individualProductBox productSwiperSlide">
                                <div class="individualProductImageContainer">
                                    <img src="./IMAGES/product2.png" alt="">
                                </div>
                                <p class="productName">Realme Pro2</p>
                                <p class="productPrice">&#8377; 4000.00</p>
                                <div class="productRating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="addToCart">
                                    <button>Add To Cart</button>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="productSwiperButtonPrev" onclick="smartWatchPreviousButton('manual')">&#10094;</div>
                        <div class="productSwiperButtonNext" id="nextSliderButton" onclick="smartWatchNextButtonClick('manual')">&#10095;</div>
                    </div>
                </div>
            </div> 
            <div class="airBurdProduct">
                <div class="headingAndButton">
                    <div class="heading">
                        <h2>Air Burds Products</h2>
                    </div>
                </div>
                <div class="productsContainer">
                    <div class="swiperContainer">
                        <div class="swiperWrapper">
                            <?php
                                for ($i=0; $i < 10; $i++) { 
                            ?>
                            <div class="individualProductBox productSwiperSlide">
                                <div class="individualProductImageContainer">
                                    <img src="./IMAGES/product1.png" alt="">
                                </div>
                                <p class="productName">Boat 172</p>
                                <p class="productPrice">&#8377; 2000.00</p>
                                <div class="productRating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="addToCart">
                                    <button>Add To Cart</button>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="productSwiperButtonPrev" onclick="airburdPreviousButton('manual')">&#10094;</div>
                        <div class="productSwiperButtonNext" id="nextSliderButton" onclick="airburdNextButtonClick('manual')">&#10095;</div>
                    </div>
                </div>
            </div> 
            <div class="laptopProduct">
                <div class="headingAndButton">
                    <div class="heading">
                        <h2>Laptop Products</h2>
                    </div>
                </div>
                <div class="productsContainer">
                    <div class="swiperContainer">
                        <div class="swiperWrapper">
                            <?php
                                for ($i=0; $i < 10; $i++){
                            ?>
                            <div class="individualProductBox productSwiperSlide">
                                <div class="individualProductImageContainer">
                                    <img src="./IMAGES/laptop1.png" alt="">
                                </div>
                                <p class="productName">Lenovo IdesPad Slim 3</p>
                                <p class="productPrice">&#8377; 60,000.00</p>
                                <div class="productRating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="addToCart">
                                    <button>Add To Cart</button>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="productSwiperButtonPrev" onclick="laptopPreviousButton('manual')">&#10094;</div>
                        <div class="productSwiperButtonNext" id="nextSliderButton" onclick="laptopNextButtonClick('manual')">&#10095;</div>
                    </div>
                </div>
            </div> 

        </div>

        
        <!-----------------------------     REVIEWS    ------------------------------>

        <div class="customerReviewSlider" id="customerReviewSlider">
            <h2>Customer Reviews</h2>
            <div class="customerReviewContainer">
            <div class="swiperContainer">

                <div class="swiperWrapper">
                    <div class="individualProductBox reviewSwiperSlide">
                        <div class="customerPhotoAndName">
                            <img src="./IMAGES/profile.jpg" alt="">
                            <h5>Ram Nadoda</h5>
                        </div>
                        <div class="customerReview">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, 
                                expedita accusamus minima sint vitae illo voluptatibus culpa officia 
                                tempore id. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div> 
                    <div class="individualProductBox reviewSwiperSlide">
                        <div class="customerPhotoAndName">
                            <img src="./IMAGES/profile.jpg" alt="">
                            <h5>Ram Nadoda</h5>
                        </div>
                        <div class="customerReview">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, 
                                expedita accusamus minima sint vitae illo voluptatibus culpa officia 
                                tempore id. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div> 
                    <div class="individualProductBox reviewSwiperSlide">
                        <div class="customerPhotoAndName">
                            <img src="./IMAGES/profile.jpg" alt="">
                            <h5>Ram Nadoda</h5>
                        </div>
                        <div class="customerReview">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, 
                                expedita accusamus minima sint vitae illo voluptatibus culpa officia 
                                tempore id. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div> 
                    <div class="individualProductBox reviewSwiperSlide">
                        <div class="customerPhotoAndName">
                            <img src="./IMAGES/profile.jpg" alt="">
                            <h5>Ram Nadoda</h5>
                        </div>
                        <div class="customerReview">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, 
                                expedita accusamus minima sint vitae illo voluptatibus culpa officia 
                                tempore id. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div> 
                    <div class="individualProductBox reviewSwiperSlide">
                        <div class="customerPhotoAndName">
                            <img src="./IMAGES/profile.jpg" alt="">
                            <h5>Ram Nadoda</h5>
                        </div>
                        <div class="customerReview">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, 
                                expedita accusamus minima sint vitae illo voluptatibus culpa officia 
                                tempore id. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div> 
                    <div class="individualProductBox reviewSwiperSlide">
                        <div class="customerPhotoAndName">
                            <img src="./IMAGES/profile.jpg" alt="">
                            <h5>Ram Nadoda</h5>
                        </div>
                        <div class="customerReview">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, 
                                expedita accusamus minima sint vitae illo voluptatibus culpa officia 
                                tempore id. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div> 
                    <div class="individualProductBox reviewSwiperSlide">
                        <div class="customerPhotoAndName">
                            <img src="./IMAGES/profile.jpg" alt="">
                            <h5>Ram Nadoda</h5>
                        </div>
                        <div class="customerReview">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, 
                                expedita accusamus minima sint vitae illo voluptatibus culpa officia 
                                tempore id. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div> 
                    <div class="individualProductBox reviewSwiperSlide">
                        <div class="customerPhotoAndName">
                            <img src="./IMAGES/profile.jpg" alt="">
                            <h5>Ram Nadoda</h5>
                        </div>
                        <div class="customerReview">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, 
                                expedita accusamus minima sint vitae illo voluptatibus culpa officia 
                                tempore id. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div> 
                    <div class="individualProductBox reviewSwiperSlide">
                        <div class="customerPhotoAndName">
                            <img src="./IMAGES/profile.jpg" alt="">
                            <h5>Ram Nadoda</h5>
                        </div>
                        <div class="customerReview">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, 
                                expedita accusamus minima sint vitae illo voluptatibus culpa officia 
                                tempore id. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="reviewStar">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div>                   
                </div>
                <div class="swipperButton">
                    <div class="productSwiperButtonPrev">&#10094;</div>
                    <div class="productSwiperButtonNext">&#10095;</div>
                </div>
            </div>
            </div>
        </div>
  

        <!--------------------------------     FOOTER    ------------------------------>

        
            <?php 
                include 'Footer.php';
            ?>

        

    </div>
    
    <script src="JS/INDEX.js"></script>
  
</body>
</html>