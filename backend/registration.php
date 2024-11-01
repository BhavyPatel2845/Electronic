<?php

    include "database_connection.php";

    if(isset($_POST['submit'])){
        $userName = $_POST['userName'];
        $dob = $_POST['dob'];
        $city = $_POST['city'];
        $pincode = $_POST['pincode'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    $fields = [
        'username' => $userName,
        'dob' => $dob,
        'city' => $city,
        'pincode' => $pincode,
        'phoneNumber' => $phoneNumber,
        'email' => $email,
        'password' => $password
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
        $password = mysqli_real_escape_string($conn, $password);

    $insertQuery = "insert into users(name,dob,city,pincode,phoneNumber)
     values ('$userName','$dob', '$city', $pincode, $phoneNumber)";

    $loginTableQuery = "insert into login(email,password) values('$email','$password')";

    if (mysqli_query($conn,$insertQuery) === TRUE && mysqli_query($conn,$loginTableQuery) === TRUE) {
        header("location: ../login.php");
    }
    else{
        echo "error";
    }
}
    
$conn->close();
?>