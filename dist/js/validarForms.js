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

//mascara de cep
function cepMask(i){
   
  var v = i.value;
  
  if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
     i.value = v.substring(0, v.length-1);
     return;
  }
  
  i.setAttribute("maxlength", "9");
  if (v.length == 5) i.value += "-";

}

// FORMULÁRIO DE GARANTIA

//manipulação das etapas do form

const steps = document.querySelectorAll(".step");
//etapa 1
const contentStep1 = document.querySelector("#content-step-1");
const nomeInput = document.querySelector('#nome-garantia');
const cpfInput = document.querySelector('#cpf-garantia');
const cepInput = document.querySelector('#cep-garantia');
const cidadeInput = document.querySelector('#cidade-garantia');
const estadoInput = document.querySelector('#estado-garantia');
const emailInput = document.querySelector('#email-garantia');

const proximaEtapa = document.querySelector('#proxima-etapa-garantia');
proximaEtapa.setAttribute('disabled', 'disabled');

//etapa 2
const contentStep2 = document.querySelector("#content-step-2");
const dataCompraInput = document.querySelector('#data-compra-garantia')
const dataInstalacaoInput = document.querySelector('#data-instalacao-garantia')
const numeroSerieInput = document.querySelector('#numero-serie-garantia')

const enviarGarantia = document.querySelector('#enviar-garantia');
enviarGarantia.setAttribute('disabled', 'disabled');

function validacao1() {
  if(nomeInput.value != '' & cpfInput.value != '' && cidadeInput.value != '' && estadoInput.value != '' && emailInput.value != '') {
    proximaEtapa.removeAttribute('disabled');
    return true;
  } else {
    proximaEtapa.setAttribute('disabled', 'disabled');
    return false;
  } 
}

function validacao2() {
  if(dataCompraInput.value != '' && dataInstalacaoInput.value != '' && numeroSerieInput.value != '') {
    enviarGarantia.removeAttribute('disabled');
    return true;
  } else {
    enviarGarantia.setAttribute('disabled', 'disabled');
    return false;
  }
}

document.addEventListener('keyup', () => {
  validacao1();
  validacao2();
});

function nextStep() {
  contentStep1.classList.add('d-none');
  contentStep2.classList.remove('d-none');
  steps[0].classList.add('step-finish');
  steps[0].classList.remove('active');
  steps[1].classList.add('active');
}

function prevStep() {
  contentStep1.classList.remove('d-none');
  contentStep2.classList.add('d-none');
  steps[0].classList.remove('step-finish');
  steps[0].classList.add('active');
  steps[1].classList.remove('active');
}

