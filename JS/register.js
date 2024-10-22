/*--------------------
   Navigation - Start 
--------------------*/
var hamburgerMenuIcon = document.querySelector(".hamburgerMenuIcon");
var nav = document.querySelector("nav");
var navigationLinks = document.querySelector("#navigationLinks");

hamburgerMenuIcon.addEventListener("click", function () {
  hamburgerMenuIcon.classList.toggle("burger_cross");
  navigationLinks.classList.add("navigationLinksOpen");
  navigationLinks.classList.toggle("navigationLinksClose");
});
/*--------------------
   Navigation - End 
--------------------*/



/*--------------------
   Register - start 
--------------------*/

// all buttons
let buttonNextFirst = document.getElementById("buttonNextFirst")
let buttonNextsecond = document.getElementById("buttonNextsecond") 
let buttonPrevFirst = document.getElementById("buttonPrevFirst") 
let buttonPrevSecond = document.getElementById("buttonPrevSecond") 
let submitButton = document.getElementById("submitButton") 

// all form box
let firstInfoBox = document.getElementById("firstInfoBox")
let secondInfoBox = document.getElementById("secondInfoBox")
let thirdInfoBox = document.getElementById("thirdInfoBox")


buttonNextFirst.addEventListener("click", function(){
   // firstInfoBox.style.left = "-500px"
   // firstInfoBox.style.opacity = "0"

   // secondInfoBox.style.left = "0px"
   // secondInfoBox.style.opacity = "1"
   firstInfoBox.style.zIndex = 1
   secondInfoBox.style.zIndex = 3
   thirdInfoBox.style.zIndex = 2
   
})


buttonPrevFirst.addEventListener("click", function(){
   // firstInfoBox.style.left = "0px"
   // firstInfoBox.style.opacity = "1"

   // secondInfoBox.style.left = "500px"
   // secondInfoBox.style.opacity = "0"
   firstInfoBox.style.zIndex = 3
   secondInfoBox.style.zIndex = 2
   thirdInfoBox.style.zIndex = 1

})


buttonNextsecond.addEventListener("click", function(){
   // secondInfoBox.style.left = "-500px"
   // secondInfoBox.style.opacity = "0"

   // thirdInfoBox.style.left = "0px"
   // thirdInfoBox.style.opacity = "1"
   secondInfoBox.style.zIndex = 1
   thirdInfoBox.style.zIndex = 3
   firstInfoBox.style.zIndex = 2
})


buttonPrevSecond.addEventListener("click", function(){
   // secondInfoBox.style.left = "0px"
   // secondInfoBox.style.opacity = "1"

   // thirdInfoBox.style.left = "500px"
   // thirdInfoBox.style.opacity = "0"
   secondInfoBox.style.zIndex = 3
   thirdInfoBox.style.zIndex = 1
   firstInfoBox.style.zIndex = 2
})

/*--------------------
   Register - End 
--------------------*/

