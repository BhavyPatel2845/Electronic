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
