
<?php
require "./database_connection.php";

$id = $_GET['id'];
$deletequery =  "DELETE FROM `addtocart` WHERE cart_id='$id'"; 

if(mysqli_query($conn,$deletequery) === TRUE){
    // echo "successfully Deleted";
    echo "<script>
        alert('Item Deleted Successfully');
        window.location.href = '../addToCart.php';
    </script>";
}


?>