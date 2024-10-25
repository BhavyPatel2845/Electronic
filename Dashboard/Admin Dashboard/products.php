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
                    <label for="productDescription">Description</label>
                    <textarea name="productDescription" id="" rows="4" cols="20"
                        placeholder="Product Details"></textarea>
                </div>
                <div class="selectCatagory">
                    <label for="productCatagory">Catagory</label>
                    <select name="productCatagory" id="">
                        <option value="insencesWDGADG">insencesWDGADG</option>
                        <option value="insences2">insences2</option>
                        <option value="insences3">insences3</option>
                        <option value="insences4">insences4</option>
                    </select>
                </div>
                <div class="productPrice">
                    <label for="productPrice">Price</label>
                    <input type="number" name="productPrice" placeholder="Price">
                </div>
                <div class="productDiscount">
                    <label for="productDiscount">Discount</label>
                    <input type="number" name="productDiscount" placeholder="Discount">
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

    <!---------------------------
        Dashboard Header - start 
    ----------------------------->
    <div class="dashboardHeader" id="dashboardHeader">
        <div class="logoAndBars">
            <i id="bars" class="fa-solid fa-bars"></i>
            <img class="companyLogo" src="../../IMAGES/logo.png" alt="">
        </div>
        <div class="profile">
        <i class="fa-solid fa-user"></i>
        </div>
    </div>
    <!----------------------------
        Dashboard Header - End 
    ----------------------------->

    <!--------------------
        Dashboard - start
    ---------------------->
    <div class="dashboardContainer" id="dashboardContainer">

        <!-------------------------------
            Dashboard left side - start 
        --------------------------------->
        <div class="leftSide">
            <ul>
                <a href="dashboard.php">
                    <li><img src="Assets/images/sidebarImg/dashboard.png" alt="">Dashboard</li>
                </a>
                <a href="products.php">
                    <li><img src="Assets/images/sidebarImg/products.png" alt="">Products</li>
                </a>
                <a href="addProduct.php">
                    <li><img src="Assets/images/sidebarImg/addproducts.png" alt="">Add Products</li>
                </a>
                <a href="user.php">
                    <li><img src="Assets/images/sidebarImg/users.png" alt="">Users</li>
                </a>
                <a href="orderHistory.php">
                    <li><img src="Assets/images/sidebarImg/orderhistory.png" alt="">Order History</li>
                </a>
            </ul>
        </div>
        <!----------------------------
            Dashboard left side - End 
        ------------------------------>

        <!------------------------------
            Dashboard Right side - start 
        -------------------------------->
        <div class="rightSide">
            <div class="productsContainer">
                <?php
                    for ($i=0; $i <8 ; $i++) { 
                ?>
                        <div class="productsBox">
                    <div class="imageBox">
                        <img src="../../IMAGES/product1.png" alt="">
                    </div>
                    <div class="productDetailBox">
                        <div class="productNameCatagory">
                            <div class="productName">Name: <span>Boat 172</span></div>
                            <div class="productCatagory">Category: <span>Air Burds</span></div>
                        </div>
                        <div class="productDescription">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem, assumenda!
                                 Quas nulla perferendis exercitationem at.</p>
                        </div>
                        <div class="productPriceDiscount">
                            <div class="productPrice">Price: <span>&#8377 1500</span></div>
                            <div class="productDiscount">Discount: <span>10%</span></div>
                        </div>
                        <div class="productEditDelete">
                            <button class="productEdit">
                                <!-- aa buutton ni andar no code che -->
                                    <!-- data-id="' . $row['id'] . '" 
                                    data-name="' . $row['productName'] . '" 
                                    data-category="' . $row['productCatagory'] . '" 
                                    data-description="' . $row['productDescription'] . '" 
                                    data-price="' . $row['productPrice'] . '" 
                                    data-discount="' . $row['productDiscount'] . '" 
                                    data-image="' . $row['productImage'] . '"-->
                                <img src="./Assets/images/edit.png" alt="Edit"> Edit
                            </button>
                            <a class="productDelete"><img src="./Assets/images/delete.png" alt="Edit">delete</a>
                        </div>
                    </div>
                </div>
                <?php
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