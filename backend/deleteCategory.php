
<?php
require "./database_connection.php";

$id = $_GET['id'];
echo $id;
$category = "SELECT categoryImage FROM `category` where category_id='$id'";

$query = mysqli_query($conn, $category);

$deletequery =  "DELETE FROM `category` WHERE category_id='$id'"; 

$result = mysqli_query($conn,$deletequery);

if ($result === true) {
    while ($row = mysqli_fetch_array($query)) {
        unlink("../../categoryImageUpload/{$row['categoryImage']}");
    }
    echo "
            <script>
                alert('Category Successfully Deleted');
                window.location.href = '../dashboard/Admin Dashboard/category.php';
            </script>";
    // header("location: ../Dashboard/Admin Dashboard/category.php");
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