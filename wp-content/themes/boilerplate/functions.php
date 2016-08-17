<?php
/**
 * Boilerplate functions and definitions 
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

if ( ! isset( $content_width ) ) {
  // $content_width = 800;
}

/**
 * Define the version in case we need to do version checks. 
 */
if ( ! defined( 'BOILERPLATE_VERSION' ) )
  define( 'BOILERPLATE_VERSION', '1.0' );



if ( ! function_exists( 'boilerplate_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Boilerplate 1.0
 */
function boilerplate_setup() {

  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on boilerplate, use a find and replace
   * to change 'boilerplate' to the name of your theme in all the template files
   */
  load_theme_textdomain( 'boilerplate', get_template_directory() . '/languages' );

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
   * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
   */
  add_theme_support( 'post-thumbnails' );

  /**
   * Enapble support for excerpts on pages
   */
  add_post_type_support( 'page', 'excerpt' );


  /*
   * Menus
   */
  register_nav_menus( array(
    'main_menu'          => __( 'Main Menu', 'boilerplate' ),
    'footer_menu'        => __( 'Footer Menu', 'boilerplate' ),
  ) );


  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
  ) );

}
endif; // boilerplate_setup
add_action( 'after_setup_theme', 'boilerplate_setup' );



/**
 * Include files using the init.
 * @return [type] [description]
 */
function boilerplate_init()
{
  // Load Scripts
  require_once get_stylesheet_directory() . '/includes/scripts.php';

  // Load Image Functions 
  require_once get_stylesheet_directory() . '/includes/images.php';  

  // Load Misc Functions
  require_once get_stylesheet_directory() . '/includes/misc.php';    

  // Load CMB2 Fields
  // require_once get_stylesheet_directory() . '/includes/cmb2-fields.php';    
  // require_once get_stylesheet_directory() . '/includes/cmb2-misc.php';
  // require_once get_stylesheet_directory() . '/includes/cmb2-options-page.php';    
}
add_action( 'init', 'boilerplate_init' );