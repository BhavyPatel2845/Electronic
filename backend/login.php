<?php
    require "database_connection.php";

    session_start();

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

    $_SESSION['isLoggedIn'] = FALSE ;

    if ($result->num_rows > 0 ) {
        while ($row = $result->fetch_assoc()) {
            if ($email === $row['email'] && $password === $row['password']) {
                
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['isLoggedIn'] = TRUE ;
            }
        }
        if ($_SESSION['isLoggedIn'] === TRUE) {
            echo "
            <script>
                alert('Login Successfully');
                window.location.href = '../index.php';
            </script>";
        }
        else{
            // echo "<script> alert('Enter Valid Username And Password') </script>";
            // // header("location: ../login.php");
            echo "
            <script>
                alert('Enter Valid Username And Password');
                window.location.href = '../login.php';
            </script>"; 
        }
    }
}

    $conn->close();
?>