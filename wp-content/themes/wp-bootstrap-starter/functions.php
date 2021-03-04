<?php
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! function_exists( 'wp_bootstrap_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_bootstrap_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wp-bootstrap-starter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wp-bootstrap-starter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    function wp_boostrap_starter_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'wp_boostrap_starter_add_editor_styles' );

}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_starter_setup' );


/**
 * Add Welcome message to dashboard
 */
function wp_bootstrap_starter_reminder(){
        $theme_page_url = 'https://afterimagedesigns.com/wp-bootstrap-starter/?dashboard=1';

            if(!get_option( 'triggered_welcomet')){
                $message = sprintf(__( 'Welcome to WP Bootstrap Starter Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'wp-bootstrap-starter' ),
                    esc_url( $theme_page_url )
                );

                printf(
                    '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
                    $message
                );
                add_option( 'triggered_welcomet', '1', '', 'yes' );
            }

}
add_action( 'admin_notices', 'wp_bootstrap_starter_reminder' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_starter_content_width', 1170 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_starter_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-starter' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'wp-bootstrap-starter' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'wp-bootstrap-starter' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'wp-bootstrap-starter' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wp_bootstrap_starter_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts() {
	// load bootstrap css
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' );
        wp_enqueue_style( 'wp-bootstrap-starter-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css' );
    } else {
        wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'wp-bootstrap-starter-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/fontawesome.min.css' );
    }
	// load bootstrap css
	// load AItheme styles
	// load WP Bootstrap Starter styles
	wp_enqueue_style( 'wp-bootstrap-starter-style', get_stylesheet_uri() );
    if(get_theme_mod( 'theme_option_setting' ) && get_theme_mod( 'theme_option_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'theme_option_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/'.get_theme_mod( 'theme_option_setting' ).'.css', false, '' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-lora') {
        wp_enqueue_style( 'wp-bootstrap-starter-poppins-lora-font', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-merriweather') {
        wp_enqueue_style( 'wp-bootstrap-starter-montserrat-merriweather-font', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900|Montserrat:300,400,400i,500,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-poppins') {
        wp_enqueue_style( 'wp-bootstrap-starter-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'roboto-roboto') {
        wp_enqueue_style( 'wp-bootstrap-starter-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'arbutusslab-opensans') {
        wp_enqueue_style( 'wp-bootstrap-starter-arbutusslab-opensans-font', 'https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'oswald-muli') {
        wp_enqueue_style( 'wp-bootstrap-starter-oswald-muli-font', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800|Oswald:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-opensans') {
        wp_enqueue_style( 'wp-bootstrap-starter-montserrat-opensans-font', 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'robotoslab-roboto') {
        wp_enqueue_style( 'wp-bootstrap-starter-robotoslab-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700|Roboto:300,300i,400,400i,500,700,700i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) && get_theme_mod( 'preset_style_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_style_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/typography/'.get_theme_mod( 'preset_style_setting' ).'.css', false, '' );
    }
    //Color Scheme
    /*if(get_theme_mod( 'preset_color_scheme_setting' ) && get_theme_mod( 'preset_color_scheme_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_color_scheme_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/'.get_theme_mod( 'preset_color_scheme_setting' ).'.css', false, '' );
    }else {
        wp_enqueue_style( 'wp-bootstrap-starter-default', get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/blue.css', false, '' );
    }*/

	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_script('wp-bootstrap-starter-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1/dist/umd/popper.min.js', array(), '', true );
    	wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', array(), '', true );
    } else {
        wp_enqueue_script('wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
        wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
    }
    wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );
	wp_enqueue_script( 'wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
    }
    
    wp_register_script( 'filter', get_stylesheet_directory_uri() . '/filter.js', array( 'jquery' ), time(), true );
    wp_enqueue_script( 'filter' );
    wp_localize_script( 'truescript', 'true_obj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_scripts' );



/**
 * Add Preload for CDN scripts and stylesheet
 */
function wp_bootstrap_starter_preload( $hints, $relation_type ){
    if ( 'preconnect' === $relation_type && get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        $hints[] = [
            'href'        => 'https://cdn.jsdelivr.net/',
            'crossorigin' => 'anonymous',
        ];
        $hints[] = [
            'href'        => 'https://use.fontawesome.com/',
            'crossorigin' => 'anonymous',
        ];
    }
    return $hints;
} 

add_filter( 'wp_resource_hints', 'wp_bootstrap_starter_preload', 10, 2 );



function wp_bootstrap_starter_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( home_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "wp-bootstrap-starter" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "wp-bootstrap-starter" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "wp-bootstrap-starter" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter( 'the_password_form', 'wp_bootstrap_starter_password_form' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}



add_action( 'wp_ajax_building_filter', 'building_filter_function' ); 
add_action( 'wp_ajax_nopriv_building_filter', 'building_filter_function' );
 

function building_filter_function(){


    $taxonomies = get_taxonomies();;

    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'building',
        'meta_key'      => 'environmental_friendliness',
        'orderby'       => 'meta_value_num',
        'order'         => 'ASC',
        'posts_per_page' => 5,
        'paged'     => $paged
    );

	if( 
        isset( $_POST['floor_min'] ) && $_POST['floor_min'] || 
        isset( $_POST['floor_max'] ) && $_POST['floor_max']  ||
        isset( $_POST['bulding_type'] ) 
        ){
            $args['meta_query'] = array( 'relation'=>'AND' ); // AND means that all conditions of meta_query should be true
        }
   

    // if both minimum price and maximum price are specified we will use BETWEEN comparison
    if( isset( $_POST['floor_min'] ) && $_POST['floor_min'] && isset( $_POST['floor_max'] ) && $_POST['floor_max'] ) {
        $args['meta_query'][] = array(
            'key' => 'floors',
            'value' => array( $_POST['floor_min'], $_POST['floor_max'] ),
            'type' => 'numeric',
            'compare' => 'between'
        );
    } else {
        // if only min price is set
        if( isset( $_POST['floor_min'] ) && $_POST['floor_min'] )
            $args['meta_query'][] = array(
                'key' => 'floors',
                'value' => $_POST['floor_min'],
                'type' => 'numeric',
                'compare' => '>='
            );

        // if only max price is set
        if( isset( $_POST['floor_max'] ) && $_POST['floor_max'] )
            $args['meta_query'][] = array(
                'key' => 'floors',
                'value' => $_POST['floor_max'],
                'type' => 'numeric',
                'compare' => '<='
            );
    }

    if( isset( $_POST[ 'bulding_type' ] ) && $_POST[ 'bulding_type' ] !='all') {
        $args[ 'meta_query' ][] = array(
            array(
                'key' => 'bulding_type',
                'value' => $_POST['bulding_type']
            )
        );
    }


    $query = new WP_Query($args);
    if ($query->have_posts()) :

        while ($query->have_posts()) : $query->the_post();
            get_template_part( 'real-estate-template-parts/content', 'building' );
        endwhile; 
    else :
        echo 'No found, change filters'; 
    endif; 
    $numberPages = $query->max_num_pages;

    if ($numberPages > 1):
        for ($i = 1; $i <= $numberPages; $i++) {
            echo '<div class="col-md-12"><nav aria-label="Page navigation example"><ul class="pagination">';
            for ($i = 1; $i <= $numberPages; $i++) {
                echo '<li class="page-item '.(($paged ==$i)?'active':"").'"><a name="page" href="#" class="page-link" value="' . $i . '">'
                . $i . '</a></li>'; 
                }
                echo '</ul></nav><div>';
            }
    endif; 
   
    wp_reset_query();

    die();
}


add_action( 'wp_ajax_premises_filter', 'premises_filter_function' ); 
add_action( 'wp_ajax_nopriv_premises_filter', 'premises_filter_function' );
 

function premises_filter_function(){
    //premises filter
    $paged = $_POST['page'];
    $parent_id = $_POST['parent_id'];
    $premises_posts = get_field('premises', $parent_id);

    $args = array(
        'post_type' => 'premises',
        'orderby' => 'date',
        'order'    => 'DESC',
        'posts_per_page' => 5,
        'post__in'=>$premises_posts,
        'paged'     => $paged
    );

	if( 
        isset( $_POST['area_min'] ) && $_POST['area_min'] || 
        isset( $_POST['area_max'] ) && $_POST['area_max']  ||
        isset( $_POST['rooms_from'] ) && $_POST['rooms_from'] || 
        isset( $_POST['rooms_to'] ) && $_POST['rooms_to']  ||
        isset( $_POST['bathroom'] ) ||
        isset( $_POST['balcony'] )
        ){
            $args['meta_query'] = array( 'relation'=>'AND' ); // AND means that all conditions of meta_query should be true
        }

    // if both minimum price and maximum price are specified we will use BETWEEN comparison
    if( isset( $_POST['area_min'] ) && $_POST['area_min'] && isset( $_POST['area_max'] ) && $_POST['area_max'] ) {
        $args['meta_query'][] = array(
            'key' => 'area',
            'value' => array( $_POST['area_min'], $_POST['area_max'] ),
            'type' => 'numeric',
            'compare' => 'between'
        );
    } else {
        // if only min price is set
        if( isset( $_POST['area_min'] ) && $_POST['area_min'] )
            $args['meta_query'][] = array(
                'key' => 'area',
                'value' => $_POST['area_min'],
                'type' => 'numeric',
                'compare' => '>='
            );

        // if only max price is set
        if( isset( $_POST['area_max'] ) && $_POST['area_max'] )
            $args['meta_query'][] = array(
                'key' => 'area',
                'value' => $_POST['area_max'],
                'type' => 'numeric',
                'compare' => '<='
            );
    }


     if( isset( $_POST['rooms_from'] ) && $_POST['rooms_from'] && isset( $_POST['rooms_to'] ) && $_POST['rooms_to'] ) {
        $args['meta_query'][] = array(
            'key' => 'rooms_count',
            'value' => array( $_POST['rooms_from'], $_POST['rooms_to'] ),
            'type' => 'numeric',
            'compare' => 'between'
        );
    } else {
        if( isset( $_POST['rooms_from'] ) && $_POST['rooms_from'] )
            $args['meta_query'][] = array(
                'key' => 'rooms_count',
                'value' => $_POST['rooms_from'],
                'type' => 'numeric',
                'compare' => '>='
            );

        if( isset( $_POST['rooms_to'] ) && $_POST['rooms_to'] )
            $args['meta_query'][] = array(
                'key' => 'rooms_count',
                'value' => $_POST['rooms_to'],
                'type' => 'numeric',
                'compare' => '<='
            );
    }

    if( isset( $_POST[ 'bathroom' ] ) && $_POST[ 'bathroom' ] !='all') {
        $args[ 'meta_query' ][] = array(
            array(
                'key' => 'bathroom',
                'value' => $_POST['bathroom']
            )
        );
    }

    if( isset( $_POST[ 'balcony' ] ) && $_POST[ 'balcony' ] !='all') {
        $args[ 'meta_query' ][] = array(
            array(
                'key' => 'balcony',
                'value' => $_POST['balcony']
            )
        );
    }

    
    $query = new WP_Query($args);

    if ($query->have_posts()) :

        while ($query->have_posts()) : $query->the_post();
            get_template_part( 'real-estate-template-parts/content', 'premises' );
        endwhile; 
    else :
        echo 'No found, change filters'; 
    endif; 
    $numberPages = $query->max_num_pages;

    if ($numberPages > 1):
        for ($i = 1; $i <= $numberPages; $i++) {
            echo '<div class="col-md-12"><nav aria-label="Page navigation example"><ul class="pagination">';
            for ($i = 1; $i <= $numberPages; $i++) {
                echo '<li class="page-item '.(($paged ==$i)?'active':"").'"><a name="page" href="#" class="page-link" value="' . $i . '">'
                . $i . '</a></li>'; 
                }
                echo '</ul></nav><div>';
            }
    endif; 
   
    wp_reset_query();

    die();
}
