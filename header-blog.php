<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Eventos</title>
  <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>

<header class="header-interno banner-bg-interno">
  <div class="overlay"></div>
  <div class="banner-text-interno">
      <h1>Blog</h1>
  </div>
</header>

<section class="menu-interno">
  <div class="container">
    <div class="row justify">
      <div class="logo">
        <img src="<?php get_field('logo', 5); ?>" alt="<?php get_field('alt-logo', 5); ?>">
      </div>
      <nav class="navigation-interno">
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



