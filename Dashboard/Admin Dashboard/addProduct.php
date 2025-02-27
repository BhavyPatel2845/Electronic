<?php
    require "../../backend/adminSession.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/css/addProduct.css">
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
                <a href="userContact.php"><li><img src="Assets/images/sidebarImg/users.png" alt="">User Contact</li></a>
                <a href="orderHistory.php"><li><img src="Assets/images/sidebarImg/orderhistory.png" alt="">Order History</li></a>
                <a href="feedback.php"><li><img src="Assets/images/sidebarImg/orderhistory.png" alt="">Feedback</li></a>
            </ul>
        </div>
        <!-------------------------- 
        dashboard left side - End
        --------------------------->

        <div class="rightSide">
            <div class="addProductForm">
                <div class="container">
                    <h3>Add Product</h3>
                    <form action="../../backend/addProduct.php" method="post" enctype="multipart/form-data">
                        <input type="text" placeholder="Product Name" name="productName" required>
                        <textarea rows="10" cols="47" placeholder="Product detail" name="productDetail" required></textarea>
                        <select name="categoryName" required>
                            <option value="">Select Category</option>
                            <?php
                                require "../../backend/database_connection.php";

                                // Corrected query
                                $selectCategory = "SELECT * FROM category";

                                // Execute the query
                                $result = mysqli_query($conn, $selectCategory);

                                // Check if the query was successful and if it has rows
                                if ($result && $result->num_rows > 0) {
                                    // Loop through each row and display the category name
                                    while ($row = $result->fetch_assoc()) {
                                        // echo $row['categoryName'];
                                    ?>
                                    <option value="<?php echo $row['categoryName'] ?>"><?php echo $row['categoryName'] ?></option>
                                    <?php
                                            }
                                            } else {
                                                echo "No categories found.";
                                            }
                                    ?>
                        </select>
                        <input type="text" placeholder="Product Price" name="price" required>
                        <input type="text" placeholder="Product discount" name="discount" required>
                        <!-- <input type="text" placeholder="Product Quantity" name="quantity" required> -->
                        <input type="text" placeholder="Processor" name="processor">
                        <input type="text" placeholder="Memory Storage" name="memoryStorage">
                        <input type="text" placeholder="RAM" name="ram">
                        <input type="text" placeholder="Front Camera" name="frontCamera"> 
                        <input type="text" placeholder="Rear Camera" name="rearCamera">
                        <input type="text" placeholder="Battery" name="battery">
                        <input type="file" name="productImage" required>
                        <button type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="./Assets/js/dashboard.js"></script>
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>
</body>
</html>