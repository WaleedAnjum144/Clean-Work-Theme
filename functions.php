
<?php


function stylesheet_load() {
    // Register stylesheets
    wp_register_style("bootstrap_icon", get_template_directory_uri() . '/css/bootstrap-icons.css', array(), '');
    wp_register_style("bootstrap_min", get_template_directory_uri() . '/css/bootstrap.min.css', array(), '');
    wp_register_style("tooplate_css", get_template_directory_uri() . '/css/tooplate-clean-work.css', array(), '');
    wp_register_style("Custom_Css", get_template_directory_uri() . '/style.css', array(), '');
    
    // Enqueue the stylesheets
  
    
    wp_enqueue_style("bootstrap_icon");
    wp_enqueue_style("bootstrap_min");
    wp_enqueue_style("tooplate_css");
    wp_enqueue_style("Custom_Css");
}

// Hook the function to the wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'stylesheet_load');


function load_custom_scripts() {
    // Register scripts
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), null, true);
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
    wp_register_script('backstretch', get_template_directory_uri() . '/js/jquery.backstretch.min.js', array(), null, true);
    wp_register_script('counter', get_template_directory_uri() . '/js/counter.js', array('jquery'), null, true);
    wp_register_script('countdown', get_template_directory_uri() . '/js/countdown.js', array('jquery'), null, true);
    wp_register_script('init', get_template_directory_uri() . '/js/init.js', array('jquery'), null, true);
    wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), null, true);
    wp_register_script('animated-headline', get_template_directory_uri() . '/js/animated-headline.js', array(), null, true);
    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);

    // Enqueue scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('backstretch');
    wp_enqueue_script('counter');
    wp_enqueue_script('countdown');
    wp_enqueue_script('init');
    wp_enqueue_script('modernizr');
    wp_enqueue_script('animated-headline');
    wp_enqueue_script('custom');
}

// Hook the function to the wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'load_custom_scripts');








?>