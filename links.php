<?php
/*
Template Name: Links
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content" class="widecolumn">

<h2>Links:</h2>
<ul>
<?php wp_list_bookmarks(); ?>
</ul>

</div>
<?php if(function_exists('wp_print')) {   print_link(); } ?>

<?php get_footer(); ?>
