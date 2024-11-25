<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="./CSS/index.css">
</head>

<body>

    <?php 
        require "./header.php";
    ?>

    <!-- ====================SECTION=========== -->


    <section id="home">
        <div class="container">
            <h5>NEW ARRAIVALS</h5>
            <H1><span>Best Price</span> This Year</H1>
            <p>Shoomatic offers your very comfortable time<br>Walking and exercieses.</p>
            <button>Explore Now</button>
        </div>
    </section>


    <!-- ==============BRAND SECTION=============== -->
    <!-- <section id="brands" class="">
        <div class="row p-0 m-0">
            <img class="img-fluid col-lg-2 col-md-4 col-6 " src="brand4.png" alt="brand_logo">
            <img class="img-fluid col-lg-2 col-md-4 col-6  " src="brand1.png" alt="brand_logo">
            <img class="img-fluid col-lg-2 col-md-4 col-6  " src="brand2.png" alt="brand_logo">
            <img class="img-fluid  col-lg-2 col-md-4 col-6 " src="brand3.png" alt="brand_logo">
            <img class="img-fluid col-lg-2 col-md-4 col-6  " src="brand5.png" alt="brand_logo">
            <img class="img-fluid col-lg-2 col-md-4 col-6 " src="brand6.png" alt="brand_logo">
        </div>
    </section> -->

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
    <!-- ===============FEATURED SECTION========== -->
    <section id="featured" class="my-2 pb-2">
        <div class="container text-center mt-5 py-5">
            <h3 class=" text-uppercase ">our featured</h3>
            <div class="line mx-auto mb-2"></div>
            <p class="text-capitalize">here you can check out our new products with fair price on SmartTech Store.</p>
        </div>

        <div class="row m-0 p-0">
            <?php 
                require "./backend/database_connection.php";
                $selectFeatureQuery = "SELECT * FROM products ORDER BY product_id DESC LIMIT 4";

                $result = mysqli_query($conn,$selectFeatureQuery);
                if(!empty($result)){
                    while($row = $result->fetch_assoc()){
            ?>
            <div class="product text-center col-md-3 col-sm-6 col-12 ">
                <a href="./productDetail.php?id=<?php echo $row['product_id']  ?>" class="individualProductImageContainer">
                    <?php echo '<img src="./backend/productImageUpload/' . $row['productImage'] . '" alt="' . $row['productName'] . '">' ?>
                </a>
                <div class="rating" id="rating">
                    <?php
                        $productName = $row['productName'];
                        $selectFeedback = "SELECT * FROM feedback where productName='$productName'";
                        $resultFeedback = mysqli_query($conn,$selectFeedback);
                        $star = 0;
                        $totalFeedback = 0;
                        if (mysqli_num_rows($resultFeedback) > 0) {
                            while($rowFeedback = $resultFeedback->fetch_assoc()){ 
                                $star = $star + $rowFeedback['rating'];
                                $totalFeedback++;
                            }
                    ?>
                    <input class="ratingStar" type="hidden" value="<?php echo $star/$totalFeedback; ?>">
                    
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <?php
                        }
                        else{
                    ?>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>  
                    <?php
                        }
                    ?>
                </div>
                <h5><?php echo $row['productName'] ?></h5>
                <h5>&#8377; <?php echo $row['price'] ?></h5>
                <form class="addToCart" action="./backend/productAddToCart.php" method="post"> 
                    <input type="hidden" name="productId" id="productId" value="<?php echo $row['product_id'] ?>">  <!-- Make this hidden -->
                    <button type="submit" name="cart_btn" 
                    <?php echo 'data-productId="' . $row['product_id'] . '"'; ?>>Add To Cart</button>
                </form>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </section>


    <!-- ===========BANNER SECTION================ -->
    <section id="banner" >
        <div class="container">
            <h4>MID Season's Sale</h4>
            <H1>Autumn Collection <br>UP TO 20% OFF</H1>
            <button class="text-uppercase">shop now</button>
        </div>
    </section>

    <!-- ============= Mobile SECTION=========== -->

    <section id="products" class="my-2 pb-2">
        <div class="container text-center mt-5 py-5">
            <h3 class=" text-uppercase ">Mobiles</h3>
            <div class="line mx-auto mb-2"></div>
            <p class="text-capitalize ">here you can check out our new products with fair price on SmartTech Store.</p>
        </div>

        <div class="row m-0 p-0">
        <?php 
                $selectMobileQuery = "SELECT * FROM products where categoryName='Mobile' ORDER BY product_id DESC LIMIT 4";

                $result = mysqli_query($conn,$selectMobileQuery);
                if(!empty($result)){
                    while($row = $result->fetch_assoc()){
            ?>
            <div class="product text-center col-md-3 col-sm-6 col-12 ">
                <a href="./productDetail.php?id=<?php echo $row['product_id']  ?>" class="individualProductImageContainer">
                    <?php echo '<img src="./backend/productImageUpload/' . $row['productImage'] . '" alt="' . $row['productName'] . '">' ?>
                </a>
                <div class="rating" id="rating">
                    <?php
                        $productName = $row['productName'];
                        $selectFeedback = "SELECT * FROM feedback where productName='$productName'";
                        $resultFeedback = mysqli_query($conn,$selectFeedback);
                        $star = 0;
                        $totalFeedback = 0;
                        if (mysqli_num_rows($resultFeedback) > 0) {
                            while($rowFeedback = $resultFeedback->fetch_assoc()){ 
                                $star = $star + $rowFeedback['rating'];
                                $totalFeedback++;
                            }
                    ?>
                    <input class="ratingStar" type="hidden" value="<?php echo $star/$totalFeedback; ?>">
                    
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <?php
                        }
                        else{
                    ?>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>  
                    <?php
                        }
                    ?>
                </div>
                <h5><?php echo $row['productName'] ?></h5>
                <h5>&#8377; <?php echo $row['price'] ?></h5>
                <form class="addToCart" action="./backend/productAddToCart.php" method="post"> 
                    <input type="hidden" name="productId" id="productId" value="<?php echo $row['product_id'] ?>">  <!-- Make this hidden -->
                    <button type="submit" name="cart_btn" 
                    <?php echo 'data-productId="' . $row['product_id'] . '"'; ?>>Add To Cart</button>
                </form>
            </div>

            <?php
                    }
                }
            ?>
        </div>
    </section>

    <!-- =================Smart Watch SECTION========== -->

    <section id="products" class="my-2 pb-2">
        <div class="container text-center mt-5 py-5">
            <h3 class=" text-uppercase ">Smart Watch</h3>
            <div class="line mx-auto mb-2"></div>
            <p class="text-capitalize ">here you can check out our new products with fair price on SmartTech Store.</p>
        </div>

        <div class="row m-0 p-0">
        <?php 
                $selectSmartWatchQuery = "SELECT * FROM products where categoryName='Smart Watch' ORDER BY product_id DESC LIMIT 4";

                $result = mysqli_query($conn,$selectSmartWatchQuery);
                if(!empty($result)){
                    while($row = $result->fetch_assoc()){
            ?>
            <div class="product text-center col-md-3 col-sm-6 col-12 ">
                <a href="./productDetail.php?id=<?php echo $row['product_id']  ?>" class="individualProductImageContainer">
                    <?php echo '<img src="./backend/productImageUpload/' . $row['productImage'] . '" alt="' . $row['productName'] . '">' ?>
                </a>
                <div class="rating" id="rating">
                    <?php
                        $productName = $row['productName'];
                        $selectFeedback = "SELECT * FROM feedback where productName='$productName'";
                        $resultFeedback = mysqli_query($conn,$selectFeedback);
                        $star = 0;
                        $totalFeedback = 0;
                        if (mysqli_num_rows($resultFeedback) > 0) {
                            while($rowFeedback = $resultFeedback->fetch_assoc()){ 
                                $star = $star + $rowFeedback['rating'];
                                $totalFeedback++;
                            }
                    ?>
                    <input class="ratingStar" type="hidden" value="<?php echo $star/$totalFeedback; ?>">
                    
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <?php
                        }
                        else{
                    ?>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>  
                    <?php
                        }
                    ?>
                </div>
                <h5><?php echo $row['productName'] ?></h5>
                <h5>&#8377; <?php echo $row['price'] ?></h5>
                <form class="addToCart" action="./backend/productAddToCart.php" method="post"> 
                    <input type="hidden" name="productId" id="productId" value="<?php echo $row['product_id'] ?>">  <!-- Make this hidden -->
                    <button type="submit" name="cart_btn" 
                    <?php echo 'data-productId="' . $row['product_id'] . '"'; ?>>Add To Cart</button>
                </form>
            </div>

            <?php
                    }
                }
            ?>
        </div>
    </section>

    <!-- ================= Air Burds SECTION======== -->

    <section id="products" class="my-2 pb-2">
        <div class="container text-center mt-5 py-5">
            <h3 class=" text-uppercase ">Air Burds</h3>
            <div class="line mx-auto mb-2"></div>
            <p class="text-capitalize ">here you can check out our new products with fair price on SmartTech Store.</p>
        </div>

        <div class="row m-0 p-0">
        <?php 
                $selectAirBurdQuery = "SELECT * FROM products where categoryName='Air burd' ORDER BY product_id DESC LIMIT 4";

                $result = mysqli_query($conn,$selectAirBurdQuery);
                if(!empty($result)){
                    while($row = $result->fetch_assoc()){
            ?>
            <div class="product text-center col-md-3 col-sm-6 col-12 ">
                <a href="./productDetail.php?id=<?php echo $row['product_id']  ?>" class="individualProductImageContainer">
                    <?php echo '<img src="./backend/productImageUpload/' . $row['productImage'] . '" alt="' . $row['productName'] . '">' ?>
                </a>
                <div class="rating" id="rating">
                    <?php
                        $productName = $row['productName'];
                        $selectFeedback = "SELECT * FROM feedback where productName='$productName'";
                        $resultFeedback = mysqli_query($conn,$selectFeedback);
                        $star = 0;
                        $totalFeedback = 0;
                        if (mysqli_num_rows($resultFeedback) > 0) {
                            while($rowFeedback = $resultFeedback->fetch_assoc()){ 
                                $star = $star + $rowFeedback['rating'];
                                $totalFeedback++;
                            }
                    ?>
                    <input class="ratingStar" type="hidden" value="<?php echo $star/$totalFeedback; ?>">
                    
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <?php
                        }
                        else{
                    ?>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>  
                    <?php
                        }
                    ?>
                </div>
                <h5><?php echo $row['productName'] ?></h5>
                <h5>&#8377; <?php echo $row['price'] ?></h5>
                <form class="addToCart" action="./backend/productAddToCart.php" method="post"> 
                    <input type="hidden" name="productId" id="productId" value="<?php echo $row['product_id'] ?>">  <!-- Make this hidden -->
                    <button type="submit" name="cart_btn" 
                    <?php echo 'data-productId="' . $row['product_id'] . '"'; ?>>Add To Cart</button>
                </form>
            </div>

            <?php
                    }
                }
            ?>
        </div>
    </section>

    <!-- ================= Laptop SECTION======== -->

    <section id="products" class="my-2 pb-2">
        <div class="container text-center mt-5 py-5">
            <h3 class=" text-uppercase ">Laptop</h3>
            <div class="line mx-auto mb-2"></div>
            <p class="text-capitalize ">here you can check out our new products with fair price on SmartTech Store.</p>
        </div>

        <div class="row m-0 p-0">
        <?php 
                $selectLaptopQuery = "SELECT * FROM products where categoryName='Laptop' ORDER BY product_id DESC LIMIT 4";

                $result = mysqli_query($conn,$selectLaptopQuery);
                if(!empty($result)){
                    while($row = $result->fetch_assoc()){
            ?>
            <div class="product text-center col-md-3 col-sm-6 col-12 ">
                <a href="./productDetail.php?id=<?php echo $row['product_id']  ?>" class="individualProductImageContainer">
                    <?php echo '<img src="./backend/productImageUpload/' . $row['productImage'] . '" alt="' . $row['productName'] . '">' ?>
                </a>
                <div class="rating" id="rating">
                    <?php
                        $productName = $row['productName'];
                        $selectFeedback = "SELECT * FROM feedback where productName='$productName'";
                        $resultFeedback = mysqli_query($conn,$selectFeedback);
                        $star = 0;
                        $totalFeedback = 0;
                        if (mysqli_num_rows($resultFeedback) > 0) {
                            while($rowFeedback = $resultFeedback->fetch_assoc()){ 
                                $star = $star + $rowFeedback['rating'];
                                $totalFeedback++;
                            }
                    ?>
                    <input class="ratingStar" type="hidden" value="<?php echo $star/$totalFeedback; ?>">
                    
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <span class="rate">&#9733;</span>
                    <?php
                        }
                        else{
                    ?>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>
                            <span class="rate">&#9733;</span>  
                    <?php
                        }
                    ?>
                </div>
                <h5><?php echo $row['productName'] ?></h5>
                <h5>&#8377; <?php echo $row['price'] ?></h5>
                <form class="addToCart" action="./backend/productAddToCart.php" method="post"> 
                    <input type="hidden" name="productId" id="productId" value="<?php echo $row['product_id'] ?>">  <!-- Make this hidden -->
                    <button type="submit" name="cart_btn" 
                    <?php echo 'data-productId="' . $row['product_id'] . '"'; ?>>Add To Cart</button>
                </form>
            </div>

            <?php
                    }
                }
            ?>
        </div>
    </section>


    <!-- =============FOOTER============= -->

    <?php require "./footer.php"; ?>

    <!-- <footer class="my-2 py-2"> 
        <div class="row mx-auto pt-4 container">
            <div class="footer-one col">
                <img src="logo2.png" alt="">
                <p>fringilla urna porttitor rhoncus dolor purus cenenatis lectus manga fringilla diammae ultriciea mi
                    eget mautis</p>
            </div>

            <div class="footer-one col">
                <h5 class="pb-2 ">Featured</h5>
                <ul class="text-uppercase list-unstyled">
                    <li><a href="#">men</a></li>
                    <li><a href="#">women</a></li>
                    <li><a href="#">boys</a></li>
                    <li><a href="#">girls</a></li>
                    <li><a href="#">children</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">cloths</a></li>
                </ul>
            </div>

            <div class="footer-one col">
                <h5 class="pb-2 ">Contact Us</h5>
                <div class="">
                    <h6 class="text-uppercase">address</h6>
                    <p>123 STREET NAME,CITY, US</p>
                </div>

                <div class="">
                    <h6 class="text-uppercase">phone</h6>
                    <p>(123) 6734-234</p>
                </div>
                <div class="">
                    <h6 class="text-uppercase">email</h6>
                    <p>rymo123@gmail.com</p>
                </div>
            </div>

            <div class="footer-one col">
                <h5 class="text-uppercase pb-2">instagram</h5>
                <a href="#">@rymo_shopping1233</a>
                <div class="row insta">
                    <img class="img-fluid" src="insta.jpg" alt="">
                    <img class="img-fluid" src="insta2.jpg" alt="">
                    <img class="img-fluid" src="insta3.jpg" alt="">
                    <img class="img-fluid" src="insta4.jpg" alt="">
                    <img class="img-fluid" src="insta5.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="copyright mt-4">
            <div class="row container mx-auto">
                <div class="col">
                    <img src="payment.png" alt="">
                </div>
                <div class="col">
                    <p>rymo eCommerce @ 2021. All Rights Reserved</p>
                </div>
                <div class="col refrence">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- =============j-script=================== -->

    <script src="./JS/index.js"></script>

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

</body>

</html>