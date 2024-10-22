/*-------------------------
  Side  Navigation - Start 
--------------------------*/
var bars = document.querySelector(" #bars");
var nav = document.querySelector(" .leftSide");
var navLinks = document.querySelector(" .leftSide ul");

bars.addEventListener("click", function () {
nav.classList.toggle("active")
navLinks.classList.toggle("visible")
});
/*-----------------------
   Side Navigation - End 
-----------------------*/