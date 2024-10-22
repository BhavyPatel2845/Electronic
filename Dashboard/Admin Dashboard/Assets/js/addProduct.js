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
