

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
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">


    <!-----------
     Custom CSS 
     ----------->
    <link rel="stylesheet" href="./Assets/css/user.css">

</head>

<body>

    <!----------------------
     Dashboard Header - start 
    ------------------------>
    
    <div class="dashboardHeader" id="dashboardHeader">
        <div class="logoAndBars">
            <i id="bars" class="fa-solid fa-bars"></i>
            <img class="companyLogo" src="../../IMAGES/logo.png" alt="">
        </div>
        <div class="profile">
            <i class="fa-solid fa-user"></i>
        </div>
    </div>
    <!---------------------
     Dashboard Header - End 
    ---------------------->

    <!--------------------
        addUser form - start 
    ----------------------->
 <!--------------------
    addUser form - start 
----------------------->
<div class="addUser">
    <div class="registerSection" id="registerSectionAdd">
        <div class="container" id="addUserContainer">
            <div class="closeAddUser">&#9986;</div>
            <form action="./backend/register.php" method="post">
                <div class="formBox" id="firstInfoBox">
                    <h3>Add User</h3>
                    <input type="text" name="firstName" placeholder="First Name.." required>
                    <input type="text" name="middleName" placeholder="Mid Name..">
                    <input type="text" name="lastName" placeholder="Last Name.." required>
                    <input type="text" name="gender" placeholder="Gender.." required>
                    <div class="button">
                        <button type="button" id="buttonNextFirst">Next</button>
                    </div>
                </div>
                <div class="formBox" id="secondInfoBox" style="display: none;">
                    <h3>Contact Information</h3>
                    <input type="email" name="email" placeholder="Email.." required>
                    <input type="text" name="password" placeholder="Password.." required>
                    <input type="text" name="phone" placeholder="Phone.." required>
                    <input type="text" name="addressLine1" placeholder="Address Line 1.." required>
                    <input type="text" name="addressLine2" placeholder="Address Line 2..">
                    <div class="button">
                        <button type="button" id="buttonPrevFirst">Prev</button>
                        <button type="button" id="buttonNextSecond">Next</button>
                    </div>
                </div>
                <div class="formBox" id="thirdInfoBox" style="display: none;">
                    <h3>Additional Information</h3>
                    <input type="number" name="pincode" placeholder="Pincode.." required>
                    <input type="date" name="dob" placeholder="Date of Birth.." required>
                    <input type="text" name="city" placeholder="City.." required>
                    <input type="text" name="state" placeholder="State.." required>
                    <input type="text" name="country" placeholder="Country.." required>
                    <div class="button">
                        <button type="button" id="buttonPrevSecond">Prev</button>
                        <button type="submit" name="submit" id="submitButton">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--------------------
    addUser form - end 
----------------------->

<!--------------------
    editUser form - start 
----------------------->
<div class="editUser" style="display: none;">
    <div class="registerSection" id="registerSectionEdit">
        <div class="container" id="editUserContainer">
        <div class="closeEditUser">&#9986;</div>
            <form action="./backend/register.php" method="post">
                <div class="formBox" id="editFirstInfoBox">
                    <h3>Edit User</h3>
                    <input type="text" name="firstName" placeholder="First Name.." required>
                    <input type="text" name="middleName" placeholder="Mid Name..">
                    <input type="text" name="lastName" placeholder="Last Name.." required>
                    <input type="text" name="gender" placeholder="Gender.." required>
                    <div class="button">
                        <button type="button" id="editButtonNextFirst">Next</button>
                    </div>
                </div>
                <div class="formBox" id="editSecondInfoBox" style="display: none;">
                    <h3>Contact Information</h3>
                    <input type="email" name="email" placeholder="Email.." required>
                    <input type="text" name="password" placeholder="Password.." required>
                    <input type="text" name="phone" placeholder="Phone.." required>
                    <input type="text" name="addressLine1" placeholder="Address Line 1.." required>
                    <input type="text" name="addressLine2" placeholder="Address Line 2..">
                    <div class="button">
                        <button type="button" id="editButtonPrevFirst">Prev</button>
                        <button type="button" id="editButtonNextSecond">Next</button>
                    </div>
                </div>
                <div class="formBox" id="editThirdInfoBox" style="display: none;">
                    <h3>Additional Information</h3>
                    <input type="number" name="pincode" placeholder="Pincode.." required>
                    <input type="date" name="dob" placeholder="Date of Birth.." required>
                    <input type="text" name="city" placeholder="City.." required>
                    <input type="text" name="state" placeholder="State.." required>
                    <input type="text" name="country" placeholder="Country.." required>
                    <div class="button">
                        <button type="button" id="editButtonPrevSecond">Prev</button>
                        <button type="submit" name="submit" id="submitButton">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--------------------
    editUser form - end 
----------------------->

    <!--------------------
        addUser form - end 
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
                <a href="dashboard.php"><li><img src="Assets/images/sidebarImg/dashboard.png" alt="">Dashboard</li></a>
                <a href="products.php"><li><img src="Assets/images/sidebarImg/products.png" alt="">Products</li></a>
                <a href="addCategory.php"><li><img src="Assets/images/sidebarImg/addproducts.png" alt="">Add Category</li></a>
                <a href="addProduct.php"><li><img src="Assets/images/sidebarImg/addproducts.png" alt="">Add Products</li></a>
                <a href="user.php"><li><img src="Assets/images/sidebarImg/users.png" alt="">Users</li></a>
                <a href="orderHistory.php"><li><img src="Assets/images/sidebarImg/orderhistory.png" alt="">Order History</li></a>
            </ul>
        </div>
        <!-------------------------- 
        dashboard left side - End
        --------------------------->

        <!-------------------------- 
        dashboard Right side - start
        --------------------------->
        <div class="rightSide">
            <div class="userDeleteContainer"></div>
            <div class="userEditContainer"></div>
            <div class="userContainer">

                <div class="title">
                    <h4>Users</h4>
                    <!-- <select>
                        <option value="">select</option>
                        <option value="">select</option>
                        <option value="">select</option>
                        <option value="">select</option>
                    </select> -->
                    <div class="addUserbtn">
                        <button> Add user </button>
                    </div>
                    
                </div>

                <div class='usersTable'>
                    <table id='table'>
                        <tr style='background-color: yellow;'>
                            <th>Id</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Birth</th>
                            <th>Country</th>
                            <th>Active</th>
                            <th>Pincode</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                        <?php
                        for ($i=0; $i < 10; $i++) { 
                        ?>
                                        <tr>
                                            <td>1001</td>
                                            <td>Bhavy</td>
                                            <td>hello@gmail.com</td>
                                            <td>Unjha</td>
                                            
                                            <td>1/1/2000</td>
                                            <td>India</td>
                                            <td>yes</td>
                                            <td>384170</td>
                                            <td ><i style='font-size:18px' class='fas editUserBtn'>&#xf304;</i></td>
                                            <td><i style='font-size:18px' class='fas deleteUserBtn'>&#xf2ed;</i></td>
                                          </tr>";
                                <?php
                                    }
                                ?>

                    </table>
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
    <script src="./Assets/js/user.js"></script>

    <!---------------
     Fontawesome Kit 
    ---------------->
    <script src="https://kit.fontawesome.com/a669b51611.js" crossorigin="anonymous"></script>
</body>

</html>