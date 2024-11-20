<?php

require "database_connection.php";

if(isset($_POST['submit'])){
    $user_id = $_POST['user_id'];
    $userName = $_POST['userName'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
}

$fields = [
    'username' => $userName,
    'dob' => $dob,
    'city' => $city,
    'pincode' => $pincode,
    'phoneNumber' => $phoneNumber,
    'email' => $email
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

    $updateQuery = "UPDATE users 
    SET name = '$userName', 
        dob = '$dob', 
        city = '$city', 
        pincode = '$pincode', 
        phoneNumber = '$phoneNumber',
        email = '$email' 
    WHERE user_id = '$user_id'";
session_start();
    $sessionEmail = $_SESSION['email'];

$updateLoginTable = "UPDATE login SET email='$email' WHERE login_id='$user_id'";
$updateCartEmail = "UPDATE addtocart SET userEmail = '$email' WHERE userEmail = '$sessionEmail'";

if (mysqli_query($conn,$updateQuery) === TRUE && mysqli_query($conn,$updateLoginTable) === TRUE && mysqli_query($conn,$updateCartEmail) === TRUE ) {
    session_start();
    unset($_SESSION['email']);
    $_SESSION['email'] = $email;
    echo "
    <script>
        alert('Edit Successfully');
        window.location.href = '../Dashboard/User Dashboard/editProfile.php';
    </script>";
}
else{
    echo "error";
}
}

$conn->close();
?>