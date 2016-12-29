<?php
/**
 * britedecking functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package britedecking
 */

if ( ! function_exists( 'britedecking_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function britedecking_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on britedecking, use a find and replace
	 * to change 'britedecking' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'britedecking', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'britedecking' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'britedecking_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'britedecking_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function britedecking_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'britedecking_content_width', 640 );
}
add_action( 'after_setup_theme', 'britedecking_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function britedecking_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'britedecking' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'britedecking' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'britedecking_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function britedecking_scripts() {
	//wp_enqueue_style( 'britedecking-style', get_stylesheet_uri() );
	wp_enqueue_style( 'britedecking-normalize', get_template_directory_uri().'/css/normalize.min.css' );
	wp_enqueue_style( 'britedecking-styles', get_template_directory_uri().'/css/styles.css' );
	wp_enqueue_style( 'britedecking-font-awesome', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_enqueue_style( 'britedecking-jquery-sidr-light', get_template_directory_uri().'/css/jquery.sidr.light.css' );
	wp_enqueue_style( 'britedecking-mediaelementplayer', get_template_directory_uri().'/js/media/mediaelementplayer.min.css' );
	wp_enqueue_style( 'britedecking-owl-carousel', get_template_directory_uri().'/js/owl-carousel/owl.carousel.css' );
	wp_enqueue_style( 'britedecking-fancybox', get_template_directory_uri().'/js/fancybox/jquery.fancybox.css?v=2.1.4' );
	wp_enqueue_style( 'britedecking-mosaic', get_template_directory_uri().'/css/mosaic.css' );
	wp_enqueue_style( 'britedecking-responsive', get_template_directory_uri().'/css/responsive.css' );
	wp_enqueue_style( 'britedecking-rs-plugin', get_template_directory_uri().'/css/rs-plugin.css' );
	wp_enqueue_style( 'britedecking-rs-settings', get_template_directory_uri().'/js/rs-plugin/css/settings.css' );
	wp_enqueue_style( 'britedecking-tooltipster', get_template_directory_uri().'/css/tooltipster.css' );
	wp_enqueue_style( 'britedecking-mega', get_template_directory_uri().'/css/mega.css' );
	wp_enqueue_style( 'britedecking-skin1', get_template_directory_uri().'/css/skin1.css' );
	wp_enqueue_style( 'britedecking-full', get_template_directory_uri().'/css/full.css' );
	wp_enqueue_style( 'britedecking-custom', get_template_directory_uri().'/css/custom.css' );


	

	wp_enqueue_script( 'britedecking-jquery', get_template_directory_uri() . '/js/vendor/jquery-1.8.3.min.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-jquery-themepunch', get_template_directory_uri() . '/js/rs-plugin/js/jquery.themepunch.tools.min.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-revolution', get_template_directory_uri() . '/js/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-sidr', get_template_directory_uri() . '/js/jquery.sidr.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.js?v=2.1.4', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-cleantabs', get_template_directory_uri() . '/js/cleantabs.jquery.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-fitvids', get_template_directory_uri() . '/js/fitvids.min.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-scrollup', get_template_directory_uri() . '/js/jquery.scrollUp.min.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-mediaelement', get_template_directory_uri() . '/js/media/mediaelement-and-player.min.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-owl-carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-owl-selectivizr', get_template_directory_uri() . '/js/selectivizr-min.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-placeholder', get_template_directory_uri() . '/js/placeholder.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-mosaic', get_template_directory_uri() . '/js/mosaic.1.0.1.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-isotope', get_template_directory_uri() . '/js/jquery.isotope.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-toggle', get_template_directory_uri() . '/js/toggle.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-tooltipster', get_template_directory_uri() . '/js/jquery.tooltipster.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-countdown', get_template_directory_uri() . '/js/jquery.countdown.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-html5media', get_template_directory_uri() . '/js/html5media.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-slider-1', get_template_directory_uri() . '/js/slider-1.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
	wp_enqueue_script( 'britedecking-modernizer', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', array(), '20151215', false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'britedecking_scripts' );

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
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*Create Product */
require get_template_directory() . '/inc/product.php';