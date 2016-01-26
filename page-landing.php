<?php 

/*
  Template Name: Landing Page
                                        */

include( TEMPLATEPATH . '/page-landing-header.php' ); ?>

<div id="maincontant" style="padding-top: 1.5em;">
  <div id="content_main">
    <div id="content">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php else : ?>
        Content not found.
      <?php endif; ?>

  <?php get_footer(); ?>
    </div>
  </div>
</div>

</body>
</html>