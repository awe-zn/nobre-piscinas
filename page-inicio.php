<?php
// Template Name: inicio
?>
<?php get_header()?>
<style>
  .swiper-main-next,
  .swiper-main-prev {
    display: block;
    cursor: pointer;
    width: 64px;
    height: 64px;
    background: #ffffff80;
    border-radius: 50%;
    background-image: url('<?php echo get_template_directory_uri(); ?>/dist/img/svg/next-prev-arrow.svg');
    background-position: center;
    background-repeat: no-repeat;
  }
  .swiper-main-next.swiper-button-disabled,
  .swiper-main-prev.swiper-button-disabled {
    filter: grayscale(0.8);
  }

  .swiper-main-prev {
    transform: rotate(180deg);
    right: 70px;
  }
</style>

  <main id="main-home" class="">
    <div class="swiper-main p-0 position-relative overflow-hidden">
      <div class="swiper-wrapper">
      <?php $slides = get_field('slides_main'); 
        if(isset($slides)){ foreach ($slides as $slide) { ?>

        <div class="swiper-slide" style="background: url(<?php echo $slide['imagem-background']; ?>) no-repeat; background-size: cover;">
          <div style="background: linear-gradient(270deg, rgba(33, 143, 217, 0.1) 0%, #09629D 100%); padding: 180px 0 150px 0;">
            <div class="container">
              <div class="row justify-content-center justify-content-lg-start">
                <div class="col-12 col-lg-8 col-xl-7 pb-awe-40">
                  <h1 class="fz-48 text-white fw-bold">
                    <span class="fw-black text-secondary-light"><?php echo $slide['titulo-slide-destaque']; ?></span> <?php echo $slide['titulo-slide']; ?>
                  </h1>
                </div>
                <div class="col-12 col-lg-8">
                  <p class="fz-20 text-white fw-regular">
                    <?php echo $slide['descricao-slide']; ?>
                  </p>
                </div>
                <div class="col-12 col-sm-10 col-6 d-flex justify-content-center justify-content-lg-start gap-4 pt-awe-56 pt-lg-awe-64 flex-wrap">
                  <a href="#sobre"
                    class="btn btn-secondary-dark text-uppercase text-white ff-catamaran">
                    <span class="me-2">
                      <img src="/dist/img/svg/btn-arrows.svg" alt="">
                    </span>
                    Conheça nossa história
                  </a>
                  <a href="#piscinas" class="btn btn-outline-white text-uppercase ff-catamaran">
                    Ver piscinas
                  </a>
                </div>
                <div class="col-12 d-flex gap-3 justify-content-end pt-awe-32 pt-md-0">
                  <div class="swiper-main-prev"></div>
                  <div class="swiper-main-next"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }}?>
      </div>
    </div>
  </main>

  <section id="piscinas" class="py-awe-108 pt-lg-awe-148 pb-lg-awe-64">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-uppercase text-primary-light-1 fz-20 ff-catamaran">
            Nossos modelos de piscinas
          </h2>
        </div>
        <div class="col-12 col-md-6 col-lg-5 pb-awe-25 pb-lg-0">
          <h3 class="text-dark fz-38 fw-bold ff-catamaran">
            Escolha o melhor formato
            para o seu espaço
          </h3>
        </div>
        <div class="col-12 col-md-6 col-lg-5 offset-lg-2">
          <p class="text-light-gray fz-18 ff-catamaran">
            São diversos modelos que estão disponíveis para sua necessidade. Consulte a lista de modelos de piscinas
            abaixo e descubra qual se encaixa melhor no seu espaço.
          </p>
        </div>
        <div class="col-12 d-flex justify-content-end gap-2 pb-2 pt-awe-32">
          <button class="button-prev btn d-flex justify-content-center align-items-center p-0">
            <img src="<?php echo get_template_directory_uri();?>/dist/img/svg/arrow-left.svg" alt="">
          </button>
          <button class="button-next btn d-flex justify-content-center align-items-center p-0">
            <img src="<?php echo get_template_directory_uri();?>/dist/img/svg/arrow-right.svg" alt="">
          </button>
        </div>
      </div>
    </div>

    <div class="pt-awe-18 pb-awe-32">
      <!-- Slider main container -->
      <div class="swiper container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper ">
          <!-- Slides -->
          <?php $equipe = get_field('Piscinas');
            if(isset($equipe)){ foreach ($equipe as $membro) { ?>
          <div class="swiper-slide">
            <img class="img-fluid w-100" src="<?php echo $membro['imagem'] ?>" alt="">
            <div class="pt-3">
              <h4 class="fz-20 fw-bold ff-catamaran text-primary">
              <?php echo $membro['nome'] ?>
              </h4>
              <p class="fz-16 ff-catamaran text-dark">
              <?php echo $membro['descricao'] ?>
              </p>
            </div>
          </div>

          <?php }}?>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="d-flex justify-content-center justify-content-lg-start w-100 px-2">
        <a href="<?php echo get_field('catalogo_pdf');?>" target="blank_" class="btn border-primary text-primary text-uppercase fz-14 fw-bold ff-catamaran">
          <img src="<?php echo get_template_directory_uri();?>/dist/img/svg/pdf-icon.svg" class="me-2" alt="">
          Baixe nosso catálogo
        </a>
      </div>
    </div>
  </section>

  <section id="duvidas">
    <div class="container py-awe-108 py-lg-awe-56">
      <div class="row justify-content-center justify-content-lg-start">
        <div class="col-12 col-lg-1 d-flex justify-content-center align-items-start">
          <img width="60" src="<?php echo get_template_directory_uri();?>/dist/img/svg/whatsapp.svg" alt="">
        </div>
        <div class="col-12 col-md-10 col-lg-6 row justify-content-center justify-content-lg-start pb-5 pb-lg-0">
          <div class="col-lg-10 py-5 py-lg-0">
            <h5 class="fz-28 text-white ff-catamaran text-center text-lg-start">
              Ficou com dúvida ou podemos te ajudar de outra forma?
            </h5>
          </div>
          <p class="fz-18 ff-catamaran text-primary-extra-light">
            Temos consultores preparados para te ajudar no que você precisar. Entre em contato e descubra como podemos
            te surpreender.
          </p>
        </div>
        <div class="col-12 col-lg-5 d-flex justify-content-center justify-content-lg-end align-items-center">
          <a href="<?php echo get_field('whatsapp');?>" class="btn btn-secondary-dark text-white text-uppercase fz-14 fw-bold ff-catamaran">
            fale com nosso atendimento
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="sobre" class="container pt-awe-64 pb-awe-108 py-lg-awe-148">
    <div class="row">
      <div class="col-12">
        <h2 class="text-uppercase text-primary-light-1 fz-20 ff-catamaran">
          Sobre nós
        </h2>
      </div>
      <div class="col-12 col-md-8 col-lg-6">
        <h3 class="text-dark fz-38 fw-bold ff-catamaran">
          São mais de 25 anos de história produzindo piscinas
        </h3>

        <div class="fz-18 ff-catamaran text-dark pt-awe-56 ps-lg-awe-40">
          <p>
            A Nobre Piscinas possui em seu DNA a experiência de mais de 25 anos no mercado de piscinas de fibra de vidro.
          </p>
          <p>
            As nossas piscinas são fabricadas com matéria-prima de qualidade
            superior, equipamentos de última geração e seguem um rigoroso
            controle de qualidade no processo produtivo, o que garante ao
            consumidor a compra de um produto com excelente qualidade e custobenefício.
          </p>
          <div class="pt-awe-56 d-none">
            <a href="" class="btn btn-outline-primary-light-1 text-uppercase fz-14 ff-catamaran fw-bold">
              leia mais sobre nossa história
            </a>
          </div>
        </div>
        
      </div>
      <div class="col-12 col-lg-6 pt-awe-80 d-none d-lg-flex justify-content-end">
        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/dist/img/sobre_nos.png" alt="">
      </div>
    </div>
  </section>

  <section id="orcamento" class="pt-md-awe-56 pb-md-awe-108">
    <div class="container-lg">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-6">
          <div class="rounded form-inicio bg-primary-dark-1 py-awe-64 px-awe-32 p-lg-awe-64 ff-catamaran mb-awe-25 mb-lg-0">
            <h3 class="text-center fz-32 ff-catamaran fw-bold text-white">
              Solicitar orçamento
            </h3>
            <p class="text-center fz-16 ff-catamaran text-white m-0">
              Preencha os campos abaixo para continuarmos avançando com no seu orçamento.
            </p>
            <?php echo get_field('form')?>
            <!-- <form action="" class="">
            
            <div class="mb-awe-25 mt-awe-64">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
            </div>
            <div class="mb-awe-25">
              <label for="telefone" class="form-label">Telefone</label>
              <input type="text" class="form-control" id="telefone" pattern="\d*" placeholder="Digite um número de telefone">
            </div>
            <div class="mb-awe-25">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email" placeholder="Digite seu email">
            </div>
            <div class="mb-awe-56">
              <label for="cidade-uf" class="form-label">Cidade/UF</label>
              <input type="text" class="form-control" id="cidade-uf" placeholder="Digite a cidade e estado de instalação da piscina">
            </div>
            <button type="submit" class="btn btn-secondary-dark p-awe-18 fz-14 text-uppercase text-white ff-catamaran fw-bold w-100">
              Solicitar atendimento
            </button>
          </form> -->

          
          <!-- <form id="form-garantia" action="" class="pt-awe-40 pb-awe-64 px-3">
            <div id="content-step-1" class="row">
              <div class="col-12 col-md-7 mt-awe-16">
                <label for="nome-garantia" class="form-label">Nome:*</label>
                [text* text-289 id:nome-garantia class:form-control placeholder "Digite seu nome"]
              </div>
              <div class="col-12 col-md-5 mt-awe-16">
                <label for="cpf-garantia" class="form-label fw-bold">CPF:*</label>
                [text* text-289 id:cpf-garantia class:form-control placeholder "___.___.___-__"]
              </div>
              <div class="col-12 col-md-6 mt-awe-16">
                <label for="cep-garantia" class="form-label">CEP:*</label>
                [text* text-289 id:cep-garantia class:form-control placeholder "_____-___"]
              </div>
              <div class="col-12 mt-awe-16">
                <label for="endereco-garantia" class="form-label">Endereço:</label>
                [text* text-289 id:endereco-garantia class:form-control placeholder "Digite o nome do seu logradouro, número e bairro"]
              </div>
              <div class="col-12 col-md-8 mt-awe-16">
                <label for="cidade-garantia" class="form-label">Cidade:*</label>
                [text* text-289 id:cidade-garantia class:form-control placeholder "Digite o nome da sua cidade"]
              </div>
              <div class="col-12 col-md-4 mt-awe-16">
                <label for="estado-garantia" class="form-label">Estado:*</label>
                [text* text-289 id:estado-garantia class:form-control placeholder "UF"]
              </div>
              <div class="col-12 col-md-4 mt-awe-16">
                <label for="telefone-garantia" class="form-label">Telefone:</label>
                [tel* tel-698 id:telefone-garantia class:form-control placeholder "(__) ______-_______"]
              </div>
              <div class="col-12 col-md-4 mt-awe-16">
                <label for="celular-garantia" class="form-label">Celular:</label>
               [tel* tel-698 id:celular-garantia class:form-control placeholder "(__) ______-_______"]
              </div>
              <div class="col-12 col-md-7 mt-awe-16">
                <label for="email-garantia" class="form-label">Email:*</label>
                [text* text-289 id:email-garantia class:form-control placeholder "Digite seu e-mail de contato"]
              </div>
              <div class="col-12 d-flex justify-content-end justify-content-sm-between align-items-end flex-wrap gap-2 pb-5 pt-awe-64">
                <div class="fz-12 ff-catamaran text-light">*itens obrigatórios</div>
                <div>
                  <button  onclick="nextStep()" type="button" class="text-primary-light-1 fz-14 fw-bold ff-catamaran btn border-primary-light-1 py-2 d-flex align-items-center">
                  <img id="nextButton" src="" class="me-2" alt="">Próxima Etapa</button>
                </div>
              </div>
            </div>

            <div id="content-step-2" class="row d-none">
              <div class="col-12 col-md-4 mt-awe-16">
                <label for="data-compra-garantia" class="form-label fw-bold">Data da Compra *</label>
                [date* date-734 id:data-compra-garantia class:form-control]
              </div>
              <div class="col-12 col-md-4 mt-awe-16">
                <label for="data-instalacao-garantia" class="form-label fw-bold">Data da Instalação *</label>
                [date* date-734 id:data-instalacao-garantia class:form-control]
              </div>
              <div class="col-12 col-md-8 mt-awe-32">
                <label for="numero-serie-garantia" class="form-label fw-bold">Número de Série *</label>
                [number number-572 id:numero-serie-garantia class:form-control placeholder "Digite o número de série da sua piscina"]
              </div>
              <div class="col-12 mt-awe-32">
                <label for="tecnico-garantia" class="form-label fw-bold">Técnico responsável:</label>
                [text* text-289 id:tecnico-garantia class:form-control placeholder "Digite o nome do técnico responsável pela instalação"]
              </div>
              <div class="col-12 d-flex justify-content-end justify-content-sm-between align-items-end flex-wrap gap-2 pb-5 pt-awe-64">
                <div class="fz-12 ff-catamaran text-light">*itens obrigatórios</div>
                <div class="d-flex gap-awe-16">
                  <button onclick="prevStep()" type="button" class="text-primary-light-1 fz-14 fw-bold ff-catamaran btn border-primary-light-1 py-2">Voltar</button>
                [submit id:enviar-garantia class:text-white class:fz-14 class:fw-bold class:ff-catamaran class:btn class:btn-primary-light-1 class:py-2 "Finalizar"]
                </div>
              </div>
            </div>
          </form> -->
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer()?>