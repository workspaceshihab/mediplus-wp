<?php


add_theme_support('post-thumbnails');
add_post_type_support( 'wporg_doctor', 'thumbnail' ); 

function wporg_custom_post_type() {
	register_post_type('wporg_doctor',
		array(
			'labels'      => array(
				'name'          => __( 'Doctors', 'mediplus_text_domain' ),
				'singular_name' => __( 'doctor', 'mediplus_text_domain' ),
			),
			'public'      => true,
			'has_archive' => true,
			'rewrite'     => array( 'slug' => 'doctors' ), // my custom slug
		)
	);
}
add_action('init', 'wporg_custom_post_type');



// for adding speciality

if(!function_exists('docSpec')){

    function docSpec() {

            add_meta_box(
                'wporg_box_id',         // Unique ID
                'Speciality',             // Box title
                'docSpechtml',        // Content callback, must be of type callable
                'wporg_doctor'              // Post type
            );
        
    }
}  

// speciality Field

if(!function_exists('docSpechtml')){
    function docSpechtml($post){
       $docspec= get_post_meta($post->ID,'addicon_key_uqnie',true)

        ?>
<label for="addicon">Add Speciality Here</label> </br>
<input type="text" name="addicon" id="addicon" value=<?php echo $docspec;?>>
<?php
    }
}
add_action( 'add_meta_boxes', 'docSpec' );

//save

if(!function_exists('docSpecmetasave')){
    function docSpecmetasave( $post_id ) {
        if ( array_key_exists( 'addicon', $_POST ) ) {
            update_post_meta(
                $post_id,
                'addicon_key_uqnie',
                $_POST['addicon']
            );
        }
    }
}

add_action( 'save_post', 'docSpecmetasave' );