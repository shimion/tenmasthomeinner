<?php
/*
Template Name: Menu Test
*/
?>
<?php get_header('menu-test'); ?>
<div id="maincontant">
  <div id="content_main">
    <div id="content">


<?php wp_reset_query();
if (is_page('6626'))
{
?>
<div id="content_left" style="width:941px; padding-left:2px; padding-top:0;background:#f0f0f0;">
<div id="content_left_content" style="width:943px;padding-top:12px;">
<?
}else
{
?>
<div id="content_left">
<div id="content_left_content">
<?
}
?>
<?php //the_breadcrumb(); ?>
<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
           <?php if (have_posts()) : ?>
           <?php while (have_posts()) : the_post(); ?>
		    
		   
		   
                               <?php
                               if (is_page('16') OR (16 == $post->post_parent))
                               {
if ( is_user_logged_in() ) {
the_content('(continue reading...)');
}
else
{
                               $redirect_to = urlencode($_SERVER['REQUEST_URI']);
                               wp_redirect(get_option('siteurl') . '/wp-login.php?redirect_to=' . $redirect_to);
}
                               }
else
{
the_content('(continue reading...)');
}
                                ?>
								
								
<?php wp_reset_query();
if (is_page('8942'))
{
?>
<div style="clear:both;margin-top:20px;"></div>
<?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>
<?
}
?>
								
								
								
                                <?php endwhile; ?>
                                <?php else : ?>
                                Content not found.
               <?php endif; ?>
        </div>
      </div>
      <div id="content_right">





<?php wp_reset_query();
if (is_page('546') || $post->post_parent == '546' )
{
?>
<!----------[ START MEMBERS ONLY CONTENT(product page options) FOR PRODUCT PAGES RIGHT / TOP ]---------->
<div id="contentRightProductsInfo">

<?php global $user_identity;get_currentuserinfo();?>
<p>Welcome back <strong><?php echo $user_identity;?></strong>. &nbsp;Your product options:</p>
<ul id="productsUl">
<?php wp_list_pages('title_li=&sort_order=desc&child_of=546'); ?>
</ul>
</div>

<!----------[ END MEMBERS ONLY CONTENT(product page options) FOR PRODUCT PAGES RIGHT / TOP ]---------->
<?
}
?>



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


<!----------[ START CLIENT PAGES SIDEBAR ]---------->
<?php wp_reset_query();
if (is_page('16') OR (283 == $post->post_parent))
{
?>
<div id="clientPages">
<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('clientPages') ) : ?>
<?php endif; ?>
</ul>
<p>&nbsp;</p>
<?
}
?>
<!----------[ END CLIENT PAGES SIDEBAR ]---------->


<ul class="noList">
 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Polls') ) : ?>
<?php endif; ?>
</ul>

      </div>
    </div>
   
  </div>
   <?php get_footer(); ?>
</div>

</div>
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

</body>
</html>