<?php

// Register Custom Post Type
function services() {

	$labels = array(
		'name'                  => _x( 'Services', 'Services General Name', 'mediplus_text_domain' ),
		'singular_name'         => _x( 'Services', 'Services Singular Name', 'mediplus_text_domain' ),
		'menu_name'             => __( 'Services', 'mediplus_text_domain' ),
		'name_admin_bar'        => __( 'Services', 'mediplus_text_domain' ),
		'archives'              => __( 'Item Archives', 'mediplus_text_domain' ),
		'attributes'            => __( 'Item Attributes', 'mediplus_text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'mediplus_text_domain' ),
		'all_items'             => __( 'All Items', 'mediplus_text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'mediplus_text_domain' ),
		'add_new'               => __( 'Add New', 'mediplus_text_domain' ),
		'new_item'              => __( 'New Item', 'mediplus_text_domain' ),
		'edit_item'             => __( 'Edit Item', 'mediplus_text_domain' ),
		'update_item'           => __( 'Update Item', 'mediplus_text_domain' ),
		'view_item'             => __( 'View Item', 'mediplus_text_domain' ),
		'view_items'            => __( 'View Items', 'mediplus_text_domain' ),
		'search_items'          => __( 'Search Item', 'mediplus_text_domain' ),
		'not_found'             => __( 'Not found', 'mediplus_text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'mediplus_text_domain' ),
		'featured_image'        => __( 'Featured Image', 'mediplus_text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'mediplus_text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'mediplus_text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'mediplus_text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'mediplus_text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'mediplus_text_domain' ),
		'items_list'            => __( 'Items list', 'mediplus_text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'mediplus_text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'mediplus_text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Services', 'mediplus_text_domain' ),
		'description'           => __( 'Services Description', 'mediplus_text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'services', 0 );

// Meta Box For Icon

if(!function_exists('myservicemeta')){

    function myservicemeta() {

            add_meta_box(
                'wporg_box_id',         // Unique ID
                'Icon Box',             // Box title
                'myservicehtml',        // Content callback, must be of type callable
                'services'              // Post type
            );
        
    }
}

// Icon Field

if(!function_exists('myservicehtml')){
    function myservicehtml($post){
       $geticon= get_post_meta($post->ID,'addicon_key_uqnie',true)

        ?>
<label for="addicon">Add Your Post Icon Here</label> </br>
<input type="text" name="addicon" id="addicon" value="<?php echo $geticon;?>">
<?php
    }
}
add_action( 'add_meta_boxes', 'myservicemeta' );


// Save Post

if(!function_exists('myservicemetasave')){
    function myservicemetasave( $post_id ) {
        if ( array_key_exists( 'addicon', $_POST ) ) {
            update_post_meta(
                $post_id,
                'addicon_key_uqnie',
                $_POST['addicon']
            );
        }
    }
}

add_action( 'save_post', 'myservicemetasave' );