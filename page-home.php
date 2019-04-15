<?php get_header(); 
//Template Name: Home
?>

<main class="main container">
  <div class="row">
    <div class="blog">
      <h2>blog</h2>
      <?php
        global $post;
        $args = array( 'numberposts' => 4 );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) : setup_postdata($post); 
    ?>
      <article class="article">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <?php the_date('d/m/y') ?>
        <?php the_category(); ?>
      </article>
      <?php endforeach;  ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <div class="gallery">
      <h2>conheça um pouco mais sobre nós</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Clique aqui para conhecer mais</p>
      <a href="">sobre</a>
      <div class="gallery-container">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>