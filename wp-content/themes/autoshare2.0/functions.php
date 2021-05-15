<?php
/**
 * autoshare functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package autoshare
 */

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

if ( ! function_exists( 'autoshare_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function autoshare_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on autoshare, use a find and replace
		 * to change 'autoshare' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'autoshare', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'autoshare' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'autoshare_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'autoshare_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function autoshare_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'autoshare_content_width', 640 );
}
add_action( 'after_setup_theme', 'autoshare_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function autoshare_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'autoshare' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'autoshare' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'autoshare_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function autoshare_scripts() {

    wp_enqueue_style( 'autoshare-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'autoshare-all-min', get_template_directory_uri() . '/css/all.min.css' );
	wp_enqueue_style( 'autoshare-slider-style', get_template_directory_uri() . '/css/slider.css' );
	wp_enqueue_style( 'autoshare-slidervsa-style', get_template_directory_uri() . '/css/slidervsa.css' );
    wp_enqueue_style( 'autoshare-main-style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'autoshare-foot-style', get_template_directory_uri() . '/css/style-foot.css' );
    wp_enqueue_style( 'autoshare-head-style', get_template_directory_uri() . '/css/style-head.css' );

    //wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.js', array('jquery'));
    wp_enqueue_script('jquery-cdn',  get_template_directory_uri() . '/js/jquery.js', array('jquery'));
	wp_enqueue_script( 'autoshare-bootstrapjs', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '1.0', false );
    wp_enqueue_script( 'autoshare-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'autoshare-slidervsa', get_template_directory_uri() . '/js/slidervsa.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'autoshare-slider', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', false );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'autoshare_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



