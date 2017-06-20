<?php function title_remove_tax_name( $title, $sep, $seplocation ) {
    if ( is_tax() ) {
        $term_title = single_term_title( '', false );

        // Indiquer la position du séparateur
        if ( 'right' == $seplocation ) {
            $title = $term_title . " $sep ";
        } else {
            $title = " $sep " . $term_title;
        }
    }

    return $title;
}
//filtre pour supprimer l'épisode de l'artiste
add_filter( 'wp_title', 'title_remove_tax_name', 10, 3 ); ?>

<html>
<head>
	<title><?php wp_title(); ?></title>
    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/picto_recit.svg">
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script>
		$.extend({
			replaceTag: function (currentElem, newTagObj, keepProps) {
				var $currentElem = $(currentElem);
				var i, $newTag = $(newTagObj).clone();
				if (keepProps) {//{{{
					newTag = $newTag[0];
					newTag.className = currentElem.className;
					$.extend(newTag.classList, currentElem.classList);
					$.extend(newTag.attributes, currentElem.attributes);
				}//}}}
				$currentElem.wrapAll($newTag);
				$currentElem.contents().unwrap();
				// return node; (Error spotted by Frank van Luijn)
				return this; // Suggested by ColeLawrence
			}
		});

		$.fn.extend({
			replaceTag: function (newTagObj, keepProps) {
				// "return" suggested by ColeLawrence
				return this.each(function() {
					jQuery.replaceTag(this, newTagObj, keepProps);
				});
			}
		});
		$("#content_img img").mouseenter(function(){
		$("#content_img img").removeClass("active");
		$(this).addClass("active");
		});
		$('.episode_child').hover(function(){
			$(this).find('.img_action_lieu').css('display','block');
		});
	</script>
</head>
<body>

<!--Retour vers l'accueil-->
    <div style="height:21%; width:36%; display:block;" id="retour">
    	<a href="<?php echo home_url(); ?>">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/picto_retour.svg" style="margin:3% 0 0 3%; display:inline; float:left;" height="40%"/>
        <p id="back">
        Retour
        </p>
        </a>
    </div>

<!--Lien vers la page de l'artiste-->
	<?php
    $ep = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	$arg = array( 'parent' => 0);
	$object_terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
    if ($ep->parent != 0) {
	?>
    <div class="bande_random">
		<?php
        foreach ($object_terms as $term) {
        ?>
        	<a href="<?php echo get_term_link($term->slug, 'artiste'); ?>">
            <div>
            <p style="background-color:#f9df68; padding:3% 3% 0 3%; color:#d84c29; font-size:1em; font-family:OCR_A, Helvetica; display:inline-block;">QUI ?</p>
			</br></br>
			<p><?php echo $term->name; ?></p>
            </div>
            </a>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/picto_random.svg" alt="*" height="90%" style="display:inline; margin:0 4% 0 1.8%">
        <?php
        }
		?>
    </div>
    <?php
    }
    ?>

<!--Liste de 3 posts au hasard-->
	<?php
    if($ep->parent == 0)
    {
	?>
	<div class="bande_random" style="visibility:hidden;">
        <?php
        remove_all_filters('posts_orderby');
        $posts = get_posts('post_type=action&orderby=rand&numberposts=3'); foreach($posts as $post) { ?>
        <div style="display:inline;">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <p><?php the_title(); ?></p>
            </a>
            <?php
            $arg = array( 'parent' => 0);
            $terms = wp_get_object_terms( $post->ID, 'artiste', $arg );
            foreach($terms as $t): ?>
                <a href="<?php echo get_term_link($t->slug,'artiste');?>">
                   <p> <?php echo $t->name;?> </p>
                </a>
            <?php endforeach; ?>
        </div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/picto_random.svg" alt="*" height="90%" style="display:inline; margin:0 4% 0 1.8%">
        <?php } ?>
    </div>
    <?php
	}
	?>

<?php wp_reset_postdata();?>


    <!--Liste des épisodes et de leurs actions-->
    <div id="action_container">
    	<p class="episode">Ses autres Actions</p>
        <?php
            $args = array
            (
                'taxonomy' => 'artiste',
                'hierarchical' => true,
                'depth' => 1,
                'parent' => get_queried_object_id(),
                'hide_empty' => false
            );
            $sub_terms = get_terms('artiste', $args);
            foreach ($sub_terms as $sub_term)
            {
			?>
                <div style="border-right:solid 3px #d84c29; margin-bottom:20%;">
                    <a href="<?php echo get_term_link($sub_term->slug, 'artiste'); ?>">
                        <p class="episode"><?php echo $sub_term->name; ?></p>
                    </a></br></br>
                    <?php $wpq = array (
                    'taxonomy'=> 'artiste',
                    'term'=>$sub_term->slug,
                    'order'=>'asc');
                    $query = new WP_Query ($wpq);
                    if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post(); ?>
                        <div class="episode_child">
                            <a href="<?php the_permalink();?>"><p style="margin-right:14px;" class="action_list"><?php the_title();?></p></a>
                            <div style="clear:both"></div>
                            <div class="img_action_lieu">
                                <?php $lieux = get_the_terms( $query->ID, 'lieu');
                                foreach ($lieux as $l){
                                ?>
                                <a href="<?php echo get_term_link($l->slug,'lieu');?>">
                                <img class="category-thumbnail" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($l->term_id); ?>" alt="<?php echo $l->name;?>"/>
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div style="clear:both"></div>
                    <?php
                    endwhile; endif; wp_reset_query(); ?>
                    <?php
                    echo "<br />";
                    /*$ids = array();
                    $posts = $query->posts;
                    foreach ($posts as $post) {
                      $ids[] = $post->ID;
                    }
                    print_r($ids);*/
                    ?>
                </div>
                <div style="clear:both"></div>
            <?php
            } ?>

            </br>

    <!--Liste des actions sans épisode-->
            <?php
			if ($ep->parent == 0) {
			?>
                <div style="border-right:solid 3px #d84c29;">
            <?php }else {?>
            	<div>
            <?php };

            $enfant = get_term_children(get_queried_object_id(),'artiste');
            //print_r($enfant);
            $my_query = new WP_Query( array(
            'post_type' => 'action',
            'tax_query' => array(
            'relation' => 'AND',
                array(
                    'taxonomy' => 'artiste',
                    'field'    => 'id',
                    'terms'    => get_queried_object_id(),
                ),
                array(
                    'taxonomy' => 'artiste',
                    'field' => 'id',
                    'terms' => $enfant,
                    'operator' => 'NOT IN',
              ) )
            ));
            if ($my_query->have_posts()):while($my_query->have_posts()):$my_query->the_post();?>
                <a href="<?php the_permalink(); ?>">
                    <p style="margin-right:14px;" class="action_list"><?php the_title() ?></p>
                </a>
                <div style="clear:both"></div>
                <?php $lieux = get_the_terms( $query->ID, 'lieu');
                foreach ($lieux as $l){
                ?>
                <a href="<?php echo get_term_link($l->slug,'lieu');?>">
                <img class="category-thumbnail" src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($l->term_id); ?>" alt="<?php echo $l->name;?>" width="100%" height="auto"/>
                </a>
                <?php
                }
                ?>
                <div style="clear:both"></div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>


<!--Liste des actions-->
	<?php
	/*if($ep->parent > 0) {
		global $query_string;
		$posts = query_posts( $query_string . '&post_type=action' );
		if (have_posts()):while(have_posts()):the_post();?>
				<ul>
					<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
					<p>Lieu: <?php the_terms( $post->ID, 'lieu', '', ' , ', ''); ?></p>
				</ul>
		<?php endwhile; else:?>
			<p>Aucune intervention pour l'instant</p>
		<?php endif;
	}
	else {
	global $query_string;
	$posts = query_posts( $query_string . '&post_type=action' );
	if (have_posts()):while(have_posts()):the_post();?>
			<ul>
				<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				<p>Lieu: <?php the_terms( $post->ID, 'lieu', '', ' , ', ''); ?></p>
			</ul>
	<?php endwhile; else:?>
		<p>Aucune intervention pour l'instant</p>
	<?php endif;
	}*/?>

	<?php wp_reset_query(); ?>



<!--Contenu-->
	<div id="qui">
    <?php
	if($ep->parent > 0) {
	echo "<p>Le projet</p>";
	} else {
	echo "<p>L'artiste</p>";
	}?>
    </div>

    <div id="content_text">
    <!--Nom de l'artiste/l'épisode-->
        <a href="<?php echo get_term_link($term,'artiste'); ?>"><span id="titre"><?php wp_title(''); ?></span></a>
    	<div style="background-color: rgba(255, 255, 255, 0.8);padding:10px;"><?php echo term_description();
		?></div>
    </div>

    <div id="content_img">
    	<?php echo term_description();
		?>
    </div>

    <script>
	$('#content_img iframe').parent('p').replaceTag('<span>'), true;
    </script>

</body>
</html>

<style>

@charset "utf-8";

* {
    margin: 0;
    padding: 0;
}

@font-face {
font-family: 'ORATOR';
src: url('<?php bloginfo('stylesheet_directory');?>/fonts/orator_std/OratorStd.eot');
src: url('<?php bloginfo('stylesheet_directory');?>/fonts/orator_std/OratorStd.otf') format('truetype'),
     url('<?php bloginfo('stylesheet_directory');?>/fonts/orator_std/OratorStd.woff') format('woff'),
     url('<?php bloginfo('stylesheet_directory');?>/fonts/orator_std/OratorStd.eot?#iefix') format('embedded-opentype'),
     url('<?php bloginfo('stylesheet_directory');?>/fonts/orator_std/OratorStd.svg#QuadrantaBold') format('svg');
font-weight: normal;
font-style: normal;
}

@font-face {
font-family: 'OCR_A';
src: url('<?php bloginfo('stylesheet_directory');?>/fonts/ocrA/OCRAStd.eot');
src: url('<?php bloginfo('stylesheet_directory');?>/fonts/ocrA/OCRAStd.otf') format('truetype'),
     url('<?php bloginfo('stylesheet_directory');?>/fonts/ocrA/OCRAStd.woff') format('woff'),
     url('<?php bloginfo('stylesheet_directory');?>/fonts/ocrA/OCRAStd.eot?#iefix') format('embedded-opentype'),
     url('<?php bloginfo('stylesheet_directory');?>/fonts/ocrA/OCRAStd.svg#QuadrantaBold') format('svg');
font-weight: normal;
font-style: normal;
}

html {
	/*font-size: 62.5%;*/
	width:auto; height:100%;

}

body {
	height: 100%;
	background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/fond_blanc.png);
	background-repeat:repeat;
}

::-webkit-scrollbar {
    width: 0px;
    background: transparent;
}

::-webkit-scrollbar-thumb {
    background: #FF0000;
}

html {overflow: -moz-scrollbars-none;}

a {
	text-decoration:none;
	color:#d84c29;
}

p, li {
	color: #d84c29;
}

#titre {
	background-color:#f9df68; color:#d84c29;
	display:table;
	box-shadow:12px 0 0 #f9df68, -7px 0 0 #f9df68;
	padding-top:5px;
	margin-bottom: 5%;
	font-family: ORATOR, Helvetica, sans-serif;
	letter-spacing: 2px;
	font-size:1.75em;
}

.bande_random {
	height:14%;
	width:45%;
	float: right;
	display:flex;
	display:-webkit-flex;
	display:-moz-flex;
	justify-content: flex-end;
	align-items: flex-end;
	-webkit-justify-content: flex-end;
	-webkit-align-items: flex-end;
	-moz-justify-content: flex-end;
	-moz-align-items: flex-end;
	padding:0 4% 2% 1%;
	position:fixed;
	right:0;
	top:0;
}
.bande_random p {
	font-size:0.75em;
	font-family: ORATOR, Helvetica, sans-serif;
}

#action_container {
	height:65%;
	width:auto;
	max-width:200px;
	display: inline-flex;
	flex-direction:column;
	display: -webkit-inline-flex;
	-webkit-flex-direction:column;
	display: -moz-inline-flex;
	-moz-flex-direction:column;
	overflow-y: hidden;
	padding-bottom:5%;
}

#action_container:hover {
	overflow-y:auto;
}

#action_container p {
	display:block;
	float:right;
}

.action_list {
	font-family: OCR_A, Helvetica, sans-serif;
	font-size: 0.6em;
	margin-top: 4%;
	margin-bottom:1%;
	background-color: #f9df68;
	padding:2%;
}

.episode {
	float:right;
	display:block;
	margin-right:9px;
	font-family: OCR_A, Helvetica, sans-serif;
	font-size: 1.1em;
	background-color: #f9df68;
	padding:2% 2% 0 2%;
	margin-bottom:1%;
	text-align:right;
}

/*.img_action_lieu {
	display:none;
}
.episode_child:hover .img_action_lieu {
	display:block;
}
*/
.category-thumbnail {
	max-width:85px;
	height:auto;
	margin-right:13px;
	display:block;
	float:right;
}

            <?php if ($ep->parent != 0) {
			?>
                .category-thumbnail {
				float:left !important;
				margin-right:0;
				margin-left:7%;
				}
				#action_container p {
				float:left;
				margin-right:0;
				margin-left:7%;
				display:inline-block;
				}
            <?php } ?>


audio {
	visibility:visible !important;
}

#qui {
	position:absolute; left:19.5%; top:7%;
	padding-top:1%;
	z-index:3;
	border-top: solid 3px #d84c29;
	font-family: OCR_A, Helvetica, sans-serif !important;
	font-size: 1.3em;
}

#content_text {
	background-image:url(<?php bloginfo('stylesheet_directory');?>/img/fond_texte.png);
	background-repeat:repeat;
	width:28%;
	padding-right:9.5%;
	padding-left:1%;
	height:72%;
	overflow-y: hidden;
	position:absolute;
	z-index:2;
	left:19.5%;
	top:22%;
}

#content_text:hover {
	overflow-y:auto;
}

#content_text img {
	display:none;
}
#content_text iframe {
	display:none;
}


#content_text p {
	  background-color:white;
	  display:inline;
	  line-height:1.2em;
	  box-shadow:10px 0 0 white, -7px 0 0 white;
	  font-family:newsGothic, Helvetica, sans-serif !important;
	  padding:1px 0;
	  }

#content_text audio {
	display:block;
	margin: 10px 0 10px 0;
}
#content_img > a, #content_img > p, #content_img > audio, #content_img > h1, #content_img > h2 {
	display:none;
}

#content_img {
	width:44%;
	display:inline;
	float:right;
	padding:0;
	overflow:hidden;
	height:77%;
}

#content_img img {
	height:auto !important;
	border: 0;
	width:100% !important;
	filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
	-webkit-filter: grayscale(100%);
	filter: grayscale(100%);
}

#content_img img:hover,
#content_img img:focus,
#content_img img.active {
  filter: none;
  -webkit-filter: grayscale(0) !important;

}

#content_img:hover {
	overflow-y:scroll;
}
#content_img iframe {
	margin: 2% auto;
}

#back {font-family:ORATOR, Helvetica, sans-serif; margin:6% 0 0 2%; font-size:1em; color:#f9df68; float:left; display:inline;}
/*#retour:hover #back {display:inline;}*/

</style>
