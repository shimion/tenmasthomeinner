<?php get_header(); ?>
<div id="maincontant">
<div id="content_main">

<div id="content">


<div id="content_left">
<div id="content_left_content">
<?php //if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
<div id="crumbs"><a href="http://www.tenmast.com">Home</a> » <a href="/news-and-events/industry-news-tenmast-blog/">Tenmast Blog</a> » <span class="current"><?php echo (single_cat_title('', false));?></span></div>
<?php if (have_posts()) : ?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>
			<h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
			<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h1>Archive for <?php the_time('F, Y'); ?></h1>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h1>Archive for <?php the_time('Y'); ?></h1>
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<h1>Author Archive</h1>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h1>Blog Archives</h1>
			<?php } ?>

			<!--
			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('Older Entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Newer Entries') ?></div>
			</div>
			-->
<div style="clear:both;margin-bottom:15px;"></div>


			<?php while (have_posts()) : the_post(); ?>
			
<div class="post">
<h2 id="post-<?php the_ID(); ?>" style="margin-bottom:0;padding-bottom:0;"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('l, F jS, Y') ?></small>

<div class="entry">
<?php the_content() ?>
</div>

				<p class="postmetadata" style="padding-bottom:20px;font-size:75%;">
				<?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
				</p>
			</div>

			<?php endwhile; ?>
			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('Older Entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Newer Entries') ?></div>
			</div>
			
			<?php else : ?>

			<h2 class="center">Not Found</h2>
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>

			<?php endif; ?>

</div>
</div>
<div id="content_right">

<?php wp_reset_query();
if (!is_page(array(6626,16)))
{
?>
<ul class="noList">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>
</ul>
<?
}
?>

<script type="text/javascript">

$(document).ready(function() {
  // Handler for .ready() called.
  $('#s').val('Take a look around');
  $('#user_login').val('Username');
  $('#wp-submit').val('Login');
  $('#txt_who').val('Your Name');
  $('#txt_agency').val('Organization');
  $('#txt_email').val('Email');
  $('#txt_phone').val('Phone');
});

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

</div>
</div>
<?php if(function_exists('wp_print')) {   print_link(); } ?>

<?php get_footer(); ?>
</div>
</div>
</div>
</body>
</html>