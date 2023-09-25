<?php


    function strategy_assets() {

    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css' );

    wp_enqueue_style( 'hamb', get_template_directory_uri() . '/assets/css/hamburgers/hamburgers.min.css' );


    wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/assets/fonts/icomoon/style.css' );


    wp_enqueue_style( 'servicecss', get_template_directory_uri() . '/assets/css/styleService.css' );

    wp_enqueue_style( 'gallery-grid-css', get_template_directory_uri() . '/gallery-grid.css' );

    wp_enqueue_style( 'gallery-grid2', get_template_directory_uri() . 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap' );

    wp_enqueue_style( 'gallery-grid3', get_template_directory_uri() .
    'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css' );
//    wp_enqueue_style( 'about', get_template_directory_uri() . '/assets/about/style.css' );
//    wp_enqueue_style( 'contacts', get_template_directory_uri() . '/assets/contacts/style.css' );
//    wp_enqueue_style( 'galery', get_template_directory_uri() . '/assets/galery/style.css' );
//    wp_enqueue_style( 'service', get_template_directory_uri() . '/assets/service/style.css' );
    wp_enqueue_script( 'js', get_template_directory_uri() . '/assets/scripts/scripts.js' , array(), '20151215', true );

    wp_enqueue_script( 'addServiceItem', get_template_directory_uri() . '/assets/scripts/addServiceItem.js', array(), '20151215', true );

    wp_enqueue_script( 'script-all', get_template_directory_uri() . '/assets/js/scripts-all.js', array(), '20151215', true );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/scripts/scripts.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'strategy_assets' );

show_admin_bar(false);


add_theme_support( 'post-thumbnails' );

add_theme_support( 'post-thumbnails', array( 'work' ) );
?>
