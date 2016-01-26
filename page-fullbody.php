<?php 

/*
  Template Name: Full Body - No Sidebar
                                        */

get_header(); ?>

<div id="content_main">
<style>
  h1 {
    font-family: 'frutiger_lt_std_95_ultrablaRg';
    color: #4b116f;
    font-size: 31px;
  }
</style>
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

</body>
</html>