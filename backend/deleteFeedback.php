<?php

    require "./database_connection.php";
    $feedback_id = $_GET['id'];
    // echo $feedback_id;

    $delete = "delete from feedback where feddback_id='$feedback_id'";
    if(mysqli_query($conn,$delete) === TRUE){
         // echo "successfully Deleted";
    echo "<script>
            alert('Feedback Deleted Successfully');
            window.location.href = '../dashboard/Admin Dashboard/feedback.php';
        </script>";
    }
    else{
        echo "<script>
            alert('Feedback does not Deleted');
            window.location.href = '../dashboard/Admin Dashboard/feedback.php';
        </script>";
    }

?>