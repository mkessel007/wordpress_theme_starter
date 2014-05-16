<?php get_header(); ?>

<?php if ( have_posts() ): ?>
  <section class="container editorial">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php include(locate_template('parts/post.php')); ?>
  <?php endwhile; wp_reset_query(); ?>
  </section>
<?php else: ?>
  <h2>No posts found</h2>
<?php endif; ?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
  <div class="prev">
    <?php next_posts_link( __( '&larr; Older posts' ) ); ?>
  </div>
  <div class="next">
    <?php previous_posts_link( __( 'Newer posts &rarr;' ) ); ?>
  </div>
<?php endif; ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>