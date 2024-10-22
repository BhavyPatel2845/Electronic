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
   Product - start 
--------------------*/
function showHideFilters() {
   let leftFilterSection = document.getElementById("leftFilterSection")
   let productContainer = document.getElementById("productContainer")
   leftFilterSection.classList.toggle("showFilters")
   productContainer.classList.toggle("reduceWidth")
}
/*--------------------
   Product - End 
--------------------*/


/*------------------------------
   Dynamic Product Pages - start 
-------------------------------*/

var currentIndex = 0;
  const productContainer = document.querySelector(".productContainer");
  const totalSlides = document.querySelectorAll(".productSlider").length;
 
  const productSliderButton = document.querySelector(".productSliderButton");

  console.log(productContainer);
  console.log(totalSlides);
  console.log(productSliderButton);
  
  for (let i = 0; i < totalSlides; i++) {
   let number = document.createElement("span");
   number.classList.add("number");
   if (i === 0) number.classList.add("active"); 
   dotsContainer.appendChild(dot);
 }
 
 const dots = document.querySelectorAll(".number");

/*------------------------------
   Dynamic Product Pages - end 
-------------------------------*/

