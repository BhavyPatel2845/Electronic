/*-------------------------
  Side  Navigation - Start 
--------------------------*/
var bars = document.querySelector("#dashboardHeader #bars");
var nav = document.querySelector("#dashboardContainer .leftSide");
var navLinks = document.querySelector("#dashboardContainer .leftSide ul");

bars.addEventListener("click", function () {
  nav.classList.toggle("active");
  navLinks.classList.toggle("visible");
});
/*-----------------------
   Side Navigation - End 
-----------------------*/



/*--------------------------
   userContact Email  - start
--------------------------*/

var email = document.querySelectorAll(".email")

var emailArray = Array.from(email);

emailArray.forEach((element,index) => {

    var fullEmail = element.textContent // Print the length of the first element's text content

    if (fullEmail.length > 20) {

      const truncatedEmail = fullEmail.substring(0, 20);
      element.textContent = truncatedEmail + '...';
    }

    
});

const emailBox = document.querySelectorAll('.userMessage .email')
const hoverEmails = document.querySelectorAll('.userMessage .hoverEmail')

emailBox.forEach((emailBox,index)=>{
  const hoverEmail = hoverEmails[index];

  emailBox.addEventListener("mouseenter", () => {
      emailBox.style.display = "none";
      hoverEmail.style.display = "block";
  });

  hoverEmail.addEventListener("mouseleave", () => {
      hoverEmail.style.display = "none";
      emailBox.style.display = "block";
  });

});

/*--------------------------
   userContact Email  - end
--------------------------*/
