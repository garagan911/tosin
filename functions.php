<?php
/**
 * tappengine-afterglow functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tappengine-afterglow
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'tappengine_afterglow_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tappengine_afterglow_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tappengine-afterglow, use a find and replace
		 * to change 'tappengine-afterglow' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tappengine-afterglow', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */

        /*
         * Google Fonts init
         */
		add_theme_support( 'title-tag' );

        function wpb_add_google_fonts()
        {
            wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap', false);
        }

        add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');


        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
		add_theme_support( 'post-thumbnails' );


		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'tappengine-afterglow' ),
                'footer_menu' => 'afterglow-menu-footer',
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
				'tappengine_afterglow_custom_background_args',
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
add_action( 'after_setup_theme', 'tappengine_afterglow_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tappengine_afterglow_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tappengine_afterglow_content_width', 640 );
}
add_action( 'after_setup_theme', 'tappengine_afterglow_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tappengine_afterglow_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tappengine-afterglow' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tappengine-afterglow' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tappengine_afterglow_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tappengine_afterglow_scripts() {
	wp_enqueue_style( 'tappengine-afterglow-style', get_stylesheet_uri(), array(), _S_VERSION );

	/**
	 * Style theme Tappengine Afterglow
	 */
    wp_enqueue_style( 'tappengine-style', get_template_directory_uri() . '/assets/style/css/style.css',false,'1.1','all');

	wp_style_add_data( 'tappengine-afterglow-style', 'rtl', 'replace' );

	wp_enqueue_script( 'tappengine-afterglow-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    /**
     * JS theme Tappengine Afterglow
     */

    if (is_page(369)) {
        // Init lottie
        wp_enqueue_script( 'enhod-lottie-player', get_template_directory_uri() . '/assets/js/lottie/lottie-player.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'enhod-lottie', get_template_directory_uri() . '/assets/js/lottie/lottie.min.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'enhod-lottie-init', get_template_directory_uri() . '/assets/js/lottie-animation.js', array(), _S_VERSION, true );
    }
    if (is_page(427)) {
        wp_enqueue_script( 'enhod-custom-select', get_template_directory_uri() . '/assets/js/custom-select.js', array(), _S_VERSION, true );
    }



    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tappengine_afterglow_scripts' );

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

