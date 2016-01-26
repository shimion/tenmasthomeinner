<div id="content_right_heading">
<img src="wp-content/uploads/2010/04/newsdownload.gif" alt="" width="248" height="30" />
</div>

<div class="content_right_text" style="padding-top:20px;">

<?php
query_posts($query_string . 'cat=4&posts_per_page=6&order=desc');
global $more; // Declare global $more (before the loop).
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h4 style="margin:5px 0 0 0;padding:0;"><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>

<span class="smallTxt" style="color:#555;">Posted on: <?php the_time('l, F jS, Y') ?></span>

<div class="homeRightP">
<?php the_excerpt(); ?>
</div>
<?php endwhile;?>
<?php endif; ?>
</div>