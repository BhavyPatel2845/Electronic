<?php


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'database_connection.php';
// require 'PHPMailer.php';
// require 'SMTP.php';
// require 'Exception.php';

// session_start();

// if (isset($_POST['email'])) {

// 	$email = $_POST['email'];
// 	echo $email;
// 	// $number = $_POST['number'];


// 	$query = "SELECT * FROM `users` WHERE email = '$email'";
// 	$sql = mysqli_query($conn, $query);

// 	$row = mysqli_num_rows($sql);
// 	// if($sql instanceof mysqli_result){
// 	// $row = mysqli_num_rows($sql);
// 	// echo $row;
// 	// }

// 	if ($row > 0) {

		

// 		$otp = rand(1000, 9999);

// 		function sendOtp($email, $otp)
// 		{
// 			// Create an instance of PHPMailer
// 			$mail = new PHPMailer(true);

// 			try {
// 				// SMTP server configuration
// 				$mail->isSMTP();
// 				$mail->Host       = 'smtp.gmail.com';
// 				$mail->SMTPAuth   = true;
// 				$mail->Username   = 'utsavp377@gmail.com';
// 				$mail->Password   = 'dgpufmnalersfhjs'; // App password, not regular password
// 				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
// 				$mail->Port       = 465;

// 				// Recipient details
// 				$mail->setFrom('utsavp377@gmail.com', 'Incense Sticks E-commerce');
// 				$mail->addAddress($email);

// 				// Email content
// 				$mail->isHTML(true);
// 				$mail->Subject = 'Incense Sticks E-commerce';
// 				$mail->Body    = "From Incense Sticks E-commerce Website Send to Your Varification  code is <b>$otp</b>";

// 				// Send the email
// 				if ($mail->send()) {
// 					$_SESSION['otp'] = $otp;
// 					$_SESSION['email'] = $email;
// 					$_SESSION['varify'] = "purpose of varification";
// 					header("location: ../otp.php");
// 				} else {
// 					echo 'Mailer Error: ' . $mail->ErrorInfo;
// 				}
// 			} catch (Exception $e) {
// 				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// 			}
// 		}

// 		// Call the function to send OTP
// 		sendOtp($email, $otp);
// 	} else {
// 		header("location: ../frontend/forgetPassword.php?wrongEmailMsg=Your Email is Wrong!");
// 	}

// 	if (empty($email)) {
// 		header("location: ../frontend/forgetPassword.php?emptyEmail=Your Email is Empty!");
// 	}



// } else if (isset($_POST['submit'])) {

// 	$inputOtp = $_POST['inputOtp'];
// 	$otp =  $_SESSION['otp'];


// 	if ($inputOtp == $otp) {
// 		$_SESSION['inputOtp'] = $inputOtp;
// 		header("location: ../newPassword.php");
// 	} else {
// 		header("location: ../frontend/otp.php?wrongOtp");
// 	}


// } else if (isset($_POST['newPassword']) && isset($_POST['conformpassword'])) {

// 	$newpassword = $_POST['newPassword'];
// 	$conformpassword = $_POST['conformpassword'];
// 	$email = $_SESSION['email'];


	

//         if (isset($_SESSION['inputOtp'])) {

//         if (empty($newpassword) || empty($newpassword)) {
//         	header("location: ../frontend/newPassword.php?emptyError=Empty Email or Password");
           
//         }
// 	else if($newpassword === $conformpassword) {

// 		$update = "UPDATE `login` SET password = '$newpassword' WHERE email = '$email'";

// 		$query = mysqli_query($conn, $update);

// 		if ($query === true) {
// 			unset($_SESSION['inputOtp']);
// 			unset($_SESSION['varify']);
// 			header("location: ../login.php?passwordChangeSuccess=Your password has been changed successfully!");
// 		} else {
// 			header("location: ../newPassword.php?updateError=Error updating password:");
// 		}
// 	} else {
// 		header("location: ../frontend/newPassword.php?passwordError=invelid Password");
// 	}
// }
// else{
// 	header("location: ../frontend/newPassword.php?redirectError=something went wrong");
// }


// }

// else if (isset($_POST['reGenerateOtp'])) {


// 	  $email = $_SESSION['email'];

// 		$otp = rand(1000, 9999);

// 		function sendOtp($email, $otp)
// 		{
// 			// Create an instance of PHPMailer
// 			$mail = new PHPMailer(true);

// 			try {
// 				// SMTP server configuration
// 				$mail->isSMTP();
// 				$mail->Host       = 'smtp.gmail.com';
// 				$mail->SMTPAuth   = true;
// 				$mail->Username   = 'utsavp377@gmail.com';
// 				$mail->Password   = 'dgpufmnalersfhjs'; // App password, not regular password
// 				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
// 				$mail->Port       = 465;

// 				// Recipient details
// 				$mail->setFrom('utsavp377@gmail.com', 'Incense Sticks E-commerce');
// 				$mail->addAddress($email);

// 				// Email content
// 				$mail->isHTML(true);
// 				$mail->Subject = 'Incense Sticks E-commerce';
// 				$mail->Body    = "From Incense Sticks E-commerce Website Send to Your Varification  code is <b>$otp</b>";

// 				// Send the email
// 				if ($mail->send()) {
// 					$_SESSION['otp'] = $otp;
// 					header("location: ../frontend/otp.php");
// 				} else {
// 					echo 'Mailer Error: ' . $mail->ErrorInfo;
// 				}
// 			} catch (Exception $e) {
			
// 				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// 			}
// 		}
		
// 				// Call the function to send OTP
// 				sendOtp($email, $otp);

// 	}



?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'database_connection.php';
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

session_start();

if (isset($_POST['email'])) {

	$email = $_POST['email'];
	echo $email;
	// $number = $_POST['number'];

	$query = "SELECT * FROM `users` WHERE email = '$email'";
	$sql = mysqli_query($conn, $query);

	$row = mysqli_num_rows($sql);
	// if($sql instanceof mysqli_result){
	// $row = mysqli_num_rows($sql);
	// echo $row;
	// }

	if ($row > 0) {

		$otp = rand(100000, 999999);

		function sendOtp($email, $otp)
		{
			// Create an instance of PHPMailer
			$mail = new PHPMailer(true);

			try {
				// SMTP server configuration
				$mail->isSMTP();
				$mail->Host       = 'smtp.gmail.com';
				$mail->SMTPAuth   = true;
				$mail->Username   = 'bhavypatel2845@gmail.com';  // Updated email here
				$mail->Password   = 'ptzo nzve yylq tpju'; // App password, not regular password
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
				$mail->Port       = 465;

				// Recipient details
				$mail->setFrom('bhavypatel2845@gmail.com', 'SmartTech Store');  // Updated email here
				$mail->addAddress($email);

				// Email content
				$mail->isHTML(true);
				$mail->Subject = 'SmartTech Store';
				$mail->Body    = "From SmartTech Store E-commerce Website Send to Your Varification  code is <b>$otp</b>";

				// Send the email
				if ($mail->send()) {
					$_SESSION['otp'] = $otp;
					$_SESSION['email'] = $email;
					$_SESSION['varify'] = "purpose of varification";
					header("location: ../otp.php");
				} else {
					echo 'Mailer Error: ' . $mail->ErrorInfo;
				}
			} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		}

		// Call the function to send OTP
		sendOtp($email, $otp);
	} else {
		header("location: ../forgetPassword.php?wrongEmailMsg=Your Email is Wrong!");
	}

	if (empty($email)) {
		header("location: ../forgetPassword.php?emptyEmail=Your Email is Empty!");
	}

} else if (isset($_POST['submit'])) {

	$inputOtp = $_POST['inputOtp'];
	$otp =  $_SESSION['otp'];

	if ($inputOtp == $otp) {
		$_SESSION['inputOtp'] = $inputOtp;
		header("location: ../newPassword.php");
	} else {
		header("location: ../otp.php?wrongOtp");
	}

} else if (isset($_POST['newPassword']) && isset($_POST['conformpassword'])) {

	$newpassword = $_POST['newPassword'];
	$conformpassword = $_POST['conformpassword'];
	$email = $_SESSION['email'];

	if (isset($_SESSION['inputOtp'])) {

		if (empty($newpassword) || empty($newpassword)) {
			header("location: ../newPassword.php?emptyError=Empty Email or Password");
		}
		else if($newpassword === $conformpassword) {

			$update = "UPDATE `login` SET password = '$newpassword' WHERE email = '$email'";

			$query = mysqli_query($conn, $update);

			if ($query === true) {
				unset($_SESSION['inputOtp']);
				unset($_SESSION['varify']);
				header("location: ../login.php?passwordChangeSuccess=Your password has been changed successfully!");
			} else {
				header("location: ../newPassword.php?updateError=Error updating password:");
			}
		} else {
			header("location: ../newPassword.php?passwordError=invelid Password");
		}
	}
	else {
		header("location: ../newPassword.php?redirectError=something went wrong");
	}

} else if (isset($_POST['reGenerateOtp'])) {

	$email = $_SESSION['email'];

	$otp = rand(100000, 999999);

	function sendOtp($email, $otp)
	{
		// Create an instance of PHPMailer
		$mail = new PHPMailer(true);

		try {
			// SMTP server configuration
			$mail->isSMTP();
			$mail->Host       = 'smtp.gmail.com';
			$mail->SMTPAuth   = true;
			$mail->Username   = 'bhavypatel2845@gmail.com';  // Updated email here
			$mail->Password   = 'ptzo nzve yylq tpju'; // App password, not regular password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$mail->Port       = 465;

			// Recipient details
			$mail->setFrom('bhavypatel2845@gmail.com', 'SmartTech Store');  // Updated email here
			$mail->addAddress($email);

			// Email content
			$mail->isHTML(true);
			$mail->Subject = 'SmartTech Store';
			$mail->Body    = "From SmartTech Store E-commerce Website Send to Your Varification  code is <b>$otp</b>";

			// Send the email
			if ($mail->send()) {
				$_SESSION['otp'] = $otp;
				header("location: ../otp.php");
			} else {
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			}
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}

	// Call the function to send OTP
	sendOtp($email, $otp);

}
?>