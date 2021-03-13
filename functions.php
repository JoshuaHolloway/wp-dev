<?php


  // function university_files() {
  //   wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
  //   wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  //   wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  //   wp_enqueue_style('university_main_styles', get_stylesheet_uri());
  // }
  // add_action('wp_enqueue_scripts', 'university_files');

  function callback_f1() {

    // arg-1: nick-name for script
    // arg-2: location that points toward script file
    // arg-3: does script have any dependencies?
    // arg-4: version for file
    // arg-5: load file directly before closing body tag?
    wp_enqueue_script('nick-name-for-js-file', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);

    wp_enqueue_style('nick-name-for-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    
    wp_enqueue_style('nick-name-for-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    // arg-1: nick-name for style sheet
    // arg-2: location that points toward file
    wp_enqueue_style('nick-name-for-stylesheet', get_stylesheet_uri());

  }

  // arg-1: when to call function callback
  // arg-2: callback to be called.
  add_action('wp_enqueue_scripts', 'callback_f1');

  function callback_f2() {

    // used in header.php and footer.php
    // register_nav_menu('headerMenuLocation', 'Header Menu Location');
    // register_nav_menu('footerLocationOne', 'Footer Location One');
    // register_nav_menu('menu2', 'Menu 2');

    // set title
    add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'callback_f2');
?>