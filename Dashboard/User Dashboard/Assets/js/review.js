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


/*--------------------
  Rating Star - Start 
---------------------*/

const stars = document.querySelectorAll('.stars span');
let countStar = document.querySelector(".test")

stars.forEach((star,index1) => {
    star.addEventListener('click', () => {
      let count = 0;
        stars.forEach((star,index2) => {
            // console.log(index2);
            
            if (index1 >= index2) {
                star.classList.add("active")
                count++
            }
            else{
                star.classList.remove("active")
                
            }
          countStar.value = count
        });
        
      });
    });
    // console.log(count);


/*--------------------
  Rating Star - end 
---------------------*/
