document.addEventListener("DOMContentLoaded", () => {

    new Swiper(".swiper-container", {
          spaceBetween: 30,
          slidesPerView: 1,
          centeredSlides: true,
          roundLengths: true,
          loop: true,
          autoplay:{
            display: 1,
            loopAdditionalSlides: 30,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
          },
  
        });
    });  