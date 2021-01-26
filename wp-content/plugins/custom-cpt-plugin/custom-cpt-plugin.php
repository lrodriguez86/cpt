<?php
/*
Plugin Name: Tipos de contenido
Description: Plugin especifico para tipos de contenido personalizados
*/
/* Agrega código a partir de la siguiente linea */
  
// Funcion crear el tipo de contenido Serie
function create_posttype() {
 
    register_post_type( 'series',
    // Opciones de las series
        array(
            'labels' => array(
                'name' => __( 'Series' ),
                'singular_name' => __( 'Serie' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'series'),
            'show_in_rest' => true,
 
        )
    );
}
add_action( 'init', 'create_posttype' );

// Creando la funcion para crear una serie
 
function custom_post_type() {
 
// Etiquetas para la interfaz de usuario
    $labels = array(
		'name'                => _x( 'Series', 'Nombre general'),
        'singular_name'       => _x( 'Series', 'Nombre singular'),
        'menu_name'           => __( 'Series'),
        'parent_item_colon'   => __( 'Serie padre'),
        'all_items'           => __( 'Todas las series'),
        'view_item'           => __( 'Ver Serie'),
        'add_new_item'        => __( 'Agregar nueva serie'),
        'add_new'             => __( 'Agregar nueva'),
        'edit_item'           => __( 'Editar serie'),
        'update_item'         => __( 'Actualizar Serie'),
        'search_items'        => __( 'Buscar serie'),
        'not_found'           => __( 'Serie no encontrada'),
        'not_found_in_trash'  => __( 'Serie no encontrada en la papelera'),
    );
     
// Otras opciones
     
    $args = array(
        'label'               => __( 'series', 'twentytwenty'),
        'description'         => __( 'Sinopsis y opiniones de series'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // Asociando a la taxonomia plataformas. 
        'taxonomies'          => array('plataformas'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registrando el tipo de contenido Serie
    register_post_type( 'series', $args );
 
}
 
add_action( 'init', 'custom_post_type', 0 );
 
add_action( 'init', 'create_plataformas_hierarchical_taxonomy', 0 );
 
function create_plataformas_hierarchical_taxonomy() {
 
// Agregar taxonomia nueva, como si fueran categorías de posts (jerárquicas)
// Primero traducimos
 
  $labels = array(
    'name' => _x( 'Plataformas', 'taxonomy general name' ),
    'singular_name' => _x( 'Plataforma', 'taxonomy singular name' ),
    'search_items' =>  __( 'Buscar Plataforma' ),
    'all_items' => __( 'Todas las plataformas' ),
    'parent_item' => __( 'Plataforma padre' ),
    'parent_item_colon' => __( 'Plataforma padre:' ),
    'edit_item' => __( 'Editar Plataforma' ), 
    'update_item' => __( 'Actualizar Plataforma' ),
    'add_new_item' => __( 'Agregar nueva Plataforma' ),
    'new_item_name' => __( 'Nueva Plataforma' ),
    'menu_name' => __( 'Plataformas' ),
  );    
 
// Registrando la taxonomia plataformas
  register_taxonomy('plataformas',array('series'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'plataforma' ),
  ));
 
}
/* No agregar mas codigo abajo de esta linea */
?>