<?php
// Template Name: inicio
?>
<?php get_header()?>
<style>
  #main-home {
  background: url(<?php echo get_template_directory_uri();?>/dist/img/img-main.jpg) no-repeat right top;
  background-size: cover;
}
</style>
<main id="main-home">
    <div>
      <div class="container">
        <div class="row justify-content-center justify-content-lg-start">
          <div class="col-12 col-lg-8 col-xl-7 pb-awe-40">
            <h1 class="fz-48 text-white fw-bold">
              <span class="fw-black text-secondary-light">Experiência no DNA</span> na fabricação de piscinas de fibra
            </h1>
          </div>
          <div class="col-12 col-lg-8">
            <p class="fz-20 text-white fw-regular">
              Uma nova marca que já nasce com 25 anos de história para contar.
              A Nobre Piscinas possui em seu DNA a experiência de produzir piscinas de fibra de vidro.
            </p>
          </div>
          <div class="col-12 col-sm-10 col-6 d-flex justify-content-center justify-content-lg-start gap-4 pt-awe-56 pt-lg-awe-64 flex-wrap">
            <a href="#sobre"
              class="btn btn-secondary-dark text-uppercase text-white ff-catamaran">
              <span class="me-2">
                <img src="<?php echo get_template_directory_uri();?>/dist/img/svg/btn-arrows.svg" alt="">
              </span>
              Conheça nossa história
            </a>
            <a href="#piscinas" class="btn btn-outline-white text-uppercase ff-catamaran">
              Ver piscinas
            </a>
          </div>
        </div>
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
          <?php
                    
                        $equipe = get_field('Piscinas');
                        if(isset($equipe)){
                            
                            foreach ($equipe as $membro) { ?>
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

          <?php }
                        }
                    ?>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="d-flex justify-content-center justify-content-lg-start w-100 px-2">
        <a href="<?php echo get_field('catalogo');?>" class="btn border-primary text-primary text-uppercase fz-14 fw-bold ff-catamaran">
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
          </div>
           
        </div>
      </div>
    </div>
  </section>

<?php get_footer()?>