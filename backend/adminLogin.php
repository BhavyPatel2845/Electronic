<?php
    require "./database_connection.php";

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $selectQuery = "select * from admin";
    $result = $conn->query($selectQuery);
    if ($result->num_rows > 0 ) {
        while ($row = $result->fetch_assoc()) {
            if ($email === $row['adminEmail'] && $password === $row['password']) {
                session_start();
                $_SESSION['adminEmail'] = $row['adminEmail'];
                
            }
        }
        if ($_SESSION['adminEmail'] == TRUE) {
            echo "
            <script>
                alert('Login Successfully');
                window.location.href = '../dashboard/admin Dashboard/dashboard.php';
            </script>";
        }
        else{
            echo "
            <script>
                alert('Enter Valid Username And Password');
                window.location.href = '../admin.php';
            </script>"; 
        }

    }}
?>