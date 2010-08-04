<?php

// =========================
// = CUSTOM THEME SETTINGS =
// =========================
add_action('admin_menu', 'add_gcf_interface');

function add_gcf_interface(){ add_theme_page( 'More Theme Options', 'More Theme Options', 'edit_themes', basename(__FILE__), 'editglobalcustomfields' ); }

function editglobalcustomfields()
{
	$sidebar_left_status = show_sidebar_at('left') ? "checked=\"yes\"" : "";
	$sidebar_right_status = show_sidebar_at('right') == "1" ? "checked=\"yes\"" : "";
	$sidebar_footer_status = show_sidebar_at('footer') == "1" ? "checked=\"yes\"" : "";
	?>
	<div class='wrap'>
	  <h2>Theme Options</h2>
  	<form method="post" action="options.php">
  	  <?php wp_nonce_field('update-options') ?>

    	<p>
			<strong>Which sidebars would you like to see?</strong><br />
			<input type="checkbox" name="sidebar_left" value="1" id="sidebar_left" <?php echo $sidebar_left_status ?> /> Left Sidebar<br />
			<input type="checkbox" name="sidebar_right" value="1" id="sidebar_right" <?php echo $sidebar_right_status ?> /> Right Sidebar<br />
			<input type="checkbox" name="sidebar_footer" value="1" id="sidebar_footer" <?php echo $sidebar_footer_status ?> /> Footer Sidebar
    	</p>

    	<p><input type="submit" name="Submit" value="Update Options" /></p>

    	<input type="hidden" name="action" value="update" />
    	<input type="hidden" name="page_options" value="sidebar_left,sidebar_right,sidebar_footer" />

  	</form>
	</div>
	<?php
}

function show_sidebar_at($position) { return get_option('sidebar_'.$position) == "1" ? true : false; }

// =======================
// = SET UP THE SIDEBARS =
// =======================

if (function_exists('register_sidebar'))
{
	if(show_sidebar_at('left')){ register_sidebar(array('name'=>'sidebar left')); }
	if(show_sidebar_at('right')){ register_sidebar(array('name'=>'sidebar right')); }
	if(show_sidebar_at('footer')){ register_sidebar(array('name'=>'sidebar footer')); }
}

// ===================================
// = ADD NEW CLASSES TO body_class() =
// ===================================

add_filter('body_class','sidebar_number_class');

function sidebar_number_class($classes, $class) 
{

	$columns = 1;
	if(show_sidebar_at('left')) { $columns++; $classes[] = "left-column"; }
	if(show_sidebar_at('right')) { $columns++; $classes[] = "right-column";  }
	
	if($columns == 1){ $classes[] = "one-column"; }
	if($columns == 2){ $classes[] = "two-column"; }
	if($columns == 3){ $classes[] = "three-column"; }
	 
	// return the $classes array
	return $classes;
}


?>