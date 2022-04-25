<?php 
//add suport för menu och bild 

add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');


  //  register menu och widget");
add_action('after_setup_theme', 'registrera_meny');
function registrera_meny() {
    register_nav_menu('huvudmeny', 'Huvud meny');
    register_nav_menu('footermeny', 'Footer meny');

    

}



// register widget undersida

register_sidebar(
    [
        'name' => 'undersida',
        'description' => ' widget undersida',
        'id' => 'undersida',
        'before_widget' => '  ',
        'after_widget' => '  '
    ]
); 
//prova med sidebar 
register_sidebar(
    [
        'name' => 'sidebar',
        'description' => ' widget sidebar',
        'id' => 'sidebar',
        'before_widget' => '  ',
        'after_widget' => '  '
    ]
); 





//kör style filer och js

add_action('wp_enqueue_scripts', 'mina_scripts');
function mina_scripts(){
    wp_enqueue_style('temastil',get_template_directory_uri().'./style.css');
    wp_enqueue_style('bootstrapstil',get_template_directory_uri().'/bootstrap.css');
    wp_enqueue_style('fontstil',get_template_directory_uri().'/font-awesome.css');
    wp_enqueue_style('temascript',get_template_directory_uri().'/script.js');
    wp_enqueue_style('temaquery',get_template_directory_uri().'/jquery.js');
    
}




?>