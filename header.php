<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name');?><?php if(!is_front_page()){echo" | ";}?><?php wp_title('');?></title>

  <!--Fontes-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;700&family=Nunito:wght@300;400;700;900&display=swap"
    rel="stylesheet">

  <!--Css-->
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css?ver=<?php echo time(); ?>">
</head>

<body>

  <header class="bg-primary-dark-1">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="<?php echo home_url('/');?>">
          <img src="<?php echo get_template_directory_uri();?>/dist/img/logo.png" alt="logo nobre piscinas">
        </a>

        <!--Links do whatsapp e instagram no mobile-->
        <div class="d-inline-flex d-lg-none ms-auto px-4 gap-3 justify-content-end d-xsm-none">
          <a href="<?php echo get_field('whatsapp', 134);?>">
            <img width="25" src="<?php echo get_template_directory_uri();?>/dist/img/svg/whatsapp.svg" alt="whatsapp">
          </a>
          <a href="<?php echo get_field('whatsapp', 134);?>">
            <img width="25" src="<?php echo get_template_directory_uri();?>/dist/img/svg/instagram.svg" alt="instagram">
          </a>
        </div>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
          aria-label="Toggle navigation">
          <img src="<?php echo get_template_directory_uri();?>/dist/img/svg/menu.svg" alt="">
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <ul class="navbar-nav gap-3 text-uppercase fz-14 fw-light align-items-center">
            <!--Links do whatsapp e instagram no desktop-->
            <li class="nav-item d-none d-lg-flex gap-1">
              <a class="nav-link" href="<?php echo get_field('whatsapp', 134);?>">
                <img src="<?php echo get_template_directory_uri();?>/dist/img/svg/whatsapp.svg" alt="">
              </a>
              <a class="nav-link" href="<?php echo get_field('instagram', 134);?>">
                <img src="<?php echo get_template_directory_uri();?>/dist/img/svg/instagram.svg" alt="">
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white text-secondary-dark-hover border-hover" href="<?php echo home_url('/');?>/#sobre">sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white text-secondary-dark-hover border-hover" href="<?php echo home_url('/');?>#piscinas">piscinas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white text-secondary-dark-hover border-hover" href="<?php echo home_url('/');?>#orcamento">orçamentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white text-secondary-dark-hover border-hover" href="<?php echo home_url('/');?>garantia/">garantia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white text-secondary-dark-hover border-hover" href="<?php echo home_url('/');?>#footer">contatos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
    