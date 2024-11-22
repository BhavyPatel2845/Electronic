<?php
require "./database_connection.php";


if (isset($_POST["submit"]) && isset($_FILES["categoryImage"])) {
    // Collect form data
    $categoryName = $_POST['categoryName'];
    $detail = $_POST['categoryDetail'];

    // Image upload handling
    $imgName = $_FILES["categoryImage"]["name"];
    $imgSize = $_FILES["categoryImage"]["size"];
    $tmp_name = $_FILES["categoryImage"]["tmp_name"];
    $error = $_FILES["categoryImage"]["error"];


    // Validate form fields
    $fields = [
        'categoryName' => $categoryName,
        'categoryDetail' => $detail
    ];

    $errors = [];

    
    $selectQuery = "select * from category";
    $result = $conn->query($selectQuery);

    if (!empty($result)) {
        $categoryAvailable = FALSE;
        while($row = $result->fetch_assoc()){
            if ($row['categoryName'] === $categoryName) {
                $categoryAvailable = TRUE;
                break;
            } 
        }
    }
    if ($categoryAvailable === TRUE) {
        echo "<script>alert('$categoryName is already Available in Category List.')</script>";
    }
    else{

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
                if (!file_exists('categoryImageUpload')) {
                    mkdir('categoryImageUpload', 0777, true);
                }

                $newImgName = uniqid("IMG-", true) . '.' . $imgExLc;
                $imgUploadPath = 'categoryImageUpload/' . $newImgName;

                if (move_uploaded_file($tmp_name, $imgUploadPath)) {
                    // Escape strings for SQL
                    $categoryName = mysqli_real_escape_string($conn, $categoryName);
                    $detail = mysqli_real_escape_string($conn, $detail);

                    // Insert into the database
                    $insertQuery = "INSERT INTO category (categoryName, categoryDetail, categoryImage) 
                                    VALUES ('$categoryName', '$detail', '$newImgName')";

                    if ($conn->query($insertQuery) === TRUE) {
                        echo "
                        <script>
                            alert('Category Added Successfully');
                            window.location.href = '../dashboard/Admin Dashboard/category.php';
                        </script>";
                        exit();
                    } else {
                        // echo "Error: " . $conn->error;
                        
                        echo "
                        <script>
                            alert('$conn->error');
                            window.location.href = '../dashboard/Admin Dashboard/category.php';
                        </script>";
                    }
                } else {
                    // echo "Failed to upload the image.";
                    echo "
                        <script>
                            alert('Failed to upload the image.');
                            window.location.href = '../dashboard/Admin Dashboard/addCategory.php';
                        </script>";
                }
            } else {
                // echo "Invalid image type. Only JPG, PNG, and JPEG are allowed.";
                echo "
                        <script>
                            alert('Invalid image type. Only JPG, PNG, and JPEG are allowed.');
                            window.location.href = '../dashboard/Admin Dashboard/addCategory.php';
                        </script>";
            }
        }

        // Display errors if any
        foreach ($errors as $error) {
            // echo $error . "<br>";
            echo "
                <script>
                    alert('$errors');
                    window.location.href = '../dashboard/Admin Dashboard/addCategory.php';
                </script>";
        }
    }
}
?>