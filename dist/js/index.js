//carrossel main
const swiperMain = new Swiper('.swiper-main', {
  slidesPerView: 1,
  simulateTouch: false,
  allowTouchMove: false,
  spaceBetween: 0,
  autoplay: {
    delay: 5000,
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-main-next',
    prevEl: '.swiper-main-prev',
  },
});

//carrossel piscinas
const swiper = new Swiper('.swiper', {
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.button-next',
    prevEl: '.button-prev',
  },
  scrollbar: {
    el: '.swiper-scrollbar',
  },
  slidesPerView: 1.25,
  spaceBetween: 30,
  breakpoints: {
    768: {
      slidesPerView: 3
    },
    992: {
      slidesPerView: 4
    }
  }
});

