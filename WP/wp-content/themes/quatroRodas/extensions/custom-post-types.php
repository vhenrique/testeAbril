<?php
// Projects
	add_action('init', 'news_register');
	function news_register(){
		$singular_label = 'matéria';
		$labels = array(
			'name'					=> __('Matérias'),
			'singular_name'			=> __(ucfirst($singular_label)),
			'add_new'				=> __('Nova '),
			'add_new_item'			=> __('Nova ').' '.strtolower($singular_label),
			'edit_item'				=> __('Editar').' '.strtolower($singular_label),
			'new_item'				=> __('Novas').' '.strtolower($singular_label),
			'view_item'				=> __('Ver').' '.strtolower($singular_label),
			'search_items'			=> __('Buscar').' '.strtolower($singular_label),
			'not_found'				=> __('Não encontrada'),
			'not_found_in_trash'	=> __('Não encontrada na lixeira'),
		);
		$args = array(
			'labels'				=> $labels,
			'public'				=> true,
			'publicly_queryable'	=> true,
			'show_ui'				=> true,
			'query_var'				=> true,
			'show_in_nav_menus' 	=> true,
			'capability_type'		=> 'post',
			'menu_icon' 			=> 'dashicons-portfolio',
			'hierarchical'			=> true,
			'menu_position'			=> 2,
			'has_archive'			=> true,
			'exclude_from_search'	=> false,
			'supports'				=> array('excerpt', 'thumbnail', 'title'),
			'taxonomies'			=> array('category')
		);
		register_post_type('materias', $args);
	}
?>