<?php

/*

Template Name: industryNewsPageTemplate

*/

?>

<?php get_header(); ?>
<style type="text/css">
p {
margin: 0 0 10px 0;
}
small {
font-style:italic;
}
</style>
<div id="maincontant">

  <div id="content_main">
    <div id="content">

      <div id="content_left">

        <div id="content_left_content">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            <h1>HUD & Industry News</h1>
            <?php query_posts('cat=3&posts_per_page=10'); ?>    	
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	
            	<h3 id="post-<?php the_ID(); ?>" style="margin-bottom:0px;"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                <small>Posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> | <?php post_comments_feed_link('Subscribe to Comments'); ?></small>
                <?php the_excerpt(); ?>
			<?php endwhile; ?>

			<?php else : ?>

			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

			<?php endif; ?>
        <a href="index.php?cat=3">See all HUD & Industry News articles</a>

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







<!----------[ START CLIENT PAGES SIDEBAR ]---------->

<?php wp_reset_query();

if (is_page('16') OR is_child_of('16'))

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

 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

<?php endif; ?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('IndustryNewsPage') ) : ?>

<?php endif; ?>

</ul>







      </div>

    </div>
<?php if(function_exists('wp_print')) {   print_link(); } ?>

    <?php get_footer(); ?>

  </div>

</div>

</div>

</body>

</html>