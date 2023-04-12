<?php
function theme_scripts(){
   wp_enqueue_style('bootstrap', get_template_directory_uri().'/template_files/css/bootstrap.css');
   wp_enqueue_style('style', get_template_directory_uri().'/template_files/css/style.css');
   wp_enqueue_style('font-awesome', get_template_directory_uri().'/template_files/css/font-awesome.css');

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
        'name' => 'sidebar',
        'description' => 'blogg sidebar',
        'id' => 'sidebar'
    ]);
   
?>
