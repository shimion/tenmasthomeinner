<?php
/*
Template Name: homePageTemplate
*/
?>
<?php include( TEMPLATEPATH . '/headerHome.php' ); ?>
<div id="maincontant">
	<div id="content_main">
		<div id="content">testasdfasd
			<?php $recent = new WP_Query("pagename=Home"); while($recent->have_posts()) : $recent->the_post();?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		<div id="content_sideBar">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home - Sidebar") ) : ?>
			<?php endif; ?>
		</div>
        <div class="clear"></div>
        <div class="columns">
            	<div id="column-left">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home - Left Column") ) : ?>
                    <?php endif; ?>
                </div>
                
                <div id="column-middle">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home - Middle Column") ) : ?>
                    <?php endif; ?>
                </div>
                
                <div id="column-right">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home - Right Column") ) : ?>
                    <?php endif; ?>
                </div>
            </div>
	</div>
    
    <script type="text/javascript">

jQuery(document).ready(function($) {
  // Handler for .ready() called.
  $('#s').val('Take a look around');
  $('#user_login').val('Username');
  $('#wp-submit').val('Login');
});

(function($) {
$('#s').focus(function() {
	$('#s').val('');
	console.log('done');
}); 

$('#user_login').focus(function() {
	$('#user_login').val('');
}); 

$('#user_pass').focus(function() {
	$('#user_pass').val('');
});

var originalBtn = $("#user_pass");
var newBtn = originalBtn.clone();

})( jQuery );

</script>

	<?php get_footer(); ?>
</div>
