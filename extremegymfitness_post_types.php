<?php
/*
    Plugin Name: Extreme Gym Fitness - Post Types
    Plugin URI: https://github.com/colidom/extremegymfitness-post-types
    Description: Añade Post Types al sitio Extreme Gym Fitness.
    Version: 1.0.0
    Author: colidom
    Author URI: https://github.com/colidom
    Text Domain: extremegymfitness
*/

if (!defined('ABSPATH')) die();

// Registrar Custom Post Type
function extremegymfitness_clases_post_type()
{

    $labels = array(
        'name'                  => _x('Clases', 'Post Type General Name', 'extremegymfitness'),
        'singular_name'         => _x('Clase', 'Post Type Singular Name', 'extremegymfitness'),
        'menu_name'             => __('Clases', 'extremegymfitness'),
        'name_admin_bar'        => __('Clase', 'extremegymfitness'),
        'archives'              => __('Archivo', 'extremegymfitness'),
        'attributes'            => __('Atributos', 'extremegymfitness'),
        'parent_item_colon'     => __('Clase Padre', 'extremegymfitness'),
        'all_items'             => __('Todas Las Clases', 'extremegymfitness'),
        'add_new_item'          => __('Agregar Clase', 'extremegymfitness'),
        'add_new'               => __('Agregar Clase', 'extremegymfitness'),
        'new_item'              => __('Nueva Clase', 'extremegymfitness'),
        'edit_item'             => __('Editar Clase', 'extremegymfitness'),
        'update_item'           => __('Actualizar Clase', 'extremegymfitness'),
        'view_item'             => __('Ver Clase', 'extremegymfitness'),
        'view_items'            => __('Ver Clases', 'extremegymfitness'),
        'search_items'          => __('Buscar Clase', 'extremegymfitness'),
        'not_found'             => __('No Encontrado', 'extremegymfitness'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'extremegymfitness'),
        'featured_image'        => __('Imagen Destacada', 'extremegymfitness'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'extremegymfitness'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'extremegymfitness'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'extremegymfitness'),
        'insert_into_item'      => __('Insertar en Clase', 'extremegymfitness'),
        'uploaded_to_this_item' => __('Agregado en Clase', 'extremegymfitness'),
        'items_list'            => __('Lista de Clases', 'extremegymfitness'),
        'items_list_navigation' => __('Navegación de Clases', 'extremegymfitness'),
        'filter_items_list'     => __('Filtrar Clases', 'extremegymfitness'),
    );
    $args = array(
        'label'                 => __('Clase', 'extremegymfitness'),
        'description'           => __('Clases para el Sitio Web', 'extremegymfitness'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => true, // true = posts , false = paginas
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('extremegymfitness_clases', $args);
}
add_action('init', 'extremegymfitness_clases_post_type', 0);
