<?php
if ( function_exists('register_sidebar') ) {
	
register_sidebar(array('name'=>'Sidebar - Inner Pages',
'before_widget' => '<div id="%1$s" style="list-style:none">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',));

register_sidebar(array('name'=>'Home - Sidebar',
'before_widget' => '<div id="%1$s" style="list-style:none">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',));

register_sidebar(array('name'=>'Home - Testimonials',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<span style="display:none;">',
'after_title' => '</span>',));

register_sidebar(array('name'=>'Home - Left Column',
'before_widget' => '<div id="%1$s" style="list-style:none">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',));

register_sidebar(array('name'=>'Home - Middle Column',
'before_widget' => '<div id="%1$s" style="list-style:none">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',));


register_sidebar(array('name'=>'Home - Right Column',
'before_widget' => '<div id="%1$s" style="list-style:none">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',));

register_sidebar(array('name'=>'clientPages',
'before_widget' => '<div id="%1$s" style="list-style:none">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',));

register_sidebar(array('name'=>'Blog - Sidebar',
'before_widget' => '<div id="%1$s" style="list-style:none">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',));

register_sidebar(array('name'=>'Contact Us - Sidebar',
'before_widget' => '<div id="%1$s" style="list-style:none">',
'after_widget' => '</div>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',));

}

add_action("login_head", "my_login_head");
function my_login_head() {
	echo "
	<style>
	body.login #login h1 a {
		background: url('".get_bloginfo('template_url')."/images/login_logo.png') no-repeat scroll center top transparent;
		height: 85px;
		width: 249px;
		margin-left: auto;
		margin-right: auto;
	}
	</style>
	";
}

function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');
		echo "</a> » ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo " » ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}

function dimox_breadcrumbs() {
 
  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '&raquo;'; // delimiter between crumbs
  $home = 'Home'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb
 
  global $post;
  $homeLink = get_bloginfo('url');
 
  if (is_home() || is_front_page()) {
 
    if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
 
  } else {
 
    echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
 
    if ( is_category() ) {
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
 
    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;
 
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        echo $cats;
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
 
    } elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) {
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
      }
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
 
    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</div>';
 
  }
} // end dimox_breadcrumbs()

function new_excerpt_length($length) {return 22;}
add_filter('excerpt_length', 'new_excerpt_length');

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
  return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_theme_support('post-thumbnails');
set_post_thumbnail_size (400, 9999);

register_nav_menus( array(
	'main' => __( 'Main Menu', 'base' )
) );

// show admin bar only for admins
if (!current_user_can('manage_options')) {
	add_filter('show_admin_bar', '__return_false');
}
// show admin bar only for admins and editors
if (!current_user_can('edit_posts')) {
	add_filter('show_admin_bar', '__return_false');
}
class Arrow_Walker_Nav_Menu extends Walker_Nav_Menu {
    function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output) {
        $id_field = $this->db_fields['id'];
        if (!empty($children_elements[$element->$id_field])) { 
            $element->classes[] = 'arrow'; //enter any classname you like here!
        }
        Walker_Nav_Menu::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}

class DD_Wolker_Menu extends Walker_Nav_Menu {
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ){
	    $GLOBALS['dd_children'] = ( isset($children_elements[$element->ID]) )? 1:0;
        $GLOBALS['dd_depth'] = (int) $depth;
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
}
add_filter('nav_menu_css_class','add_parent_css',10,2);
function  add_parent_css($classes, $item){
     global  $dd_depth, $dd_children;
     $classes[] = 'depth'.$dd_depth;
     if($dd_children)
         $classes[] = 'parent';
    return $classes;
}

function is_child($pageID) { 
	global $post; 
	if( is_page() && ($post->post_parent==$pageID) ) {
               return true;
	} else { 
               return false; 
	}
}

?>

<?php
/* Add a custom field to the field editor (See editor screenshot) */
add_action("gform_field_standard_settings", "my_standard_settings", 10, 2);
function my_standard_settings($position, $form_id){
	// Create settings on position 25 (right after Field Label)
	if($position == 25){
		?>
		<li class="admin_label_setting field_setting" style="display: list-item; ">
			<label for="field_placeholder">Placeholder Text
				<!-- Tooltip to help users understand what this field does -->
				<a href="javascript:void(0);" class="tooltip tooltip_form_field_placeholder" tooltip="&lt;h6&gt;Placeholder&lt;/h6&gt;Enter the placeholder/default text for this field.">(?)</a>
			</label>
			<input type="text" id="field_placeholder" class="fieldwidth-3" size="35" onkeyup="SetFieldProperty('placeholder', this.value);">
		</li>
		<?php
	}
}
 
/* Now we execute some javascript technicalitites for the field to load correctly */
add_action("gform_editor_js", "my_gform_editor_js");
function my_gform_editor_js(){
	?>
	<script>
		//binding to the load field settings event to initialize the checkbox
		jQuery(document).bind("gform_load_field_settings", function(event, field, form){
			jQuery("#field_placeholder").val(field["placeholder"]);
		});
	</script>
	<?php
}
 
/* We use jQuery to read the placeholder value and inject it to its field */
add_action('gform_enqueue_scripts',"my_gform_enqueue_scripts", 10, 2);
function my_gform_enqueue_scripts($form, $is_ajax=false){
	?>
	<script>
	jQuery(function(){
		<?php
		/* Go through each one of the form fields */
		foreach($form['fields'] as $i=>$field){
			/* Check if the field has an assigned placeholder */
			if(isset($field['placeholder']) && !empty($field['placeholder'])){
				/* If a placeholder text exists, inject it as a new property to the field using jQuery */
				?>
				jQuery('#input_<?php echo $form['id']?>_<?php echo $field['id']?>').attr('placeholder','<?php echo $field['placeholder']?>');
				<?php
			}
		}
		?>
	});
	</script>
	<?php
}

?>
<?php

/*
    GForms Client Directory Form Conversion Functions
                                                      */

add_filter("gform_column_input_content_40_1_7", "convert_department", 10, 6);
function convert_department($input, $input_info, $field, $text, $value, $form_id){
  //build field name, must match List field syntax to be processed correctly
  $input_field_name = 'input_' . $field["id"] . '[]';
  $tabindex = GFCommon::get_tabindex();
  $new_input = '<select multiple="multiple" size="2" title="Select Department(s)"  name="' . $input_field_name . '" ' . $tabindex . ' class="large gfield_select" tabindex="1">
  <option value="Executive Director">Executive Director</option>
  <option value="Executive">Executive</option>
  <option value="Public Housing">Public Housing</option>
  <option value="Section 8">Section 8</option>
  <option value="Computer">Computer</option>
  <option value="Finance">Finance</option>
  <option value="Purchasing">Purchasing</option>
  <option value="Maintenance">Maintenance</option>
  <option value="Resident Services">Resident Services</option>
  <option value="Commissioner">Commissioner</option>
  <option value="Specialty Housing">Specialty Housing</option>
  <option value="Other">Other</option>
  </select>';
  return $new_input;
}

add_filter("gform_column_input_content_40_1_8", "convert_majors", 10, 6);
function convert_majors($input, $input_info, $field, $text, $value, $form_id){
  //build field name, must match List field syntax to be processed correctly
  $input_field_name = 'input_' . $field["id"] . '[]';
  $tabindex = GFCommon::get_tabindex();
  $new_input = '<select multiple="multiple" size="2" title="Select Major(s)" name="' . $input_field_name . '" ' . $tabindex . ' class="large gfield_select" tabindex="1">
  <option value="Public Housing">Public Housing</option>
  <option value="Section 8">Section 8</option>
  <option value="Maintenance">Maintenance</option>
  <option value="Accounting">Accounting</option>
  <option value="Masters - ALL MAJORS">Masters - ALL MAJORS</option>
  <option value="None">None</option>
  </select>';
  return $new_input;
}

add_filter("gform_column_input_content_40_1_9", "convert_minors", 10, 6);
function convert_minors($input, $input_info, $field, $text, $value, $form_id){
  //build field name, must match List field syntax to be processed correctly
  $input_field_name = 'input_' . $field["id"] . '[]';
  $tabindex = GFCommon::get_tabindex();
  $new_input = '<select multiple="multiple" size="2" title="Select Minor(s)" name="' . $input_field_name . '" ' . $tabindex . ' class="large gfield_select" tabindex="1">
  <option value="Executive">Executive</option>
  <option value="Administrator/IT">Administrator/IT</option>
  <option value="Applications/Intake">Applications/Intake</option>
  <option value="Accounts Payable">Accounts Payable</option>
  <option value="PH Tenant Accounting">PH Tenant Accounting</option>
  <option value="S8 Tenant Accounting">S8 Tenant Accounting</option>
  <option value="Tenant Accounting">Tenant Accounting</option>
  <option value="Payroll">Payroll</option>
  <option value="Purchase Order">Purchase Order</option>
  <option value="PH Inspector">PH Inspector</option>
  <option value="S8 Inspector">S8 Inspector</option>
  <option value="Work Order Clerk">Work Order Clerk</option>
  <option value="Stock Clerk (CI)">Stock Clerk (CI)</option>
  <option value="Property Security">Property Security</option>
  <option value="Case Management">Case Management</option>
  <option value="FSS Case Management">FSS Case Management</option>
  <option value="Multi-family/TRACS">Multi-family/TRACS</option>
  </select>';
  return $new_input;
}

?>