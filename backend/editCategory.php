
<?php

require "./database_connection.php";

if (isset($_POST['submit'])) {

    $categoryID = $_POST['categoryId'];
    $categoryName = $_POST['categoryName'];
    $categoryDetail = $_POST['categoryDetail'];
    

    // Update the product details in the database
    $updateQuery = "UPDATE `category` SET 
                `categoryName` = '$categoryName', 
                `categoryDetail` = '$categoryDetail'
                WHERE `category_id` = '$categoryID'";

    if (mysqli_query($conn, $updateQuery)) {
        // Only handle image update if a new image is uploaded
        if (!empty($_FILES['categoryImage']['name'])) {
            // Retrieve the old image name from the database
            $sqlSelect = "SELECT `categoryImage` FROM `category` WHERE `category_id` = '$categoryID'";
            $result = mysqli_query($conn, $sqlSelect);
            $row = mysqli_fetch_assoc($result);
            $oldImageName = $row['categoryImage'];
            $imageName = $_FILES['categoryImage']['name'];
            $imageTmpName = $_FILES['categoryImage']['tmp_name'];
            $imageSize = $_FILES['categoryImage']['size'];
            $imageError = $_FILES['categoryImage']['error'];

            $allowedTypes = array("jpg", "jpeg", "png");
            $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));


            if (in_array($imageExtension, $allowedTypes) && $imageSize < 1000000) {
                // Generate a unique name for the new image
                $imageNewName = uniqid('IMG-', true) . "." . $imageExtension;

                // Directory to upload the new image
                $targetDir = "categoryImageUpload/";
                $targetFilePath = $targetDir . $imageNewName;

                // Move the new image to the server
                if (move_uploaded_file($imageTmpName, $targetFilePath)) {
                    // Delete the old image from the server
                    if (!empty($oldImageName) && file_exists($targetDir . $oldImageName)) {
                        unlink($targetDir . $oldImageName);
                    }

                    // Update the product image in the database
                    $sqlUpdateImage = "UPDATE `category` SET `categoryImage` = '$imageNewName' WHERE `category_id` = '$categoryID'";
                    $image = mysqli_query($conn, $sqlUpdateImage);
                    if ($image === TRUE) {
                        header("Location: ../Dashboard/Admin Dashboard/category.php");
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
