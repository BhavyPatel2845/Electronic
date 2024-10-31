
<?php

require "./database_connection.php";

if (isset($_POST['submit'])) {

    $productID = $_POST['productId'];
    $productName = $_POST['productName'];
    $detail = $_POST['detail'];
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
    

    // Update the product details in the database
    $updateQuery = "UPDATE `products` SET 
                `productName` = '$productName', 
                `detail` = '$detail',
                `categoryName` = '$categoryName',  
                `price` = '$price', 
                `discount` = '$discount',
                `quantity` = '$quantity',
                `processor` = '$processor',
                `memoryStorage` = '$memoryStorage',
                `ram` = '$ram',
                `frontCamera` = '$frontCamera',
                `rearCamera` = '$rearCamera',
                `battery` = '$battery'
                WHERE `product_id` = '$productID'";

    if (mysqli_query($conn, $updateQuery)) {
        // Only handle image update if a new image is uploaded
        if (!empty($_FILES['productImage']['name'])) {
            // Retrieve the old image name from the database
            $sqlSelect = "SELECT `productImage` FROM `products` WHERE `product_id` = '$productID'";
            $result = mysqli_query($conn, $sqlSelect);
            $row = mysqli_fetch_assoc($result);
            $oldImageName = $row['productImage'];
            $imageName = $_FILES['productImage']['name'];
            $imageTmpName = $_FILES['productImage']['tmp_name'];
            $imageSize = $_FILES['productImage']['size'];
            $imageError = $_FILES['productImage']['error'];

            $allowedTypes = array("jpg", "jpeg", "png");
            $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));


            if (in_array($imageExtension, $allowedTypes) && $imageSize < 1000000) {
                // Generate a unique name for the new image
                $imageNewName = uniqid('IMG-', true) . "." . $imageExtension;

                // Directory to upload the new image
                $targetDir = "productImageUpload/";
                $targetFilePath = $targetDir . $imageNewName;

                // Move the new image to the server
                if (move_uploaded_file($imageTmpName, $targetFilePath)) {
                    // Delete the old image from the server
                    if (!empty($oldImageName) && file_exists($targetDir . $oldImageName)) {
                        unlink($targetDir . $oldImageName);
                        echo "bbbb";
                    }
                    else{
                        echo "aaaaa";
                    }

                    // Update the product image in the database
                    $sqlUpdateImage = "UPDATE `products` SET `productImage` = '$imageNewName' WHERE `product_id` = '$productID'";
                    $image = mysqli_query($conn, $sqlUpdateImage);
                    if ($image === TRUE) {
                        echo "complete";
                    }
                    else{
                        echo "incomplete";
                    }
                }
            } else {
                echo "Invalid file type or file size exceeds the 225KB limit.";
            }
        }
        else{
            echo "product Image does not uploaded ";
        }

        // Redirect back to the products page after the update
        // header("location: ../Dashboard/Admin Dashboard/products.php");
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
}

?>

<?php
// require "./database_connection.php";

// if (isset($_POST['submit'])) {
//     // Sanitize input data
//     $productID = mysqli_real_escape_string($conn, $_POST['productId']);
//     $productName = mysqli_real_escape_string($conn, $_POST['productName']);
//     $detail = mysqli_real_escape_string($conn, $_POST['detail']);
//     $categoryName = mysqli_real_escape_string($conn, $_POST['categoryName']);
//     $price = mysqli_real_escape_string($conn, $_POST['price']);
//     $discount = mysqli_real_escape_string($conn, $_POST['discount']);
//     $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
//     $processor = mysqli_real_escape_string($conn, $_POST['processor']);
//     $memoryStorage = mysqli_real_escape_string($conn, $_POST['memoryStorage']);
//     $ram = mysqli_real_escape_string($conn, $_POST['ram']);
//     $frontCamera = mysqli_real_escape_string($conn, $_POST['frontCamera']);
//     $rearCamera = mysqli_real_escape_string($conn, $_POST['rearCamera']);
//     $battery = mysqli_real_escape_string($conn, $_POST['battery']);

//     echo "the id is : $productID";

//     // Update product details
//     $updateQuery = "UPDATE `products` SET 
//                     `productName` = '$productName', 
//                     `detail` = '$detail',
//                     `categoryName` = '$categoryName',  
//                     `price` = '$price', 
//                     `discount` = '$discount',
//                     `quantity` = '$quantity',
//                     `processor` = '$processor',
//                     `memoryStorage` = '$memoryStorage',
//                     `ram` = '$ram',
//                     `frontCamera` = '$frontCamera',
//                     `rearCamera` = '$rearCamera',
//                     `battery` = '$battery'
//                     WHERE `product_id` = '$productID'";

//     if (mysqli_query($conn, $updateQuery)) {
//         // Handle image upload
//         if (!empty($_FILES['productImage']['name'])) {
//             // Get old image
//             $sqlSelect = "SELECT `productImage` FROM `products` WHERE `product_id` = '$productID'";
//             $result = mysqli_query($conn, $sqlSelect);
//             $row = mysqli_fetch_assoc($result);
//             $oldImageName = $row['productImage'];

//             $imageName = $_FILES['productImage']['name'];
//             $imageTmpName = $_FILES['productImage']['tmp_name'];
//             $imageSize = $_FILES['productImage']['size'];
//             $imageError = $_FILES['productImage']['error'];

//             $allowedTypes = array("jpg", "jpeg", "png");
//             $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

//             if (in_array($imageExtension, $allowedTypes) && $imageSize < 1000000) {
//                 $imageNewName = uniqid('IMG-', true) . "." . $imageExtension;
//                 $targetDir = "productImageUpload/";
//                 $targetFilePath = $targetDir . $imageNewName;

//                 if (move_uploaded_file($imageTmpName, $targetFilePath)) {
//                     if (!empty($oldImageName) && file_exists($targetDir . $oldImageName)) {
//                         unlink($targetDir . $oldImageName);
//                     }

//                     // Update image in database
//                     $sqlUpdateImage = "UPDATE `products` SET `productImage` = '$imageNewName' WHERE `product_id` = '$productID'";
//                     mysqli_query($conn, $sqlUpdateImage);
//                 } else {
//                     echo "Error moving the uploaded file.";
//                 }
//             } else {
//                 echo "Invalid file type or file size exceeds the 1MB limit.";
//             }
//         }

//         // Redirect to products page
//         // header("Location: ../Dashboard/Admin Dashboard/products.php");
//         exit();
//     } else {
//         echo "Error updating product: " . mysqli_error($conn);
//     }
// }
?>