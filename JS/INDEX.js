
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


// /********************  NAVIGATION  ******************/
// var hamburgerMenuIcon = document.querySelector(".hamburgerMenuIcon");
// var nav = document.querySelector("navigation");
// var navigationLinks = document.querySelector("#navigationLinks");

// hamburgerMenuIcon.addEventListener("click", function () {
//   hamburgerMenuIcon.classList.toggle("burger_cross");
//   navigationLinks.classList.add("navigationLinksOpen");
//   navigationLinks.classList.toggle("navigationLinksClose");
// });


// /*************************  Home-Slider  **********************************/




// const slides = document.querySelectorAll('.slide');
//       let currentSlide = 0;

//       function showSlide(n) {
//          slides[currentSlide].classList.remove('active');
//          currentSlide = (n + slides.length) % slides.length; // Wrap around
//          slides[currentSlide].classList.add('active');
//       }

//       function nextSlide() {
//          showSlide(currentSlide + 1);
//       }

//       function prevSlide() {
//          showSlide(currentSlide - 1);
//       }

//       setInterval(nextSlide, 5000);




// /*************************  Review-Slider  **********************************/


// const reviewSwiperContainer = document.querySelector("#customerReviewSlider .swiperContainer");
// const reviewSwiperWrapper = document.querySelector("#customerReviewSlider .swiperWrapper");
// const reviewSwiperSlide = document.querySelectorAll("#customerReviewSlider .reviewSwiperSlide");
// const reviewNextButton = document.querySelector("#customerReviewSlider .productSwiperButtonNext");
// const reviewPrevButton = document.querySelector("#customerReviewSlider .productSwiperButtonPrev");

// let Index = 0;
// window.addEventListener("resize", () => {
//   Index = 0;
//   reviewPrevButton.click();
// });

// function reviewUpdateSlidePosition() {
//   const slideWidth = reviewSwiperSlide[0].offsetWidth + 10;
//   const offset = -Index * slideWidth;
//   reviewSwiperWrapper.style.transform = `translateX(${offset}px)`;
// }

// reviewNextButton.addEventListener("click", function nextButton(){
//  if (window.innerWidth > 1000) {
//     if (Index < reviewSwiperSlide.length - 4) {
//       Index++;
//     }
//   }else if (window.innerWidth > 750 && window.innerWidth < 1000) {
//     if (Index < reviewSwiperSlide.length - 3) {
//       Index++;
//     }
//   }else if (window.innerWidth > 550 && window.innerWidth < 750) {
//     if (Index < reviewSwiperSlide.length - 2) {
//       Index++;
//     }
//   } else if (window.innerWidth > 200 && window.innerWidth < 550) {
//     if (Index < reviewSwiperSlide.length - 1) {
//       Index++;
//     }
//   }
  
//   reviewUpdateSlidePosition();

// })
// reviewPrevButton.addEventListener("click", function prevButton(){
//   if (Index > 0) {
//     Index--;
//   }

//   reviewUpdateSlidePosition();
// })


// /************************* MOBILE PRODUCT-SLIDER  **********************************/
        
//         const swiperContainer = document.querySelector(
//             "#productSlider .mobileProduct .swiperContainer"
//           );
//           const swiperWrapper = document.querySelector("#productSlider .mobileProduct .swiperWrapper");
//           const swiperSlides = document.querySelectorAll(
//             "#productSlider .mobileProduct .productSwiperSlide"
//           );
//           const nextButton = document.querySelector(
//             "#productSlider .mobileProduct .productSwiperButtonNext"
//           );
//           const prevButton = document.querySelector(
//             "#productSlider .mobileProduct .productSwiperButtonPrev"
//           );
          
//           let currentIndex = 0;
//           window.addEventListener("resize", () => {
//             currentIndex = 0;
//             prevButton.click();
//           });
          
//           function updateSlidePosition() {
//             const slideWidth = swiperSlides[0].offsetWidth + 10;
//             const offset = -currentIndex * slideWidth;
//             swiperWrapper.style.transform = `translateX(${offset}px)`;
//           }

          
//           var productSliderInterval
//           var isCalled = false;
          
          
//           function nextButtonClick(clickType) {
//             if (window.innerWidth > 1200) {
//               if (currentIndex < swiperSlides.length - 5) {
//                 currentIndex++;
//               }
//             } else if (window.innerWidth > 1000 && window.innerWidth < 1200) {
//               if (currentIndex < swiperSlides.length - 4) {
//                 currentIndex++;
//               }
//             } else if (window.innerWidth > 628 && window.innerWidth < 1000) {
//               if (currentIndex < swiperSlides.length - 3) {
//                 currentIndex++;
//               }
//             } else if (window.innerWidth > 496 && window.innerWidth < 628) {
//               if (currentIndex < swiperSlides.length - 2) {
//                 currentIndex++;
//               }
//             } else if (window.innerWidth > 200 && window.innerWidth < 496) {
//               if (currentIndex < swiperSlides.length - 1) {
//                 currentIndex++;
//               }
//             }
          
//             updateSlidePosition();
          
//             if (swiperSlides.length - 5 <= currentIndex) {
//               currentIndex = -1;
//             }
          
//           }
          
//           function previousButton(clickType) {
//             if (currentIndex > 0) {
//               currentIndex--;
//             }
          
//             updateSlidePosition();
          
//           }


// /************************* SMARTWATCH PRODUCT-SLIDER  **********************************/
    
// const smartWatchSwiperContainer = document.querySelector(
//   "#productSlider .smartWatchProduct .swiperContainer"
// );
// const smartWatchSwiperWrapper = document.querySelector("#productSlider .smartWatchProduct .swiperWrapper");
// const smartWatchSwiperSlides = document.querySelectorAll(
//   "#productSlider .smartWatchProduct .productSwiperSlide"
// );
// const smartWatchNextButton = document.querySelector(
//   "#productSlider .smartWatchProduct .productSwiperButtonNext"
// );
// const smartWatchPrevButton = document.querySelector(
//   "#productSlider .smartWatchProduct .productSwiperButtonPrev"
// );

// let smartWatchCurrentIndex = 0;
// let smartWatchProductSliderInterval;
// var smartWatchIsCalled = false;

// window.addEventListener("resize", () => {
//   smartWatchCurrentIndex = 0;
//   smartWatchUpdateSlidePosition();
// });

// // Initialize autoplay on page load

// function smartWatchUpdateSlidePosition() {
//   const smartWatchSlideWidth = smartWatchSwiperSlides[0].offsetWidth + 10; // Adjust for margin
//   const smartWatchOffset = -smartWatchCurrentIndex * smartWatchSlideWidth;
//   smartWatchSwiperWrapper.style.transform = `translateX(${smartWatchOffset}px)`;
// }


// function smartWatchNextButtonClick() {
//     if (window.innerWidth > 1200) {
//     if (smartWatchCurrentIndex < smartWatchSwiperSlides.length - 5) {
//       smartWatchCurrentIndex++;
//     }
//   } else if (window.innerWidth > 1000 && window.innerWidth < 1200) {
//     if (smartWatchCurrentIndex < smartWatchSwiperSlides.length - 4) {
//       smartWatchCurrentIndex++;
//     }
//   } else if (window.innerWidth > 628 && window.innerWidth < 1000) {
//     if (smartWatchCurrentIndex < smartWatchSwiperSlides.length - 3) {
//       smartWatchCurrentIndex++;
//     }
//   } else if (window.innerWidth > 496 && window.innerWidth < 628) {
//     if (smartWatchCurrentIndex < smartWatchSwiperSlides.length - 2) {
//       smartWatchCurrentIndex++;
//     }
//   } else if (window.innerWidth > 200 && window.innerWidth < 496) {
//     if (smartWatchCurrentIndex < smartWatchSwiperSlides.length - 1) {
//       smartWatchCurrentIndex++;
//     }
//   }
//   smartWatchUpdateSlidePosition();

// if (smartWatchSwiperSlides.length - 5 <= smartWatchCurrentIndex) {
//   smartWatchCurrentIndex = -1;
// }
// }

// function smartWatchPreviousButton(clickType) {
//   if (smartWatchCurrentIndex > 0) {
//     smartWatchCurrentIndex--;
//   }

//   smartWatchUpdateSlidePosition();

//   if (smartWatchSwiperSlides.length - 5 <= smartWatchCurrentIndex) {
//     smartWatchCurrentIndex = -1;
//   }
// }

// /************************* AIR BURDS PRODUCT-SLIDER  **********************************/
    
// const airburdSwiperContainer = document.querySelector(
//   "#productSlider .airBurdProduct .swiperContainer"
// );
// const airburdSwiperWrapper = document.querySelector("#productSlider .airBurdProduct .swiperWrapper");
// const airburdSwiperSlides = document.querySelectorAll(
//   "#productSlider .airBurdProduct .productSwiperSlide"
// );
// const airburdNextButton = document.querySelector(
//   "#productSlider .airBurdProduct .productSwiperButtonNext"
// );
// const airburdPrevButton = document.querySelector(
//   "#productSlider .airBurdProduct .productSwiperButtonPrev"
// );

// let airburdCurrentIndex = 0;
// let airburdProductSliderInterval;
// let airBurdIsCalled = false;


// window.addEventListener("resize", () => {
//   airburdUpdateSlidePosition();
// });

// function airburdUpdateSlidePosition() {
//   const airburdSlideWidth = airburdSwiperSlides[0].offsetWidth + 10; // Adjust for margin
//   const airburdOffset = -airburdCurrentIndex * airburdSlideWidth;
//   airburdSwiperWrapper.style.transform = `translateX(${airburdOffset}px)`;
// }

// function airburdNextButtonClick() {
//     if (window.innerWidth > 1200) {
//     if (airburdCurrentIndex < airburdSwiperSlides.length - 5) {
//       airburdCurrentIndex++;
//     }
//   } else if (window.innerWidth > 1000 && window.innerWidth < 1200) {
//     if (airburdCurrentIndex < airburdSwiperSlides.length - 4) {
//       airburdCurrentIndex++;
//     }
//   } else if (window.innerWidth > 628 && window.innerWidth < 1000) {
//     if (airburdCurrentIndex < airburdSwiperSlides.length - 3) {
//       airburdCurrentIndex++;
//     }
//   } else if (window.innerWidth > 496 && window.innerWidth < 628) {
//     if (airburdCurrentIndex < airburdSwiperSlides.length - 2) {
//       airburdCurrentIndex++;
//     }
//   } else if (window.innerWidth > 200 && window.innerWidth < 496) {
//     if (airburdCurrentIndex < airburdSwiperSlides.length - 1) {
//       airburdCurrentIndex++;
//     }
//   }
//   airburdUpdateSlidePosition();

// if (airburdSwiperSlides.length - 5 <= airburdCurrentIndex) {
//   airburdCurrentIndex = -1;
// }
// }


// function airburdPreviousButton(clickType) {
//   if (airburdCurrentIndex > 0) {
//     airburdCurrentIndex--;
//   }

//   airburdUpdateSlidePosition();

//   if (airburdSwiperSlides.length - 5 <= airburdCurrentIndex) {
//     airburdCurrentIndex = -1;
//   }
// }

// /************************* LAPTOP PRODUCT-SLIDER  **********************************/
    
// const laptopSwiperContainer = document.querySelector(
//   "#productSlider .laptopProduct .swiperContainer"
// );
// const laptopSwiperWrapper = document.querySelector("#productSlider .laptopProduct .swiperWrapper");
// const laptopSwiperSlides = document.querySelectorAll(
//   "#productSlider .laptopProduct .productSwiperSlide"
// );
// const laptopNextButton = document.querySelector(
//   "#productSlider .laptopProduct .productSwiperButtonNext"
// );
// const laptopPrevButton = document.querySelector(
//   "#productSlider .laptopProduct .productSwiperButtonPrev"
// );

// let laptopCurrentIndex = 0;
// let laptopProductSliderInterval;
// var laptopIsCalled = false;

// window.addEventListener("resize", () => {
//   laptopCurrentIndex = 0;
//   laptopUpdateSlidePosition();
// });

// // Initialize autoplay on page load

// function laptopUpdateSlidePosition() {
//   const laptopSlideWidth = laptopSwiperSlides[0].offsetWidth + 10; // Adjust for margin
//   const laptopOffset = -laptopCurrentIndex * laptopSlideWidth;
//   laptopSwiperWrapper.style.transform = `translateX(${laptopOffset}px)`;
// }


// function laptopNextButtonClick() {
//     if (window.innerWidth > 1200) {
//     if (laptopCurrentIndex < laptopSwiperSlides.length - 5) {
//       laptopCurrentIndex++;
//     }
//   } else if (window.innerWidth > 1000 && window.innerWidth < 1200) {
//     if (laptopCurrentIndex < laptopSwiperSlides.length - 4) {
//       laptopCurrentIndex++;
//     }
//   } else if (window.innerWidth > 628 && window.innerWidth < 1000) {
//     if (laptopCurrentIndex < laptopSwiperSlides.length - 3) {
//       laptopCurrentIndex++;
//     }
//   } else if (window.innerWidth > 496 && window.innerWidth < 628) {
//     if (laptopCurrentIndex < laptopSwiperSlides.length - 2) {
//       laptopCurrentIndex++;
//     }
//   } else if (window.innerWidth > 200 && window.innerWidth < 496) {
//     if (laptopCurrentIndex < laptopSwiperSlides.length - 1) {
//       laptopCurrentIndex++;
//     }
//   }
//   laptopUpdateSlidePosition();

// if (laptopSwiperSlides.length - 5 <= laptopCurrentIndex) {
//     laptopCurrentIndex = -1;
// }
// }

// function laptopPreviousButton(clickType) {
//   if (laptopCurrentIndex > 0) {
//     laptopCurrentIndex--;
//   }

//   laptopUpdateSlidePosition();

//   if (laptopSwiperSlides.length - 5 <= laptopCurrentIndex) {
//     laptopCurrentIndex = -1;
//   }
// }
