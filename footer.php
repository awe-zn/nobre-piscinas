<footer id="footer" class="bg-primary-dark-1">
    <div class="container py-awe-40">
      <div class="row">
        <div class="col-12 col-md-8 col-lg-4 fz-16 ff-catamaran text-white pb-awe-18">
          <p>
            A Nobre Piscinas é especialista em fazer piscinas 
            de qualidade e proporcionar o melhor atendimento aos seus clientes. 
            <span class="text-primary-extra-light">Vamos conversar?</span> 
          </p>
        </div>
      </div>
      <div class="row text-white fz-16 ff-catamaran">
        <div class="col-12 col-md-6 col-lg-4">
          <h6 class="text-primary-extra-light">
            Nossos contatos
          </h6>
          <p class="m-0">
          <?php echo get_field('telefone', 134);?>
          </p>
          <a href="mailto:atendimento@nobrepiscinas.com.br" class="text-white text-secondary-dark-hover">
          <?php echo get_field('e-mail', 134);?>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 offset-xl-1">
          <h6 class="text-primary-extra-light">
            Endereço
          </h6>
          <p class="m-0">
          <?php echo get_field('endereco', 134);?>
          </p>
        </div>
        <div class="col-12 col-md-5 col-lg-3">
          <h6 class="text-primary-extra-light">
            Nossas mídias
          </h6>
          <div class="d-flex gap-3">
            <a href="<?php echo get_field('instagram', 134);?>">
              <img width="24" src="<?php echo get_template_directory_uri();?>/dist/img/svg/instagram.svg" alt="">
            </a>
            <a href="<?php echo get_field('whatsapp', 134);?>">
              <img width="24" src="<?php echo get_template_directory_uri();?>/dist/img/svg/whatsapp.svg" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-primary-dark-2 w-100 py-awe-18 d-flex justify-content-center">
      <a href="https://agenciaweb.ifrn.edu.br" target="_blank">
        <img src="/dist/img/svg/awe-logo.svg" alt="">
      </a>
    </div>
  </footer>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri();?>/dist/js/index.js"></script>

</body>

</html>
  
  
