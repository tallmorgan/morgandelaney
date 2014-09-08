<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */

// Options Framework (https://github.com/devinsays/options-framework-plugin)
if (!function_exists('optionsframework_init')) {
  define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/_/inc/');
  require_once dirname(__FILE__) . '/_/inc/options-framework.php';
}

// Theme Setup (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
function html5reset_setup()
{
  load_theme_textdomain('html5reset', get_template_directory() . '/languages');
  add_theme_support('automatic-feed-links');
  add_theme_support('structured-post-formats', array('link', 'video'));
  add_theme_support('post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status'));
  register_nav_menu('primary', __('Navigation Menu', 'html5reset'));
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'html5reset_setup');

// Scripts & Styles (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
function html5reset_scripts_styles()
{
  global $wp_styles;

  // Load Comments
  if (is_singular() && comments_open() && get_option('thread_comments'))
    wp_enqueue_script('comment-reply');
}

add_action('wp_enqueue_scripts', 'html5reset_scripts_styles');

// WP Title (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
function html5reset_wp_title($title, $sep)
{
  global $paged, $page;

  if (is_feed())
    return $title;

  // Add the site name.
  $title .= get_bloginfo('name');

  // Add the site description for the home/front page.
  $site_description = get_bloginfo('description', 'display');
  if ($site_description && (is_home() || is_front_page()))
    $title = "$title $sep $site_description";

  // Add a page number if necessary.
  if ($paged >= 2 || $page >= 2)
    $title = "$title $sep " . sprintf(__('Page %s', 'html5reset'), max($paged, $page));

  return $title;
}

add_filter('wp_title', 'html5reset_wp_title', 10, 2);

// Load jQuery
if ( !function_exists( 'core_mods' ) ) {
  function core_mods() {
    if ( !is_admin() ) {
      wp_deregister_script( 'jquery' );
      wp_register_script( 'jquery', ( "http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ), false);
      wp_enqueue_script( 'jquery' );
    }
  }
  add_action( 'wp_enqueue_scripts', 'core_mods' );
}

// Navigation - update coming from twentythirteen
function post_navigation()
{
  echo '<div class="navigation">';
  echo '	<div class="next-posts">' . get_next_posts_link('&laquo; Older Entries') . '</div>';
  echo '	<div class="prev-posts">' . get_previous_posts_link('Newer Entries &raquo;') . '</div>';
  echo '</div>';
}

// Posted On
function posted_on()
{
  printf(__('<span class="sep">Posted </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a> by <span class="byline author vcard">%5$s</span>', ''),
    esc_url(get_permalink()),
    esc_attr(get_the_time()),
    esc_attr(get_the_date('c')),
    esc_html(get_the_date()),
    esc_attr(get_the_author())
  );
}

/**
 * Theme javascript assets
 */
function morgan_enqueue_scripts()
{
  wp_enqueue_script(
    'waypoints',
    get_bloginfo( 'template_url' ) . '/_/js/waypoints.min.js',
    array( 'jquery' ),
    false,
    true
  );

  wp_enqueue_script(
    'evd-animate',
    get_bloginfo( 'template_url' ) . '/_/js/evd-animate.js',
    array( 'jquery' ),
    false,
    true
  );

  wp_enqueue_script(
    'imagesloaded',
    get_bloginfo( 'template_url' ) . '/_/js/imagesloaded.pkgd.min.js',
    array( 'jquery' ),
    false,
    true
  );

  wp_enqueue_script(
    'theme',
    get_bloginfo('template_url') . '/_/js/functions.js',
    array('jquery'),
    false,
    true
  );
}

add_action('wp_enqueue_scripts', 'morgan_enqueue_scripts');

include "_/libs/content.php";

/**
 * Echo a viewport based on which device is visiting the site
 */
function morgan_viewport()
{
  $width = function_exists( 'is_mobile' ) && is_mobile()
    ? '640' : 'device-width';

  echo "width=$width";
}

include "_/libs/pswp/index.php";