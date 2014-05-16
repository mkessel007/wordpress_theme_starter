<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<section <?php post_class(); ?>>
  <h1 class="title"><?php the_title(); ?></h1>
  <div class="two-col post-content">
  	<?php the_content(); ?>
  </div>
</section>
<?php endwhile; wp_reset_query(); ?>

<?php //comments_template( '', true ); ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>