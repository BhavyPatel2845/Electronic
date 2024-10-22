/*-------------------------
  Side  Navigation - Start 
--------------------------*/
var bars = document.querySelector("#dashboardHeader #bars");
var nav = document.querySelector("#dashboardContainer .leftSide");
var navLinks = document.querySelector("#dashboardContainer .leftSide ul");

bars.addEventListener("click", function () {
nav.classList.toggle("active")
navLinks.classList.toggle("visible")
});
/*-----------------------
   Side Navigation - End 
-----------------------*/




/*-----------------------
   User Table - start 
-----------------------*/
let tr =  document.querySelectorAll(".usersTable table tr")

tr.forEach(function(val, index){
    if(index % 2 === 0) {
    val.style.backgroundColor = "#b9b4b4"
  }
  else{
    val.style.backgroundColor = "#ebe2e2"
  }
})

document.querySelectorAll('.deleteUserBtn').forEach(function(icon) {
    icon.addEventListener('click', function() {
        var confirmation = confirm("Are you sure you want to delete this user?");
        if (confirmation) {
            // Perform the deletion logic here
            alert("User deleted successfully.");
        } else {
            // User canceled the deletion
            alert("User deletion canceled.");
        }
    });
});

/*-----------------------
   User Table - End 
-----------------------*/

// All buttons
let buttonNextFirst = document.getElementById("buttonNextFirst");
let buttonNextSecond = document.getElementById("buttonNextSecond"); 
let buttonPrevFirst = document.getElementById("buttonPrevFirst"); 
let buttonPrevSecond = document.getElementById("buttonPrevSecond"); 
let submitButton = document.getElementById("submitButton");

// All form boxes
let firstInfoBox = document.getElementById("firstInfoBox");
let secondInfoBox = document.getElementById("secondInfoBox");
let thirdInfoBox = document.getElementById("thirdInfoBox");

// "Next" and "Previous" buttons navigation for the add user form
buttonNextFirst.addEventListener("click", function() {
    firstInfoBox.style.display = "none";
    secondInfoBox.style.display = "block";
});

buttonPrevFirst.addEventListener("click", function() {
    secondInfoBox.style.display = "none";
    firstInfoBox.style.display = "block";
});

buttonNextSecond.addEventListener("click", function() {
    secondInfoBox.style.display = "none";
    thirdInfoBox.style.display = "block";
});

buttonPrevSecond.addEventListener("click", function() {
    thirdInfoBox.style.display = "none";
    secondInfoBox.style.display = "block";
});

// Add/Edit User Sections
const addUser = document.querySelector('.addUser');
const editUser = document.querySelector('.editUser');
const addUserBtn = document.querySelector('.addUserbtn button');
const editUserBtn = document.querySelectorAll('.editUserBtn');
const closeAddUesr = document.querySelector('.closeAddUser')
const closeEditUesr = document.querySelector('.closeEditUser')

// Show the addUser container when the button is clicked
addUserBtn.addEventListener("click", function() {
    addUser.style.display = "block";
    editUser.style.display = "none"; 
    firstInfoBox.style.display = "block"; 
    secondInfoBox.style.display = "none"; 
    thirdInfoBox.style.display = "none"; 
});

editUserBtn.forEach((btns)=>{
    btns.addEventListener("click", function() {
        editUser.style.display = "block";
        addUser.style.display = "none"; 
        editFirstInfoBox.style.display = "block"; 
        editSecondInfoBox.style.display = "none"; 
        editThirdInfoBox.style.display = "none";
    });
})



closeAddUesr.addEventListener("click",()=>{
  addUser.style.display = "none";
})

closeEditUesr.addEventListener("click",()=>{
  editUser.style.display = "none";
})

// Handling Next/Prev buttons for the "editUser" section
let editButtonNextFirst = document.getElementById("editButtonNextFirst");
let editButtonPrevFirst = document.getElementById("editButtonPrevFirst");
let editButtonNextSecond = document.getElementById("editButtonNextSecond");
let editButtonPrevSecond = document.getElementById("editButtonPrevSecond");

// Form boxes for "edit user" section
let editFirstInfoBox = document.getElementById("editFirstInfoBox");
let editSecondInfoBox = document.getElementById("editSecondInfoBox");
let editThirdInfoBox = document.getElementById("editThirdInfoBox");

// "Next" and "Previous" buttons navigation for the "editUser" form
editButtonNextFirst.addEventListener("click", function() {
    editFirstInfoBox.style.display = "none";
    editSecondInfoBox.style.display = "block";
});

editButtonPrevFirst.addEventListener("click", function() {
    editSecondInfoBox.style.display = "none";
    editFirstInfoBox.style.display = "block";
});

editButtonNextSecond.addEventListener("click", function() {
    editSecondInfoBox.style.display = "none";
    editThirdInfoBox.style.display = "block";
});

editButtonPrevSecond.addEventListener("click", function() {
    editThirdInfoBox.style.display = "none";
    editSecondInfoBox.style.display = "block";
});
