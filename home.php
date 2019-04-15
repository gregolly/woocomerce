<?php get_header('interno'); 
//Template Name: Blog
?>

<?php if (is_active_sidebar('evento-bike-sidebar')) : ?>
<div class="container blog">
<?php else : ?>
<div class="container-fluid blog">
<?php endif;?>
    <h1>Blog</h1>
    <div class="row">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
          <article class="article">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <?php the_date('d/m/y') ?>
            <?php the_category(); ?>
          </article>
    </div>
      <?php endwhile; else: ?>
        <?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>