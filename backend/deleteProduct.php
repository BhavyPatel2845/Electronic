
<?php
require "./database_connection.php";

$id = $_GET['id'];
$product = "SELECT productImage FROM `products` where product_id='$id'";

$query = mysqli_query($conn, $product);

$deletequery =  "DELETE FROM `products` WHERE product_id='$id'"; 

$result = mysqli_query($conn,$deletequery);

if ($result === true) {
    while ($row = mysqli_fetch_array($query)) {
        unlink("../../productImageUpload/{$row['productImage']}");
    }
    // header("location: ../Dashboard/Admin Dashboard/products.php");
    echo "
            <script>
                alert('Product Successfully Deleted');
                window.location.href = '../dashboard/Admin Dashboard/products.php';
            </script>";
}
else{
    // echo "product Delete Error";
    echo "
            <script>
                alert('Category Delete Error');
                window.location.href = '../dashboard/Admin Dashboard/category.php';
            </script>";
}



?>