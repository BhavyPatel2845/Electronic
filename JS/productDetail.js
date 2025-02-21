/*--------------------
   Navigation - Start 
--------------------*/
// var hamburgerMenuIcon = document.querySelector(".hamburgerMenuIcon");
// var nav = document.querySelector("nav");
// var navigationLinks = document.querySelector("#navigationLinks");

// hamburgerMenuIcon.addEventListener("click", function () {
//   hamburgerMenuIcon.classList.toggle("burger_cross");
//   navigationLinks.classList.add("navigationLinksOpen");
//   navigationLinks.classList.toggle("navigationLinksClose");
// });
/*--------------------
   Navigation - End 
--------------------*/



/*-------------------
   Product Slider - start 
--------------------*/
const swiperContainer = document.querySelector(
   "#productSlider .swiperContainer"
 );
 const swiperWrapper = document.querySelector("#productSlider .swiperWrapper");
 const swiperSlides = document.querySelectorAll(
   "#productSlider .productSwiperSlide"
 );
 const nextButton = document.querySelector(
   "#productSlider .productSwiperButtonNext"
 );
 const prevButton = document.querySelector(
   "#productSlider .productSwiperButtonPrev"
 );
 
 let currentIndex = 0;
 window.addEventListener("resize", () => {
   currentIndex = 0;
   prevButton.click();
 });
 
 function updateSlidePosition() {
   const slideWidth = swiperSlides[0].offsetWidth + 10;
   const offset = -currentIndex * slideWidth;
   swiperWrapper.style.transform = `translateX(${offset}px)`;
 }
 
 
 autoPlaySlider()
 
 var productSliderInterval
 var isCalled = false;
 
 // automatic move product slider after 3 second
 function autoPlaySlider() {
   productSliderInterval = setInterval(function () {
     nextButtonClick("Auto");
   }, 3000);
 }
 
 function nextButtonClick(clickType) {
   if (window.innerWidth > 1200) {
     if (currentIndex < swiperSlides.length - 5) {
       currentIndex++;
     }
   } else if (window.innerWidth > 1000 && window.innerWidth < 1200) {
     if (currentIndex < swiperSlides.length - 4) {
       currentIndex++;
     }
   } else if (window.innerWidth > 628 && window.innerWidth < 1000) {
     if (currentIndex < swiperSlides.length - 3) {
       currentIndex++;
     }
   } else if (window.innerWidth > 496 && window.innerWidth < 628) {
     if (currentIndex < swiperSlides.length - 2) {
       currentIndex++;
     }
   } else if (window.innerWidth > 200 && window.innerWidth < 496) {
     if (currentIndex < swiperSlides.length - 1) {
       currentIndex++;
     }
   }
 
   updateSlidePosition();
 
   if (swiperSlides.length - 5 <= currentIndex) {
     currentIndex = -1;
   }
 
   if (clickType == "manual" && !isCalled) {
     isCalled = true
     clearInterval(productSliderInterval)
     setTimeout(() => {
       autoPlaySlider()
       isCalled = false
     }, 10000);
   }
 }
 
 
 function previousButton(clickType) {
   if (currentIndex > 0) {
     currentIndex--;
   }
 
   updateSlidePosition();
 
   if (swiperSlides.length - 5 <= currentIndex) {
     currentIndex = -1;
   }
 
   if (clickType == "manual" && !isCalled) {
     isCalled = true
     clearInterval(productSliderInterval)
     setTimeout(() => {
       autoPlaySlider()
       isCalled = false
     }, 10000);
   }
 }
 
 /*-------------------
    Product Slider - End 
 --------------------*/
 

 
/*--------------------
   product star - start 
--------------------*/

let ratingStar = document.querySelector('.ratingStar');
let rating = Math.round(ratingStar.value);
let star = document.querySelectorAll('.rate')

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

