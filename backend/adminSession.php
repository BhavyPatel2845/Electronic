<?php
// require "./adminLogin.php";
// require "../../backend/loginSession.php";
session_start();
// $_SESSION['adminEmail'];

if(empty($_SESSION['adminEmail'])){
    echo "
            <script>
                alert('Please Login');
                window.location.href = '../../admin.php';
            </script>";
}
else{
    $_SESSION['adminEmail'];
}
?>