<?php

    include "database_connection.php";

    if(isset($_POST['editSubmit'])){
        $userName = $_POST['editUserName'];
        $dob = $_POST['editDob'];
        $city = $_POST['editCity'];
        $pincode = $_POST['editPincode'];
        $phoneNumber = $_POST['editPhoneNumber'];
        $email = $_POST['editEmail'];
        $userID = $_POST['editUserId'];
        // $password = $_POST['password'];
    }

    $fields = [
        'editUserName' => $userName,
        'editDob' => $dob,
        'editCity' => $city,
        'editPincode' => $pincode,
        'editPhoneNumber' => $phoneNumber,
        'editEmail' => $email,
        // 'password' => $password
    ];

    $errors = [];

    foreach ($fields as $fieldName => $fieldValue) {
        if (trim($fieldValue) === "") {
            $errors[] = "$fieldName is required.";
        }
    }

    $pincodeLength = strlen((string)$pincode);
    if($pincodeLength != 6){
        $errors[] = "Pincode Is Not Vailed";
    }
    $phoneNumberLength = strlen((string)$phoneNumber);
    if ($phoneNumberLength != 10 ) {
        $errors[] = "Phone Number Is Not Valid";
    }
    
    $passwordLength = strlen((string)$password);
    if($passwordLength < 6 && $passwordLength > 10){
        $errors[] = "Password must be 6 to 10 character required";
    }
    // Display errors 
    if (!empty($errors)) {

        foreach ($errors as $error) {
            echo "$error <br> ";
        }
    }
    else{
        $userName = mysqli_real_escape_string($conn, $userName);
        $dob = mysqli_real_escape_string($conn, $dob);
        $pincode = mysqli_real_escape_string($conn, $pincode);
        $city = mysqli_real_escape_string($conn, $city);
        $phoneNumber = mysqli_real_escape_string($conn, $phoneNumber);
        $email = mysqli_real_escape_string($conn, $email);
        // $password = mysqli_real_escape_string($conn, $password);

    $updateQuery = "UPDATE `users` SET 
                `name` = '$userName', 
                `dob` = '$dob',
                `city` = '$city',  
                `pincode` = '$pincode', 
                `phoneNumber` = '$phoneNumber',
                `email` = '$email'
                WHERE `user_id` = '$userID'";

    $loginTableQuery = "UPDATE `login` SET 
                `email` = '$email'
                WHERE `login_id` = '$userID'";

    if (mysqli_query($conn,$updateQuery) === TRUE && mysqli_query($conn,$loginTableQuery) === TRUE) {
        header("location: ../dashboard/Admin Dashboard/user.php");
    }
    else{
        echo "error";
    }
}
    
$conn->close();
?>