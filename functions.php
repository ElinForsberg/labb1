<?php

//köar in css och js
function theme_scripts(){
    wp_deregister_script('jquery');
   wp_enqueue_style('bootstrap', get_template_directory_uri().'/template_files/css/bootstrap.css', array(), '3.3.7', 'all');
   wp_enqueue_style('elinmain', get_template_directory_uri().'/template_files/css/elinmain.css', array('bootstrap'));
   wp_enqueue_style('font-awesome', get_template_directory_uri().'/template_files/css/font-awesome.css', array(), '4.6.3', 'all');
   wp_enqueue_script('elinjquery', get_template_directory_uri().'/template_files/js/elinjquery.js', array(), false, true);
   wp_enqueue_script('javascript', get_template_directory_uri().'/template_files/js/script.js', array('elinjquery'), true, true);
   
}


    add_action('wp_enqueue_scripts','theme_scripts');
    
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('widgets');

    function register_my_menu(){
        register_nav_menu('huvudmeny', 'Huvudmeny');
        register_nav_menu('sidmeny', 'Sidmeny');
        
    }
    
    add_action('after_setup_theme', 'register_my_menu');

    register_sidebar([
        'name' => 'sidebar1',
        'description' => 'blogg sidebar',
        'id' => 'sidebar1'
    ]);
    register_sidebar([
        'name' => 'sidebar2',
        'description' => 'arkiv sidebar',
        'id' => 'sidebar2'
    ]);
   
    register_sidebar([
        'name' => 'sidebar3',
        'description' => 'kategori sidebar',
        'id' => 'sidebar3'
    ]);

    
    
?>
