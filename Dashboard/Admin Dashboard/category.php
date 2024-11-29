<?php
    // require "../../backend/adminSession.php";
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
    <link rel="stylesheet" href="./Assets/css/category.css">
</head>

<body>

    <!--------------------
        Edit form - start 
    ----------------------->
    <div id="editFormContainer">
        <div class="formContainer">
            <form action="../../backend/editCategory.php" method="post" enctype="multipart/form-data">
                <input type="number" id="categoryId" name="categoryId">
                <div class="categoryName">
                    <label for="categoryName">Category Name</label>
                    <input type="text" placeholder="Category Name" name="categoryName">
                </div>
                <div class="categoryDetail">
                    <label for="categoryDescription">Detail</label>
                    <textarea rows="4" cols="20" placeholder="category Details" name="categoryDetail"></textarea>
                </div>
                <div class="uploadFile">
                    <label for="categoryImage">Image</label>
                    <input type="file" name="categoryImage">
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
                <a href="user.php"><li><img src="Assets/images/sidebarImg/users.png" alt="">User Contact</li></a>
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
            <div class="categoryContainer">
                <?php
                    require "../../backend/database_connection.php";
                    $selectQuery = "select * from category ORDER BY category_id DESC";
                    $result = mysqli_query($conn,$selectQuery);

                    if (!empty($result)) {
                        while ($row = $result->fetch_assoc()) {
                ?>
                <div class="categoryBox">
                    <div class="imageBox">
                    <?php echo '<img src="../../backend/categoryImageUpload/' . $row['categoryImage'] . '" alt="' . $row['categoryName'] . '">' ?>
                    </div>
                    <div class="categoryDetailBox">
                        <div class="categoryName">
                            <div>Name: <span><?php echo $row['categoryName'] ?></span></div>
                        </div>
                        <div class="categoryDescription"><?php echo $row['categoryDetail'] ?></div>
                        <div class="categoryEditDelete">
                            <button class="categoryEdit"
                            <?php 
                                echo '
                                    data-categoryId="' . $row['category_id'] . '"
                                    data-categoryName="' . $row['categoryName'] . '"
                                    data-categoryDetail="' . $row['categoryDetail'] . '"        
                                    data-image="' . $row['categoryImage'] . '"
                                '?>> 
                                <img src="./Assets/images/edit.png" alt="Edit"> Edit
                            </button>
                            <!-- <a class="categoryDelete" href=""><img src="./Assets/images/delete.png" alt="Edit">delete</a> -->
                            <a class="categoryDelete" href="../../backend/deleteCategory.php?id=<?php echo $row['category_id'] ?>"><img src="./Assets/images/delete.png" alt="Edit">delete</a>
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
    <script src="./Assets/js/category.js"></script>

    <!--------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>

</body>

</html>
