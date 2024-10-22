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
   Address Popup - start 
-----------------------*/

// all buttons
let buttonNextFirst = document.querySelector("#addressPopup #buttonNextFirst")
let buttonNextsecond = document.querySelector("#addressPopup #buttonNextsecond") 
let buttonPrevFirst = document.querySelector("#addressPopup #buttonPrevFirst") 
let buttonPrevSecond = document.querySelector("#addressPopup #buttonPrevSecond") 
let submitButton = document.querySelector("#addressPopup #submitButton") 
// all form box
let firstInfoBox = document.querySelector("#addressPopup #firstInfoBox")
let secondInfoBox = document.querySelector("#addressPopup #secondInfoBox")
let thirdInfoBox = document.querySelector("#addressPopup #thirdInfoBox")

buttonNextFirst.addEventListener("click", function(){
   firstInfoBox.style.left = "-500px"
   firstInfoBox.style.display = "none"

   secondInfoBox.style.left = "0px"
   secondInfoBox.style.display = "block"
})

buttonPrevFirst.addEventListener("click", function(){
   firstInfoBox.style.left = "0px"
   firstInfoBox.style.display = "block"

   secondInfoBox.style.left = "500px"
   secondInfoBox.style.display = "none"
})

buttonNextsecond.addEventListener("click", function(){
   secondInfoBox.style.left = "-500px"
   secondInfoBox.style.display = "none"

   thirdInfoBox.style.left = "0px"
   thirdInfoBox.style.display = "block"
})

buttonPrevSecond.addEventListener("click", function(){
   secondInfoBox.style.left = "0px"
   secondInfoBox.style.display = "block"

   thirdInfoBox.style.left = "500px"
   thirdInfoBox.style.display = "none"
})



// Cross Icon
let cross = document.querySelector("#addressPopup .container i")
// Address Button
let addressButton = document.querySelector("#addressButton button")
// Address Popup
let addressPopup = document.querySelector("#addressPopup")

// click Address Button and Address Popup is Show
addressButton.addEventListener("click", function(){
   addressPopup.classList.add("active")
})

// click cross Icon and Address Popup is Remove
cross.addEventListener("click", function(){
   addressPopup.classList.remove("active")
})
/*-----------------------
   Address Popup - End 
-----------------------*/