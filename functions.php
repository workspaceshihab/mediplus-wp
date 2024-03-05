<?php

//Featured Image Support

add_theme_support( 'post-thumbnails' );


// Register theme_textdomain and navigation

if (!function_exists('mediplus_setup_theme')) {
    function mediplus_setup_theme()
    {
        load_theme_textdomain('mediplus_text_domain', get_template_directory() . '/languages');

        register_nav_menus( array(
            'top_menu'     => __('Top_Menu','mediplus_text_domain'),
            'mainmenu'     => __('Main Menu','mediplus_text_domain'),
            'primary_menu' => __( 'Primary Menu', 'mediplus_text_domain' ),
	    	'footer_menu'  => __( 'Footer Menu', 'mediplus_text_domain' ),
            
		) );
    }
}

add_action('after_setup_theme', 'mediplus_setup_theme');

// Register Custom menu link class 

function mediplus_primary_menu($classes, $item, $args) {
    if(isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'mediplus_primary_menu', 1, 3);


function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

  
  // Register Custom Navigation Walker


// function register_navwalker(){
// 	require_once get_template_directory() . '/nav-walker.php';
// }
// add_action( 'after_setup_theme', 'register_navwalker' );
 

// Post views count

function set_post_views($postID) {
  $countKey = 'post_views_count';
  $count = get_post_meta($postID, $countKey, true);
  
  if ($count == '') {
      $count = 0;
      delete_post_meta($postID, $countKey);
      add_post_meta($postID, $countKey, '0');
  } else {
      $count++;
      update_post_meta($postID, $countKey, $count);
  }
}

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// WP Custom Post Type Gen

require get_template_directory()."/inc/custompost/services.php";

// Doc Custom Post

require get_template_directory()."/inc/custompost/doctors.php";



// CodeStar addones

require_once get_theme_file_path() .'/inc/codestar/codestar-framework.php';

require_once get_theme_file_path() .'/inc/codestar/samples/myadmin.php';

// TGM addones

require_once get_theme_file_path() .'/inc/tgm/class-tgm-plugin-activation.php';

require_once get_theme_file_path() .'/inc/tgm/admin.php';

//  CMB2 addones 

require_once get_theme_file_path() .'/inc/cmb2/init.php';

require_once get_theme_file_path() .'/inc/cmb2/admin.php';







// Customizer API 

// include_once get_theme_file_path() .'/inc/customizer.php';

include_once get_theme_file_path() .'./inc/mycustomizer.php';












