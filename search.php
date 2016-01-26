<?php get_header(); ?>
<div id="maincontant">
  <div id="content_main">
    <div id="content">
      <div id="content_left">
        <div id="content_left_content">
            <h1>Search Results</h1>
            <?php
            $allsearch = &new WP_Query("s=$s&showposts=-1"); 
            $key = wp_specialchars($s, 1); 
            $count = $allsearch->post_count;
            echo "$count records found for \"$key\"";
            wp_reset_query(); 
            ?>

            <?php
            global $query_string;

            $query_args = explode("&", $query_string);
            $search_query = array();

            foreach($query_args as $key => $string) {
              $query_split = explode("=", $string);
              $search_query[$query_split[0]] = urldecode($query_split[1]);
            } // foreach

            $search = new WP_Query($search_query);
            ?>

            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
            <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt() ?>
				    <small><?php the_time('l, F jS, Y') ?></small>
                              
                                <?php endwhile; ?>
                                <?php else : ?>
                                Content not found.
               <?php endif; ?>
        </div><?php wp_pagenavi(); ?>
      </div>
      <div id="content_right">
        <ul class="noList">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
        <?php endif; ?>
        </ul>
      </div>
    </div>


<?php if(function_exists('wp_print')) {   print_link(); } ?>
    <?php get_footer(); ?>
  </div>
</div>
</body>
</html>