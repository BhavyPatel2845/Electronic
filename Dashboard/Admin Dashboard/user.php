<?php
    // require "../../backend/adminSession.php";
?>
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
    
<?php
    require '../../backend/database_connection.php';
?>

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
            <form action="../../backend/registration.php" method="post">
                <div class="formBox" id="firstInfoBox">
                    <h3>Add User</h3>
                        <input type="text" placeholder="User Name" name="userName">
                        <input type="date" placeholder="Date Of Birth..." name="dob">
                        <input type="text" placeholder="City..." name="city" required> 
                        <input type="number" placeholder="Pincode..." name="pincode" required>
                        <input type="number" placeholder="Phone Number..." name="phoneNumber" required> 
                        <input type="email" placeholder="Email..." name="email" required>
                        <input type="password" placeholder="password..." name="password">
                    <div class="button">                    
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
            <form action="../../backend/editUser.php" method="post">
                <div class="formBox" id="editFirstInfoBox">
                    <h3>Edit User</h3>
                        <div>
                            <input type="text" placeholder="User Id" name="editUserId" id="editUserId">
                        </div>
                        <div>
                            <p>User Name</p>
                            <input type="text" placeholder="User Name" name="editUserName">
                        </div>
                        <div>
                            <p>Date Of Birth</p>
                            <input type="date" placeholder="Date Of Birth..." name="editDob">
                        </div>
                        <div>
                            <p>city</p>
                            <input type="text" placeholder="City..." name="editCity" required> 
                        </div>
                        <div>
                            <p>Pincode</p>
                            <input type="number" placeholder="Pincode..." name="editPincode" required>
                        </div>
                        <div>
                            <p>Phone Number</p>
                            <input type="number" placeholder="Phone Number..." name="editPhoneNumber" required> 
                        </div>
                        <div>
                            <p>Email</p>
                            <input type="email" placeholder="Email..." name="editEmail" required>
                        </div>
                        <!-- <input type="password" placeholder="password..." name="password"> -->
                    <div class="button">                    
                        <button type="submit" name="editSubmit" id="submitButton">Submit</button>
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
                <a href="addCategory.php"><li><img src="Assets/images/sidebarImg/addproducts.png" alt="">Add Category</li></a>
                <a href="category.php"><li><img src="Assets/images/sidebarImg/products.png" alt="">Category</li></a>
                <a href="addProduct.php"><li><img src="Assets/images/sidebarImg/addproducts.png" alt="">Add Products</li></a>
                <a href="products.php"><li><img src="Assets/images/sidebarImg/products.png" alt="">Products</li></a>
                <a href="user.php"><li><img src="Assets/images/sidebarImg/users.png" alt="">Users</li></a>
                <a href="userContact.php"><li><img src="Assets/images/sidebarImg/users.png" alt="">User Contact</li></a>
                <a href="orderHistory.php"><li><img src="Assets/images/sidebarImg/orderhistory.png" alt="">Order History</li></a>
                <a href="feedback.php"><li><img src="Assets/images/sidebarImg/orderhistory.png" alt="">Feedback</li></a>
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
                    <div class="addUserbtn">
                        <button> Add user </button>
                    </div>
                    
                </div>

                <div class='usersTable'>
                    <table id='table'>
                        <tr>
                            <th>Id</th>
                            <th>User Name</th>
                            <th>Date Of Birth</th>
                            <th>City</th>
                            <th>Pincode</th>
                            <th>Phone Number</th>
                            <th> Email </th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                                            
                        $selectQuery = "select * from users";
                        $result = $conn->query($selectQuery);
                        if (!empty($result)) {
                            while($row = $result->fetch_assoc()){
                        ?> 
                                        <tr>
                                            <td><?php echo $row['user_id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['dob']; ?></td>
                                            <td><?php echo $row['city']; ?></td>                 
                                            <td><?php echo $row['pincode']; ?></td>
                                            <td><?php echo $row['phoneNumber']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td ><i style='font-size:18px' class='fas editUserBtn' id="editUser"
                                            <?php 
                                                echo '
                                                data-userId="' . $row['user_id'] . '"
                                                data-userName="' . $row['name'] . '"
                                                data-dateOfBirth="' . $row['dob'] . '"
                                                data-city="' . $row['city'] . '" 
                                                data-pincode="' . $row['pincode'] . '" 
                                                data-phoneNumber="' . $row['phoneNumber'] . '" 
                                                data-email="' . $row['email'] . '"
                                            '?>
                                            >&#xf304;</i></td>
                                            <td><i style='font-size:18px' class='fas deleteUserBtn'>&#xf2ed;</i></td>
                                          </tr>";
                                <?php
                                    }
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