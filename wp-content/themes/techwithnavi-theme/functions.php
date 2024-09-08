<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

function navi_business_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'navi_business_theme_setup');

function navi_business_scripts() {
    wp_enqueue_style('navi-business-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'navi_business_scripts');

function navi_business_setup() {
    // Register Navigation Menus
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'navi-business'),
    ));

    // Add theme support features
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'navi_business_setup');

function navi_business_widgets_init() {
    // Register Sidebar
    register_sidebar(array(
        'name'          => __('Sidebar', 'navi-business'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'navi-business'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    // Register Footer Widget Area
    register_sidebar(array(
        'name'          => __('Footer', 'navi-business'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here.', 'navi-business'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'navi_business_widgets_init');


// 
function themeScript() {
    wp_enqueue_script('cf7-ga4', get_template_directory_uri() . '/assets/js/cf7-ga4.js', array('jquery'), null, true);
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'themeScript');

function headerScript(){ ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q157WLMPQL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q157WLMPQL');

<!-- Google Tag Manager -->
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KMCVDT6C');</script>
<!-- End Google Tag Manager -->

<?php }

add_action('wp_head','headerScript');