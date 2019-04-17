<?php get_header(); 
//Template Name: Home
?>

<main class="main container">
  <div class="row">
    <div class="blog">
      <h2 class="title-blog-home">blog</h2>
      <?php
        global $post;
        $args = array( 'numberposts' => 4 );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) : setup_postdata($post); 
      ?>
      <article class="article">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
        <h2><?php the_title(); ?></h2>
        <span class="date-blog"><?php the_date('d/m/y') ?></span>
        <span class="category-blog"><?php the_category(); ?></span>
        <?php the_excerpt(); ?>
      </article>
      <?php endforeach;  ?>
      <?php wp_reset_postdata(); ?>
    </div>

    <div class="gallery">
      <h2>conheça um pouco mais sobre nós</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p class="text-call-to-action">Clique aqui para conhecer mais</p>
      <a href="#" class="btn-about -bottom">sobre</a>
        <div class="row">
          
          <?php if( have_rows('gallery-home-item') ): while ( have_rows('gallery-home-item') ) : the_row(); ?>
          <div class="gallery-container">
            <img src="<?php the_sub_field('item-gallery'); ?>" alt="<?php the_sub_field('item-gallery-alt'); ?>" class="img-gallery-home">
          </div>  
          <?php endwhile; else: endif; ?>
          
        </div>
    </div>
  </div>
</main>

<section class="banner">
  <div class="overlay"></div>
  <div class="cite-banner">
    <blockquote>"A vida é uma aventura ousada ou nada."</blockquote>
    <cite>Helen Keller</cite>
  </div>
</section>

<section class="testimonial">
  <div class="container">
    <h3>Depoimentos</h3>
    <div class="row">
      <div class="item-testimonial">
        <div class="img-testimonial">
          <img src="<?= get_template_directory_uri(); ?>/img/erika.jpg" alt="">
        </div>
        <div class="text-testimonial">
          <span>Junior Silva</span>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
      </div>

      <div class="item-testimonial">
        <div class="img-testimonial">
          <img src="<?= get_template_directory_uri(); ?>/img/erika.jpg" alt="">
        </div>
        <div class="text-testimonial">
          <span>Junior Silva</span>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
      </div>

      <div class="item-testimonial">
        <div class="img-testimonial">
          <img src="<?= get_template_directory_uri(); ?>/img/erika.jpg" alt="">
        </div>
        <div class="text-testimonial">
          <span>Junior Silva</span>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact">
<div class="overlay"></div>
  <div class="container">
    <h4>entre em contato conosco!</h4>
    <div class="row">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="form-group">
        <?php the_content(); ?>
      </div>
      <?php endwhile; else: ?>
      <?php endif; ?>
      <!--div class="address">
        <ul>
          <li>Av. Brasil, 52 - N, centro</li>
          <li>email@email.com.br</li>
          <li>(65) 9 9955-4455</li>
        </ul>
      </div-->
    </div>
  </div>
</section>
<?php get_footer(); ?>