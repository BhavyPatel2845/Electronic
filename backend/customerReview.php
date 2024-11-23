<?php
    require "./database_connection.php";

    if(isset($_POST['reviewSubmit'])){
        $userName = $_POST['userName'];
        $feedback = $_POST['feedback']; 
        $productName = $_POST['productName'];
        $rating = $_POST['rating'];
        session_start();
        $userEmail = $_SESSION['email'];


        $insertReview = "INSERT into feedback (productName,userName,userEmail,feedback,rating) values ('$productName','$userName','$userEmail','$feedback','$rating')";
        
        if(mysqli_query($conn,$insertReview)){
            echo "
            <script>
                alert('Feedback Successfully');
                window.location.href = '../dashboard/User Dashboard/review.php';
            </script>";
        }
        else{
            echo "
            <script>
                alert('Unsuccessfull Resend FeedBack');
                window.location.href = '../dashboard/User Dashboard/review.php';
            </script>";
        }

    }
    else{
        
    }

?>