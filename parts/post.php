<div <?php post_class(); ?>>
  <figure class="post-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></figure>
  <div class="post-content">
    <header>
      <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <hr/>
    </header>
    <?php the_excerpt(); ?>
  </div>
</div>