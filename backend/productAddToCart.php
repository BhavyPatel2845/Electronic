<?php
    require './database_connection.php';

    session_start();
    if (empty($_SESSION['isLoggedIn'])) {
        echo "please Log in";
    }
    else{
        if (isset($_POST['cart_btn'])) {
            $productID = $_POST['productId'];
            $userEmail = $_SESSION['email'];
            $selectQuery = "select * from addtocart";
            $result = mysqli_query($conn,$selectQuery);
            if(!empty($result)){
                while($row = $result->fetch_assoc()){
                    if($row['product_id']===$productID && $row['userEmail']===$userEmail){
                        $cartId = $row['cart_id'];
                    }
                }
                if(!empty($cartId)){
                        $updateQuery = "update addtocart set quantity=quantity+1 where cart_id = '$cartId' ";
                        if(mysqli_query($conn,$updateQuery)){
                            header("location: ../addToCart.php");
                        }
                    }
                else{
                    $insertQuery = "insert into addtocart(product_id,userEmail) values ('$productID','$userEmail')";
                    if(mysqli_query($conn,$insertQuery) === true) {
                        header("location: ../addToCart.php"); 
                    }
                }
            }
            
        } else {
            echo "No data received.";
        }
    }
?>
