
<?php

add_theme_support( 'post-thumbnails' );
add_action('init', 'my_custom_init');
	function my_custom_init()
		{
			register_post_type(
						'action',
						  array(
							'label' => 'action',
							'labels' => array(
							  'name' => 'Actions',
							  'singular_name' => 'action',
							  'all_items' => 'Toutes les actions',
							  'add_new_item' => 'Ajouter une action',
							  'edit_item' => 'Éditer la page action',
							  'new_item' => 'Nouvelle action',
							  'view_item' => 'Voir l\'action',
							  'search_items' => 'Rechercher parmi les actions',
							  'not_found' => 'Pas de d\'action trouvée',
							  'not_found_in_trash'=> 'Pas d\' action dans la corbeille'
							  ),
							'public' => true,
							'capability_type' => 'post',
							'supports' => array(
							  'title',
							  'editor',
							  'thumbnail'
							),
							'has_archive' => true
						  )
						);

			register_post_type(
				'recit',
				  array(
					'label' => 'recit',
					'labels' => array(
					  'name' => 'récits',
					  'singular_name' => 'récit',
					  'all_items' => 'Tous les récits',
					  'add_new_item' => 'Ajouter un récit',
					  'edit_item' => 'Éditer un récit',
					  'new_item' => 'Nouveau récit',
					  'view_item' => 'Voir le récit',
					  'search_items' => 'Rechercher parmi les récits',
					  'not_found' => 'Pas de récit trouvé',
					  'not_found_in_trash'=> 'Pas de récit dans la corbeille'
					  ),
					'public' => true,
					'capability_type' => 'post',
					'supports' => array(
					  'title',
					  'editor',
					  'thumbnail'
					),
					'has_archive' => true
				  )
				);

			register_post_type(
				'evenement',
				  array(
					'label' => 'evenement',
					'labels' => array(
					  'name' => 'evenements',
					  'singular_name' => 'evenement',
					  'all_items' => 'Tous les evenements',
					  'add_new_item' => 'Ajouter un evenement',
					  'edit_item' => 'Éditer un evenement',
					  'new_item' => 'Nouvel evenement',
					  'view_item' => 'Voir l\'evenement',
					  'search_items' => 'Rechercher parmi les evenements',
					  'not_found' => 'Pas d\'evenement trouvé',
					  'not_found_in_trash'=> 'Pas de d\'evenement dans la corbeille'
					  ),
					'public' => true,
					'capability_type' => 'post',
					'supports' => array(
					  'title',
					  'editor',
					  'thumbnail'
					),
					'has_archive' => true
				  )
				);



			register_taxonomy(
			  'lieu',
			  array( 'action','recit','evenement' ),
			  array(
				'label' => 'Lieux',
				'labels' => array(
				'name' => 'Lieux',
				'singular_name' => 'Lieu',
				'all_items' => 'Tous les lieux',
				'edit_item' => 'Éditer le lieu',
				'view_item' => 'Voir le lieu',
				'update_item' => 'Mettre à jour le lieu',
				'add_new_item' => 'Ajouter le lieu',
				'new_item_name' => 'Nouveau lieu',
				'search_items' => 'Rechercher parmi les lieux',
				'popular_items' => 'Lieux les plus utilisées'
			  ),
			  'hierarchical' => true
			  )
			);
			register_taxonomy(
			  'artiste',
			  array( 'action','evenement' ),
			  array(
				'label' => 'Artistes',
				'labels' => array(
				'name' => 'Artistes',
				'singular_name' => 'Artiste',
				'all_items' => 'Tous les Artistes',
				'edit_item' => 'Éditer l\'artiste',
				'view_item' => 'Voir l\'artiste',
				'update_item' => 'Mettre à jour l\'artiste',
				'add_new_item' => 'Ajouter un artiste / épisode',
				'new_item_name' => 'Nouvel artiste / épisode',
				'search_items' => 'Rechercher parmi les artistes / épisodes',
				'popular_items' => 'Artistes / épisodes les plus utilisés'
			  ),
			  'hierarchical' => true
			  )
			);}

register_taxonomy_for_object_type( 'artiste', 'action' );
register_taxonomy_for_object_type( 'lieu', 'action' );

add_action( 'init', 'add_js_scripts' );
function add_js_scripts() {

	wp_register_script('scriptos', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0');
	wp_enqueue_script('scriptos');
	wp_localize_script('scriptos', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
	//wp_localize_script( 'scriptos', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
}
add_action('wp_enqueue_script', 'add_js_scripts');


add_action('wp_ajax_nopriv_myfunc', 'myfunc');
add_action('wp_ajax_myfunc', 'myfunc');

function myfunc() {
	
                $args = array(
                'post_type' => 'action',
                'lieu' => $term->slug,
				'numberposts' => 4,
                );
				$query = new WP_Query( $args );
     			while ( $query->have_posts() ) : $query->the_post();?> 
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                
				<?php endwhile;
				wp_reset_postdata(); 

	die();

}