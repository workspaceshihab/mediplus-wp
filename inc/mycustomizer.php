<?php


function mycustomizer($wp_customize){
    // //Panel
    // $wp_customize->add_panel();
    // $wp_customize->get_panel();
    // $wp_customize->remove_panel();

    // //Section
    // $wp_customize->add_section();
    // $wp_customize->get_section();
    // $wp_customize->remove_section();

    // //Settings
    // $wp_customize->add_setting();
    // $wp_customize->get_setting();
    // $wp_customize->remove_setting();

    // //Controls
    // $wp_customize->add_control();
    // $wp_customize->get_control();
    // $wp_customize->remove_control();


// Slider Heading 
    $wp_customize->add_section(
        'theme_section_id',
        array(
            'title' => __('Slider','mediplus_text_domain'),
            'priority' => 30,
        )
    );
    $wp_customize->add_setting(
        'theme_setting_id',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_control_id', array(
        'label'      => __( 'Slider Title', 'mediplus_text_domain' ),
        'section'    => 'theme_section_id',
        'settings'   => 'theme_setting_id',
        'type'        => 'text',
    ) ) );

    

// Slider Description
$wp_customize->add_setting(
    'theme_setting_id_description',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_setting_id_description', array(
    'label'      => __( 'Slider Description', 'mediplus_text_domain' ),
    'section'    => 'theme_section_id',
    'settings'   => 'theme_setting_id_description',
    'type'        => 'text',
) ) );

// Slider Appointment Button
$wp_customize->add_setting(
    'theme_setting_appointment',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_setting_appointment', array(
    'label'      => __( 'Appointment Button URL', 'mediplus_text_domain' ),
    'section'    => 'theme_section_id',
    'settings'   => 'theme_setting_appointment',
    'type'        => 'url',
) ) );

// Slider Contact Button
$wp_customize->add_setting(
    'theme_setting_contact',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_setting_contact', array(
    'label'      => __( 'Contact Button URL', 'mediplus_text_domain' ),
    'section'    => 'theme_section_id',
    'settings'   => 'theme_setting_contact',
    'type'        => 'url',
) ) );

// Slider Background Image One
$wp_customize->add_setting(
    'theme_setting_bgimg',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_setting_bgimg', array(
    'label'      => __( 'Slider Image One', 'mediplus_text_domain' ),
    'description' => __( 'Upload your slider image one', 'mediplus_text_domain' ),
    'section'    => 'theme_section_id',
    'settings'   => 'theme_setting_bgimg',
) ) );
// Slider Background Image Two
$wp_customize->add_setting(
    'theme_setting_bgimg2',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_setting_bgimg2', array(
    'label'      => __( 'Slider Image Two', 'mediplus_text_domain' ),
    'description' => __( 'Upload Your Slider Image Two', 'mediplus_text_domain' ),
    'section'    => 'theme_section_id',
    'settings'   => 'theme_setting_bgimg2',
) ) );
// Slider Background Image Three
$wp_customize->add_setting(
    'theme_setting_bgimg3',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_setting_bgimg3', array(
    'label'      => __( 'Slider Image Three', 'mediplus_text_domain' ),
    'description' => __( 'Upload Your Slider Image Three', 'mediplus_text_domain' ),
    'section'    => 'theme_section_id',
    'settings'   => 'theme_setting_bgimg3',
) ) );

    }
add_action ('customize_register', 'mycustomizer');



?>