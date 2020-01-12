
<?php
//Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside','gallery','video','image'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

//Adding stylesheet
function themex_stylesheet() {
 wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom-css.css',[], '', );
  wp_enqueue_style( 'w3', get_template_directory_uri() . '/assets/css/w3.css',[],time(),'all', );
}
add_action( 'wp_enqueue_scripts','themex_stylesheet');

//Register menu locations
register_nav_menus ( [
  'main-menu'       => esc_html__( 'Main Menu', 'themeX' ),
  'header-menu'       => esc_html__( 'Header Menu', 'themeX' ),
  'footer-menu'     => esc_html__( 'Footer Menu', 'themeX' )
  ] );

//Register Sidebar
function themeX_widgets_init() {
  register_sidebar( [
    'name'          => esc_html__( 'Main Sidebar','themeX' ),
    'id'            => 'main-sidebar',
    'description'   => esc_html__( 'Add Widgets for Main Sidebar here', 'themeX' ),
    'before_widget' => '<section class="widget">',
    'after-widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
    ] );
}
add_action( 'widgets_init', 'themeX_widgets_init' );

function themeX_widgets_two() {
  register_sidebar([
    'name'        => esc_html__('Footer Sidebar one','themex'),
    'id'          => 'sidebar-2',
  ]);
}
add_action('widgets_init','themeX_widgets_two');

function themeX_widgets_three() {
  register_sidebar([
    'name'        => esc_html__('Footer Sidebar two','themex'),
    'id'          => 'sidebar-3',
  ]);
}
add_action('widgets_init','themeX_widgets_three');

function themeX_widgets_four() {
  register_sidebar([
    'name'        => esc_html__('Footer Sidebar three','themex'),
    'id'          => 'sidebar-4',
  ]);
}
add_action('widgets_init','themeX_widgets_four');
?>
