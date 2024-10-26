<?php
    include "database_connection.php";

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    $fields = [
        'email' => $email,
        'password' => $password
    ];

    $errors = [];

    foreach ($fields as $fieldName => $fieldValue) {
        if (trim($fieldValue) == "") {
            $errors[] = "$fieldName is required";
        }
    }

    if (!empty($errors)) {

        foreach ($errors as $error) {
            echo "<script> alert('$error') </script>";
        }
    }
    else {

        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        
    $selectQuery = "select * from login";
    $result = $conn->query($selectQuery);

    $loginSuccess = FALSE ;

    if ($result->num_rows > 0 ) {
        while ($row = $result->fetch_assoc()) {
            if ($email === $row['email'] && $password === $row['password']) {
                $loginSuccess = TRUE ;
            }
        }
        if ($loginSuccess === TRUE) {
            echo "login successfully";
            header("location: ../index.php");
        }
        else{
            echo "enter valid username  and password";
        }
    }
    else{
        echo "please register ";
    }
}

    $conn->close();
?>