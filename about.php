<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!------------
     Google Fonts
     ------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!-----------
     Custom CSS 
     ----------->
    <link rel="stylesheet" href="./CSS/about.css">

</head>

<body>

    <!----------------------------    HEADER     --------------------------------->
        
    <?php 
        include 'Header.php';
    ?>

    <!----------------
       About - start 
     ----------------->
      <div class="about" id="about">
        <!-- About Heading -->
        <div class="aboutHeading">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit
                . Fugit fugiat a dolorem ad. Reiciendis, nisi numquam! Facere
            </p>
        </div>

        <!-- About First Part -->
        <div class="aboutFirstPart">
            <div class="aboutImage">
                <div class="image">
                    <img src="./IMAGES/product1.png" alt="">
                </div>
                <div class="imageInfo">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Accusamus, quas vero ducimus provident dolores a necessitatibus
                        at inventore reprehenderit deserunt ut facilis sint? Perspiciatis
                        nesciunt natus error tenetur, rem veritatis.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Accusamus, quas vero ducimus provident dolores a necessitatibus
                        at inventore reprehenderit deserunt ut facilis sint? Perspiciatis
                        nesciunt natus error tenetur, rem veritatis.
                    </p>
                    <button type="button">Get in touch</button>
                </div>
            </div>
        </div>

        <!-- About Second Part -->
        <div class="aboutSecondPart">
            <div class="aboutSecondPartHeading">
                <h2>Why choose Us</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos cupiditate eveniet, inventore quaerat</p>
            </div>

            <div class="aboutSecondPartContainer">

                <div class="firstContainer">
                    <div id="firstInfo" class="infoContainer">
                        <div id="firstInfoIcon" class="infoIcon"><img src="./Assets/images/Expertise.png" alt=""></div>
                        <h3>Expertise</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div id="secondInfo" class="infoContainer">
                        <div id="secondInfoIcon" class="infoIcon"><img src="./Assets/images/communication.png" alt=""></div>
                        <h3>Communication</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div class="secondContainer">
                    <div id="thirdInfo" class="infoContainer">
                        <div id="thirdInfoIcon" class="infoIcon"><img src="./Assets/images/verify.png" alt=""></div>
                        <h3>Attention to Detail</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div id="forthInfo" class="infoContainer">
                        <div id="forthInfoIcon" class="infoIcon"><img src="./Assets/images/24-hours.png" alt=""></div>
                        <h3>Customer Service</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

            </div>

        </div>

        <!-- <div class="aboutThirdPart">
            <div class="left">
                <h2>Process</h2>
                <p>Lorem ipsum dolor si. Eos cupiditate eveniet, inventore quaerat Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos cupiditate eveniet, inventore quaerat Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos cupiditate eveniet, inventore quaerat Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos cupiditate eveniet, inventore quaerat</p>
                <button>Explore Services</button>
                <div class="image">
                    <img src="./Assets/images/productImages/categories1.jpg" alt="">
                </div>
            </div>
            <div class="right">

                <div class="innerProcessContainer">
                    <div class="image">
                        <img src="./Assets/images/discovery.png" alt="">
                    </div>
                    <div class="information">
                        <h3>Discovery</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Quos quo placeat animi dolorum iste iure ducimus quis 
                             cupiditate aut totam blanditiis debitis aspernatur, 
                             labore inventore, molestias, tempore a error! Dolorem!
                            </p>
                    </div>
                </div>
                              
                <div class="innerProcessContainer">
                    <div class="image">
                        <img src="./Assets/images/task.png" alt="">
                    </div>
                    <div class="information">
                        <h3>Planning</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Quos quo placeat animi dolorum iste iure ducimus quis 
                             cupiditate aut totam blanditiis debitis aspernatur, 
                             labore inventore, molestias, tempore a error! Dolorem!
                            </p>
                    </div>
                </div>

                <div class="innerProcessContainer">
                    <div class="image">
                        <img src="./Assets/images/vector.png" alt="">
                    </div>
                    <div class="information">
                        <h3>Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Quos quo placeat animi dolorum iste iure ducimus quis 
                             cupiditate aut totam blanditiis debitis aspernatur, 
                             labore inventore, molestias, tempore a error! Dolorem!
                            </p>
                    </div>
                </div>

                <div class="innerProcessContainer">
                    <div class="image">
                        <img src="./Assets/images/coding.png" alt="">
                    </div>
                    <div class="information">
                        <h3>Development</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Quos quo placeat animi dolorum iste iure ducimus quis 
                             cupiditate aut totam blanditiis debitis aspernatur, 
                             labore inventore, molestias, tempore a error! Dolorem!
                            </p>
                    </div>
                </div>

                <div class="innerProcessContainer">
                    <div class="image">
                        <img src="./Assets/images/testing.png" alt="">
                    </div>
                    <div class="information">
                        <h3>Testing</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Quos quo placeat animi dolorum iste iure ducimus quis 
                             cupiditate aut totam blanditiis debitis aspernatur, 
                             labore inventore, molestias, tempore a error! Dolorem!
                            </p>
                    </div>
                </div>

                <div class="innerProcessContainer">
                    <div class="image">
                        <img src="./Assets/images/startup.png" alt="">
                    </div>
                    <div class="information">
                        <h3>Launch</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Quos quo placeat animi dolorum iste iure ducimus quis 
                             cupiditate aut totam blanditiis debitis aspernatur, 
                             labore inventore, molestias, tempore a error! Dolorem!
                            </p>
                    </div>
                </div>

            </div>
        </div> -->

    </div>
    <!----------------
       About - End 
     ----------------->


    
        <!--------------------------------     FOOTER    ------------------------------>

        
        <?php 
                include 'Footer.php';
            ?>
    <!---------
     Custom Js  
    ----------->
    <script src="./JS/about.js"></script>
    
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


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>




</body>

</html>