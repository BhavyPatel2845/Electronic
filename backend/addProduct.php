<?php
require "./database_connection.php";
if(isset($_FILES["productImage"])){
    echo " hell";
}
if (isset($_POST["submit"]) && isset($_FILES["productImage"])) {
    // Collect form data
    $productName = $_POST['productName'];
    $detail = $_POST['productDetail'];
    $categoryName = $_POST['categoryName'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $quantity = $_POST['quantity'];
    $processor = $_POST['processor'];
    $memoryStorage = $_POST['memoryStorage'];
    $ram = $_POST['ram'];
    $frontCamera = $_POST['frontCamera'];
    $rearCamera = $_POST['rearCamera'];
    $battery = $_POST['battery'];

    // Image upload handling
    $imgName = $_FILES["productImage"]["name"];
    $imgSize = $_FILES["productImage"]["size"];
    $tmp_name = $_FILES["productImage"]["tmp_name"];
    $error = $_FILES["productImage"]["error"];

    // Validate form fields
    $fields = [
        'productName' => $productName,
        'productDetail' => $detail,
        'categoryName' => $categoryName,
        'price' => $price,
        'quantity' => $quantity
    ];

    $errors = [];
    foreach ($fields as $fieldName => $fieldValue) {
        if (trim($fieldValue) === "") {
            $errors[] = "$fieldName is required.";
        }
    }

    // Check image upload and size
    if ($error !== 0) {
        $errors[] = "There was an error uploading the image.";
    } elseif ($imgSize > 1000000) {
        $errors[] = "Sorry, your image is too large (must be under 1MB).";
    } else {
        $imgEx = pathinfo($imgName, PATHINFO_EXTENSION);
        $imgExLc = strtolower($imgEx);
        $allowedTypes = ["jpg", "png", "jpeg"];

        if (in_array($imgExLc, $allowedTypes)) {
            if (!file_exists('productImageUpload')) {
                mkdir('productImageUpload', 0777, true);
            }

            $newImgName = uniqid("IMG-", true) . '.' . $imgExLc;
            $imgUploadPath = 'productImageUpload/' . $newImgName;

            if (move_uploaded_file($tmp_name, $imgUploadPath)) {
                // Escape strings for SQL
                $productName = mysqli_real_escape_string($conn, $productName);
                $detail = mysqli_real_escape_string($conn, $detail);
                $categoryName = mysqli_real_escape_string($conn, $categoryName);
                $price = mysqli_real_escape_string($conn, $price);
                $quantity = mysqli_real_escape_string($conn, $quantity);
                $processor = mysqli_real_escape_string($conn, $processor);
                $memoryStorage = mysqli_real_escape_string($conn, $memoryStorage);
                $ram = mysqli_real_escape_string($conn, $ram);
                $frontCamera = mysqli_real_escape_string($conn, $frontCamera);
                $rearCamera = mysqli_real_escape_string($conn, $rearCamera);
                $battery = mysqli_real_escape_string($conn, $battery);

                // Insert into the database
                $insertQuery = "INSERT INTO products (productName, detail, categoryName, price, discount, quantity, processor, memoryStorage, ram, frontCamera, rearCamera, battery, productImage) 
                                VALUES ('$productName', '$detail', '$categoryName', $price, $discount, $quantity, '$processor', '$memoryStorage', '$ram', '$frontCamera', '$rearCamera', '$battery', '$newImgName')";

                if ($conn->query($insertQuery) === TRUE) {
                    header("Location: ../Dashboard/Admin Dashboard/products.php");
                    exit();
                } else {
                    echo "Error: " . $conn->error;
                }
            } else {
                echo "Failed to upload the image.";
            }
        } else {
            echo "Invalid image type. Only JPG, PNG, and JPEG are allowed.";
        }
    }

    // Display errors if any
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}
?>