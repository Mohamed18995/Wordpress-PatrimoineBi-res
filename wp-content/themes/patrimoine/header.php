<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/patrimoine/festival.css" >
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>  
    <header>
        <div id="wrapper">
            <div id="logo">
                <span><?php bloginfo('name'); ?></span>
            </div>               
            <nav>               
                <?php wp_nav_menu(["theme_location" => "patrimoine_menu_principal"]); ?>
            </nav>                
        </div> 
    </header>