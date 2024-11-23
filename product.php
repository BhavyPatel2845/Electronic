<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <!------------
     Google Fonts
     ------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">

    <!-----------
    Custom CSS 
    ----------->
    <link rel="stylesheet" href="./CSS/product.css">

</head>

<body>

<!----------------------------    HEADER     --------------------------------->
        
        <?php 
            include 'Header.php';
        ?>

    <!------------------
     Product - start 
    ------------------->

    <?php
        // require './backend/database_connection.php';
        // session_start();
        // $productSelectQuery = "select * from products";
        // $result = mysqli_query($conn, $productSelectQuery);
    ?>

    <div class="productSection" id="productSection">
        <div class="productCategoryAndSort">
            <div class="productCategory">
                <label for=""> Category </label>
                <select name="" id="">
                    <option value=""> All Products </option>
                    <?php
                                require "./backend/database_connection.php";

                                // Corrected query
                                $selectCategory = "SELECT * FROM category";

                                // Execute the query
                                $resultCategory = mysqli_query($conn, $selectCategory);

                                // Check if the query was successful and if it has rows
                                if ($resultCategory && $result->num_rows > 0) {
                                    // Loop through each row and display the category name
                                    while ($row = $resultCategory->fetch_assoc()) {
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
            </div>
            <div class="productSort">
                <label for=""> Short By </label>
                <select name="" id="">
                    <option value=""> Short By Latest</option>
                    <option value=""> Short By Price : High To Low</option>
                    <option value=""> Short By Price : Low To High</option>
                </select>
            </div>
        </div>
        <div class="product">
                <div class="productsContainer">
                    <?php
                    
                        require './backend/database_connection.php';
                        // session_start();
                        $productSelectQuery = "select * from products ORDER BY product_id DESC LIMIT 20";
                        $result = mysqli_query($conn, $productSelectQuery);
                        while($row = $result->fetch_assoc()){
                    ?>
                    <img src="" alt="">
                    <div class="individualProductBox">
                        <a href="./productDetail.php?id=<?php echo $row['product_id']  ?>" class="individualProductImageContainer">
                            <?php echo '<img src="./backend/productImageUpload/' . $row['productImage'] . '" alt="' . $row['productName'] . '">' ?>
                        </a>
                        <p class="productName"> <?php echo $row['productName'] ?> </p>
                        <p class="productPrice">&#8377; <?php echo $row['price'] ?> </p>
                        <div class="productRating">
                            <?php

                            // $productName = $row['productName'];
                            // // echo $productName;
                            //     // require "./backend/database_connection.php";
                            //     $selectRating = "SELECT * FROM feedback WHERE productName = '$productName' ";
                            //     $resultRating = mysqli_query($conn,$selectRating);

                            //     if (!($resultRating)) {
                            //         while($rowRating = $resultRating->fetch_assoc()){
                            //             echo "aaa";
                            //         } 
                            //     }
                            //     else{
                            //         echo "bbb";
                            //     }

                            ?>
                            <input type="text">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <form class="addToCart" action="./backend/productAddToCart.php" method="post"> 
                            <input type="hidden" name="productId" id="productId" value="<?php echo $row['product_id'] ?>">  <!-- Make this hidden -->
                            <button type="submit" name="cart_btn" 
                            <?php echo 'data-productId="' . $row['product_id'] . '"'; ?>>Add To Cart</button>
                        </form>
                    </div>
                    <?php
                    }
                    ?>
            </div>
        </div> 
    </div>

    
    <!------------------
     Product - End 
    ------------------->

    
<!----------------------------    FOOTER     --------------------------------->
        
        <?php 
            include 'footer.php';
        ?>

   
    <!---------
    Custom Js  
    ----------->
    <script src="./JS/product.js"></script>


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>

    <!-- =============j-script=================== -->

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