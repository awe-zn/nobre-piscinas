<?php
// Template Name: garantia
?>
<?php get_header()?>
<style>
  #main-home {
  background: url(<?php echo get_template_directory_uri();?>/dist/img/img-main.jpg) no-repeat right top;
  background-size: cover;
}
</style>
<section id="selo" class="mt-awe-96">
    <div class="container pt-awe-18">
      <div class="row justify-content-center">
        <div class="col-4 col-md-2 d-flex justify-content-end">
          <div class="">
            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/dist/img/selo.png" alt="">
          </div>
        </div>
        <div class="col-8 col-lg-5 d-flex align-items-center">
          <h1 class="fz-28 fw-bold ff-catamaran text-dark">
            Regitro de Termo de Garantia
          </h1>
        </div>
      </div>
    </div>
  </section>

  <section id="termos-garantia" class="container py-awe-25">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="ff-catamaran fz-16 text-dark-2">
          <p>
            Parabéns! Você possui em casa uma piscina que foi produzida com um rigoroso padrão de qualidade e o uso de tecnologia avançada em todo o processo produtivo. Estamos muito felizes em ter você como cliente e esperamos que aproveite os momentos inesquecíveis na sua nova piscina Nobre!
          </p>
          <p>
            Leia atentamente o <span class="fw-bold">Manual de Instruções & Certificado de Garantia </span>, preencha seus dados e efetive a garantia de DOZE MESES. Se você não recebeu o Termo de Garantia, faça o download abaixo.
          </p>
        </div>

        <a href="<?php echo get_field('termo_de_garantia');?>" target="blank__" class="btn border-primary text-primary text-uppercase fz-14 fw-bold ff-catamaran py-2 mt-2">
          <img src="<?php echo get_template_directory_uri();?>/dist/img/svg/pdf-icon-small.svg" class="me-2" alt="">
          Baixe O TERMO DE GARANTIA
        </a>
      </div>
    </div>
  </section>

  <main id="main-garantia" class="container pt-awe-40 pb-awe-108">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6 pb-awe-32">
        <div class="row row-cols-3 ff-catamaran fz-16 fw-bold">
          <div class="col step active">
            1. Dados de contato
            <div class="step__bar"></div>
          </div>
          <div class="col step">
            2. Dados da compra
            <div class="step__bar"></div>
          </div>
        </div>
      </div>
      <div class="form-area col-12 col-lg-10 p-0 border border-primary-extra-light rounded row justify-content-center">
        <div class="col-12 col-lg-8">
        <?php echo get_field('form')?>
        </div>
      </div>
    </div>
  </main>
  <script type="text/javascript">
    const img = document.querySelector('#nextButton');
img.setAttribute('src', '<?php echo get_template_directory_uri();?>/dist/img/btn-blue-arrows.svg')
</script>

<?php get_footer()?>