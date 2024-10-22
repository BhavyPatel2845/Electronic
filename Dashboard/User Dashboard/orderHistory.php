<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!------------
     Google Fonts
     ------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!-----------
     Custom CSS 
     ----------->
    <link rel="stylesheet" href="./Assets/css/orderHistory.css">

</head>

<body>


    <!----------------------
     Dashboard Header - start 
    ------------------------>
    <div class="dashboardHeader" id="dashboardHeader">
        <div class="logoAndBars">
            <i id="bars" class="fa-solid fa-bars"></i>
            <img class="companyLogo" src="../Assets/images/logo.png" alt="">
        </div>
        <div class="profile">
            <img src="../../Assets/images/profile.jpg" alt="">
        </div>
    </div>
    <!---------------------
     Dashboard Header - End 
    ---------------------->



    <!------------------
     Dashboard  - start 
    ------------------->
    <div class="dashboardContainer" id="dashboardContainer">

        <!-------------------------- 
        dashboard left side - start
        --------------------------->
        <div class="leftSide">
         <ul>
                <li><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-user"></i><a href="editProfile.php">Edit Profile</a></li>
                <li><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-user"></i><a href="orderHistory.php">Order History</a></li>
                <li><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-user"></i><a href="ticketSupportForm.php">Support</a></li>
                <li><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-user"></i><a href="review.php">Review</a></li>
            </ul>
        </div>
        <!-------------------------- 
        dashboard left side - End
        --------------------------->

        <!-------------------------- 
        dashboard Right side - start
        --------------------------->
        <div class="rightSide">
            <div class="orderHistorySection">
                <div class="orderContainer">
                    <div class="orderTopDetails">
                        <div class="leftDetail">
                            <div>
                                <P>ORDER PLACED</P>
                                <h6>9 August 2024</h6>
                            </div>
                            <div>
                                <p>TOTAL</p>
                                <h6>$4545</h6>
                            </div>
                            <div>
                                <p>SHIP TO</p>
                                <H6>kaushik patel</H6>
                            </div>
                        </div>
                        <div class="rightDetail">
                            <div class="orderId">
                                <p>ORDER</p>
                                <p>3434-343434-3434</p>
                            </div>
                            <div class="viewOrderDetailsAndInvoice">
                                <div class="viewOrderDetails">
                                    <pre>View Order Details |</pre>
                                </div>
                                <div class="invoice">
                                    <pre>  Invoice <i class="fa-solid fa-angle-down"></i></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="orderBottomDetails">
                        <div class="orderLeftDetails">
                            <div class="leftHeading">
                                <h2>Delivered 15 August</h2>
                                <p>package was handed to resident</p>
                            </div>
                            <div class="product">
                                <div class="productImage">
                                    <img src="../../IMAGES/product1.png" alt="">
                                </div>
                                <div class="productName">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, aut!
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, aut!
                                    </p>
                                </div>
                            </div>
                            <div class="leftButtons">
                                <button type="button">Buy it again</button>
                                <button type="button">View your item</button>
                            </div>

                        </div>
                        <div class="orderRightDetails">
                            <div class="rightButtons">
                                <button type="button">Get Product Support</button>
                                <button type="button">Track Package</button>
                                <button type="button">Leave seller feedback</button>
                                <button type="button">Leave delivery feedback</button>
                                <button type="button">Write a Product review</button>
                            </div>
                            <div class="threeDot">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                    </div>
                    <p>Archive Order</p>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------- 
        dashboard Right side - End
        --------------------------->

    </div>
    <!------------------
     Dashboard  - End 
    ------------------->





    <!---------
     Custom Js  
    ----------->
    <script src="./Assets/js/orderHistory.js"></script>


    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>
</body>

</html>