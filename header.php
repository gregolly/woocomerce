<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Eventos</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<header class="header banner-bg">
  <div class="overlay"></div>
  <div class="banner-text">
      <p>is simply dummy text of the printing</p>
      <h1>Lorem Ipsum</h1>
      <a href="#">eventos</a>
  </div>
</header>

<section class="menu">
  <div class="container">
    <div class="row justify">
      <div class="logo">
        <img src="<?php the_field('logo'); ?>" alt="<?php the_field('alt-logo'); ?>">
      </div>
      <nav class="navigation">
        <ul>
          <li><a href="http://" rel="noopener noreferrer">sobre</a></li>
          <li><a href="http://" rel="noopener noreferrer">eventos</a></li>
          <li><a href="http://" rel="noopener noreferrer">blog</a></li>
          <li><a href="http://" rel="noopener noreferrer">contato</a></li>
        </ul>
      </nav>
    </div>
  </div>
</section>