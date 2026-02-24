jQuery(document).ready(function () {
  var kids_toys_store_swiper_testimonials = new Swiper(".testimonial-swiper-slider.mySwiper", {
    slidesPerView: 3,
      spaceBetween: 50,
      speed: 1000,
      autoplay: {
        delay: 3000,
        disableOnPoppinsaction: false,
      },
      navigation: {
        nextEl: ".testimonial-swiper-button-next",
        prevEl: ".testimonial-swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView: 2,
        },
        1023: {
          slidesPerView: 3,
        }
      },
      loop: true,
      loopAddBlankSlides: true,
  });
 
});

jQuery(document).ready(function() {
  jQuery('.owl-carousel-static-product.owl-carousel').owlCarousel({
    loop: true,
    items: 5,
    margin: 10,
    nav: false, 
    dots: false,
    rtl: false,
    responsive: {
      0: { 
        items: 1 
      },
      600: { 
        items: 2 
      },
      992: { 
        items: 3 
      },
      1200: { 
        items: 5 
      }
    },
    autoplay: true
  });
});

jQuery(document).ready(function() {
  
  jQuery('.owl-main-slider.owl-carousel').owlCarousel({
    loop: true,
    items: 1,
    margin: 10,
    nav: false,
    dots: true,
    rtl: false,
    autoplay: true
  });
});


const pdfButtonElement = document.querySelector('.print-screen a');
if (pdfButtonElement) {
    pdfButtonElement.addEventListener('click', () => {
            window.print();

             window.onafterprint = function () {
                self.close;
            };
    });
}