<?php 
/*
Plugin Name: Posmon Post Types
Plugin URI:
Description: Agrega Custom Post Types al sitio Posmon
Version: 1.0
Author: Jose Daniel Posada
Author URI:
License: GLP3
Licence URI: https://www.gnu.org/licenses/gpl.html
*/

// Register Custom Post Type
function crear_post_type_lineas() {

	$labels = array(
		'name'                  => _x( 'Líneas', 'Post Type General Name', 'posmon' ),
		'singular_name'         => _x( 'Línea', 'Post Type Singular Name', 'posmon' ),
		'menu_name'             => __( 'Líneas', 'posmon' ),
		'name_admin_bar'        => __( 'Línea', 'posmon' ),
		'archives'              => __( 'Item Archives', 'posmon' ),
		'attributes'            => __( 'Item Attributes', 'posmon' ),
		'parent_item_colon'     => __( 'Línea Padre', 'posmon' ),
		'all_items'             => __( 'Todas las Líneas', 'posmon' ),
		'add_new_item'          => __( 'Agregar Nueva Línea', 'posmon' ),
		'add_new'               => __( 'Nueva Línea', 'posmon' ),
		'new_item'              => __( 'Nueva Línea', 'posmon' ),
		'edit_item'             => __( 'Editar Línea', 'posmon' ),
		'update_item'           => __( 'Actualizar Línea', 'posmon' ),
		'view_item'             => __( 'Ver Línea', 'posmon' ),
		'view_items'            => __( 'Ver Líneas', 'posmon' ),
		'search_items'          => __( 'Buscar Línea', 'posmon' ),
		'not_found'             => __( 'No encontrado', 'posmon' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'posmon' ),
		'featured_image'        => __( 'Imagen Destacada', 'posmon' ),
		'set_featured_image'    => __( 'Establecer Imagen Destacada', 'posmon' ),
		'remove_featured_image' => __( 'Remover Imagen Destacada', 'posmon' ),
		'use_featured_image'    => __( 'Usar como Imagen Destacada', 'posmon' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'posmon' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'posmon' ),
		'items_list'            => __( 'Lista de elementos', 'posmon' ),
		'items_list_navigation' => __( 'Navegación de Lista de Elementos', 'posmon' ),
		'filter_items_list'     => __( 'Filtrar lista de elementos', 'posmon' ),
	);
	$args = array(
		'label'                 => __( 'Línea', 'posmon' ),
		'description'           => __( 'Líneas', 'posmon' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-screenoptions',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'lineas', $args );

}
add_action( 'init', 'crear_post_type_lineas', 0 );


function crear_post_type_productos() {

	$labels = array(
		'name'                  => _x( 'Productos', 'Post Type General Name', 'posmon' ),
		'singular_name'         => _x( 'Producto', 'Post Type Singular Name', 'posmon' ),
		'menu_name'             => __( 'Productos', 'posmon' ),
		'name_admin_bar'        => __( 'Producto', 'posmon' ),
		'archives'              => __( 'Item Archives', 'posmon' ),
		'attributes'            => __( 'Item Attributes', 'posmon' ),
		'parent_item_colon'     => __( 'Producto Padre', 'posmon' ),
		'all_items'             => __( 'Todos los Productos', 'posmon' ),
		'add_new_item'          => __( 'Agregar Nuevo Producto', 'posmon' ),
		'add_new'               => __( 'Agregar Producto', 'posmon' ),
		'new_item'              => __( 'Nuevo Producto', 'posmon' ),
		'edit_item'             => __( 'Editar Producto', 'posmon' ),
		'update_item'           => __( 'Actualizar Producto', 'posmon' ),
		'view_item'             => __( 'Ver Producto', 'posmon' ),
		'view_items'            => __( 'Ver Productos', 'posmon' ),
		'search_items'          => __( 'Buscar Producto', 'posmon' ),
		'not_found'             => __( 'No encontrado', 'posmon' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'posmon' ),
		'featured_image'        => __( 'Imagen Destacada', 'posmon' ),
		'set_featured_image'    => __( 'Establecer Imagen Destacada', 'posmon' ),
		'remove_featured_image' => __( 'Remover Imagen Destacada', 'posmon' ),
		'use_featured_image'    => __( 'Usar como Imagen Destacada', 'posmon' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'posmon' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'posmon' ),
		'items_list'            => __( 'Lista de elementos', 'posmon' ),
		'items_list_navigation' => __( 'Navegación de Lista de Elementos', 'posmon' ),
		'filter_items_list'     => __( 'Filtrar lista de elementos', 'posmon' ),
	);
	$args = array(
		'label'                 => __( 'Productos', 'posmon' ),
		'description'           => __( 'Productos', 'posmon' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'productos', $args );

}
add_action( 'init', 'crear_post_type_productos', 0 );


function taxonomia_linea_categoria_producto() {
	$labels = array(
	  'name'              => _x( 'Línea - Categoría', 'taxonomy general name' ),
	  'singular_name'     => _x( 'Línea - Categoría', 'taxonomy singular name' ),
	  'search_items'      => __( 'Buscar Línea - Categoría' ),
	  'all_items'         => __( 'Todas las Línea - Categoría' ),
	  'parent_item'       => __( 'Línea - Categoría Padre' ),
	  'parent_item_colon' => __( 'Línea - Categoría Padre:' ),
	  'edit_item'         => __( 'Editar Línea - Categoría' ),
	  'update_item'       => __( 'Actualizar Línea - Categoría' ),
	  'add_new_item'      => __( 'Agregar Nueva Línea - Categoría' ),
	  'new_item_name'     => __( 'Nueva Línea - Categoría' ),
	  'menu_name'         => __( 'Línea - Categoría' ),
	);
  
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' =>'linea-categoria')
	);
	register_taxonomy( 'linea-categoria', array('productos'), $args);
  
  }
  
  add_action('init', 'taxonomia_linea_categoria_producto');