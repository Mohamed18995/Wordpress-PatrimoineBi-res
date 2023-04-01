<?php 
/**
 * Plugin Name: Contenus personnalisés - Brasseries
 * Description: Ajoute la gestion des contenus de type brasseries dans l’interface d’administration
 * Version: 1.0.0
 * Author: Diallo Aliou
 */ 

function contenus_perso_patrimoine_brasseries_biere() {
    $labels = array(
        'name'                => __('Brasseries', 'patrimoine_brasseries_biere'),
		'singular_name'       => __('Brasserie', 'patrimoine_brasseries_biere'),
		'menu_name'           => __('Brasseries', 'patrimoine_brasseries_biere'),
		'all_items'           => __('Toutes les brasseries', 'patrimoine_brasseries_biere'),
		'view_item'           => __('Voir la brasserie', 'patrimoine_brasseries_biere'),
		'add_new_item'        => __('Ajouter une brasserie', 'patrimoine_brasseries_biere'),
		'add_new'             => __('Ajouter'),
		'edit_item'           => __('Modifer la brasserie', 'patrimoine_brasseries_biere'),
		'update_item'         => __('Mettre à jour la brasserie', 'patrimoine_brasseries_biere'),
		'search_items'        => __('Rechercher une brasserie', 'patrimoine_brasseries_biere'),
		'not_found'           => __('Aucune brasserie', 'patrimoine_brasseries_biere'),
		'not_found_in_trash'  => __('Aucune brasserie dans la corbeille', 'patrimoine_brasseries_biere')
    );

    $args = array(
        'label'               => __('Brasseries', 'patrimoine_brasseries_biere'),
	    'description'         => __('Brasseries participantes', 'patrimoine_brasseries_biere'),
	    'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields'),//permet d'activer différents éléments ds le back-end
        // Un CPT hiérarchique se comporte comme une Page (Page), et peut avoir des éléments parents et/ou enfants. 
		// Un CPT non-hiérarchique se comporte comme un Article (Post).
        //permet de préciser le comportement de l'article au de niveau hiérarchique (page ou article)
        'hierarchical'        => false, //hierarchical=>true(page), hierarchical=>false(article)
		'has_archive'         => true,
		'public'              => true, //accessible via le front-end
		'show_ui'             => true,//permet d'afficher la possibilité de modifier lecontenu
		'show_in_menu'        => true,//permet d'afficher le contenu dans le back-end
		'show_in_nav_menus'   => true,//permet d'acceder au cotenu depuis le menu
        'menu_position'       => 21,		
		'capability_type'     => 'page',
		'show_in_rest'        => false
    
    );

    register_post_type('brewery', $args);
}

add_action( 'init', 'contenus_perso_patrimoine_brasseries_biere', 0 );






