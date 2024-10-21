/********************  NAVIGATION  ******************/
var hamburgerMenuIcon = document.querySelector(".hamburgerMenuIcon");
var nav = document.querySelector("navigation");
var navigationLinks = document.querySelector("#navigationLinks");

hamburgerMenuIcon.addEventListener("click", function () {
  hamburgerMenuIcon.classList.toggle("burger_cross");
  navigationLinks.classList.add("navigationLinksOpen");
  navigationLinks.classList.toggle("navigationLinksClose");
});


/*************************  Home-Slider  **********************************/




const slides = document.querySelectorAll('.slide');
      let currentSlide = 0;

      function showSlide(n) {
         slides[currentSlide].classList.remove('active');
         currentSlide = (n + slides.length) % slides.length; // Wrap around
         slides[currentSlide].classList.add('active');
      }

      function nextSlide() {
         showSlide(currentSlide + 1);
      }

      function prevSlide() {
         showSlide(currentSlide - 1);
      }

      setInterval(nextSlide, 5000);




/*************************  Review-Slider  **********************************/


// let currentIndex = 0;
//         const reviews = document.querySelectorAll('.reviewDetail');
//         const reviewsPerSlide = 4;

//         function showReviews() {
//             const offset = currentIndex * (250 + 20); // Width of each review + margin
//             document.getElementById('reviewsList').style.transform = `translateX(-${offset}px)`;
//         }

//         function nextReview() {
//             if (currentIndex < Math.ceil(reviews.length / reviewsPerSlide) - 1) {
//                 currentIndex++;
//             } else {
//                 currentIndex = 0; // Loop back to the start
//             }
//             showReviews();
//         }

//         function prevReview() {
//             if (currentIndex > 0) {
//                 currentIndex--;
//             } else {
//                 currentIndex = Math.ceil(reviews.length / reviewsPerSlide) - 1; // Loop to the end
//             }
//             showReviews();
//         }

//         showReviews(); 


/*************************  PRODUCT-SLIDER  **********************************/
        
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