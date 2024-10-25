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
    <div class="productSection" id="productSection">
        <div class="productSort">
            <label for=""> Short By </label>
            <select name="" id="">
                <option value=""> Short By Latest</option>
                <option value=""> Short By Rating : High To Low</option>
                <option value=""> Short By Rating : Low To High</option>
                <option value=""> Short By Price : High To Low</option>
                <option value=""> Short By Price : Low To High</option>
            </select>
        </div>
        <div class="laptopProduct">
                <div class="productsContainer">
                    <?php
                    for ($i=0; $i < 20 ; $i++) { 
                    ?>
                    <div class="individualProductBox">
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

    
<!----------------------------    HEADER     --------------------------------->
        
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
</body>

</html>