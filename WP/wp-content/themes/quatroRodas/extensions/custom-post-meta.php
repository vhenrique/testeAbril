<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {
	// Theme prefix
	global $themePrefix;
	// Projects
	$meta_boxes['project_meta'] = array(
		'id'         => $themePrefix.'project_meta',
		'title'      => 'Informações extra',
		'pages'      => array('materias'),
		'context'    => 'normal',
		'priority'   => 'low',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => 'Destaque',
				'desc' => 'Fazer desta publicação um destaque.',
				'id'   => $themePrefix . 'featured',
				'type' => 'checkbox'
			),
			array(
				'name' => '+ Acessado',
				'desc' => 'Fazer com que esta publicação entre na lista de mais acessados',
				'id'   => $themePrefix . 'popular',
				'type' => 'checkbox'
			),
			array(
				'name' => 'Listagem secundária',
				'desc' => 'Fazer com que esta publicação entre na lista secundária da Home',
				'id'   => $themePrefix . 'secondary',
				'type' => 'checkbox'
			)
		)
	);
	
	return $meta_boxes;
}

// Initialize the metabox class.
add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
function cmb_initialize_cmb_meta_boxes() {
	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'custom-metaboxes/init.php';
}