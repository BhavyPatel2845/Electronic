<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="CSS/contact.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="cointainer" id="cointainer">

    <!--------------------------------    HEADER    ------------------------------>

        <?php 
            include 'header.php';
        ?>


        <div class="contactUs">
            <div class="contactCointainer">
                <div class="contactTitle">
                    <h2>Contact Us</h2>
                </div>
                <form action="./backend/contact.php" method="post">
                    <input type="text" placeholder="Your Name" name="userName">
                    <input type="number" placeholder="Phone Number" name="phoneNumber">
                    <input type="email" placeholder="Email" name="email">
                    <textarea rows="4" cols="30" placeholder="Message" name="message"></textarea>
                    <button type="submit" name="submit">submit</button>
                </form>
            </div>
        </div>


        
    <!--------------------------------    FOOTER    ------------------------------>

    <?php 
        include 'footer.php'
    ?>

    </div>
</body>
</html>