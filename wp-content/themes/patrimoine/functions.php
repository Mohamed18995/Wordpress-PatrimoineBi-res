<?php
//add_theme_support() permet d'ajouter au niveau du theme la prise en charge des fonctionnalités

add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');
add_theme_support('align-wide');


register_nav_menus(['patrimoine_menu_principal' => 'Menu de navigation princial']);


register_sidebar([
    "name" => "zone gauche du pied de page",
    "id" => "patrimoine_footer_left_zone",
    "before_widget" => '',
    "after_widget" => '',     
    "before_sidebar" => '<div id="f_left">',
    "after_sidebar" => '</div>',
]);

register_sidebar([
    "name" => "zone central du pied de page",
    "id" => "patrimoine_footer_center_zone",
    "before_widget" => '<div id="f_center">',
    "after_widget" => '</div>',  
    ]);

register_sidebar([
    "name" => "zone droite du pied de page",
    "id" => "patrimoine_footer_right_zone",
    "before_widget" => '<div id="f_right">',
    "after_widget" => '</div>',   
]);

function get_url_by_slug($slug) {
	$page_url_id = get_page_by_path($slug);
	$page_url_link = get_permalink($page_url_id);
	return $page_url_link;
}


function patrimoine_load_css(){
    wp_register_style( 'googleMontserrat', 'https://fonts.googleapis.com/css?family=Montserrat:300,600|Open+Sans:600&display=swap', null, '1.0', 'screen');
    wp_register_style('patrimoine', get_template_directory_uri().'/css/festival.css',null,'1.0','screen');

    wp_enqueue_style( 'googleMontserrat');    
    wp_enqueue_style( 'patrimoine');
}

add_action('wp_enqueue_scripts', 'patrimoine_load_css');


add_theme_support('editor-color-palette', array(

    array(
    
    'name' => __('Jaune', 'patrimoine_lang'),
    
    'slug' => 'Jaune',
    
    'color' => '#ffcc00',
    
    ),
    
    array(
    
    'name' => __('Bleu', 'patrimoine_lang'),
    
    'slug' => 'Bleu',
    
    'color' => '#0000ee',
    
    ),   
       
));

