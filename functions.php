<?php 
/**
 * The good old functions file. This is where we can add theme support for more functionality as well as add support for menus and sidebars. In addition, we also queue all our scripts and stylesheets here.
 */

 // We can queue any scripts and style files here
function semiseriouschef_scripts() {
  wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css', [], '1', 'all' );
}
add_action( 'wp_enqueue_scripts', 'semiseriouschef_scripts' );


// The main function to add all our theme support and functionality 
function semiseriouschefs_config() {

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-link' );

  // It's now good practice to let WordPress handle adding the title of the document in the head. So we'll enable that here.
  add_theme_support( 'title-tag' );

  // Add support for different post-formats.
  add_theme_support( 'post-formats',
    [
      'link',
      'aside',
      'gallery',
      'image',
      'quote',
      'status',
      'video',
      'audio',
      'chat'
    ]
  );

  // Add support for post thumbnails on posts and pages.
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 600, 450);

  // Register the navigation menus here.
  register_nav_menus(
    [
      'menu-header'    => esc_html__( 'Header Menu', 'semiseriouschefs' ),
      'menu-footer'    => esc_html__( 'Footer Menu', 'semiseriouschefs' )
    ]
    );
    
  // Add support for a custom logo.
  $logo_width = 200;
  $logo_height = 100;

  add_theme_support( 'custom-logo',
    [
      'width'                 => $logo_width,
      'height'                => $logo_height,
      'flex-width'            => true,
      'flex-height'           => true,
      'unlink-homepage-logo'  => true
    ]
  );

  // Add support for selective refresh for widgets.
  add_theme_support( 'customize-selective-refresh-widgets' );

  // Add support for Gutenberg features
  add_theme_support( 'align-wide' );
  add_theme_support( 'responsive_embeds' );

  // Add support for block styles.
  add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'semiseriouschefs_config' );



// // Register the three possible sidebars for this theme here.
function semiseriouschefs_sidebars() {
  // Sidebar 1
  register_sidebar(
    [
      'name'          => esc_html__( 'Left Sidebar', 'semiseriouschefs' ),
      'id'            => 'sidebar-1',
      'description'   => esc_html__( 'This is the left sidebar. You can add your widgets here.', 'semiseriouschefs' ),
      'before_widget' => '<div class="widget-li">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'

    ]
  );

  // Sidebar 2
  register_sidebar(
    [
      'name'          => esc_html__( 'Right Sidebar', 'semiseriouschefs' ),
      'id'            => 'sidebar-2',
      'description'   => esc_html__( 'This is the right sidebar. You can add your widgets here.', 'semiseriouschefs' ),
      'before_widget' => '<div class="widget-li">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'

    ]
  );

  // Sidebar 3
  register_sidebar(
    [
      'name'          => esc_html__( 'Bottom Sidebar', 'semiseriouschefs' ),
      'id'            => 'sidebar-3',
      'description'   => esc_html__( 'This is the bottom sidebar. You can add your widgets here.', 'semiseriouschefs' ),
      'before_widget' => '<div class="widget-li">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'

    ]
  );
}
add_action( 'widgets_init', 'semiseriouschefs_sidebars' );

