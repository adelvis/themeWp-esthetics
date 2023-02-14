<?php

/*
    Plugin Name: Esthetics Theme Post Types
    Plugin URI:
    Description: Añade Custom post type al tema Esthetics
    Version:1.0.0
    Author: Adelvis Uzcategui
    Author URI:https://twitter.com/adelvisu    
    Text Domain: estheticsThemeWp
*/

if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function esthetics_treatment() {

	$labels = array(
		'name'                  => _x( 'Treatments', 'Post Type General Name', 'estheticsThemeWp' ),
		'singular_name'         => _x( 'Treatment', 'Post Type Singular Name', 'estheticsThemeWp' ),
		'menu_name'             => __( 'Treatments', 'estheticsThemeWp' ),
		'name_admin_bar'        => __( 'Treatment', 'estheticsThemeWp' ),
		'archives'              => __( 'Archivo', 'estheticsThemeWp' ),
		'attributes'            => __( 'Atributos', 'estheticsThemeWp' ),
		'parent_item_colon'     => __( 'Treatment Padre', 'estheticsThemeWp' ),
		'all_items'             => __( 'Todas Las Treatments', 'estheticsThemeWp' ),
		'add_new_item'          => __( 'Agregar Treatment', 'estheticsThemeWp' ),
		'add_new'               => __( 'Agregar Treatment', 'estheticsThemeWp' ),
		'new_item'              => __( 'Nueva Treatment', 'estheticsThemeWp' ),
		'edit_item'             => __( 'Editar Treatment', 'estheticsThemeWp' ),
		'update_item'           => __( 'Actualizar Treatment', 'estheticsThemeWp' ),
		'view_item'             => __( 'Ver Treatment', 'estheticsThemeWp' ),
		'view_items'            => __( 'Ver Treatments', 'estheticsThemeWp' ),
		'search_items'          => __( 'Buscar Treatment', 'estheticsThemeWp' ),
		'not_found'             => __( 'No Encontrado', 'estheticsThemeWp' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'estheticsThemeWp' ),
		'featured_image'        => __( 'Imagen Destacada', 'estheticsThemeWp' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'estheticsThemeWp' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'estheticsThemeWp' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'estheticsThemeWp' ),
		'insert_into_item'      => __( 'Insertar en Treatment', 'estheticsThemeWp' ),
		'uploaded_to_this_item' => __( 'Agregado en Treatment', 'estheticsThemeWp' ),
		'items_list'            => __( 'Lista de Treatments', 'estheticsThemeWp' ),
		'items_list_navigation' => __( 'Navegación de Treatments', 'estheticsThemeWp' ),
		'filter_items_list'     => __( 'Filtrar Treatments', 'estheticsThemeWp' ),
	);
	$args = array(
		'label'                 => __( 'Treatments', 'estheticsThemeWp' ),
		'description'           => __( 'Treatments para el Sitio Web', 'estheticsThemeWp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'treatment', $args );

}
add_action( 'init', 'esthetics_treatment', 0 );


// Registrar Custom Post Type Specialists
function esthetics_specialist() {

	$labels = array(
		'name'                  => _x( 'Specialists', 'Post Type General Name', 'estheticsThemeWp' ),
		'singular_name'         => _x( 'Specialist', 'Post Type Singular Name', 'estheticsThemeWp' ),
		'menu_name'             => __( 'Specialists', 'estheticsThemeWp' ),
		'name_admin_bar'        => __( 'Specialist', 'estheticsThemeWp' ),
		'archives'              => __( 'Archivo', 'estheticsThemeWp' ),
		'attributes'            => __( 'Atributos', 'estheticsThemeWp' ),
		'parent_item_colon'     => __( 'Specialist Padre', 'estheticsThemeWp' ),
		'all_items'             => __( 'Todas Las Specialists', 'estheticsThemeWp' ),
		'add_new_item'          => __( 'Agregar Specialist', 'estheticsThemeWp' ),
		'add_new'               => __( 'Agregar Specialist', 'estheticsThemeWp' ),
		'new_item'              => __( 'Nueva Specialist', 'estheticsThemeWp' ),
		'edit_item'             => __( 'Editar Specialist', 'estheticsThemeWp' ),
		'update_item'           => __( 'Actualizar Specialist', 'estheticsThemeWp' ),
		'view_item'             => __( 'Ver Specialist', 'estheticsThemeWp' ),
		'view_items'            => __( 'Ver Specialists', 'estheticsThemeWp' ),
		'search_items'          => __( 'Buscar Specialist', 'estheticsThemeWp' ),
		'not_found'             => __( 'No Encontrado', 'estheticsThemeWp' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'estheticsThemeWp' ),
		'featured_image'        => __( 'Imagen Destacada', 'estheticsThemeWp' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'estheticsThemeWp' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'estheticsThemeWp' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'estheticsThemeWp' ),
		'insert_into_item'      => __( 'Insertar en Specialist', 'estheticsThemeWp' ),
		'uploaded_to_this_item' => __( 'Agregado en Specialist', 'estheticsThemeWp' ),
		'items_list'            => __( 'Lista de Specialists', 'estheticsThemeWp' ),
		'items_list_navigation' => __( 'Navegación de Specialists', 'estheticsThemeWp' ),
		'filter_items_list'     => __( 'Filtrar Specialists', 'estheticsThemeWp' ),
	);
	$args = array(
		'label'                 => __( 'Specialists', 'estheticsThemeWp' ),
		'description'           => __( 'Specialists para el Sitio Web', 'estheticsThemeWp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-universal-access',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'specialist', $args );

}
add_action( 'init', 'esthetics_specialist', 0 );

function esthetics_testimoniales() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'estheticsThemeWp' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'estheticsThemeWp' ),
		'menu_name'             => __( 'Testimonials', 'estheticsThemeWp' ),
		'name_admin_bar'        => __( 'Testimonial', 'estheticsThemeWp' ),
		'archives'              => __( 'Archivo', 'estheticsThemeWp' ),
		'attributes'            => __( 'Atributos', 'estheticsThemeWp' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'estheticsThemeWp' ),
		'all_items'             => __( 'Todas Las Testimonials', 'estheticsThemeWp' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'estheticsThemeWp' ),
		'add_new'               => __( 'Agregar Testimonial', 'estheticsThemeWp' ),
		'new_item'              => __( 'Nueva Testimonial', 'estheticsThemeWp' ),
		'edit_item'             => __( 'Editar Testimonial', 'estheticsThemeWp' ),
		'update_item'           => __( 'Actualizar Testimonial', 'estheticsThemeWp' ),
		'view_item'             => __( 'Ver Testimonial', 'estheticsThemeWp' ),
		'view_items'            => __( 'Ver Testimonials', 'estheticsThemeWp' ),
		'search_items'          => __( 'Buscar Testimonial', 'estheticsThemeWp' ),
		'not_found'             => __( 'No Encontrado', 'estheticsThemeWp' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'estheticsThemeWp' ),
		'featured_image'        => __( 'Imagen Destacada', 'estheticsThemeWp' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'estheticsThemeWp' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'estheticsThemeWp' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'estheticsThemeWp' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'estheticsThemeWp' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'estheticsThemeWp' ),
		'items_list'            => __( 'Lista de Testimonials', 'estheticsThemeWp' ),
		'items_list_navigation' => __( 'Navegación de Testimonials', 'estheticsThemeWp' ),
		'filter_items_list'     => __( 'Filtrar Testimonials', 'estheticsThemeWp' ),
	);
	$args = array(
		'label'                 => __( 'Testimonials', 'estheticsThemeWp' ),
		'description'           => __( 'Testimonials para el Sitio Web', 'estheticsThemeWp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Testimonials', $args );

}
add_action( 'init', 'esthetics_testimoniales', 0 );