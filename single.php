<?php get_header(); ?>
<div id="maincontant"><!-- fusion -->
  <div id="content_main">
    <div id="content">
    <?php wp_reset_query();
    if (is_page('6626')) { ?>
      <div id="content_left" style="width:941px; padding-left:2px; padding-top:0;background:#f0f0f0;">
        <div id="content_left_content" style="width:943px;padding-top:12px;">
    <? } else { ?>
      <div id="content_left">
        <div id="content_left_content">
    <? } ?>

    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

    <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
      <span class="smallTxt" style="color:#555;">Posted on: <?php the_time('l, F jS, Y') ?></span>
      <span class="smallTxt" style="float:right;"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/feed-icon-28x28.png" alt="RSS"/></a></span>
    
      <div class="entry">

      <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

      </div>

      <hr />
      
      <?php comments_template(); ?>
    
    <?php endwhile; ?>
    <?php else : ?>
      Content not found.
    <?php endif; ?>
        </div>
      </div>
      <div id="content_right">
        <?php wp_reset_query();
        if (is_page('546') || $post->post_parent == '546' ) { ?>
        <!----------[ START MEMBERS ONLY CONTENT(product page options) FOR PRODUCT PAGES RIGHT / TOP ]---------->
          <div id="contentRightProductsInfo">
            <?php global $user_identity;get_currentuserinfo();?>
            <p>Welcome back <strong><?php echo $user_identity;?></strong>. &nbsp;Your product options:</p>
            <ul id="productsUl">
              <?php wp_list_pages('title_li=&sort_order=desc&child_of=546'); ?>
            </ul>
          </div>
        <!----------[ END MEMBERS ONLY CONTENT(product page options) FOR PRODUCT PAGES RIGHT / TOP ]---------->
        <? } ?>

        <?php wp_reset_query();

        if (!is_page(array(6626,16)) && ('16' != $post->post_parent)) { ?>
          <ul class="noList chad">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog - Sidebar') ) : ?>
            <?php endif; ?>
          </ul>
        <? } ?>

        <!----------[ START CLIENT PAGES SIDEBAR ]---------->

        <?php wp_reset_query();

        if (is_page('16') OR ('16' == $post->post_parent)) { ?>
          <div id="clientPages">
            <ul>
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('clientPages') ) : ?>
              <?php endif; ?>
            </ul>
        <? } ?>

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

jQuery(document).ready(function($) {
  // Handler for .ready() called.
  $('#s').val('Take a look around');
  $('#user_login').val('Username');
  $('#wp-submit').val('Login');
  $('#content_right #txt_who').val('Your Name');
  $('#content_right #txt_agency').val('Organization');
  $('#content_right #txt_email').val('Email');
  $('#content_right #txt_phone').val('Phone');
});

(function($) {
$('#s').focus(function() {
  $('#s').val('');
}); 

$('#content_right #txt_who').focus(function() {
  $('#content_right #txt_who').val('');
}); 

$('.help2 textarea').focus(function() {
  $('.help2 textarea').text('');
});

$('#content_right #txt_agency').focus(function() {
  $('#content_right #txt_agency').val('');
}); 

$('#content_right #txt_email').focus(function() {
  $('#content_right #txt_email').val('');
}); 

$('#content_right #txt_phone').focus(function() {
  $('#content_right #txt_phone').val('');
}); 

var originalBtn = $("#user_pass");
var newBtn = originalBtn.clone();

newBtn.attr("type", "password");
newBtn.insertBefore(originalBtn);
originalBtn.remove();
newBtn.attr("id", "user_pass"); 
})( jQuery );

</script>

</body>
</html>