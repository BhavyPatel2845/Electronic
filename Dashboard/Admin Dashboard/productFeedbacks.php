<?php
    require "../../backend/adminSession.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!------------
     Google Fonts
     ------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">


    <!-----------
     Custom CSS 
     ----------->
    <link rel="stylesheet" href="./Assets/css/productFeedbacks.css">

</head>

<body>

    <!----------------------
     Dashboard Header - start 
    ------------------------>
    <div class="dashboardHeader" id="dashboardHeader">
        <div class="logoAndBars">
            <i id="bars" class="fa-solid fa-bars"></i>
            <img class="companyLogo" src="../../IMAGES/logo.png" alt="">
        </div>
        <div class="profile">
            <i class="fa-solid fa-user"></i>
        </div>
    </div>
    <!---------------------
     Dashboard Header - End 
    ---------------------->



    <!------------------
     Dashboard  - start 
    ------------------->
    <div class="dashboardContainer" id="dashboardContainer">

        <!-------------------------- 
        dashboard left side - start
        --------------------------->
        <div class="leftSide">
        <ul>
                <a href="dashboard.php"><li><img src="Assets/images/sidebarImg/dashboard.png" alt="">Dashboard</li></a>
                <a href="addCategory.php"><li><img src="Assets/images/sidebarImg/addproducts.png" alt="">Add Category</li></a>
                <a href="category.php"><li><img src="Assets/images/sidebarImg/products.png" alt="">Category</li></a>
                <a href="addProduct.php"><li><img src="Assets/images/sidebarImg/addproducts.png" alt="">Add Products</li></a>
                <a href="products.php"><li><img src="Assets/images/sidebarImg/products.png" alt="">Products</li></a>
                <a href="user.php"><li><img src="Assets/images/sidebarImg/users.png" alt="">Users</li></a>
                <a href="userContact.php"><li><img src="Assets/images/sidebarImg/user.png" alt="">User Contact</li></a>
                <a href="orderHistory.php"><li><img src="Assets/images/sidebarImg/orderhistory.png" alt="">Order History</li></a>
                <a href="feedback.php"><li><img src="Assets/images/sidebarImg/orderhistory.png" alt="">Feedback</li></a>
            </ul>
        </div>
        <!-------------------------- 
        dashboard left side - End
        --------------------------->

        <!-------------------------- 
        dashboard Right side - start
        --------------------------->
        <div class="rightSide">
            <div class="product" id="product">
            
                <?php
                
                require "../../backend/database_connection.php";
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
                            echo '<img src="../../backend/productImageUpload/' . $row['productImage'] . '" alt="' . $row['productName'] . '">' 
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
                        <div class="price">
                            <h4>price  :</h4>
                            <p>&#8377; <?php echo $row['price'] ?></p>
                        </div>
                        <div class="productDescription">
                            <p> <?php echo $row['detail'] ?> </p>
                        </div>
                    </div>
                </div>
                <div class="feedback">
                    <div class="feedbackContainer">
                        <h3 class="head">Reviews</h3>
                        <?php 
                            $productName = $row['productName'];
                           $selectFeedback = "SELECT `feddback_id`, `productName`, `userName`, `userEmail`, `feedback`, `rating` FROM `feedback` where productName = '$productName'";
                           $resultFeedback = mysqli_query($conn,$selectFeedback);
                           if (mysqli_num_rows($resultFeedback) > 0) {
                            while($rowFeedback = $resultFeedback->fetch_assoc()){                        
                        ?>
                        <div class="review">
                            <div class="user-img"><i class="fa-solid fa-user"></i></div>
                            <div class="desc">
                                <h4>
                                    <span class="text-left"><?php echo $rowFeedback['userName'] ?></span>
                                    <span class="delete"><a href="#" class="reply"><i class="fa-solid fa-trash"></i></a></span>
                                </h4>
                                <div class="rating" id="rating">                                   
                                    <!-- <input class="ratingStar" type="number" value="<?php echo $rowFeedback['rating'] ?>"> -->
                                    <?php 
                                        for($i = 1; $i<=5; $i++){ ?>
                                            <?php if($rowFeedback['rating']>= $i){ ?>
                                            <span class="rate active">&#9733;</span>
                                        <?php
                                        }
                                            else{
                                                ?>
                                                <span class="rate">&#9733;</span> <?php
                                            } 
                                        }
                                    ?>
                                    
                                    
                            </div>
                                <p><?php echo $rowFeedback['feedback'] ?></p>
                            </div>
                        </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
        <!-------------------------- 
        dashboard Right side - End
        --------------------------->

    </div>
    <!------------------
     Dashboard  - End 
    ------------------->




    <!---------
     Custom Js  
    ----------->
    <script src="./Assets/js/productFeedbacks.js"></script>


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>
</body>

</html>