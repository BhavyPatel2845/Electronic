
<?php
    require './database_connection.php';

    session_start();
    if ($_SESSION['isLoggedIn'] === TRUE) {
        if (isset($_POST['cart_btn'])) {
            $productID = $_POST['productId'];
            $userEmail = $_SESSION['email'];
            $insertQuery = "insert into addtocart(product_id,userEmail) values ('$productID','$userEmail')";
            $result = mysqli_query($conn,$insertQuery);
            if($result === true) {
                header("location: ../addToCart.php"); 
            }
        } else {
            echo "No data received.";
        }
    }
    else{
        echo "Please Log In";
    }
?>
