<?php 

add_theme_support('menus');
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 220, true);

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

	function cmb2_fields_add() {
		$cmb = new_cmb2_box([
		  'id' => 'Piscinas_box', // id deve ser único
		  'title' => 'Piscinas',
		  'object_types' => ['page'], // tipo de post
		  'show_on' => [
			'key' => 'page-template',
			'value' => 'page-inicio.php',
		  ], // modelo de página
		]);
		
	  
		// O campo repetidor é do tipo group
		$Membro = $cmb->add_field([
		  'name' => 'Piscinas',
		  'id' => 'Piscinas',
		  'type' => 'group',
		  'repeatable' => true,
		  'options' => [
			'group_title' => 'Piscina {#}',
			'add_button' => 'Adicionar',
			'remove_button' => 'Remover',
			'sortable' => true,
		  ],
		]);
	  
		// Cada campo é adicionado com add_group_field
		// Passando sempre o campo de grupo como primeiro argumento
		$cmb->add_group_field($Membro, [
			'name' => 'imagem',
			'id' => 'imagem',
			'type' => 'file',
		  ]);
		
		$cmb->add_group_field($Membro, [
		  'name' => 'Nome',
		  'id' => 'nome',
		  'type' => 'text',
		]);
	  
		$cmb->add_group_field($Membro, [
		  'name' => 'Descrição',
		  'id' => 'descricao',
		  'type' => 'text',
		]);
	}
	add_action('cmb2_admin_init', 'cmb2_fields_add');

