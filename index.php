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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
                    <h2>your one-stop electronics market</h2>
                    <p>Welcome to the SmartTech store, a place where you can buy everything about electronics,sale every day!</p>
                    <button>Learn More</button>
                </div>
                <div class="slide-image">
                    <img src="IMAGES/home-image.png" alt="Slide 1 Image">
                </div>
            </div>
            
            <div class="slide">
                <div class="slide-content">
                    <h2>Slide 2 Title</h2>
                    <p>Slide 2 description goes here.</p>
                    <button>Learn More</button>
                </div>
                <div class="slide-image">
                    <img src="IMAGES/product2.png" alt="Slide 2 Image">
                </div>
            </div>
    
            <div class="slide">
                <div class="slide-content">
                    <h2>Slide 3 Title</h2>
                    <p>Slide 3 description goes here.</p>
                    <button>Learn More</button>
                </div>
                <div class="slide-image">
                    <img src="IMAGES/product3.png" alt="Slide 3 Image">
                </div>
            </div>
    
            <div class="navigation">
                <button class="nav-button" onclick="prevSlide()">&#10094; Prev</button>
                <button class="nav-button" onclick="nextSlide()">Next &#10095;</button>
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

        <!---------------------    PRODUCT-CATAGORY    -------------------------->

        <div class="category" id="category">
            <div class="categoryCointainer">
                <div class="categoryHeader">
                    <h2>Mobile Product</h2>
                </div>
                <div class="productSliderStart">
                    <div class="sliderCointainer">
                        <div class="productBox">
                            <div class="productBoxImage">
                                <img src="./IMAGES/product1.png" alt="">
                            </div>
                            <p>Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="productBox">
                            <div class="productBoxImage">
                                <img src="./IMAGES/product1.png" alt="">
                            </div>
                            <p>Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="productBox">
                            <div class="productBoxImage">
                                <img src="./IMAGES/product1.png" alt="">
                            </div>
                            <p>Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="productBox">
                            <div class="productBoxImage">
                                <img src="./IMAGES/product1.png" alt="">
                            </div>
                            <p>Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="productBox">
                            <div class="productBoxImage">
                                <img src="./IMAGES/product1.png" alt="">
                            </div>
                            <p>Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        
                    <div class="categorySliderButtons">     
                        <button>&#10094; </button>
                        <button>&#10095;</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!----------------------  PRODUCT-SLIDER -------------------------->
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
                                <img src="./IMAGES/product1.png" alt="">
                            </div>
                            <p class="productName">Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="individualProductBox productSwiperSlide">
                            <div class="individualProductImageContainer">
                                <img src="./IMAGES/product2.png" alt="">
                            </div>
                            <p class="productName">Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="individualProductBox productSwiperSlide">
                            <div class="individualProductImageContainer">
                                <img src="./IMAGES/product3.png" alt="">
                            </div>
                            <p class="productName">Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="individualProductBox productSwiperSlide">
                            <div class="individualProductImageContainer">
                                <img src="./IMAGES/product4.png" alt="">
                            </div>
                            <p class="productName">Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="individualProductBox productSwiperSlide">
                            <div class="individualProductImageContainer">
                                <img src="./IMAGES/product5.png" alt="">
                            </div>
                            <p class="productName">Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="individualProductBox productSwiperSlide">
                            <div class="individualProductImageContainer">
                                <img src="./IMAGES/product1.png" alt="">
                            </div>
                            <p class="productName">Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="individualProductBox productSwiperSlide">
                            <div class="individualProductImageContainer">
                                <img src="./IMAGES/product2.png" alt="">
                            </div>
                            <p class="productName">Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="individualProductBox productSwiperSlide">
                            <div class="individualProductImageContainer">
                                <img src="./IMAGES/product3.png" alt="">
                            </div>
                            <p class="productName">Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="individualProductBox productSwiperSlide">
                            <div class="individualProductImageContainer">
                                <img src="./IMAGES/product4.png" alt="">
                            </div>
                            <p class="productName">Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="individualProductBox productSwiperSlide">
                            <div class="individualProductImageContainer">
                                <img src="./IMAGES/product5.png" alt="">
                            </div>
                            <p class="productName">Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="individualProductBox productSwiperSlide">
                            <div class="individualProductImageContainer">
                                <img src="./IMAGES/product1.png" alt="">
                            </div>
                            <p class="productName">Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="individualProductBox productSwiperSlide">
                            <div class="individualProductImageContainer">
                                <img src="./IMAGES/product2.png" alt="">
                            </div>
                            <p class="productName">Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="individualProductBox productSwiperSlide">
                            <div class="individualProductImageContainer">
                                <img src="./IMAGES/product3.png" alt="">
                            </div>
                            <p class="productName">Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                        <div class="individualProductBox productSwiperSlide">
                            <div class="individualProductImageContainer">
                                <img src="./IMAGES/product4.png" alt="">
                            </div>
                            <p class="productName">Product Name</p>
                            <p class="productPrice">&#8377; 350.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <!-----------------------------     REVIEWS    ------------------------------>

        <div class="review" id="review">
            <div class="reviewContainer">
                <div class="reviewTitle">
                    <h2>Customer Reviews</h2>
                </div>
                <div class="customerReviews">
                    <div class="reviewDetail">
                        <div class="customerId">
                            <h4>"1"</h4>
                        </div>
                        <div class="customerMessage">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nesciunt, 
                                voluptatibus excepturi cupiditate labore impedit eum tempore. Voluptatum 
                                quasi molestiae delectus ipsam, laudantium maxime pariatur aliquid dolore 
                                sequi corporis totam!</p>
                        </div>
                        <div class="customerRatting">
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                        </div>
                    </div>
                    <div class="reviewDetail">
                        <div class="customerId">
                            <h4>"2"</h4>
                        </div>
                        <div class="customerMessage">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nesciunt, 
                                voluptatibus excepturi cupiditate labore impedit eum tempore. Voluptatum 
                                quasi molestiae delectus ipsam, laudantium maxime pariatur aliquid dolore 
                                sequi corporis totam!</p>
                        </div>
                        <div class="customerRatting">
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                        </div>
                    </div>
                    <div class="reviewDetail">
                        <div class="customerId">
                            <h4>"3"</h4>
                        </div>
                        <div class="customerMessage">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nesciunt, 
                                voluptatibus excepturi cupiditate labore impedit eum tempore. Voluptatum 
                                quasi molestiae delectus ipsam, laudantium maxime pariatur aliquid dolore 
                                sequi corporis totam!</p>
                        </div>
                        <div class="customerRatting">
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                        </div>
                    </div>
                    <div class="reviewDetail">
                        <div class="customerId">
                            <h4>"3"</h4>
                        </div>
                        <div class="customerMessage">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nesciunt, 
                                voluptatibus excepturi cupiditate labore impedit eum tempore. Voluptatum 
                                quasi molestiae delectus ipsam, laudantium maxime pariatur aliquid dolore 
                                sequi corporis totam!</p>
                        </div>
                        <div class="customerRatting">
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                        </div>
                    </div>
                    <div class="reviewDetail">
                        <div class="customerId">
                            <h4>"3"</h4>
                        </div>
                        <div class="customerMessage">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nesciunt, 
                                voluptatibus excepturi cupiditate labore impedit eum tempore. Voluptatum 
                                quasi molestiae delectus ipsam, laudantium maxime pariatur aliquid dolore 
                                sequi corporis totam!</p>
                        </div>
                        <div class="customerRatting">
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                        </div>
                    </div>
                    <div class="reviewDetail">
                        <div class="customerId">
                            <h4>"3"</h4>
                        </div>
                        <div class="customerMessage">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nesciunt, 
                                voluptatibus excepturi cupiditate labore impedit eum tempore. Voluptatum 
                                quasi molestiae delectus ipsam, laudantium maxime pariatur aliquid dolore 
                                sequi corporis totam!</p>
                        </div>
                        <div class="customerRatting">
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                            <i>@</i>
                        </div>
                    </div>
                    <div class="reviewButton">
                        <button class="nav-button" onclick="prevReview()">&#10094; </button>
                        <button class="nav-button" onclick="nextReview()"> &#10095;</button>
                    </div>
                </div>
            </div>
        </div>

        <!--------------------------------     FOOTER    ------------------------------>

        <div class="footer">
            <?php 
                include 'Footer.php';
            ?>

        </div>

    </div>
    
    <script src="JS/INDEX.js"></script>
  
</body>
</html>