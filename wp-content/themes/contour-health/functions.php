<?php
    function platform_theme_setup(){
      add_theme_support('custom-logo');
      add_theme_support('title-tag');
      add_theme_support('post-thumbnails');
      add_image_size('home-featured', 680, 400, array('center', 'center'));
      add_image_size('single-img', 600, 550, array('center', 'center'));
      add_theme_support('automatic-feed-links');
      
      register_nav_menus(
        array('primary' => __('Primary Menu', 'platform'))
      );

      //woocommerce setting
      add_theme_support('woocommerce');
        //gallery image zoom
      add_theme_support( 'wc-product-gallery-zoom' );
        //gallery image slider
      add_theme_support( 'wc-product-gallery-slider' );
        //gallery lightbox
      add_theme_support( 'wc-product-gallery-lightbox' );
        //Remove shop title
      add_filter('woocommerce_show_page_title', '__return_false');
    }
  
    add_action('after_setup_theme', 'platform_theme_setup');

  function platform_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'platform_scripts');

  function platform_widgets_init(){
    register_sidebar(
      array(
        'name' => __('Wocommerce Sidebar', 'platform'),
        'id' =>  'main-sidebar',
        'description' => 'Main sidebar on right side',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
      )
    );

    register_sidebar(
      array(
        'name' => __('Footer Site Logo', 'platform'),
        'id' =>  'footer-logo',
        'description' => __('Containing footer logo of site', 'theme_name'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
      )
    );

    register_sidebar(
      array(
        'name' => __('Footer About Us', 'platform'),
        'id' =>  'footer-about',
        'description' => __('About us', 'theme_name'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
      )
    );

    register_sidebar(
      array(
        'name' => __('Footer Contact Us', 'platform'),
        'id' =>  'footer-contact',
        'description' => __('Contact us', 'theme_name'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
      )
    );

    register_sidebar(
      array(
        'name' => __('Footer Links', 'platform'),
        'id' =>  'footer-links',
        'description' => __('Links', 'theme_name'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
      )
    );
  }


  add_action('widgets_init', 'platform_widgets_init');

  //importing testimonial custom post file
  require get_template_directory() . '/custom-posts/testimonials.php';

  //importing home page slider custom post file
  require get_template_directory() . '/custom-posts/home_slider.php';

  function enqueue_custom_script() {
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/contact.js', array(), '1.0', true );
    wp_localize_script( 'custom-script', 'templateDirectory', array( 'url' => get_template_directory_uri() ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_script' );

?>