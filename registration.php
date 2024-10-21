<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/registration.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
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
            <form action="">
                <input type="email" placeholder="Email..." required>
                <input type="password" placeholder="password..." required> 
                <input type="email" placeholder="Email..." required>
                <input type="password" placeholder="password..." required> 
                <input type="email" placeholder="Email..." required>
                <input type="password" placeholder="password..." required> 
                <div class="registrationButton">
                    <button type="submit">Sign In</button>
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