<!--<?php
$lower = strtolower($_SERVER['REQUEST_URI']);;
$new = 'http://' . $_SERVER['HTTP_HOST'] . $lower;
if (file_exists(ltrim($lower, '/')) && $_SERVER['PHP_SELF'] != $lower){
header("Location: $new");;
exit;
} else {
echo 'Page not found';
}
?>-->

<?php get_header(); ?>
<div id="maincontant">
  <div id="content_main">
    <div id="content">
      <div id="content_left">
        <div id="content_left_content">
            <h1 class="center">Error 404 - Not Found</h1>
            <p>
            Sorry! the file/document you were looking for doesnt exist, it may have been moved, deleted or it is likely that you have typed in the wrong URL, Please check the URL and try again. If the problem persists, kindly contact the blog administrator reporting him/her about this error.
            </p>
        </div>
      </div>
      <div id="content_right">

<!----------[ START MEMBERS ONLY CONTENT(product page options) FOR PRODUCT PAGES RIGHT / TOP ]---------->

<div id="contentRightProductsInfo">
<?php wp_reset_query();
if (is_page('546') || $post->post_parent == '546' )
{
?>

<?php global $user_identity;get_currentuserinfo();?>
<p>Welcome back <strong><?php echo $user_identity;?></strong>. &nbsp;Your product options:</p>
<ul id="productsUl">
<?php wp_list_pages('title_li=&sort_order=desc&child_of=546'); ?>
</ul>

<?
}
?>
</div>

<!----------[ END MEMBERS ONLY CONTENT(product page options) FOR PRODUCT PAGES RIGHT / TOP ]---------->

<ul class="noList">
 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>
</ul>

      </div>
    </div>
    <?php get_footer(); ?>
  </div>
</div>
</div>
</body>
</html>