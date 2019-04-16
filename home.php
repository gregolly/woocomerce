<?php get_header('blog'); 
//Template Name: Blog
?>

<?php if (is_active_sidebar('evento-bike-sidebar')) : ?>
<div class="container blog-page">
<?php else : ?>
<div class="container-fluid blog-page">
<?php endif;?>
    <div class="row">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
          <article class="article-blog">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
            <h2><?php the_title(); ?></h2>
            <span class="date-blog"><?php the_date('d/m/y') ?></span>
            <span class="category-blog"><?php the_category(); ?></span>
            <?php the_excerpt(); ?>
          </article>
          <?php endwhile; else: ?>
        <?php endif; ?>
        <?php get_sidebar(); ?>
    </div>
      
        
</div>

</div>
<?php get_footer(); ?>