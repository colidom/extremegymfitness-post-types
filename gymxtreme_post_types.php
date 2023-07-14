<?php
/*
    Plugin Name: GymXtreme - Post Types
    Plugin URI: https://github.com/colidom/gymxtreme-post-types
    Description: Añade Post Types al sitio GymXtreme.
    Version: 1.0.0
    Author: colidom
    Author URI: https://github.com/colidom
    Text Domain: gymxtreme
*/

if (!defined('ABSPATH')) die();

// Registrar Custom Post Type
function gymxtreme_lessons_post_type()
{

    $labels = array(
        'name'                  => _x('Clases', 'Post Type General Name', 'gymxtreme'),
        'singular_name'         => _x('Clase', 'Post Type Singular Name', 'gymxtreme'),
        'menu_name'             => __('Clases', 'gymxtreme'),
        'name_admin_bar'        => __('Clase', 'gymxtreme'),
        'archives'              => __('Archivo', 'gymxtreme'),
        'attributes'            => __('Atributos', 'gymxtreme'),
        'parent_item_colon'     => __('Clase Padre', 'gymxtreme'),
        'all_items'             => __('Todas Las Clases', 'gymxtreme'),
        'add_new_item'          => __('Agregar Clase', 'gymxtreme'),
        'add_new'               => __('Agregar Clase', 'gymxtreme'),
        'new_item'              => __('Nueva Clase', 'gymxtreme'),
        'edit_item'             => __('Editar Clase', 'gymxtreme'),
        'update_item'           => __('Actualizar Clase', 'gymxtreme'),
        'view_item'             => __('Ver Clase', 'gymxtreme'),
        'view_items'            => __('Ver Clases', 'gymxtreme'),
        'search_items'          => __('Buscar Clase', 'gymxtreme'),
        'not_found'             => __('No Encontrado', 'gymxtreme'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'gymxtreme'),
        'featured_image'        => __('Imagen Destacada', 'gymxtreme'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'gymxtreme'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'gymxtreme'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'gymxtreme'),
        'insert_into_item'      => __('Insertar en Clase', 'gymxtreme'),
        'uploaded_to_this_item' => __('Agregado en Clase', 'gymxtreme'),
        'items_list'            => __('Lista de Clases', 'gymxtreme'),
        'items_list_navigation' => __('Navegación de Clases', 'gymxtreme'),
        'filter_items_list'     => __('Filtrar Clases', 'gymxtreme'),
    );

    $args = array(
        'label'                 => __('Clase', 'gymxtreme'),
        'description'           => __('Clases para el Sitio Web', 'gymxtreme'),
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
    register_post_type('gymxtreme_lessons', $args);
}
add_action('init', 'gymxtreme_lessons_post_type', 0);

// Instructors Custom Post Types
function gymxtreme_instructors_post_type()
{

    $labels = array(
        'name'                  => _x('Instructors', 'Post Type General Name', 'gymxtreme'),
        'singular_name'         => _x('Instructor', 'Post Type Singular Name', 'gymxtreme'),
        'menu_name'             => __('Instructors', 'gymxtreme'),
        'name_admin_bar'        => __('Instructor', 'gymxtreme'),
        'archives'              => __('Archivo', 'gymxtreme'),
        'attributes'            => __('Atributos', 'gymxtreme'),
        'parent_item_colon'     => __('Instructor Padre', 'gymxtreme'),
        'all_items'             => __('Todas Las Instructors', 'gymxtreme'),
        'add_new_item'          => __('Agregar Instructor', 'gymxtreme'),
        'add_new'               => __('Agregar Instructor', 'gymxtreme'),
        'new_item'              => __('Nueva Instructor', 'gymxtreme'),
        'edit_item'             => __('Editar Instructor', 'gymxtreme'),
        'update_item'           => __('Actualizar Instructor', 'gymxtreme'),
        'view_item'             => __('Ver Instructor', 'gymxtreme'),
        'view_items'            => __('Ver Instructors', 'gymxtreme'),
        'search_items'          => __('Buscar Instructor', 'gymxtreme'),
        'not_found'             => __('No Encontrado', 'gymxtreme'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'gymxtreme'),
        'featured_image'        => __('Imagen Destacada', 'gymxtreme'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'gymxtreme'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'gymxtreme'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'gymxtreme'),
        'insert_into_item'      => __('Insertar en Instructor', 'gymxtreme'),
        'uploaded_to_this_item' => __('Agregado en Instructor', 'gymxtreme'),
        'items_list'            => __('Lista de Instructors', 'gymxtreme'),
        'items_list_navigation' => __('Navegación de Instructors', 'gymxtreme'),
        'filter_items_list'     => __('Filtrar Instructors', 'gymxtreme'),
    );
    $args = array(
        'label'                 => __('Instructors', 'gymxtreme'),
        'description'           => __('Instructors para el Sitio Web', 'gymxtreme'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('instructors', $args);
}
add_action('init', 'gymxtreme_instructors_post_type', 0);
