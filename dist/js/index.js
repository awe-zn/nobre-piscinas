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

//FORMULÁRIO DE GARANTIA

//mascara de cpf
function cpfMask(i){
   
  var v = i.value;
  
  if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
     i.value = v.substring(0, v.length-1);
     return;
  }
  
  i.setAttribute("maxlength", "14");
  if (v.length == 3 || v.length == 7) i.value += ".";
  if (v.length == 11) i.value += "-";

}

function cepMask(i){
   
  var v = i.value;
  
  if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
     i.value = v.substring(0, v.length-1);
     return;
  }
  
  i.setAttribute("maxlength", "9");
  if (v.length == 5) i.value += "-";

}

//manipulação das etapas do form

function nextStep(validacao) {
  const steps = document.querySelectorAll(".step");
  const contentStep1 = document.querySelector("#content-step-1");
  const contentStep2 = document.querySelector("#content-step-2");
  if(validacao) {
    contentStep1.classList.add('d-none');
    contentStep2.classList.remove('d-none');
    steps[0].classList.add('step-finish');
    steps[0].classList.remove('active')
    steps[1].classList.add('active')
  }
}

function prevStep() {
  const steps = document.querySelectorAll(".step");
  const contentStep1 = document.querySelector("#content-step-1");
  const contentStep2 = document.querySelector("#content-step-2");
  contentStep1.classList.remove('d-none');
  contentStep2.classList.add('d-none');
  steps[0].classList.remove('step-finish');
  steps[0].classList.add('active')
  steps[1].classList.remove('active')
}