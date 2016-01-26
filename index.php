<?php
	// custom excerpt ellipses
	function blog_excerpt_length($length) {return 144;}
	add_filter('excerpt_length', 'blog_excerpt_length');
	
	// no more jumping for read more link
	function no_more_jumping($post) {
		return ' <a href="'.get_permalink($post->ID).'" class="read-more">'.'Continue Reading&hellip;'.'</a>';
	}
	add_filter('excerpt_more', 'no_more_jumping');

?>
<?php get_header(); ?>
<div id="maincontant">
  <div id="content_main">
    <div id="content">



<div id="content_left">
<div id="content_left_content" class="blog">
<div id="crumbs" style="margin-left: 30px;margin-hbottom: 15px;"><a href="http://www.tenmast.com">Home</a> » News & Blog</div>
	<h1 style=" margin-bottom: 20px;margin-left: 30px;">Tenmast Blog</h1>
    <?php wp_reset_query();?>
	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post">
    <h2 id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
								<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
    <?php the_excerpt(); ?>
        <div class="post-meta">
            <div class="socialButtons">
            <span class='st_facebook_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='share'></span>
            <span class='st_twitter_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='share'></span>
            <span class='st_sharethis_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='share'></span>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
    
    <?php  if(function_exists('wp_pagenavi')) { wp_pagenavi(); }  ?>
    
    <?php else : ?>
    <h2 class="center">Not Found</h2>
    <p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
    <?php endif; ?>

        </div>
      </div>
      <div id="content_right">






<ul class="noList">
 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog - Sidebar') ) : ?>
<?php endif; ?>
</ul>



      </div>
    </div>
<?php if(function_exists('wp_print')) {   print_link(); } ?>
    <?php get_footer(); ?>
  </div>
</div>
</div>

<script type="text/javascript">

jQuery(document).ready(function($) {
  // Handler for .ready() called.
  $('#s').val('Take a look around');
  $('#user_login').val('Username');
  $('#wp-submit').val('Login');
  $('#txt_who').val('Your Name');
  $('#txt_agency').val('Organization');
  $('#txt_email').val('Email');
  $('#txt_phone').val('Phone');
});

(function($) {
$('#s').focus(function() {
	$('#s').val('');
}); 

$('#txt_who').focus(function() {
	$('#txt_who').val('');
}); 

$('#txt_agency').focus(function() {
	$('#txt_agency').val('');
}); 

$('#txt_email').focus(function() {
	$('#txt_email').val('');
}); 

$('#txt_phone').focus(function() {
	$('#txt_phone').val('');
}); 

var originalBtn = $("#user_pass");
var newBtn = originalBtn.clone();

newBtn.attr("type", "password");
newBtn.insertBefore(originalBtn);
originalBtn.remove();
newBtn.attr("id", "user_pass"); 

</script>

})( jQuery );

</body>
</html>