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
    -------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <!-------------
        Custom CSS 
    --------------->
    <link rel="stylesheet" href="./Assets/css/products.css">
</head>

<body>

    <!--------------------
        Edit form - start 
    ----------------------->
    <div id="editFormContainer">
        <div class="formContainer">
            <form action="../../backend/editProduct.php" method="post" enctype="multipart/form-data">
                <input type="number" name="productId" id="productId">
                <div class="productName">
                    <label for="productName">Product Name</label>
                    <input type="text" name="productName" placeholder="Product Name">
                </div>
                <div class="productDetail">
                    <label for="productDetail"> Product Detail</label>
                    <textarea name="detail" id="" rows="4" cols="50"
                        placeholder="Product Details"></textarea>
                </div>
                <div class="selectCatagory">
                    <label for="productCategory">Catagory</label>
                    <select name="categoryName">
                        <option value="Mobile">Mobile</option>
                        <option value="Samrt Watch">Smart Watch</option>
                        <option value="Air Burd">Air Burds</option>
                        <option value="Laptop">Laptop</option>
                    </select>
                </div>
                <div class="productPrice">
                    <label for="productPrice">Price</label>
                    <input type="number" name="price" placeholder="Price">
                </div>
                <div class="productDiscount">
                    <label for="productDiscount">Discount</label>
                    <input type="number" name="discount" placeholder="Discount">
                </div>
                <!-- <div class="productQuantity">
                    <label for="productQuantity">Quantity</label>
                    <input type="number" name="quantity" placeholder="Quantity">
                </div> -->
                <div class="productProcessor">
                    <label for="productProcessor">processor</label>
                    <input type="text" name="processor" placeholder="processor">
                </div>
                <div class="productMemoryStorage">
                    <label for="productMemoryStorage">Memory Storage</label>
                    <input type="text" name="memoryStorage" placeholder="memoryStorage">
                </div>
                <div class="productRam">
                    <label for="productRam">RAM</label>
                    <input type="text" name="ram" placeholder="RAM">
                </div>
                <div class="productFrontCamera">
                    <label for="productFrontCamera">Front Camera</label>
                    <input type="text" name="frontCamera" placeholder="Front Camera">
                </div>
                <div class="productRearCamera">
                    <label for="productRearCamera">Rear Camera</label>
                    <input type="text" name="rearCamera" placeholder="Rear Camera">
                </div> 
                <div class="productBattery">
                    <label for="productBattery">Rear Camera</label>
                    <input type="text" name="battery" placeholder="Battery">
                </div>
                <div class="uploadFile">
                    <label for="productImage">Image</label>
                    <input type="file" name="productImage">
                </div>

                <div class="btns">
                    <button type="submit" class="submit" name="submit">Submit</button>
                    <button type="button" class="close" name="close">Close</button>
                </div>

            </form>
        </div>
    </div>
    <!--------------------
        Edit form - end 
    ---------------------->
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
                <a href="userContact.php"><li><img src="Assets/images/sidebarImg/users.png" alt="">User Contact</li></a>
                <a href="orderHistory.php"><li><img src="Assets/images/sidebarImg/orderhistory.png" alt="">Order History</li></a>
                <a href="feedback.php"><li><img src="Assets/images/sidebarImg/orderhistory.png" alt="">Feedback</li></a>
            </ul>
        </div>
        <!-------------------------- 
        dashboard left side - End
        --------------------------->

        <!------------------------------
            Dashboard Right side - start 
        -------------------------------->
        <div class="rightSide">
            <div class="productsContainer">
                <?php

                    require "../../backend/database_connection.php";
                    $selectQuery = 'select * from products ORDER BY product_id DESC';
                    $result = $conn->query($selectQuery);

                    if(!empty($result)){
                        while ($row = $result->fetch_assoc()) {            
                ?>
                <div class="productsBox">
                    <!-- <a class="imageBox"> -->
                    <a href="./productFeedbacks.php?id=<?php echo $row['product_id']  ?>" class="imageBox">
                        <?php echo '<img src="../../backend/productImageUpload/' . $row['productImage'] . '" alt="' . $row['productName'] . '">' ?>
                    </a>
                    <div class="productDetailBox">
                        <div class="productNameCatagory">
                            <div class="productName">Name: <span><?php echo $row['productName']; ?></span></div>
                            <div class="productCatagory">Category: <span><?php echo $row['categoryName']; ?></span></div>
                        </div>
                        <div class="productDescription">
                            <p><?php echo $row['detail']; ?></p>
                        </div>
                        <div class="productPriceDiscount">
                            <div class="productPrice">Price: <span><?php echo $row['price']; ?></span></div>
                            <div class="productDiscount">Discount: <span><span><?php echo $row['discount']; ?>%</span></div>
                        </div>
                        <div class="productEditDelete">
                            <button class="productEdit"
                            <?php 
                            echo '
                                    data-productId="' . $row['product_id'] . '"
                                    data-productName="' . $row['productName'] . '"
                                    data-detail="' . $row['detail'] . '" 
                                    data-categoryName="' . $row['categoryName'] . '" 
                                    data-price="' . $row['price'] . '" 
                                    data-discount="' . $row['discount'] . '"
                                    data-processor="' . $row['processor'] . '" 
                                    data-memoryStorage="' . $row['memoryStorage'] . '" 
                                    data-ram="' . $row['ram'] . '" 
                                    data-frontCamera="' . $row['frontCamera'] . '" 
                                    data-rearCamera="' . $row['rearCamera'] . '"
                                    data-battery="' . $row['battery'] . '"       
                                    data-image="' . $row['productImage'] . '"
                                '?>>

                                <img src="./Assets/images/edit.png" alt="Edit"> Edit
                            </button>
                            <a class="productDelete" href="../../backend/deleteProduct.php?id=<?php echo $row['product_id'] ?>"><img src="./Assets/images/delete.png" alt="Edit">delete</a>
                        </div>
                    </div>
                </div>
                <?php
                    } 
                }
                ?>
            </div>


        </div>
        <!-----------------------------
            Dashboard Right side - End 
        ------------------------------->

    </div>
    <!------------------
        Dashboard - End 
    -------------------->

    <!----------------
        Custom JS 
    ------------------>
    <script src="./Assets/js/products.js"></script>

    <!--------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>

</body>

</html>
<!-- 
<?php
$con->close();
?> -->