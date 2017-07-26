<html>
<head>

  <title>Le Long de l'Axe</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="description" content="le long de l'axe - Le Long de l'Axe est un projet artistique de KompleX KapharnaüM. Il prend place depuis le tram T3, dans et aux abords de Lyon, Villeurbanne, Vaulx-en-Velin, Décines, Meyzieu.">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/picto_recit.svg">


  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

    <!--<script>
	$(document).ready(function () {
		if (localStorage.getItem('wasVisited') !== undefined) {
			$("#opening").css('display','none');
		} else {
			localStorage.setItem('wasVisited', 1);
			$("#opening").css('display','block');
			$("body").unmousewheel();
		}
	});
	</script>-->
  <script>
      theme_directory = "<?php echo get_template_directory_uri().'/js/script.js' ?>";
      ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
  </script>
  <script type="text/javascript">
  	$(document).ready(function() {
  		var date = new Date();
  		var minutes =20;
  		date.setTime(date.getTime() + (minutes * 60 * 1000));
  		// check cookie
  		var visited = $.cookie("visited");
  		if (visited == null) {
  			$('#opening').css('display','block');
    		// set cookie
    		$.cookie('visited', 'yes', { expires: date , path: '/' });
  		}
  		else{
  			$('#opening').css('display','none');
  			$("body").mousewheel(function(event, delta){
				  this.scrollLeft -= (delta * 10);
				  event.preventDefault();});
  		}
      // $('#opening').css('display','block');
  	});
  </script>


	 <div id="ladiv">
         <div id="menu_info" style="z-index:20;">

            <div id="liste_container">
				<?php if (have_posts()):?>
					<?php while (have_posts()):the_post();?>
                    <div class="post_it_orange">
                        <a href="#<?php the_ID();?>" onClick="window.location.hash = '<?php the_ID();?>'; return false">
                            <p><?php the_title();?></p>
                        </a>
                    </div>
                    <?php endwhile;?>
                <?php endif;?>
                <div id="header_button_info">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/picto_close.svg" id="button_close" />
                </div>
            </div>

            <div class="info_container" style="height:80%; overflow-y:scroll;">
				<?php if (have_posts()):?>
					<?php while (have_posts()):the_post();?>
                        <p class="titre_info" id="<?php the_ID();?>"> <?php the_title();?> </p>
                        <div class="texte">
                            <p><?php the_content();?></p>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>
           </div>
     	</div>
	</div>

</head>

<body>
    <div class="contenu_lieu" style="padding-bottom:4.5%; padding-top:3%; overflow:hidden; width:90%; height:75%; margin:3% 0 0 2%;" id="opening">
        <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="40px" id="go_scroll"/>
        <div class="overlay_content" style="width:80%; overflow-y:auto;">
          <div class="overlay_left">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/LLDL-saison4.jpg" id="overlay_img"/>
          </div>
          <div class="overlay_right">
            <p style="color:#388ea5; font-size: 3.2em; font-family:OCR_A, Helvetica, sans-serif; margin-bottom:2%;"> Le Long de l'Axe</p>
            <p id="text_intro">
            Et  si l'on s'autorisait un pas de côté ? <br>
            Si notre trajet quotidien prenait un nouveau départ ? <br>
            Si nous laissions notre imagination prendre les commandes et nous transporter ?<br>
            Après 2 ans d’exploration dans et autour du Tram T3,<br>
            KompleX KapharnaüM, Pixel 13, Compagnie Sous X, Manu Prost et Pierre-Louis Gallo, <br>
            vous invitent à cheminer depuis la gare et jusqu’à l’aéroport sur plus de 23 km, Le long de l’Axe.<br>
            Une aventure pédestre et artistique sur les traces de 2 personnages nés d’une fiction véritable,  <br>
            rythmée par des interventions inattendues du mercredi 13 au dimanche 17 septembre 2017.<br>
            À chaque jour, un nouveau voyage toujours un peu plus loin vers l'Est. <br>
            Une aventure sur plus de 23 km qui prendra son envol le dimanche, pour l'Échappée Belle.<br>
            <!-- La curiosité vous a gagné... Bravo!<br>
            Bienvenue Le long de l'Axe, projet artistique le long de l'Axe du tram T3 et inspiré d'une histoire vraie...<br>
			      Le 30 août 2015, Manuel Prost, dessinateur de presse, s'exerce à croquer des scènes de vie à l'aéroport Saint Exupéry.<br>
            Au bout d'un moment, il repère un homme qui semble un peu perdu : Pierre-Louis Gallo attend son avion qui n'arrive pas.<br>
            Ils se rencontrent, discutent un peu, décident d'aller profiter du soleil, marchent quelques instants.<br>
            Puis encore.<br>
            Et encore.<br>
            Pendant 5 jours.<br>
            5 jours à cheminer le long des voies du Tram T3, dormir à la belle étoile, croiser des fragments de vies multiples, regarder les paysages.<br><br>
            Le vendredi 4 septembre, leurs chemins se séparent à la gare de la Part Dieu.<br>
            Pierre-Louis Gallo, bouleversé par cette traversée de la ville, décide de continuer et saute dans un train en direction de Aix-les-Bains pour aller faire de la luge.<br>
            Manuel Prost retourne chercher d'autres situations à dessiner.<br> -->
            </p>
          </div>
         </div>
	</div>

	<div id="button_menu">
    	<p> MENU </p>
    </div>

    <div id="menu_barre" class="menu_class" style="padding-bottom:4.5%; padding-top:5%;">
        <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="40px" />
    	<div class="box_menu_barre">
            <div id="button_recitlist" class="bouton" style="border:solid 3px #844184;">
                <p style="color:#844184;">L'histoire</p>
            </div>

            <!-- <div id="button_lieulist" class="bouton preview" style="border:solid 3px #388ea5;">
                <p style="color:#388ea5;">Les paysages</p>
            </div> -->

            <div id="button_artistelist" class="bouton" style="border:solid 3px #d84c29; margin-right:0;">
                <p style="color:#d84c29;">Les complices</p>
            </div>
        </div>

    	<div class="box_menu_barre">
            <div id="button_eventlist" class="bouton" style="border:solid 3px #4b99ad;">
                <p style="color:#4b99ad;">À venir</p>
            </div>

            <div id="button_recentlist" class="bouton" style="border:solid 3px #cc6566;">
                <p style="color:#cc6566;">Actions passees</p>
            </div>
        </div>

        <div class="box_menu_barre">
              <div id="button_info_sup" class="bouton" style="border:solid 3px #f9df68; margin-right:0;">
                  <p style="color:#f9df68;">Qui sommes-nous?</p>
              </div>
          </div>
    </div>

  	<!--MOVE-->
    <div id='moveleft' class="arrow">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/move_left.svg"/>
    </div>
    <div id='moveright' class="arrow">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/move_right.svg"/>
    </div>

	<!--Liste des 3 prochains événements-->
    <div id="eventlist" class="liste_carte">
        <div class="flex">
            <div class="title_button" style="color:#4b99ad; background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/fond_event.png); width:250px;">
                <p>À venir</p>
            </div>
		<?php
        $my_query = new WP_Query( array('post_type' => 'evenement', 'posts_per_page' => '-1', 'numberposts' => '100'));
        if ($my_query->have_posts()):while($my_query->have_posts()):$my_query->the_post();?>
        	<a href="<?php the_permalink();?>" class="link_action">
                <div class="preview event">
                    <div class="action_column">
                		<div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                        <div class="title_preview title_event" style="color:#4b99ad; margin-top:10px;"><p><?php the_title();?></p></div>
                        </br>
                        <div class="resume_event" style="color:#4b99ad;">
                        <?php echo substr(get_the_excerpt(), 0,130); echo '[...]'; ?>
                        </div>
                        <div class="info_event" style="color:#4b99ad;">
                            <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                            <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                        </div>
					</div>
				</div>
			</a>
        <?php endwhile; else: ?>
        	<p>Rien de prévu pour l'instant</p>
        <?php endif; ?>
        </div>
    </div>
    <?php wp_reset_query(); ?>

	<!--Liste des Récits-->
    <div id="recitlist" class="liste_carte">
        <div class="flex">
            <div class="title_button" style="color:#844184; background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/fond_recit.png);">
                <p>L'histoire</p>
            </div>
		<?php
        $my_query = new WP_Query( array('post_type' => 'recit', 'posts_per_page'=>'-1', 'numberposts'=>'100'));
        if ($my_query->have_posts()):while($my_query->have_posts()):$my_query->the_post();?>
            <a href="<?php the_permalink(); ?>">
                <div class="box_artiste">
                    <!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/img/picto_recit_purple.svg" alt="*" style="float:left;"/> -->
                        <p style="color:#844184;"><?php the_title() ?></p>
                 </div>
             </a>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
    <?php wp_reset_query(); ?>

	<!--Liste des actions-->
    <div id="recentlist" class="liste_carte">
        <div class="flex">
            <div class="title_button" style="color:#d84c29; background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/fond_texte.png); width:250px;">
                <p>Actions Passées</p>
            </div>
		<?php
        $my_query = new WP_Query( array('post_type' => 'action', 'posts_per_page' => '-1', 'numberposts' => '100','orderby' => 'date'));
        if ($my_query->have_posts()):while($my_query->have_posts()):$my_query->the_post();?>
        	<a href="<?php the_permalink();?>" class="link_action">
                <div class="preview action">
                    <div class="action_column">
                		<div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                        <div class="thumb"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                        </br>
                        <div class="title_preview title_action" style="color:#d84c29;"><p><?php the_title();?></p></div>
                        </br>
                        <div class="artiste_action" style="color:#d84c29;">
                            <?php $arg = array( 'parent' => 0);
                            $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                            foreach($terms as $t): ?>
                                   <p> <?php echo $t->name; echo ' '?> </p>
                                   <p> / </p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </a>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
    <?php wp_reset_query(); ?>

	<!--Liste des lieux-->
    <!-- <div id="lieulist" class="liste_carte">
        <div class="flex">
            <div class="title_button" style="color:#388ea5; background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/fond_paysage.png); width:250px;">
                <p>Les paysages</p>
            </div>
            <?php $terms=get_terms('lieu');?>
                <?php foreach($terms as $t): ?>
                    <a href="<?php echo get_term_link($t->slug,'lieu');?>">
                    <div class="box_lieu">
                        <img class="category-thumbnail" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($t->term_id); ?>"/>
                        <p><?php echo $t->name;?></p>
                    </div>
                    </a>
                <?php endforeach; ?>
        </div>
    </div> -->

	<!--Liste des complices-->
	<div id="artistelist" class="liste_carte">
        <div class="flex">
            <div class="title_button" style="color:#d84c29; background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/fond_texte.png);">
                <p>Les complices</p>
            </div>
            <?php $terms=get_terms('artiste', array( 'parent' => 0 ));?>
            <?php foreach($terms as $t): ?>
                <a href="<?php echo get_term_link($t->slug,'artiste');?>">
                    <div class="box_artiste">
                        <!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/img/picto_random.svg" alt="*" style="float:left;"/> -->
                        <p style="color:#d84c29;"><?php echo $t->name;?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
	</div>


	<div id="content">

    	<div id="view_content_lieu"></div>

        <div id="map"></div>

<!--Rhone_Express-->
            <?php $term=get_term_by('slug', 'rhone_express', 'lieu'); ?>
            <div class="lieu" style="top:365; left:248; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
            <input type="hidden" id="idlieu1" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                    <img class="radiant" src="" alt="" />
                    <span class="bande_lieu"> <span class="titre_lieu"> <?php echo $term->name;?> </span> </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

					<script>
					var idlieu = $("#idlieu1").val();
                    </script><?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/tram/tram_rouge.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/tram/tram_bleu.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/tram/tram_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--Aeroport-->
            <?php $term=get_term_by('slug', 'aeroport', 'lieu'); ?>
            <div class="lieu" style="top:262; left:81; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
            <input type="hidden" id="idlieu2" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                    <img class="radiant" src="" alt="" />
                    <span class="bande_lieu"> <span class="titre_lieu"> <?php echo $term->name;?> </span> </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu2").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/aeroport/aeroport_rouge.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/aeroport/aeroport_bleu.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/aeroport/aeroport_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--champs-->
            <?php $term=get_term_by('slug', 'champs', 'lieu'); ?>
            <div class="lieu" style="top:239; left:248; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
            <input type="hidden" id="idlieu4" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                    <img class="radiant" src="" alt="" />
                    <span class="bande_lieu"> <span class="titre_lieu"> <?php echo $term->name;?> </span> </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu4").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/irridoseur/irridoseur_rouge.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/irridoseur/irridoseur_bleu.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/irridoseur/irridoseur_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--Algeco-->
            <?php $term=get_term_by('slug', 'algeco', 'lieu'); ?>
            <div class="lieu" style="top:317; left:848; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
            <input type="hidden" id="idlieu5" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                    <img class="radiant" src="" alt="" />
                    <span class="bande_lieu"> <span class="titre_lieu"> <?php echo $term->name;?> </span> </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu5").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/camion/camion_rouge.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/camion/camion_bleu.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/camion/camion_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--Zone_indu-->
            <?php $term=get_term_by('slug', 'zone_indu', 'lieu'); ?>
            <div class="lieu" style="top:201; left:1152; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
            <input type="hidden" id="idlieu7" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                    <img class="radiant" src="" alt="" />
                    <span class="bande_lieu"> <span class="titre_lieu"> <?php echo $term->name;?> </span> </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu7").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/meyzieu/meyzieu_rouge.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/meyzieu/meyzieu_bleu.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/meyzieu/meyzieu_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--Decharge_Alu-->
            <?php $term=get_term_by('slug', 'decharge_alu', 'lieu'); ?>
            <div class="lieu" style="top:330; left:1775; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
            <input type="hidden" id="idlieu6" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                    <img class="radiant" src="" alt="" />
                    <span class="bande_lieu"> <span class="titre_lieu"> <?php echo $term->name;?> </span> </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu6").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/alu/alu_rouge.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/alu/alu_bleu.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/alu/alu_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--Centre_aqua-->
             <?php $term=get_term_by('slug', 'centre_aqua', 'lieu'); ?>
             <div class="lieu" style="top:247; left:2011; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu3" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu3").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/piscine/piscine_rouge.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/piscine/piscine_bleu.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/piscine/piscine_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--queen_pizza-->
             <?php $term=get_term_by('slug', 'queen_pizza', 'lieu'); ?>
             <div class="lieu" style="top:261; left:2647; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu9" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu9").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/queen_pizza/queen_pizza_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/queen_pizza/queen_pizza_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory');?>/img/queen_pizza/queen_pizza_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--Grand_stade-->
             <?php $term=get_term_by('slug', 'grand_stade', 'lieu'); ?>
             <div class="lieu" style="top:169; left:2609; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu8" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu8").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/stade/stade_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/stade/stade_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/stade/stade_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>


<!--grand_large-->
             <?php $term=get_term_by('slug', 'grand_large', 'lieu'); ?>
             <div class="lieu" style="top:471; left:2549; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu10" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu10").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/grand_large/grand_large_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/grand_large/grand_large_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory');?>/img/grand_large/grand_large_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--tour-->
             <?php $term=get_term_by('slug', 'tour', 'lieu'); ?>
             <div class="lieu" style="top:444; left:2746; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu11" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu11").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/tour/tour_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/tour/tour_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/tour/tour_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--espace_vert-->
             <?php $term=get_term_by('slug', 'espace_vert', 'lieu'); ?>
             <div class="lieu" style="top:381; left:3014; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu13" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu13").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/espace_vert/espace_vert_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/espace_vert/espace_vert_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory');?>/img/espace_vert/espace_vert_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--parking-->
             <?php $term=get_term_by('slug', 'parking', 'lieu'); ?>
             <div class="lieu" style="top:249; left:3043; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu12" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu12").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/parking/parking_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/parking/parking_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/parking/parking_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--resto-->
             <?php $term=get_term_by('slug', 'resto', 'lieu'); ?>
             <div class="lieu" style="top:328; left:3593; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu14" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu14").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/resto/resto_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/resto/resto_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/resto/resto_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--rroms-->
             <?php $term=get_term_by('slug', 'rroms', 'lieu'); ?>
             <div class="lieu" style="top:285; left:3978; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu15" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu15").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/camps_roms/camps_roms_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/camps_roms/camps_roms_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/camps_roms/camps_roms_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--carre_de_soie-->
             <?php $term=get_term_by('slug', 'carre_de_soie', 'lieu'); ?>
             <div class="lieu" style="top:391; left:4211; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu17" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu17").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/carre_soie/carre_soie_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/carre_soie/carre_soie_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/carre_soie/carre_soie_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--snack-->
             <?php $term=get_term_by('slug', 'snack', 'lieu'); ?>
             <div class="lieu" style="top:225; left:4273; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu18" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu18").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/snack/snack_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/snack/snack_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/snack/snack_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--dalle-->
             <?php $term=get_term_by('slug', 'dalle', 'lieu'); ?>
             <div class="lieu" style="top:202; left:4677; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu19" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu19").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/dalle/dalle_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/dalle/dalle_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/dalle/dalle_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--proprete-->
             <?php $term=get_term_by('slug', 'proprete', 'lieu'); ?>
             <div class="lieu" style="top:158; left:4856; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu21" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu21").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/proprete/proprete_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/proprete/proprete_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/proprete/proprete_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--ecole-->
             <?php $term=get_term_by('slug', 'ecole', 'lieu'); ?>
             <div class="lieu" style="top:178; left:4728; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu20" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu20").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/ecole/ecole_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/ecole/ecole_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/ecole/ecole_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--veolia-->
             <?php $term=get_term_by('slug', 'veolia', 'lieu'); ?>
             <div class="lieu" style="top:190; left:4169; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu16" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu16").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/veolia/veolia_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/veolia/veolia_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/veolia/veolia_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>


<!--mirage-->
             <?php $term=get_term_by('slug', 'mirage', 'lieu'); ?>
             <div class="lieu" style="top:157; left:5055; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu22" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu22").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/mirage/mirage_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/mirage/mirage_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/mirage/mirage_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

<!--part_dieu-->
             <?php $term=get_term_by('slug', 'part_dieu', 'lieu'); ?>
             <div class="lieu" style="top:100; left:5628; position:absolute;" id="<?php echo $term->term_taxonomy_id; ?>">
             <input type="hidden" id="idlieu23" value="<?php echo $term->term_taxonomy_id; ?>">
                <div class="signal">
                        <img class="radiant" src="" alt="" />
                    <span class="bande_lieu">
                    	<span class="titre_lieu"> <?php echo $term->name;?> </span>
                    </span>
                </div>
                <div class="contenu_lieu">
                    <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/bouton_close.svg" class="close_lieu" width="50px" />

					<?php $args = array(
                    'post_type' => 'action',
                    'lieu' => $term->slug,
                    'posts_per_page' => 3,
                    );
                    $query_action = new WP_Query( $args );
                    while ( $query_action->have_posts() ) : $query_action->the_post();?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview action contenu_lieu_action" style="color:#d84c29;" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#d84c29; align-self:flex-end;"><p>Action</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                </br>
                                <div class="title_preview2 title_action2" style="color:#d84c29;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#d84c29;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="artiste_action2" style="color:#d84c29;">
                                    <?php $arg = array( 'parent' => 0);
                                    $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
                                    foreach($terms as $t): ?>
                                           <p> <?php echo $t->name; echo ' '?> </p>
                                           <p> / </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'evenement',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_event = new WP_Query( $args );
                    while ( $query_event->have_posts() ) : $query_event->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_event">
                        <div class="preview event contenu_lieu_event" id="<?php the_ID()?>">
                            <div class="event_column">
                                <div class="en_tete" style="color:#4b99ad; align-self:flex-end;"><p>rendez_vous</p></div>
                                <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                                <div class="resume_event" style="color:#4b99ad;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                                <div class="info_event" style="color:#4b99ad;">
                                    <p><?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                    <p><?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?></p>
                                </div>
                             </div>
                          </div>
                      </a>
                    <?php endwhile;
                    ?>

                    <?php $args = array(
                    'post_type' => 'recit',
                    'lieu' => $term->slug,
                    'posts_per_page' => 1,
                    );
                    $query_recit = new WP_Query( $args );
                    while ( $query_recit->have_posts() ) : $query_recit->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="link_action">
                        <div class="preview histoire contenu_lieu_recit" id="<?php the_ID()?>">
                            <div class="action_column">
                                <div class="en_tete" style="color:#844184; align-self:flex-end;"><p>L'histoire</p></div>
                                <div class="thumb2"><?php the_post_thumbnail( array(190,130));?></div>
                                </br>
                                <div class="title_preview title_action" style="color:#844184;"><p><?php the_title();?></p></div>
                                </br>
                                <div class="resume_event" style="color:#844184;">
                                <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                                </div>
                             </div>
                        </div>
                    </a>
                    <?php endwhile;?>

                    <!-- <div class="preview picto">
                        <a href="<?php echo get_term_link($term->slug,'lieu');?>">
                        <img class="picto_lieu" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($term->term_id); ?>" alt="<?php echo $term->name;?>" style="display:inline-block;"/>
                        <p class="titre_lieu_picto">
                        <?php echo $term->name;?>
                        </p>
                        </a>
                        <?php
                        $count_action = $query_action->found_posts;
                        $count_recit = $query_recit->found_posts;
                        $count_event = $query_event->found_posts;
                        if($count_action > 4 || $count_recit > 1 || $count_event > 1 ){?>
                        <a href="<?php echo get_term_link($term,'lieu');?>">
                            <p class="voir_plus">Voir plus</p>
                        </a>
                        <?php }; ?>
                    </div> -->

                    <script>var idlieu = $("#idlieu23").val();</script>
                    <?php
					if($count_event >= 1 ){?>
                    <script>
					//alert (idlieu);
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/part_dieu/part_dieu_bleu.png');
					$("#"+idlieu).find('.radiant').addClass('clignotant');
                    </script>
                    <?php }
					elseif ($count_action >= 1 || $count_event = 0) {?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/part_dieu/part_dieu_rouge.png');
                    </script>
					<?php }
					elseif ($count_action = 0 || $count_event = 0 || $count_recit >= 1){?>
                    <script>
					$("#"+idlieu).find('.radiant').attr('src','<?php bloginfo('stylesheet_directory'); ?>/img/part_dieu/part_dieu_violet.png');
                    </script>
                    <?php };

                    wp_reset_postdata();
					?>
                </div>
             </div>

        <?php
		$args = array(
		'post_type' => array('action','evenement','recit'),
		'numberposts' => 1,
		);
		$recent_post = get_posts($args);
		foreach ($recent_post as $post){
			$post->ID;
		};
		$idpost = get_the_ID($post);
		//print_r($idpost);

		?>
        <input type="hidden" id="idpost" value="<?php echo $idpost; ?>">


        </div>


    </div>
</body>
</html>
