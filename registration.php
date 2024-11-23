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
        <!-- =============j-script=================== -->

    <script>
        const togglebtn = document.querySelector('.toggle_btn')
        const togglebtnicn = document.querySelector('.toggle_btn i')
        const dropdown = document.querySelector('#sidebar')

        togglebtn.onclick = function () {
            dropdown.classList.toggle('open')
            const isopen = dropdown.classList.contains('open')

            togglebtnicn.classList = isopen
                 ?'fa-solid fa-xmark'
                 :'fa-solid fa-bars' 
                
        }

        let searchbtn= document.querySelector('.searchbtn');
        let closebtn= document.querySelector('.closebtn');
        let searchbox= document.querySelector('.search_box');

        searchbtn.onclick=function(){
            searchbox.classList.add('active');
            closebtn.classList.add('active');
            searchbtn.classList.add('active');
        }
        closebtn.onclick=function(){
            searchbox.classList.remove('active');
            closebtn.classList.remove('active');
            searchbtn.classList.remove('active');
        }

        let sidesearchbtn=document.querySelector('.sidesearchbtn');
        let sideclosebtn=document.querySelector('.sideclosebtn');

        sidesearchbtn.onclick=function(){
            searchbox.classList.add('active');
            sideclosebtn.classList.add('active');
            sidesearchbtn.classList.add('active');
        }
        sideclosebtn.onclick=function(){
            searchbox.classList.remove('active');
            sideclosebtn.classList.remove('active');
            sidesearchbtn.classList.remove('active');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>

    
</body>
</html>