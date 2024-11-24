<?php
    // session_start();
    // if(!empty($_SESSION['email'])){
    // }
    // else{
    //     $_SESSION['email'];
    //     $_SESSION['password'];
    // }
    // echo $_SESSION['email'];
?>
<?php
// require "./adminLogin.php";
// require "../../backend/loginSession.php";
session_start();
// $_SESSION['adminEmail'];

if(empty($_SESSION['email'])){
}
else{
    $_SESSION['email'];
}
?>