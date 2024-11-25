// /*-------------------------
//   Side  Navigation - Start 
// --------------------------*/
// var bars = document.querySelector("#dashboardHeader #bars");
// var nav = document.querySelector("#dashboardContainer .leftSide");
// var navLinks = document.querySelector("#dashboardContainer .leftSide ul");

// bars.addEventListener("click", function () {
//   nav.classList.toggle("active");
//   navLinks.classList.toggle("visible");
// });
// /*-----------------------
//    Side Navigation - End 
// -----------------------*/

/*--------------------
   product star - start 
--------------------*/

let ratingStar = document.querySelector('.ratingStar');
let rating = Math.round(ratingStar.value);

let star = document.querySelectorAll('.rate')
console.log(star);

// 
star.forEach((str, index) => {
  if (index < rating) {
      str.classList.add("active"); 
  } else {
      str.classList.remove("active"); 
  }
});
/*--------------------
   product star - end 
--------------------*/
