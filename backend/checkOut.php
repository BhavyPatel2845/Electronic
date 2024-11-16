<?php

    include "database_connection.php";

    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $pincode = $_POST['pincode'];
        $state = $_POST['state'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $paymentMethod = $_POST['paymentMethod'];
        $totalPrice = $_POST['totalPrice'];
    }
    
    $fields = [
        'firstname' => $firstName,
        'lastname' => $lastName,
        'address' => $address,
        'city' => $city,
        'pincode' => $pincode,
        'phoneNumber' => $phoneNumber,
        'email' => $email,
        'paymentMethod' => $paymentMethod
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
    
    // Display errors 
    if (!empty($errors)) {

        foreach ($errors as $error) {
            echo "$error <br> ";
        }
    }
    else{
        $firstName = mysqli_real_escape_string($conn, $firstName);
        $lastName = mysqli_real_escape_string($conn, $lastName);
        $address = mysqli_real_escape_string($conn, $address);
        $pincode = mysqli_real_escape_string($conn, $pincode);
        $city = mysqli_real_escape_string($conn, $city);
        $phoneNumber = mysqli_real_escape_string($conn, $phoneNumber);
        $email = mysqli_real_escape_string($conn, $email);
        $totalprice = mysqli_real_escape_string($conn, $totalPrice);
        $paymentMethod = mysqli_real_escape_string($conn, $paymentMethod);
        

    $insertQuery = "insert into checkout(firstName,lastName,address,city,pincode,phoneNumber,email,totalPrice,paymentMethod)
     values ('$firstName','$lastName','$address', '$city', $pincode, $phoneNumber, '$email', $totalPrice, '$paymentMethod')";

    if (mysqli_query($conn,$insertQuery) === TRUE) {
        if($paymentMethod === 'UPI'){        
            header("location: ../dashboard/Admin Dashboard/payment.php");
        }
        else{
            header("location: ../dashboard/Admin Dashboard/orderHistory.php");
        }
    }

    else{
        echo "error";
    }
}
    
$conn->close();
?>