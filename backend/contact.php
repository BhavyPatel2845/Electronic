<?php

    include "database_connection.php";

    if(isset($_POST['submit'])){
        $userName = $_POST['userName'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    }
    
    $fields = [
        'username' => $userName,
        'phoneNumber' => $phoneNumber,
        'email' => $email,
        'message' => $message
    ];

    $errors=[];

    foreach ($fields as $fieldName => $fieldValue) {
        if (trim($fieldValue) === "") {
            $errors[] = "$fieldName is required.";
        }
    }
    
    $phoneNumberLength = strlen((string)$phoneNumber);
    if ($phoneNumberLength != 10 ) {
        $errors[] = "Phone Number Is Not Valid";
    }

    if (!empty($errors)) {

        foreach ($errors as $error) {
            echo "$error <br> ";
        }
    }
    else{
        $userName = mysqli_real_escape_string($conn, $userName);
        $phoneNumber = mysqli_real_escape_string($conn, $phoneNumber);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $message);

        $insertQuery = "insert into contact(userName,phoneNumber,email,message) values('$userName',$phoneNumber,'$email','$message')";

        if (mysqli_query($conn,$insertQuery) === TRUE) {
            echo "<script> alert('Successfully Sent Message') </script>";
        }
        else{
            echo "<script> alert('Resend Message') </script>";
        }
    }

?>