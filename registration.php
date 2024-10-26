<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/registration.css">
</head>
<body>
    <?php 
       include 'header.php';
    ?>
    <div class="registration" id="registration">
        <div class="registrationCointainer">
            <div class="registrationTitle">
                <h2>Registration</h2>
            </div>
            <form action="./backend/registration.php" method="post">
                <input type="text" placeholder="User Name" name="userName">
                <input type="date" placeholder="Date Of Birth..." name="dob">
                <input type="text" placeholder="City..." name="city" required> 
                <input type="number" placeholder="Pincode..." name="pincode" required>
                <input type="number" placeholder="Phone Number..." name="phoneNumber" required> 
                <input type="email" placeholder="Email..." name="email" required>
                <input type="password" placeholder="password..." name="password"> 
                <div class="registrationButton">
                    <button type="submit" name="submit">Sign In</button>
                </div>
            </form>
        </div>
    </div>

    
    <?php 
       include 'footer.php';
    ?>
        <script src="script.js"></script>    
</body>
</html>