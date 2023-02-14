<?php

// Consultas reutilizables  
require get_template_directory().'/inc/queries.php';

// Regitra la hojas de estilos del tema

function themes_enqueue_style(){

       
        // Normalize.css
        wp_enqueue_style( 'normalize', get_stylesheet_directory_uri().'/css/normalize.css',array(), '8.0.1');
        // Fuente de google 
        wp_enqueue_style( 'Roboto-noto sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100&family=Open+Sans:ital,wght@0,300;1,300&family=Prata&family=Roboto:wght@300&display=swap');
        // Bootstrap via CDN
        wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
        // animate 
        wp_enqueue_style( 'animate', get_stylesheet_directory_uri().'/css/animate.css', array(), '6.1.1');
        // owl corousel 
        wp_enqueue_style( 'owlcorousel', get_stylesheet_directory_uri().'/css/owl.carousel.min.css',array(), '2.3.0');
        // owl theme 
        wp_enqueue_style( 'owlTheme', get_stylesheet_directory_uri().'/css/owl.theme.default.min.css',array(), '2.2.1');
        // magnific  Popup is a responsive lightbox & dialog script 
        wp_enqueue_style( 'magnific', get_stylesheet_directory_uri().'/css/magnific-popup.css',array(), '6.1.1');
        // aos  Animate On Scroll Library  
        wp_enqueue_style( 'aos', get_stylesheet_directory_uri().'/css/aos.css',array(), null);
        // ionicons Open source icons  
        wp_enqueue_style( 'ionicons', get_stylesheet_directory_uri().'/css/ionicons.min.css',array(), '4.0.0');
        // bootstrap-datepicker  
        wp_enqueue_style( 'bootstrap-datepicker', get_stylesheet_directory_uri().'/css/bootstrap-datepicker.css',array(), '2.0.0');
        // timepicker  
        wp_enqueue_style( 'query-timepicker', get_stylesheet_directory_uri().'/css/jquery.timepicker.css',array(), null);
        // Flaticon
        wp_enqueue_style( 'flaticon', get_stylesheet_directory_uri().'/css/flaticon.css',array(), '6.1.1');
        // icomoon 
        wp_enqueue_style( 'icomoon', get_stylesheet_directory_uri().'/css/icomoon.css',array(), null);
        // style.css
         wp_enqueue_style('style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'themes_enqueue_style');

// Regitra scripts del tema

function themes_enqueue_scripts(){
    // jquery
    wp_enqueue_script('jquery');
   
    // Bootstrap via CDN
    wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array('jquery'),'5.3',true);
    // popper.min.js
    wp_enqueue_script('popperjs', get_template_directory_uri().'/js/popper.min.js', array('jquery'), null, true);
    // jquery.easing.1.3.js
    wp_enqueue_script('jquery-easingjs', get_template_directory_uri().'/js/jquery.easing.1.3.js', array('jquery'), null, true);
    // jquery.waypoints.min.js
    wp_enqueue_script('jquery-waypointsjs', get_template_directory_uri().'/js/jquery.waypoints.min.js', array('jquery'), null, true);
    //jquery.stellar.min.js
    wp_enqueue_script('jquery-stellarjs', get_template_directory_uri().'/js/jquery.stellar.min.js', array('jquery'), null, true);
    //owl.carousel.min.js
    wp_enqueue_script('owl-carouseljs', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), null, true);
    //jquery.magnific-popup.min.js
    wp_enqueue_script('jquery-magnificjs', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
    //<script src="js/aos.js"></script>
    wp_enqueue_script('aosjs', get_template_directory_uri().'/js/aos.js', array(), null, true);
    // jquery.animateNumber.min.js
    wp_enqueue_script('jquery-animateNumberjs', get_template_directory_uri().'/js/jquery.animateNumber.min.js', array('jquery'), null, true);
    //bootstrap-datepicker.js
    wp_enqueue_script('bootstrap-datepickerjs', get_template_directory_uri().'/js/bootstrap-datepicker.js', array('jquery'), null, true);
    //jquery.timepicker.min.js
    wp_enqueue_script('jquery-timepicker', get_template_directory_uri().'/js/jquery.timepicker.min.js', array('jquery'), null, true);
    //scrollax.min.js
    wp_enqueue_script('scrollaxjs', get_template_directory_uri().'/js/scrollax.min.js', array('jquery'), null, true);
    // googleapi
    wp_enqueue_script('googleapi', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false');
    //google-map.js
    wp_enqueue_script('google-mapjs', get_template_directory_uri().'/js/google-map.js', array('jquery'), null, true);
    //main.js
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), null, true);



}


add_action( 'wp_enqueue_scripts', 'themes_enqueue_scripts');

// Agrega el soporte para el logo

add_theme_support( 'custom-logo', array(
    //ALTO
    'height'      => 50,
    //ANCHO
    'width'       => 250,
    //PERMITIR FLEXIBILIDAD EN EL TAMAÑO
	'flex-height' => true,
    'flex-width'  => true,
    //
	'header-text' => array( 'site-title', 'site-description' ),
) );    

// Menus 
function mytheme_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'estheticsThemeWp' ),
        'footer_menu'  => __( 'Footer Menu', 'estheticsThemeWp' ),
        'social_menu'  => __( 'Social Menu', 'estheticsThemeWp' )
    ) );
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 3 );


add_filter('nav_menu_css_class' , 'theme_nav_class' , 10 , 2);
 
function theme_nav_class($classes, $item){
    $classes[] = 'nav-item';
    return $classes;
}

/**
 * Funciones generales 
 *
 */

function theme_setup (){

    // Agregar soporte a Imagen destacada
    add_theme_support( 'post-thumbnails' );

    // Etiqueta de titulo SEO
    add_theme_support( 'title-tag' );

    // Tamaño de la imagenes
    add_image_size( 'post', 480, 328, true );
    
    add_image_size( 'mediumlarge', 750, 490, true );

    add_image_size( 'long', 1200 , 900 , true );

    add_image_size( 'header_image', 1900 , 500, true );

    add_image_size( 'specialist', 280 , 380, true );

    add_image_size( 'gallery', 280 , 280, true );


}

add_action('after_setup_theme', 'theme_setup');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Habilitar los widgets
 *
 */
function theme_add_widgets(){

    register_sidebar( array(
        'name' =>'Footer Widget',
        'id' => 'footer_widget',
        'description' => 'Widget para el Footer del tema',
        //DIVs del sidebar en documento HTML
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="wodget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>'Question Widget',
        'id' => 'question_widget',
        'description' => 'Widget para la seccion Have Question del footer',
        //DIVs del sidebar en documento HTML
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="wodget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar(array(
        'name' => 'Sidebar posts',
        'id' => 'recentpost_w',
        'description' => 'Widget mostrar los ultimos post',
        'before_widget'=>'<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'

    ));

    register_sidebar(array(
        'name' => 'Custom posts widget',
        'id' => 'widget_posts',
        'description' => 'Widget Personalizado mostrar los ultimos post ',
        'before_widget'=>'<div class="widget">',
        'after_widget' => '</div>',
        

    ));


}

add_action( 'widgets_init', 'theme_add_widgets' );

?>

