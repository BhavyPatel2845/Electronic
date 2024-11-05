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
    val.style.backgroundColor = "#cadcfc"
  }
  else{
    val.style.backgroundColor = "#81a5e3"
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



//  Edit User  

/*-----------------
    Edit form - start
-------------------*/
   
const edtBtn = document.querySelectorAll('#editUser'); 
const editForm = document.querySelector('#editUserContainer');
const closeForm = document.querySelector('.close');

// Form fields
const userNameInput = document.querySelector('#editUserContainer input[name="editUserName"]');
const userDateOfBirthInput = document.querySelector('#editUserContainer input[name="editDob"]');
const userCityInput = document.querySelector('#editUserContainer input[name="editCity"]');
const userPincodeInput = document.querySelector('#editUserContainer input[name="editPincode"]');
const userPhoneNumberInput = document.querySelector('#editUserContainer input[name="editPhoneNumber"]');
const userEmailInput = document.querySelector('#editUserContainer input[name="editEmail"]');
const userIDInput = document.getElementById('editUserId');

// Event listener for each edit button
edtBtn.forEach(elems => {
    elems.addEventListener("click", (btn) => {
        
        const userName = elems.getAttribute('data-userName');
        const userDob = elems.getAttribute('data-dateOfBirth');
        const userCity = elems.getAttribute('data-city');
        const userPincode = elems.getAttribute('data-pincode');
        const userPhoneNumber = elems.getAttribute('data-phoneNumber');
        const userEmail = elems.getAttribute('data-email');
        const userId = elems.getAttribute('data-userId');
        
        userNameInput.value = userName;
        userDateOfBirthInput.value = userDob;
        userCityInput.value = userCity;
        userPincodeInput.value = userPincode;
        userPhoneNumberInput.value = userPhoneNumber;
        userEmailInput.value = userEmail;
        userIDInput.value = userId;
        
        editForm.style.display = 'block';
    });
});

//close form
closeForm.addEventListener("click", (eve) => {
    editForm.style.display = 'none';
});

// Close the form when clicking outside form
window.addEventListener("click", (eve) => {
    if (eve.target === editForm) {
        editForm.style.display = 'none';
    }
});


/*-----------------
    Edit form - End
-------------------*/


/*--------------------
    delete Product - Start
---------------------*/

// deleteProductBtn = document.querySelectorAll('.productDelete');
// const productID = document.getElementById('productId');

// deleteProductBtn.forEach(element => {
//     element.addEventListener('click', function(){
//         alert('delete button clicked');
        
//         const productid = elems.getAttribute('data-productId');
//         productID.value = productid;
//     })
// });

/*--------------------
    delete Product - End
---------------------*/



