<?php

/*****************************************************************************
 *
 *	copyright(c) - aonetheme.com - Service Finder Team
 *	More Info: http://aonetheme.com/
 *	Coder: Service Finder Team
 *	Email: contact@aonetheme.com
 *
 ******************************************************************************/

 error_reporting( E_WARNING );

$files_array = array(
	get_template_directory() . '/vendor/autoload.php',
	get_template_directory() . '/vendor/jwt/vendor/autoload.php',
	get_template_directory(). '/features.php'
);

// INCLUDES FILES IN ARRAY ONLY IF FILE EXISTS 
array_filter($files_array, function($value, $key) {
	if(file_exists($value)) require_once $value;
}, ARRAY_FILTER_USE_BOTH);

add_action('init', function () {
	$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$uri_segments = explode('/', $uri_path);

	if (@$uri_segments[1] == 'wp-json') {
		if( file_exists( get_template_directory() . "/api/api.php") ){	
			require_once get_template_directory() . "/api/api.php";
		}
	}
	if (@$uri_segments[3] == 'product') {		
		if( file_exists( get_template_directory() . "/api/product_api.php") ){	
			require_once get_template_directory() . "/api/product_api.php";
		}
	}
	if (@$uri_segments[3] == 'zoom') {	
		if( file_exists( get_template_directory() . "/api/zoom_api.php") ) {	
			require_once get_template_directory() . "/api/zoom_api.php";
		}
	}
	if (@$uri_segments[3] == 'blog-post') {		
		if( file_exists( get_template_directory() . "/api/post_api.php")) {
			require_once get_template_directory() . "/api/post_api.php";
		}
	}
});


$timezone = get_option('timezone_string');
if ($timezone != "") {
	date_default_timezone_set($timezone);
}

require get_template_directory() . '/lib/globals.php'; //globals variable function

require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php'; //TGM Plugin activation class

require get_template_directory() . '/lib/genral-functions.php'; //Genral Functions

require get_template_directory() . '/lib/job-filters.php'; //Job manager filters

if (class_exists('WP_Job_Manager')) {
	require get_template_directory() . '/lib/job-actions.php'; //Job manager actions
}

/*Function that call on theme setup*/
function service_finder_theme_setup()
{
	global $wpdb, $service_finder_Tables, $service_finder_ThemeParams, $current_template;

	if (service_finder_theme_check_new_client()) {
		$pageid = service_finder_get_pageid_by_title('Service Finder Home');

		if ($pageid > 0 && !get_option('page_on_front') > 0) {
			update_option('show_on_front', 'page');
			update_option('page_on_front', $pageid);
		}
	}

	$service_finder_ThemeParams = array(
		'themeImgUrl' => get_template_directory_uri() . '/inc/images',
		'homeUrl' =>  home_url('/'),
		'role' =>  array(
			'provider' => esc_html('Provider'),
			'customer' => esc_html('Customer'),
		),
	);

	$current_template = basename(get_page_template());

	add_theme_support('align-wide');

	add_theme_support('custom-header');

	add_theme_support('custom-background');

	add_theme_support('automatic-feed-links');

	add_theme_support('title-tag');

	add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'));

	add_theme_support('post-thumbnails');

	add_theme_support('wp-block-styles');

	add_theme_support('responsive-embeds');

	add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));

	add_theme_support('custom-logo', array('height' => 54, 'width'  => 148));

	//add_theme_support( 'menus' );

	add_theme_support('editor-color-palette', array(
		array(
			'name' => 'dark blue',
			'slug' => 'dark-blue',
			'color' => '#1767ef'
		),
		array(
			'name' => 'light gray',
			'slug' => 'light-gray',
			'color' => '#eee'
		),
		array(
			'name' => 'dark gray',
			'slug' => 'dark-gray',
			'color' => '#444'
		)
	));

	add_editor_style(array('inc/css/custom-editor-style.css'));

	//Size for single blog page and standard blog page
	add_image_size('service_finder-blog-thumbimage', 850, 400, true);

	//Size for single blog page, no sidebar blog page
	add_image_size('service_finder-blog-no-sidebar', 600, 450, true);

	//Size for latest blog on Not for Home Page
	add_image_size('service_finder-blog-home-page', 554, 261, true);

	update_option('default_comment_status', 'open');

	register_nav_menus(array(
		'primary' => esc_html__('Primary Menu', 'service-finder'),
	));

	// Add multilanguage support

	load_theme_textdomain('service-finder', get_template_directory() . '/languages');

	/*Start Integrating Redux Framework*/
	if (!class_exists('ReduxFramework') && class_exists('ReduxFrameworkPlugin') && file_exists(WP_PLUGIN_DIR . '/redux-framework/ReduxCore/framework.php')) {
		require_once(WP_PLUGIN_DIR . '/redux-framework/ReduxCore/framework.php');
	}

	if (!isset($redux_demo) && class_exists('ReduxFrameworkPlugin') && file_exists(get_template_directory() . '/lib/options.php')) {
		load_theme_textdomain('service-finder', WP_PLUGIN_DIR . '/redux-framework/ReduxCore/languages');
		require_once(get_template_directory() . '/lib/options.php');
	}
	/*End Integrating Redux Framework*/


	// Check if the menu exists
	$menu_exists_first = wp_get_nav_menu_object('Primary Menu');

	// If it doesn't exist, let's create it.
	if (!$menu_exists_first) {
		$menu_id = wp_create_nav_menu('Primary Menu');

		// Set up default menu items
		wp_update_nav_menu_item($menu_id, 0, array(
			'menu-item-title' =>  esc_html__('Home', 'service-finder'),
			'menu-item-classes' => 'home',
			'menu-item-url' => home_url('/'),
			'menu-item-status' => 'publish'
		));

		wp_update_nav_menu_item($menu_id, 0, array(
			'menu-item-title' =>  esc_html__('Sample Page', 'service-finder'),
			'menu-item-url' => home_url('/sample-page/'),
			'menu-item-status' => 'publish'
		));
	}

	if (!isset($content_width)) {
		$content_width = 1170;
	}

	/*Enable woocommerce support*/
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'service_finder_theme_setup');

/*Filter to change from emailid in wpmail function*/
$service_finder_options = get_option('service_finder_options');
$from_email = (!empty($service_finder_options['from-email'])) ? $service_finder_options['from-email'] : '';
if ($from_email != "") {
	add_filter('wp_mail_from', 'service_finder_wp_mail_from');
	function service_finder_wp_mail_from($original_email_address)
	{
		global $service_finder_options;
		$from_email = (!empty($service_finder_options['from-email'])) ? $service_finder_options['from-email'] : '';
		return $from_email;
	}
}

/*Filter to change from name in wpmail function*/
$from_name = (!empty($service_finder_options['from-name'])) ? $service_finder_options['from-name'] : '';
if ($from_name != "") {
	add_filter('wp_mail_from_name', 'service_finder_wp_mail_from_name');
	function service_finder_wp_mail_from_name($original_email_from)
	{
		global $service_finder_options;
		$from_name = (!empty($service_finder_options['from-name'])) ? $service_finder_options['from-name'] : '';
		return $from_name;
	}
}

/* All css files used for the theme */
function service_finder_sedateAddStyle()
{
	global $wp_customize, $service_finder_options;
	$writabledir = get_template_directory() . '/inc/caches/';
	$css_dir = get_template_directory() . '/inc/css/';
	$cssname = service_finder_scan_dir($css_dir) . '.css';

	/*Core CSS Files*/
	if (is_rtl()) {
		wp_register_style('bootstrap', get_template_directory_uri() . '/inc/css/bootstrap-arabic.min.css', '', null);
	} else {
		wp_register_style('bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css', '', null);
	}

	wp_register_style('bootstrap-toggle', get_template_directory_uri() . '/inc/css/bootstrap-toggle.min.css', '', null); //Not for Not for Home Page

	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/inc/css/fontawesome/css/font-awesome.min.css', '', null);
	
	wp_enqueue_style('feather', get_template_directory_uri() . '/inc/css/feather.css', '', null);

	wp_enqueue_style('simple-line-icons', get_template_directory_uri() . '/inc/css/simple-line-icons.css', '', null);

	wp_register_style('animate', get_template_directory_uri() . '/inc/css/animate.css', '', null); //Not for Not for Home Page

	wp_register_style('carousel', get_template_directory_uri() . '/inc/css/owl.carousel.css', '', null);

	wp_register_style('fileinput', get_template_directory_uri() . '/inc/css/fileinput.min.css', '', null); //Not for Home Page

	wp_register_style('magnific-popup', get_template_directory_uri() . '/inc/css/magnific-popup.css', '', null); //Not for Home Page

	wp_register_style('bootstrap-slider', get_template_directory_uri() . '/inc/css/bootstrap-slider.min.css', '', null);

	wp_register_style('custom-scrollbar', get_template_directory_uri() . '/inc/css/m-custom-scrollbar.min.css', '', null); //Not for Home Page

	wp_register_style('service_finder-woocommerce', get_template_directory_uri() . '/inc/css/woocommerce.css', '', null); //Not for Home Page

	// Main Stylesheet CSS
	wp_register_style('service_finder-css-style', get_stylesheet_directory_uri() . '/style.css', '', null);

	wp_register_style('service_finder-css-rounded', get_template_directory_uri() . '/inc/css/rounded.css', '', null);

	wp_register_style('service_finder-css-preview-data', get_template_directory_uri() . '/inc/css/preview.css', '', null);
	
	

	//For RTL Support
	wp_register_style('service_finder-css-rtl', get_template_directory_uri() . '/inc/css/rtl.css', '', null);

	wp_register_style('service_finder-rounded-rtl', get_template_directory_uri() . '/inc/css/rounded-rtl.css', '', null);

	wp_register_style('service_finder-layout3-rtl', get_template_directory_uri() . '/inc/css/layout3-rtl.css', '', null);
	wp_register_style('service_finder-layout4-rtl', get_template_directory_uri() . '/inc/css/layout4-rtl.css', '', null);

	wp_register_style('bootstrapValidator', get_template_directory_uri() . '/inc/css/validator/bootstrapValidator.min.css', '', null);

	wp_register_style('service_finder-layout-3', get_template_directory_uri() . '/inc/css/layout-3.css', '', null);
	wp_register_style('service_finder-layout-4', get_template_directory_uri() . '/inc/css/layout-4.css', '', null);

	wp_register_style('service_finder-curves', get_template_directory_uri() . '/inc/css/curves.css', '', null);
	
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/inc/css/style.css', '', null);

	// wp_enqueue_style('slick-custom-2slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css', '', null);

	// wp_enqueue_style('slick-custom-2-slick-theme-min',  'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css',  '', null);
	
	wp_register_style('custom-css-style', get_stylesheet_directory_uri() . '/inc/css/custom.css', '', null);
	
	
	if (is_author()) {
		if (service_finder_theme_get_data($service_finder_options, 'profile-left-right-curve') == false) {
			wp_enqueue_style('service_finder-curves');
		}
	} else {
		if (service_finder_theme_get_data($service_finder_options, 'left-right-curve') == false) {
			wp_enqueue_style('service_finder-curves');
		}
	}


	wp_enqueue_style('bootstrap');

	if (!(is_home() || is_front_page())) {
		wp_enqueue_style('bootstrap-toggle');
		wp_enqueue_style('animate');
		wp_enqueue_style('fileinput');
		wp_enqueue_style('magnific-popup');
		wp_enqueue_style('service_finder-woocommerce');
	}

	wp_enqueue_style('custom-scrollbar');

	wp_enqueue_style('carousel');
	wp_enqueue_style('bootstrap-slider');
	wp_enqueue_style('service_finder-css-style');
	wp_enqueue_style('service_finder-layout-third');
	wp_enqueue_style('custom-css-style');

	if (service_finder_themestyle_fortheme() == 'style-2') {
		wp_enqueue_style('service_finder-css-rounded');
	}
	if (service_finder_themestyle_fortheme() == 'style-3') {
		wp_enqueue_style('service_finder-layout-3');
	}
	if (service_finder_themestyle_fortheme() == 'style-4') {
		wp_enqueue_style('service_finder-layout-4');
	}

	if (is_customize_preview() && isset($wp_customize)) {
		wp_enqueue_style('service_finder-css-preview-data');
	}

	if (is_rtl()) {
		wp_enqueue_style('service_finder-css-rtl');

		if (service_finder_themestyle_fortheme() == 'style-2') {
			wp_enqueue_style('service_finder-rounded-rtl');
		} elseif (service_finder_themestyle_fortheme() == 'style-3') {
			wp_enqueue_style('service_finder-layout3-rtl');
		} elseif (service_finder_themestyle_fortheme() == 'style-4') {
			wp_enqueue_style('service_finder-layout4-rtl');
		}
	}

	if (!class_exists('service_finder_booking_plugin')) {
		wp_enqueue_style('bootstrapValidator');
	}


	/*Google fonts*/
	wp_enqueue_style('google-fonts', service_finder_fonts_url(), array(), null);
}
/*Enqueue Styles*/
add_action('wp_enqueue_scripts', 'service_finder_sedateAddStyle');

/* All javascript files used for the theme */
function service_finder_sedateAddScript()
{
	global $post, $service_finder_options;
	$current_template = '';
	if (!empty($post->ID)) {
		$current_template = basename(get_page_template_slug($post->ID));
	}

	/*Theme JS Files*/
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/inc/js/bootstrap.min.js', array('jquery'), null, true);

	wp_enqueue_script('fileinput', get_template_directory_uri() . '/inc/js/fileinput.min.js', array('jquery'), null, true); //Not for Home Page

	if (!(is_home() || is_front_page())) {
		wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/inc/js/jquery.magnific-popup.js', array('jquery'), null, true); //Not for Home Page
	}

	wp_enqueue_script('custom-scrollbar', get_template_directory_uri() . '/inc/js/m-custom-scrollbar.min.js', array('jquery'), null, true); //Not for Home Page

	wp_enqueue_script('carousel', get_template_directory_uri() . '/inc/js/owl.carousel.js', array('jquery'), null, true);

	wp_enqueue_script('bootstrap-slider', get_template_directory_uri() . '/inc/js/bootstrap-slider.min.js', array('jquery'), null, true);

	if (!is_search() && !is_author() && !is_archive() && ($current_template == 'contact-us.php' || $current_template == 'contact-us-v2.php' || $current_template == 'contact-us-v3.php' || $current_template == 'contact-us-v4.php' || $current_template == 'contact-us-v5.php')) {
		if (service_finder_show_map_on_site_fortheme() || service_finder_show_autosuggestion_on_site_fortheme()) {
			$apikey = (!empty($service_finder_options['google-map-api-key'])) ? $service_finder_options['google-map-api-key'] : '';
			//For Google Map API
			wp_enqueue_script('google-map', 'http://maps.googleapis.com/maps/api/js?key=' . esc_html($apikey) . '&libraries=places', array('jquery'), null, true);
		}

		if (!class_exists('service_finder_booking_plugin')) {
			wp_enqueue_script('bootstrap-wizard', get_template_directory_uri() . '/inc/js/jquery.bootstrap.wizard.js', array('jquery'), null, true);

			wp_enqueue_script('bootstrapValidator', get_template_directory_uri() . '/inc/js/validator/bootstrapValidator.min.js', array('jquery'), null, true);
		}

		wp_enqueue_script('service_finder-js-theme-gmapfunctions', get_template_directory_uri() . '/inc/js/gmap/gmapfunctions.js', array('jquery', 'google-map'), null, true);

		wp_enqueue_script('marker-clusterer', get_template_directory_uri() . '/inc/js/gmap/marker-clusterer.js', array('jquery', 'google-map'), null, true);

		wp_enqueue_script('markerinfo', get_template_directory_uri() . '/inc/js/gmap/markerinfo.js', array('jquery', 'google-map'), null, true);

		wp_enqueue_script('modernizr', get_template_directory_uri() . '/inc/js/gmap/modernizr.js', array('jquery', 'google-map'), null, true);

		wp_enqueue_script('marker-spider', get_template_directory_uri() . '/inc/js/gmap/marker-spider.js', array('jquery', 'google-map'), null, true);

		wp_enqueue_script('richmarker-compiled', get_template_directory_uri() . '/inc/js/gmap/richmarker-compiled.js', array('jquery', 'google-map'), null, true);
	}

	//Main js functions used in the theme
	wp_enqueue_script('service_finder-js-custom', get_template_directory_uri() . '/inc/js/custom.js', array('jquery'), null, true);

	wp_enqueue_script('masonry-pkgd-min', get_template_directory_uri() . '/inc/js/masonry.pkgd.min.js', array('jquery'), null, true);

	if (in_array(get_the_ID(), service_finder_get_id_by_shortcodefortheme('[service_finder_my_account'))) {
		wp_enqueue_script('countdown-min', get_template_directory_uri() . '/inc/js/countdown.js', array('jquery'), null, true);
	}

	if (is_rtl()) {
		$rtl = 1;
	} else {
		$rtl = 0;
	}
	wp_add_inline_script('service_finder-js-custom', 'var showfeatureditem; var showblogitem; var rtloption = "' . $rtl . '";', 'before');

	/*Homr page map*/
	if (is_home() || is_front_page()) {
		if (class_exists('service_finder_booking_plugin') && class_exists('ReduxFrameworkPlugin')) {
			$headerstyle = service_finder_header_style();
			if ($headerstyle == 'map') {
				wp_enqueue_script('service_finder-load-home-map', get_template_directory_uri() . '/inc/js/map-load.js', array('jquery'), null, true);
			}
		}
	} else {
		if (class_exists('WP_Job_Manager')) {
			wp_enqueue_script('service_finder-js-job-apply', get_template_directory_uri() . '/inc/js/job-apply.js', array('jquery'), null, true);
		}
	}

	if ((is_singular() && comments_open() && get_option('thread_comments')) || (is_author() && service_finder_theme_get_data($service_finder_options, 'review-system'))) {

		wp_enqueue_script('comment-reply'); // For comment reply

	}
}
/*Enqueue Scripts*/
add_action('wp_enqueue_scripts', 'service_finder_sedateAddScript');

add_action('wp_enqueue_scripts', function(){
	
	// wp_enqueue_script('slick-custom-2',  'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);
	
	wp_enqueue_script('service_finder-js-custom-2', get_template_directory_uri() . '/inc/js/custom2.js', array('jquery'), null, true);

	

}, 999999999999999, 1);

function service_finder_admin_themestyles()
{
	$current_post_type = (isset($_GET['post_type'])) ? $_GET['post_type'] : false;

	if (is_rtl()) {
		wp_enqueue_style('service_finder-redux-admin-rtl', get_template_directory_uri() . '/inc/css/redux-admin-rtl.css', '', null);
	}
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/inc/css/fontawesome/css/font-awesome.css', '', null);

	wp_register_style('bootstrap-toggle', get_template_directory_uri() . '/inc/css/bootstrap-toggle.min.css', '', null);

	wp_register_script('bootstrap-toggle', get_template_directory_uri() . '/inc/js/bootstrap-toggle.min.js', array('jquery'), null, false);

	if (class_exists('WP_Job_Manager') && $current_post_type == 'job_listing') {
		wp_enqueue_script('service_finder-js-job-apply', get_template_directory_uri() . '/inc/js/job-apply.js', array('jquery'), null, true);
	}
}
add_action('admin_enqueue_scripts', 'service_finder_admin_themestyles');

/**
 * Register Google fonts for service finder.
 */
if (!function_exists('service_finder_fonts_url')) {
	function service_finder_fonts_url()
	{
		$service_finder_fonts_url = '';

		$raleway = _x('on', 'Raleway font: on or off', 'service-finder');
		$roboto = _x('on', 'Roboto font: on or off', 'service-finder');
		$open_sans = _x('on', 'Open Sans font: on or off', 'service-finder');
		$poppins = _x('on', 'Poppins font: on or off', 'service-finder');

		if ('off' !== $raleway || 'off' !== $roboto || 'off' !== $open_sans || 'off' !== $poppins) {
			$service_finder_font_families = array();

			if ('off' !== $raleway) {
				$service_finder_font_families[] = 'Raleway:400,100,200,500,600,700,800,900';
			}

			if ('off' !== $roboto) {
				$service_finder_font_families[] = 'Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900';
			}

			if ('off' !== $open_sans) {
				$service_finder_font_families[] = 'Open Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic';
			}

			if ('off' !== $poppins) {
				$service_finder_font_families[] = 'Poppins:300,400,500,600,700';
			}

			$service_finder_query_args = array(
				'family' => urlencode(implode('|', $service_finder_font_families)),
				'subset' => urlencode('latin,latin-ext'),
			);

			$service_finder_fonts_url = add_query_arg($service_finder_query_args, 'https://fonts.googleapis.com/css');
		}
		return esc_url_raw($service_finder_fonts_url);
	}
}

//-----------------------------------------------------
// Widgets Init
//-----------------------------------------------------
function service_finder_widgets_init()
{

	// Primary Sidebars
	register_sidebar(array(
		'name'          => esc_html__('Primary', 'service-finder'),
		'id'            => 'sf-sidebar-primary',
		'before_widget' => '<div class="widget %1$s %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));

	// Primary Sidebars
	register_sidebar(array(
		'name'          => esc_html__('Provider Profile', 'service-finder'),
		'id'            => 'sf-provider-profile',
		'before_widget' => '<div class="widget %1$s %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));

	// Footer 1
	register_sidebar(array(
		'name'          => esc_html__('Footer 1', 'service-finder'),
		'id'            => 'sf-sidebar-footer-1',
		'before_widget' => '<div class="widget %1$s %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));

	// Footer 2
	register_sidebar(array(
		'name'          => esc_html__('Footer 2', 'service-finder'),
		'id'            => 'sf-sidebar-footer-2',
		'before_widget' => '<div class="widget %1$s %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));

	// Footer 3
	register_sidebar(array(
		'name'          => esc_html__('Footer 3', 'service-finder'),
		'id'            => 'sf-sidebar-footer-3',
		'before_widget' => '<div class="widget %1$s %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));

	// Footer 4
	register_sidebar(array(
		'name'          => esc_html__('Footer 4', 'service-finder'),
		'id'            => 'sf-sidebar-footer-4',
		'before_widget' => '<div class="widget %1$s %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	
	register_sidebar(array(
		'name'          => esc_html__('Footer 5', 'service-finder'),
		'id'            => 'sf-sidebar-footer-5',
		'before_widget' => '<div class="widget %1$s %2$s">',
		'after_widget'  => '</div>',
	));
}
add_action('widgets_init', 'service_finder_widgets_init');

//Add class to body tag
function service_finder_body_class($classes)
{
	global $post, $service_finder_globals, $service_finder_options, $current_template;

	$enablesticky = (!empty($service_finder_options['enable-sticky'])) ? $service_finder_options['enable-sticky'] : '';
	$headertemplates = (!empty($service_finder_options['header-templates'])) ? $service_finder_options['header-templates'] : '';
	$enablestickyfooter = (!empty($service_finder_options['enable-sticky-footer'])) ? $service_finder_options['enable-sticky-footer'] : '';

	if ($enablesticky) {
		$classes[] = 'header-fixed';
	}

	if ($enablestickyfooter) {
		$classes[] = 'footer-fixed';
	}

	if ($headertemplates == 'transperent-no-top-bar') {
		$classes[] = 'sf-header-style-7';
	}

	if (is_rtl()) {
		$classes[] = 'sf-rtl';
	} else {
		$classes[] = 'sf-ltr';
	}

	if ($current_template == 'page.php' || is_single() || is_archive() || $current_template == 'blog-grid-3.php' || $current_template == 'blog-grid-2.php' || $current_template == 'blog-standard.php' || is_archive() || is_category() || is_search() || $current_template == 'blog-right-sidebar.php' || $current_template == 'blog-no-sidebar.php' || $current_template == 'blog-left-sidebar.php') {
		$classes[] = 'sf-blog-page-area';
	}

	return $classes;
}
add_filter('body_class', 'service_finder_body_class');

//Add class to single post 
function service_finder_post_class($classes)
{
	global $post, $current_template;

	$themestyle = service_finder_themestyle_fortheme();

	if (!has_post_thumbnail()) {
		$classes[] = 'no-img-post';
	}
	$classes[] = 'blog-post';

	if (is_single()) {
		if ($themestyle == 'style-4') {
			$classes[] = 'post';
			$classes[] = 'blog-post';
			$classes[] = 'blog-detail';
			$classes[] = 'sf-blog-style-1';
		} else {
			$classes[] = 'blog-detail';
		}
	} elseif (is_archive()) {
		if ($themestyle == 'style-4') {
			$classes[] = 'post';
			$classes[] = 'blog-post';
			$classes[] = 'blog-list';
			$classes[] = 'col-md-12';
			$classes[] = 'sf-blog-style-1';
		} else {
			$classes[] = 'blog-md';
		}
	} elseif ($current_template == 'blog-grid-3.php') {
		if ($themestyle == 'style-4') {
			$classes[] = 'post';
			$classes[] = 'blog-post';
			$classes[] = 'blog-grid';
			$classes[] = 'card-container';
			$classes[] = 'col-md-4';
			$classes[] = 'sf-blog-style-1';
		} else {
			$classes[] = 'blog-grid';
			$classes[] = 'blog-grid';
			$classes[] = 'card-container';
			$classes[] = 'col-md-4';
			$classes[] = 'col-sm-4';
			$classes[] = 'col-xs-6';
		}
	} elseif ($current_template == 'blog-grid-2.php') {
		if ($themestyle == 'style-4') {
			$classes[] = 'post';
			$classes[] = 'blog-post';
			$classes[] = 'blog-grid';
			$classes[] = 'card-container';
			$classes[] = 'col-md-6';
			$classes[] = 'sf-blog-style-1';
		} else {
			$classes[] = 'blog-grid';
			$classes[] = 'card-container';
			$classes[] = 'col-md-6';
			$classes[] = 'col-sm-6';
			$classes[] = 'col-xs-6';
		}
	} elseif ($current_template == 'blog-standard.php' || $current_template == 'blog-no-sidebar.php') {
		if ($themestyle == 'style-4') {
			$classes[] = 'post';
			$classes[] = 'blog-post';
			$classes[] = 'blog-list';
			$classes[] = 'col-md-12';
			$classes[] = 'sf-blog-style-1';
		} else {
			$classes[] = 'blog-lg';
		}
	} elseif ($current_template == 'blog-left-sidebar.php') {
		if ($themestyle == 'style-4') {
			$classes[] = 'post';
			$classes[] = 'blog-post';
			$classes[] = 'blog-list';
			$classes[] = 'col-md-12';
			$classes[] = 'sf-blog-style-1';
		} else {
			$classes[] = 'blog-md';
		}
	} elseif ($current_template == 'blog-right-sidebar.php') {
		$classes[] = 'blog-md';
	} elseif (is_archive() || is_category() || is_author() || is_search()) {
		if ($themestyle == 'style-4') {
			$classes[] = 'post';
			$classes[] = 'blog-post';
			$classes[] = 'blog-list';
			$classes[] = 'col-md-12';
			$classes[] = 'sf-blog-style-1';
		} else {
			$classes[] = 'blog-md';
		}
	}

	return $classes;
}
add_filter('post_class', 'service_finder_post_class');


//Remove default sections from customizer
function service_finder_remove_default_sections()
{
	global $wp_customize;
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('background_image');
	$wp_customize->remove_section('colors');
}

add_action('customize_register', 'service_finder_remove_default_sections', 20);

add_action('tgmpa_register', 'service_finder_register_required_plugins');
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function service_finder_register_required_plugins()
{
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => esc_html__('Redux Framework', 'service-finder'), // The plugin name.
			'slug'               => 'redux-framework', // The plugin slug (typically the folder name).
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => esc_html__('Service Finder Booking', 'service-finder'), // The plugin name.
			'slug'               => 'sf-booking', // The plugin slug (typically the folder name).
			'source'             => 'https://aonetheme.com/load-plugins/sf-booking.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '3.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => esc_html__('Service Finder Shortcodes', 'service-finder'), // The plugin name.
			'slug'               => 'sf-shortcodes', // The plugin slug (typically the folder name).
			'source'             => 'https://aonetheme.com/load-plugins/sf-shortcodes.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '3.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => esc_html__('Service Finder Texonomy', 'service-finder'), // The plugin name.
			'slug'               => 'sf-texonomy', // The plugin slug (typically the folder name).
			'source'             => 'https://aonetheme.com/load-plugins/sf-texonomy.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '3.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => esc_html__('WP Job Manager', 'service-finder'), // The plugin name.
			'slug'               => 'wp-job-manager', // The plugin slug (typically the folder name).
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => esc_html__('Comments Ratings', 'service-finder'), // The plugin name.
			'slug'               => 'comments-ratings', // The plugin slug (typically the folder name).
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => esc_html__('Slider Revolution', 'service-finder'), // The plugin name.
			'slug'               => 'revslider', // The plugin slug (typically the folder name).
			'source'             => 'https://aonetheme.com/load-plugins/revslider.zip', // The plugin source.
			'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => esc_html__('WP Job Manager - Alerts', 'service-finder'), // The plugin name.
			'slug'               => 'wp-job-manager-alerts', // The plugin slug (typically the folder name).
			'source'             => 'https://aonetheme.com/load-plugins/wp-job-manager-alerts.zip', // The plugin source.
			'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => esc_html__('Nextend Social Login and Register', 'service-finder'), // The plugin name.
			'slug'               => 'nextend-facebook-connect', // The plugin slug (typically the folder name).
			'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		array(
			'name'               => esc_html__('WordPress Social Login', 'service-finder'), // The plugin name.
			'slug'               => 'wordpress-social-login', // The plugin slug (typically the folder name).
			'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa($plugins, $config);
}

if (!function_exists('service_finder_comment_nav')) {
	function service_finder_comment_nav()
	{
		$post_type = get_post_type(get_the_id());
		// Are there comments to navigate through?
		if (get_comment_pages_count() > 1 && get_option('page_comments')) :
?>

<nav class="navigation comment-navigation" role="navigation">
    <h2 class="screen-reader-text">
        <?php if ($post_type == 'sf_comment_rating') {
						esc_html_e('Review navigation', 'service-finder');
					} else {
						esc_html_e('Comment navigation', 'service-finder');
					} ?>
    </h2>
    <div class="nav-links" id="ajaxpagination">
        <?php

					if ($post_type == 'sf_comment_rating') {
						if ($prev_link = get_previous_comments_link(esc_html__('Older Reviews', 'service-finder'))) :
							printf('<div class="nav-previous">%s</div>', $prev_link);
						endif;

						if ($next_link = get_next_comments_link(esc_html__('Newer Reviews', 'service-finder'))) :
							printf('<div class="nav-next">%s</div>', $next_link);
						endif;
					} else {
						if ($prev_link = get_previous_comments_link(esc_html__('Older Comments', 'service-finder'))) :
							printf('<div class="nav-previous">%s</div>', $prev_link);
						endif;

						if ($next_link = get_next_comments_link(esc_html__('Newer Comments', 'service-finder'))) :
							printf('<div class="nav-next">%s</div>', $next_link);
						endif;
					}
					?>
    </div>
    <!-- .nav-links -->
</nav>
<!-- .comment-navigation -->
<?php
		endif;
	}
}

if (!function_exists('service_finder_render_custome_title')) {
	function service_finder_render_custome_title($title)
	{
		global $service_finder_ThemeParams, $author, $service_finder_options, $page, $paged;
		$page = 1;
		$paged = 1;
		if (is_author() && class_exists('service_finder_booking_plugin') && service_finder_getUserRole($author) == 'Provider') {
			$getProvider = new SERVICE_FINDER_searchProviders();
			$providerInfo = $getProvider->service_finder_getProviderInfo(esc_attr($author));

			$fullname = $providerInfo->full_name;

			$categories = $providerInfo->category_id;
			$cats = explode(',', $categories);
			$displaycat = '';
			if (!empty($cats)) {
				foreach ($cats as $catid) {
					$displaycat .= service_finder_getCategoryName($catid) . ',';
				}
			}
			$multiplecategory = rtrim($displaycat, ',');

			$tokens = array('%NAME%', '%COMPANY-NAME%', '%SINGLE-CATEGORY%', '%MULTIPLE-CATEGORY%', '%COUNTRY%', '%CITY%', '%DESCRIPTION%');
			$replacements = array($providerInfo->full_name, service_finder_getCompanyName($author), service_finder_getCategoryName(get_user_meta($author, 'primary_category', true)), $multiplecategory, $providerInfo->country, $providerInfo->city, strip_tags(service_finder_getExcerpts($providerInfo->bio, 0, 300)));

			$providermetatitle = (!empty($service_finder_options['provider-meta-title'])) ? esc_attr($service_finder_options['provider-meta-title']) : '';

			$providermetatitle = str_replace($tokens, $replacements, $providermetatitle);
			if ($providermetatitle != "") {
				$providermetatitle = str_replace(',,', ',', $providermetatitle);
				$providermetatitle = trim($providermetatitle, ' ');
				$providermetatitle = trim($providermetatitle, ',');

				return $providermetatitle;
			} else {
				return $title;
			}
		} elseif (is_search() && class_exists('service_finder_booking_plugin') && (isset($_GET['keyword']) || isset($_GET['searchAddress']) || isset($_GET['catid']) || isset($_GET['country']) || isset($_GET['city']))) {
			$tokens = array('%KEYWORD%', '%ADDRESS%', '%CATEGORY%', '%COUNTRY%', '%CITY%');
			$keyword = (!empty($_GET['keyword'])) ? esc_html($_GET['keyword']) : '';
			$address = (!empty($_GET['searchAddress'])) ? esc_html($_GET['searchAddress']) : '';
			$catid = (!empty($_GET['catid'])) ? esc_html($_GET['catid']) : '';
			$country = (!empty($_GET['country'])) ? esc_html($_GET['country']) : '';
			$city  = (!empty($_GET['city'])) ? esc_html($_GET['city']) : '';

			if ($catid > 0) {
				$categoryname = service_finder_getCategoryName($catid);
			} else {
				$categoryname = '';
			}

			$replacements = array($keyword, $address, $categoryname, $country, $city);
			$searchmetatitle = (!empty($service_finder_options['search-meta-title'])) ? esc_html($service_finder_options['search-meta-title']) : '';

			$preservemetatitle = $searchmetatitle;

			$searchmetatitle = str_replace($tokens, $replacements, $searchmetatitle);

			if ($searchmetatitle != "" && (($keyword != "" && strpos($preservemetatitle, '%KEYWORD%')) || ($address != "" && strpos($preservemetatitle, '%ADDRESS%')) || ($catid != "" && strpos($preservemetatitle, '%CATEGORY%')) || ($country != "" && strpos($preservemetatitle, '%COUNTRY%')) || ($city != "" && strpos($preservemetatitle, '%CITY%')))) {

				$searchmetatitle = str_replace(',,', ',', $searchmetatitle);
				$searchmetatitle = trim($searchmetatitle, ' ');
				$searchmetatitle = trim($searchmetatitle, ',');
				return $searchmetatitle;
			} else {
				return $title;
			}
		} elseif (is_home() || is_front_page()) {
			$customtitle = get_option('blogname') . ' - ' . get_option('blogdescription');
			return $customtitle;
		} else {
			return $title;
		}
	}
	add_filter('pre_get_document_title', 'service_finder_render_custome_title', 10, 2);
	add_filter('wpseo_title', 'service_finder_render_custome_title');
}

/*Wp Head Functionality*/
if (!function_exists('service_finder_render_head')) {
	function service_finder_render_head()
	{
		global $service_finder_ThemeParams, $author, $service_finder_options;

		if (is_author() && class_exists('service_finder_booking_plugin') && service_finder_getUserRole($author) == 'Provider') {
			$meta_title = '';
			if (function_exists('service_finder_getCompanyName')) {
				$meta_title = service_finder_getCompanyName($author);
			}
			if ($meta_title == '') {
				$fname = get_the_author_meta('first_name', $author);
				$lname = get_the_author_meta('last_name', $author);
				$meta_title = $fname . ' ' . $lname;
			}

			$meta_link = '';
			if (function_exists('service_finder_get_author_url')) {
				$meta_link = get_author_posts_url($author);
			}
			if (function_exists('service_finder_getAvatarID')) {
				$avatarid = service_finder_getAvatarID($author);
			}
			if (!empty($avatarid) && $avatarid > 0) {
				$src  = wp_get_attachment_image_src($avatarid, 'service_finder-provider-medium');
				$src  = $src[0];
			} else {
				$src  = '';
			}

			$getProvider = new SERVICE_FINDER_searchProviders();
			$providerInfo = $getProvider->service_finder_getProviderInfo(esc_attr($author));

			$fullname = $providerInfo->full_name;

			$categories = $providerInfo->category_id;
			$cats = explode(',', $categories);
			$displaycat = '';
			if (!empty($cats)) {
				foreach ($cats as $catid) {
					$displaycat .= service_finder_getCategoryName($catid) . ',';
				}
			}
			$multiplecategory = rtrim($displaycat, ',');

			$tokens = array('%NAME%', '%COMPANY-NAME%', '%SINGLE-CATEGORY%', '%MULTIPLE-CATEGORY%', '%COUNTRY%', '%CITY%', '%DESCRIPTION%');
			$replacements = array($providerInfo->full_name, service_finder_getCompanyName($author), service_finder_getCategoryName(get_user_meta($author, 'primary_category', true)), $multiplecategory, $providerInfo->country, $providerInfo->city, strip_tags(service_finder_getExcerpts($providerInfo->bio, 0, 300)));

			$providermetakeywords = (isset($service_finder_options['provider-meta-keywords'])) ? esc_attr($service_finder_options['provider-meta-keywords']) : '';
			$providermetadesription = (isset($service_finder_options['provider-meta-desription'])) ? esc_attr($service_finder_options['provider-meta-desription']) : '';

			$providermetakeywords = str_replace($tokens, $replacements, $providermetakeywords);
			$providermetadesription = str_replace($tokens, $replacements, $providermetadesription);

		?>
<meta name="keywords" content="<?php echo esc_attr($providermetakeywords); ?>" />
<meta name="description" content="<?php echo esc_attr($providermetadesription); ?>" />
<meta property="og:title" content="<?php echo esc_html($meta_title); ?>" />
<meta property="og:description" content="<?php echo esc_attr($providermetadesription); ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo esc_html($meta_link); ?>" />
<meta property="og:site_name" content="<?php echo get_bloginfo('name') ?>" />
<meta property="og:image" content="<?php echo esc_html($src); ?>" />
<?php
		} elseif (is_search() && class_exists('service_finder_booking_plugin') && (isset($_GET['keyword']) || isset($_GET['searchAddress']) || isset($_GET['catid']) || isset($_GET['country']) || isset($_GET['city']))) {
			$tokens = array('%KEYWORD%', '%ADDRESS%', '%CATEGORY%', '%COUNTRY%', '%CITY%');
			$keyword = (!empty($_GET['keyword'])) ? esc_html($_GET['keyword']) : '';
			$address = (!empty($_GET['searchAddress'])) ? esc_html($_GET['searchAddress']) : '';
			$catid = (!empty($_GET['catid'])) ? esc_html($_GET['catid']) : '';
			$country = (!empty($_GET['country'])) ? esc_html($_GET['country']) : '';
			$city  = (!empty($_GET['city'])) ? esc_html($_GET['city']) : '';

			if ($catid > 0) {
				$categoryname = service_finder_getCategoryName($catid);
			} else {
				$categoryname = '';
			}

			$replacements = array($keyword, $address, $categoryname, $country, $city);
			$searchmetakeywords = (isset($service_finder_options['search-meta-keywords'])) ? esc_html($service_finder_options['search-meta-keywords']) : '';
			$searchmetadesription = (isset($service_finder_options['search-meta-desription'])) ? esc_html($service_finder_options['search-meta-desription']) : '';

			$searchmetakeywords = str_replace($tokens, $replacements, $searchmetakeywords);
			$searchmetadesription = str_replace($tokens, $replacements, $searchmetadesription);
		?>
<meta name="keywords" content="<?php echo esc_attr($searchmetakeywords); ?>" />
<meta name="description" content="<?php echo esc_attr($searchmetadesription); ?>" />
<?php
			if (!class_exists('service_finder_booking_plugin')) {
			?>
<script type="text/javascript">
// <![CDATA[
var param = '';
// ]]>
</script>
<?php
			}
		} elseif (is_single()) {
			?>
<meta name="description" content="<?php echo get_the_excerpt(); ?>" />
<?php
		}
	}
	add_action('wp_head', 'service_finder_render_head');
}

/*Custom Avatar*/
add_filter('get_avatar', 'service_finder_custom_avatar', 1, 5);
function service_finder_custom_avatar($avatar, $id_or_email, $size, $default, $alt)
{
	$user = false;
	if (is_numeric($id_or_email)) {

		$id = (int) $id_or_email;
		$user = get_user_by('id', $id);
	} elseif (is_object($id_or_email)) {

		if (!empty($id_or_email->user_id)) {
			$id = (int) $id_or_email->user_id;
			$user = get_user_by('id', $id);
		}
	} else {
		$user = get_user_by('email', $id_or_email);
	}

	if ($user && is_object($user)) {

		$userrole = new WP_User($user->data->ID);
		$user_role = (!empty($userrole->roles[0])) ? $userrole->roles[0] : '';
		$avatar_id = '';
		if ($user_role == 'Customer' || $user_role == 'Provider') {
			if ($user_role == 'Customer') {
				if (function_exists('service_finder_getCustomerAvatarID')) {
					$avatar_id = service_finder_getCustomerAvatarID($user->data->ID);
				}
			} elseif ($user_role == 'Provider') {
				if (function_exists('service_finder_getCustomerAvatarID')) {
					$avatar_id = service_finder_getUserAvatarID($user->data->ID);
				}
			}
			if (!empty($avatar_id) && $avatar_id > 0) {
				$src  = wp_get_attachment_image_src($avatar_id, 'thumbnail');
				$avatar  = $src[0];
			} else {
				$avatar = 'http://2.gravatar.com/avatar/2d8b3378fb00ca047026e456903cae16?s=56&d=mm&r=g';
			}
			$avatar = "<img alt='{$alt}' src='{$avatar}' class='avatar avatar-{$size} photo' height='{$size}' width='{$size}' />";
		}
	}

	return $avatar;
}

/*Refresh Auhtor URL's to rewrite */
function service_finder_change_author_permalinks()
{
	global $wp_rewrite;
	// Change the value of the author permalink base to whatever you want here
	//$wp_rewrite->author_base = '';

	if (!function_exists('qtranxf_init_language')) {
		$wp_rewrite->flush_rules();
	}
}
add_action('init', 'service_finder_change_author_permalinks');

/*Unhook the WooCommerce wrappers*/
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

/*Add WooCommerce wrappers*/
add_action('woocommerce_before_main_content', 'service_finder_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'service_finder_wrapper_end', 10);

function service_finder_wrapper_start()
{
	echo '<section id="main">';
}

function service_finder_wrapper_end()
{
	echo '</section>';
}

add_action('wp_footer', 'service_finder_add_to_footer');
/*Include localize file*/
function service_finder_add_to_footer()
{
	if (!class_exists('service_finder_booking_plugin')) {
		require get_template_directory() . '/lib/localize.php'; //Localize
	}
}

function service_finder_register_block_patterns()
{
	register_block_pattern(
		'wpdocs/service-finder-block',
		array(
			'title'         => esc_html__('Service Finder Block', 'service-finder'),
			'description'   => esc_html_x('This is service finder block pattern', 'Block pattern description', 'service-finder'),
			'content'       => '<!-- wp:paragraph --><p>A single paragraph block style</p><!-- /wp:paragraph -->',
			'categories'    => array('text'),
			'keywords'      => array('cta', 'demo', 'example'),
			'viewportWidth' => 800,
		)
	);
}
add_action('init', 'service_finder_register_block_patterns');

if (function_exists('register_block_style')) {
	register_block_style(
		'core/quote',
		array(
			'name'         => 'blue-quote',
			'label'        => esc_html__('Blue Quote', 'service-finder'),
			'is_default'   => true,
			'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
		)
	);
}

add_filter('ajax_query_attachments_args', 'service_finder_current_user_attachments', 10, 1);
function service_finder_current_user_attachments($query = array())
{
	global $current_user;

	if ($current_user->ID > 0) {
		$query['author'] = $current_user->ID;
	}

	return $query;
}

add_action('init', 'service_finder_blockusers_init');
function service_finder_blockusers_init()
{
	if (is_user_logged_in() && is_admin() && !current_user_can('administrator') && !current_user_can('shop manager') && !current_user_can('editor') && !current_user_can('author') && !current_user_can('contributor') && !(defined('DOING_AJAX') && DOING_AJAX)) {
		wp_redirect(home_url());
		exit;
	}
}

// Start the download if there is a request for that
function service_finder_download_file()
{

	if (isset($_GET["attachment_id"]) && isset($_GET['download_file'])) {
		service_finder_send_file();
	}
}
add_action('init', 'service_finder_download_file');

// Send the file to download
function service_finder_send_file()
{
	global $wp_filesystem;
	if (empty($wp_filesystem)) {
		require_once ABSPATH . '/wp-admin/includes/file.php';
		WP_Filesystem();
	}
	//get filedata
	$attID = (isset($_GET['attachment_id'])) ? $_GET['attachment_id'] : '';
	$theFile = wp_get_attachment_url($attID);

	if (!$theFile) {
		return;
	}
	//clean the fileurl
	$file_url  = stripslashes(trim($theFile));
	//get filename
	$file_name = basename($theFile);
	//get fileextension

	$file_extension = pathinfo($file_name);
	//security check
	$fileName = strtolower($file_url);

	$whitelist = apply_filters("service_finder_file_types", array("doc", "docx", "pdf", "xls", "xlsx", "rtf", "txt", "ppt", "pptx", "jpg", "jpeg", "png", "csv", "gif"));

	if (!in_array(end(explode('.', $fileName)), $whitelist)) {
		exit('Invalid file!');
	}
	if (strpos($file_url, '.php') == true) {
		die("Invalid file!");
	}

	$file_new_name = $file_name;
	$content_type = "";
	//check filetype
	switch ($file_extension['extension']) {
		case "png":
			$content_type = "image/png";
			break;
		case "gif":
			$content_type = "image/gif";
			break;
		case "tiff":
			$content_type = "image/tiff";
			break;
		case "jpeg":
		case "jpg":
			$content_type = "image/jpg";
			break;
		default:
			$content_type = "application/force-download";
	}

	$content_type = apply_filters("ibenic_content_type", $content_type, $file_extension['extension']);

	header("Expires: 0");
	header("Cache-Control: no-cache, no-store, must-revalidate");
	header('Cache-Control: pre-check=0, post-check=0, max-age=0', false);
	header("Pragma: no-cache");
	header("Content-type: {$content_type}");
	header("Content-Disposition:attachment; filename={$file_new_name}");
	header("Content-Type: application/force-download");

	print_r($wp_filesystem->get_contents($file_url));
	exit();
}

function wporg_simple_role()
{
	add_role(
		'provider',
		'Provider',
		array(
			"manage_woocommerce" => true
		),
	);
}
// Add the simple_role.
//add_action('init', 'wporg_simple_role');

function wporg_simple_role_caps()
{
	// Gets the simple_role role object.
	$role = get_role('provider');

	$role->add_cap(
		[
			'read'         => true,  
			'edit_products'   => true,
			'publish_products' => true,
			'delete_products'=>true
		]
		
	);
	
}
//add_action('init', 'wporg_simple_role_caps', 11);


use Firebase\JWT\JWT;
use Firebase\JWT\Key;

// SETS SESSION AND LOCALSTORAGE FOR WEB
add_action('init' , function(){
	if (!session_id()) {
		session_start();
	}
	
	if(is_user_logged_in()) {
		$_SESSION['current_user_id'] = $user_id = get_current_user_id();
		$user = get_userdata($user_id) ?? '';
		$user_meta = get_usermeta($user_id) ?? '';
		
		if(!empty($user) && !empty($user_meta) && empty($_SESSION['user_data']) && empty($_SESSION['token'])) {
			$unset_keys = array("cap_key", "roles", "filter", "roles", "allcaps", "caps", "ID", "user_status", "user_activation_key", "user_registered", "user_url", "user_pass");
			foreach ($unset_keys as $key => $data) {
				if (in_array($data, $unset_keys)) {
					unset($user->$data);
				}
				foreach ((array) $user->$data as $userdata) {
					if (in_array($userdata, $unset_keys)) {
						unset($user->$userdata);
					}
				}
			}
			$_SESSION['user_data'] = $user;	  
			$_SESSION['user_meta'] = $user_meta;
			$key = 'abcdefghijklmonpqqrst';

			$payload = [
				'Host' => $_SERVER['HTTP_HOST'],
				'id' => $user->data->ID,
				'userdata' => $user,
				'iat' => 1356999524,
				'nbf' => 1357000000
			];
	
			$_SESSION['token'] = JWT::encode($payload, $key, 'HS256');
			echo '<script>localStorage.setItem("token","'.$_SESSION['token'].'");</script>';
		}	
	}
});

add_action('wp_logout', function(){
	if (session_id()) {
		session_destroy();
	}
});

function isuserLoggedin(WP_REST_Request $request) {	
	$authorization = $request->get_header('authorization');
	
	if(empty($authorization)) return false; 

	$token = str_replace('Bearer ','',$authorization);
	$tkn_user = json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $token)[1]))));
	
	$userdata = !empty($tkn_user->id) ? get_userdata($tkn_user->id) : '';
	
	if(!empty($authorization) && !empty($userdata)) {	
		$usermeta = get_user_meta($tkn_user->id); 
		$_SESSION['current_user_id'] = $tkn_user->id;
	
		return array( 'user_data' => $userdata, 'user_meta' => $usermeta, 
		'user_role' => $userdata->roles);
		
	}
	return false; 
}

add_shortcode('provider_category_slider', 'provider_category_slider');

function provider_category_slider() {

	$tax_terms = get_terms('providers-category', array('hide_empty' => false));
	$html = '<div class="custom-user-category-slider">'; 
		if(!empty($tax_terms)) {
			foreach($tax_terms as $term_single) {      
				$thumbnail_id = get_term_meta( $term_single->term_id )['imageid'][0] ?? ''; 
			
				// get the image URL
				$image = wp_get_attachment_url( $thumbnail_id ); 
				$term_link = get_term_link( $term_single->term_id );
				$html .= '<div class="slicx-slide-wrap">';  
					$html .= '<div class="slider-image-box" style="background-image:url('.$image.')">'; 
						$html .= '<a href="'.$term_link.'" class="card-hp-link"></a>';
						$html .= '<h3>'.$term_single->name.'</h3>';
						$html .= '<h5>View</h5>';
					$html .= '</div>';  
				$html .= '</div>';  
			} 

		} else {
			$html = 'No Categories found';
		}
	$html .= '</div>';
	return $html;
}

// theme options
add_action('init', function(){
	$icons = array(
		'user' => 5627,
		'search' => 5628,
		'cart' => 5629,
		
	);
	
	foreach($icons as $key => $icon) {
		if(empty($icon)) {
			continue;
		}
		$icon = wp_get_attachment_url($icon); 
		if(!empty(get_option($key))) {
			update_option($key, $icon);			
		} else {
			add_option($key, $icon);			
		}
	}

}); 

add_filter( 'woocommerce_get_price_html', 'njengah_add_description_after_or_after_price' );
function njengah_add_description_after_or_after_price($price){
	global $product;
	$id = $product->id;
	if(!is_admin()) {
		$product_author = get_post_field( 'post_author', $id );
		$description = ' By : '.get_author_name($product_author); 
		return $price.'<br><div class="product-author-name">'.$description.'</div>';
	}
}

add_filter( 'woocommerce_format_sale_price', 'invert_formatted_sale_price', 10, 3 );
function invert_formatted_sale_price( $price, $regular_price, $sale_price ) {
	if(!is_admin()) {
		return '<ins>' . ( is_numeric( $sale_price ) ? wc_price( $sale_price ) : $sale_price ) . '</ins> <del>' . ( is_numeric( $regular_price ) ? 		wc_price( $regular_price ) : $regular_price ) . '</del>';
	}
}



add_action('init', function(){
	if(session_status() === PHP_SESSION_NONE) session_start();

	if(!isset($_SESSION['current_user_id'])){	
		$current_user_id = get_current_user_id(); 
		$api_user_id = 2;
		
		$_SESSION['current_user_id'] = ($current_user_id == 0) ? $api_user_id : $current_user_id;
	}
});

// add_action( 'init', function() {
// 	if ( !wp_next_scheduled( 'bl_cron_hook' ) ) {
// 		echo 'test';
// 		wp_next_scheduled( 'bl_cron_hook' );
// 		wp_schedule_event( time(), 'five_seconds', 'bl_cron_hook' );
// 	}
// });

add_action('publish_future_post', function($post_id){
	
	// $post = get_post( $post_id);
	// $start_date = get_post_meta( $post_id, 'etn_start_date', true );
	// $start_time = get_post_meta( $post_id, 'etn_start_time', true );

	// $time = time() + 60 * 60;
	// $current_date = date("Y-m-d");
	// if( !empty($post) && !empty($post_meta) && $post->post_type == 'etn' && $time == $start_time && $current_date == $start_date) {
		
	// }

}, 11, 1);

add_action('save_post_etn-zoom-meeting', function($post_id){


	$title = sanitize_text_field($_POST['topic']);
	$description = sanitize_text_field($_POST['agenda']);
	$etn_start_date = sanitize_text_field($_POST['etn_start_date']);
	$etn_end_date = sanitize_text_field($_POST['etn_end_date']);
	$etn_start_time = sanitize_text_field($_POST['etn_start_time']);
	$etn_end_time = sanitize_text_field($_POST['etn_end_time']);
	$recurring_enabled = sanitize_text_field($_POST['recurring_enabled']);
	$etn_zoom_event = sanitize_text_field($_POST['etn_zoom_event']);
	$etn_ticket_availability = sanitize_text_field($_POST['etn_ticket_availability']);
	$etn_total_avaiilable_tickets = sanitize_text_field($_POST['etn_total_avaiilable_tickets']);
	$price = empty(sanitize_text_field($_POST['price'])) ? sanitize_text_field($_POST['price']) : 0;
	$regular_price = sanitize_text_field($_POST['regular_price']) ? sanitize_text_field($_POST['regular_price']) : 0;
	$sale_price = sanitize_text_field($_POST['sale_price']) ? sanitize_text_field($_POST['sale_price']) : 0;
	$stock = sanitize_text_field($_POST['stock']) ? sanitize_text_field($_POST['stock']) : 0;
	$etn_event_socials = sanitize_text_field($_POST['etn_event_socials']) ;
	
	$etn_event_recurrence = array(
		'etn_ticket_name' => 'free',
		'etn_ticket_price' => 0,
		'etn_avaiilable_tickets' =>1000,
		'etn_sold_tickets' =>0,
		'etn_ticket_slug' => '30-free-f5988',
		'etn_min_ticket' =>1,
		'etn_max_ticket' =>1000,
	);

	$meta_args = array(
		'_edit_last' => '1',
		'_edit_lock' => '1674458666:1',
		'etn_select_speaker_schedule_type' => 'schedule_with_speaker',
		'etn_event_schedule' => '',
		'etn_event_organizer' => '',
		'etn_event_location' => '',
		'event_timezone' => '',
		'etn_start_date' => $etn_start_date ,
		'etn_end_date' => $etn_end_date ,
		'etn_start_time' => $etn_start_time ,
		'etn_end_time' => $etn_end_time ,
		'recurring_enabled' => $recurring_enabled ,
		'etn_zoom_event' => $etn_zoom_event ,
		'etn_ticket_availability' => $etn_ticket_availability ,
		'etn_total_avaiilable_tickets' => $etn_total_avaiilable_tickets ,
		"etn_event_recurrence" => serialize($etn_event_recurrence),
		'_price' => $price ,
		'_regular_price' => $regular_price ,
		'_sale_price' => $sale_price ,
		'_stock' => $stock ,
		'etn_event_socials' => $etn_event_socials ,
	);
	
	$post_args = array(
		'post_title' => $title,
		'post_content' => $description,
		'post_author' => $_SESSION['current_user_id'],
		"meta_input" => $meta_args,
		'post_type' => 'etn',
		"post_status" => 'publish',
	);
	
	wp_insert_post($post_args);
});

function jwt_encode($payload, $key ) {  
	return JWT::encode($payload, $key, 'HS256');
}

add_shortcode('influencer_product_list	', 'influencer_get_products_list' );
function influencer_get_products_list() {
	$user_id = get_current_user_id();
	 $args = array(
        'post_type'      => 'product',
		'post_author' => $user_id
    );

    $loop = new WP_Query( $args );
	$html = '<table class="products_list">';
	$html .= '<tr>';
		$html .= '<th>';
			$html .= 'S.No';
		$html .= '</th>';
		$html .= '<th>';
			$html .= 'Product Image';
		$html .= '</th>';
		$html .= '<th>';
			$html .= 'Product Title';
		$html .= '</th>';
		$html .= '<th>';
			$html .= 'Action';
		$html .= '</th>';
	$html .= '</tr>';
	
	$i = 1;
    while ( $loop->have_posts() ) : $loop->the_post();
        global $product;
		$html .= '<tr>
			<td>'.$i.'</td>
			<td>'.woocommerce_get_product_thumbnail().'</td>
			<td><a href="'.get_permalink().'">'.get_the_title().'</a></td>
			<td><a href="'.get_permalink().'" class="btn btn-primary pr-1" >Edit</a><a href="'.get_permalink().'" class="btn btn-primary pr-1">Delete</a></td>
		</tr>';
		$i++;
    endwhile;
	 wp_reset_query();
	return $html .= '</table>';
   
}

add_shortcode('meetup_grid', 'meetup_grid');
function meetup_grid($attr) {
	global $wpdb;

	$args = array(
		'post_type' => 'etn',
		'post_author' => get_current_user_id()
	);
	$posts = get_posts($args);

	$html = '<div class="row">';
	
	if(empty($posts) && $posts == NULL) return $html .='<H3> No Events found</H3></div>';

	if(isset($attr['type']) && @$attr['type'] != 'grid'){
		$html .= get_template_part( 'templates/product/product-list', array( 'posts' => $posts ) );
	}
	else {
		$html .= get_template_part( 'templates/product/product-grid', array( 'posts' => $posts ) );
	}

	return $html .= '</div>';
}


// add_filter('rest_authentication_errors', "disable_rest");
function disable_rest($access) {
	$error = new WP_Error();
	$error->add(406, __('Invalid Account', 'rest-api-endpoints'));
	return $error;
}

// meeting list frontend 
add_shortcode('influencer_meeting_list', 'influencer_meeting_list');
function influencer_meeting_list() {
	
	$args = array(
		'post_type' => 'etn',
		
	);

	$posts = get_posts($args);

	$html = '<table class="influencer_meeting_list table-striped" >';
	$head = array( 'S.no', 'Title', 'Action' );
	
	// Set table header 
	$html .= '<tr>';
	foreach( $head as $value ) {
		$html .= '<th>'. $value . '</th>'; 
	}
	$html .= '</tr>';
	$i = 1;
	foreach( $posts as $post ) {
		// Get meeting Info
		$get_booking_count = !empty( get_post_meta( $post->ID, "etn_avaiilable_tickets", true ) ) ? absint( get_post_meta( $post->ID, "etn_avaiilable_tickets", true ) ) : 0;
		$get_link = get_permalink( $post->ID );
		$event_author_data =  get_userdata($post->post_author);

		$author_name = $event_author_data->data->user_login;
		$author_name = $event_author_data->data->user_login;

		$thumb = get_the_post_thumbnail_url( $post->ID );
		$thumb = !empty( $thumb ) ? $thumb : wp_get_attachment_image_url( 5026 );
		$permalink =  '#edit_meetings'; // ?meeting='.$post->ID;
		
		// Set to table 
		$html .= '<tr class="item">';
			$html .= '<td>'.$i.'</td>';
			$html .= '<td><a href="'.$permalink.'" class="event_action" data-id="'.$post->ID.'" data-action="edit" >'.$post->post_title.'</a></td>';
			$html .= '<td><a href="'.$permalink.'">Delete</a></td>';
		$html .= '</tr>';
		$i++;
	}
	wp_reset_postdata();
	return $html .= '</table>';

}

// meeting list frontend 
add_shortcode('meeting_listing', 'meeting_list');
function meeting_list() {
	$args = array(
		'post_type' => 'etn',
		'posts_per_page' => 4
	);
	$posts = get_posts($args);
	$html = '<div class="meeting_list container" >';
	foreach( $posts as $post ) {

		$get_booking_count = !empty( get_post_meta( $post->ID, "etn_avaiilable_tickets", true ) ) ? absint( get_post_meta( $post->ID, "etn_avaiilable_tickets", true ) ) : 0;
		$get_link = get_permalink( $post->ID );
		$event_author_data =  get_userdata($post->post_author);
		$author_name = $event_author_data->data->user_login;
		$author_name = $event_author_data->data->user_login;

		$html .= '<div class="item">';
			$thumb = get_the_post_thumbnail_url( $post->ID );
			$thumb = !empty( $thumb ) ? $thumb : wp_get_attachment_image_url( 5026 );
			$permalink = get_permalink( $post->ID );
			$html .= '<div class="top">';
				$html .= '<div class="content">';
					$html .= '<h5>'.$post->post_content.'</h5>';
				$html .= '</div>';

				$html .= '<div class="counters">';
					$html .= '<div class="left">';
						$html .= '<i class="fas fa-map-marker-alt"></i> Online Event';
					$html .= '</div>';
					$html .= '<div class="right">';
						$html .= '<i class="far fa-eye"></i> '.$get_booking_count;
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</div>';
			$html .= '<div class="bottom">';
				$html .= '<div class="left">';
					$html .= '<div class="address-card" style="background-image:url('.$thumb.')">';
			
					$html .= '</div>';
					$html .= '<div class="title-container">';
						$html .= '<h4><a href="'.$permalink.'">'.$post->post_title.'</a></h4>';
						$html .= '<h6>'.$post->post_content.'</h6>';
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</div>';
			$html .= '<a href="'.$get_link.'" class="btn btn-primary">Join now</a>';
		$html .= '</div>';
	}
	wp_reset_postdata();
	return $html .= '</div>';

}

// upcomming events 
add_shortcode('upcomming_meetings', 'upcomming_meetings');
function upcomming_meetings() {
	$current_date =  date('Y-m-d');
	
	$args = array(
		'post_type' => 'etn',
		'meta_query'     => array(
			array(
				'key'     => 'etn_start_date',
				'value'   => $current_date,
				'compare' =>  '>='   
			)
		) 
	);
	$posts = get_posts($args);
	$html = '<div class="upcomming_meetings" >';
	foreach( $posts as $post ) {
		$start_date = get_post_meta($post->ID, 'etn_start_date', true);
		$start_time = get_post_meta($post->ID, 'etn_start_time', true);
		
	
		$date = $start_time. $start_date;
		
		if(empty($date)) continue;
		
		$event_date = date('F d, Y h A', strtotime($date));

		$get_booking_count = !empty( get_post_meta( $post->ID, "etn_avaiilable_tickets", true ) ) ? absint( get_post_meta( $post->ID, "etn_avaiilable_tickets", true ) ) : 0;
		$get_link = get_permalink( $post->ID );
		
		$html .= '<div class="item">';
			$thumb = get_the_post_thumbnail_url($post->ID);
			$html .= '<div class="top">';
				$html .= '<div class="left">';
					$html .= '<div class="address-card">';
						$html .= '<i class="far fa-address-card"></i>';
					$html .= '</div>';
					$html .= '<div class="title-container">';
						$html .= '<h4>'.$post->post_title.'</h4>';
						$html .= '<h6>'.$post->post_content.'</h6>';
					$html .= '</div>';
				$html .= '</div>';
				$html .= '<div class="right">';
					$html .= '<i class="fas fa-bell"></i>';
				$html .= '</div>';
			$html .= '</div>';
			$html .= '<div class="bottom">';
				$html .= '<div class="left">';
					$html .= '<i class="far fa-calendar-alt"></i>&nbsp; '.$event_date;
				$html .= '</div>';
				$html .= '<div class="center">';
					$html .= '<i class="fas fa-hat-cowboy"></i>&nbsp; '.$get_booking_count. '+ Booking';
				$html .= '</div>';
				$html .= '<div class="right">';
					$html .= '<i class="fas fa-share-alt"></i>';
				$html .= '</div>';
			$html .= '</div>';
		$html .= '</div>';
		wp_reset_postdata();
	}

	return $html .= '</div>';
}

add_filter('body_class', function($classes) {
	global $post;
	if(is_page(34)) $classes[] = 'my-account';
	
	return  $classes;
}, 10, 1);