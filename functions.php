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
    
    // lägger till support för att hämta bilder, menyer och widgetar
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('widgets');

    function register_my_menu(){
        register_nav_menu('huvudmeny', 'Huvudmeny');
        register_nav_menu('sidmeny', 'Sidmeny');
        
    }
    
    add_action('after_setup_theme', 'register_my_menu');

    // Registrerar och lägger till widgetar
    function widget_registration($name, $id, $description,$beforeWidget, $afterWidget, $beforeTitle, $afterTitle){
        register_sidebar( array(
            'name' => $name,
            'id' => $id,
            'description' => $description,
            'before_widget' => $beforeWidget,
            'after_widget' => $afterWidget,
            'before_title' => $beforeTitle,
            'after_title' => $afterTitle,
        ));
    }

    function multiple_widget_init(){
        widget_registration('sidebar1', 'sidebar1', 'meny widget', '<li>', '</li>', '<h4>', '</h4>');
        widget_registration('sidebar2', 'sidebar2', 'arkiv widget', '<li>', '</li>', '<h4>', '</4>');
        widget_registration('sidebar3', 'sidebar3', 'kategori widget', '<li class="categories %2$s">', '</li>', '<h4>', '</4>');
        widget_registration('sidebar4', 'sidebar4', 'sokfalt widget', '', '', '<h4>', '</h4>');
        widget_registration('footer1', 'footer1', 'om oss widget', '', '', '', '');
        widget_registration('footer2', 'footer2', 'kontakt widget', '', '', '', '');
        widget_registration('footer3', 'footer3', 'social meny widget', '', '', '<h4>', '</h4>');
        widget_registration('footer4', 'footer4', 'copywrite widget', '','','','');
    }
    
    add_action('widgets_init', 'multiple_widget_init');

    

    
    
?>

