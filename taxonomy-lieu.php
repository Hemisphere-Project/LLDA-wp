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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php wp_title(); ?></title>
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/picto_recit.svg">
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    
</head>

<body>

<!--Retour vers l'accueil-->
    <div style="position:fixed; right:0; top:0; margin:15px 30px 0 0;" id="retour">
    	<a href="<?php echo home_url(); ?>">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/picto_retour.svg" style="display:inline; float:right;" height="70px"/>
        <p id="back">
        Retour
        </p>
        </a>
    </div>

<!--Liste des lieux-->    
    <div id="action_container">
        <div id="action_container_flex">
                <p class="action_list" style="color:#388ea5; font-size:1.25em;">Les paysages</p>
            <?php $terms=get_terms('lieu');?>
                <?php foreach($terms as $t): ?>
                    <a href="<?php echo get_term_link($t->slug,'lieu');?>">
                        <p style="background-color: #fdee71;font-family: ORATOR, Helvetica, sans-serif; margin: 10px 0 10px 10px">
							<?php echo $t->name;?>
                        </p>
                    </a>
                    </br>
                <?php endforeach; ?>
        </div>
    </div>

<!--Picto+Titre_Lieu-->
	<div id="titre_lieu">
		<?php if (function_exists('z_taxonomy_image_url')); 
        echo '<img src="'.z_taxonomy_image_url().'" alt="" height="100px" width="auto" class="picto_lieu"/>'
        ?>
            <p style="border-top: solid 3px #388ea5; display:inline-block; padding-top:1.1%;"><?php wp_title(''); ?></p>
    </div>
    

	<div id="container">
    
    <!--loop event-->
        <?php global $query_string;
        $posts = query_posts( $query_string . '&post_type=evenement' );
        if (have_posts()):while(have_posts()):the_post();?>
        	<a href="<?php the_permalink();?>" class="link_event">
                <div class="preview event">
                    <div class="event_column">
                        <div class="en_tete" style="color:#4b99ad; align-self:flex-end; -webkit-align-self:flex-end; -moz-align-self:flex-end;">
                        	<p>rendez_vous</p>
                        </div>
                        <div class="thumb"><?php the_post_thumbnail( array(190,130));?></div>
                        </br>
                        <div class="title_preview title_event" style="color:#4b99ad;"><p><?php the_title();?></p></div>
                        </br>
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
        <?php endwhile;?>
        <?php endif;?>
        
        
    <!--loop recit-->
    	<?php global $query_string;
        $posts = query_posts( $query_string . '&post_type=recit' );
        if (have_posts()):while(have_posts()):the_post();?>
        	<a href="<?php the_permalink();?>" class="link_action">
                <div class="preview histoire">
                    <div class="action_column">
                        <div class="en_tete" style="color:#844184; align-self:flex-end; -webkit-align-self:flex-end; -moz-align-self:flex-end;">
                        	<p>L'histoire</p>
                        </div>
                        <div class="thumb"><?php the_post_thumbnail( array(190,130));?></div>
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
        <?php endif;?>

        
    <!--loop action-->
        <?php global $query_string;
        $posts = query_posts( $query_string . '&post_type=action' );
        if (have_posts()):while(have_posts()):the_post();?>
        	<a href="<?php the_permalink();?>" class="link_action">
                <div class="preview action">
                    <div class="action_column">
                		<div class="en_tete" style="color:#d84c29; align-self:flex-end; -webkit-align-self:flex-end; -moz-align-self:flex-end;">
                        	<p>Quoi</p>
                        </div>
                        <div class="thumb"><?php the_post_thumbnail( array(190,130), array('class'=>'thumb_img'));?></div>
                        </br>
                        <div class="title_preview title_action" style="color:#d84c29;"><p><?php the_title();?></p></div>
                        </br>
                        <div class="resume_event" style="color:#d84c29;">
                        <?php echo substr(get_the_excerpt(), 0,150); echo '[...]'; ?>
                        </div>
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
        <?php endwhile; else:?>
        <?php endif;?>
            
	</div>

    <script>	
	$('#action_container').mouseenter (function() {
		$('#action_container').stop().animate({left:'0'}, 'normal', 'swing');
	});
	$('#action_container').mouseleave (function() {
		$('#action_container').animate({left:'-10.5%'}, 'normal', 'swing');
	});
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
	overflow:hidden;
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

a {
	text-decoration:none;
	color:#388ea5;
}

#titre_lieu {
	margin:1% 0 3.5% 5.5%;
	font-family: OCR_A, Helvetica, sans-serif;
	font-size: 1.5em;
	color:#388ea5;
}
.picto_lieu {
	filter: hue-rotate(184deg);
	-webkit-filter: hue-rotate(184deg);
}

#container {
	width:85%; 
	height:70%; 
	overflow:hidden; 
	padding-left:14.7%;	
}
#container:hover {
	overflow-y:auto;
}

.preview{
	background-repeat:repeat;
	display:inline-block;
	width:25%;
	height:33%;
	overflow-y: hidden;
	z-index:2;
	margin-right:5%;
	margin-bottom:2%;
}

.event{
	padding:0 0.8% 5% 0.5%;
	background-image:url(<?php bloginfo('stylesheet_directory');?>/img/fond_event.png);	
}

.action{
	padding:0 0.65% 5% 0.65%;
	background-image:url(<?php bloginfo('stylesheet_directory');?>/img/fond_texte.png);
}

.histoire {
	padding:0 0.65% 5% 0.65%;
	background-image:url(<?php bloginfo('stylesheet_directory');?>/img/fond_recit.png);	
}

.en_tete p {
	box-shadow:6px 0 0 white, -7px 0 0 white;
	background-color:white;
	font-family: ORATOR, Helvetica, sans-serif;
	font-size: 0.8em;
	padding:1%;
	text-align:right;
	display:inline;
}


.resume_event {
	display:none;
	box-shadow:6px 0 0 white, -7px 0 0 white;
	background-color:white;
	font-family: ORATOR, Helvetica, sans-serif;
	font-size: 0.8em;
	float:left;
	padding:1%;
	width:80%;
}

.artiste_action {
	display:none;	
	font-size:0.8em;
	font-family: ORATOR, Helvetica, sans-serif;
	margin-top: 3.5%;
}

.artiste_action p:last-child {display:none;}

.artiste_action p{
	display:inline;
	box-shadow:6px 0 0 white, -7px 0 0 white;
	background-color:white;
	padding-top:1%;
}

.link_event :hover .resume_event {
	display:inline;	
}
.link_event :hover .info_event {
	display:none;	
}
.link_event :hover .title_preview {
	margin-bottom:5%;
}

.link_action :hover .thumb {
	display:none;	
}
.link_action :hover .title_preview {
	display:none;	
}
.link_action :hover .resume_event {
	display:block;	
}
.link_action :hover .artiste_action {
	display:block;	
}


.action_column {
	display:flex;
	display:-webkit-flex;
	display:-moz-flex;	
	flex-direction: column;
	justify-content: flex-start;
	align-items: center;
	-webkit-flex-direction: column;
	-webkit-justify-content: flex-start;
	-webkit-align-items: center;
	-moz-flex-direction: column;
	-moz-justify-content: flex-start;
	-moz-align-items: center;
}

.event_column {
	display:flex;
	display:-webkit-flex;
	display:-moz-flex;	
	flex-direction: column;
	justify-content: flex-start;
	align-items: center;
	-webkit-flex-direction: column;
	-webkit-justify-content: flex-start;
	-webkit-align-items: center;
	-moz-flex-direction: column;
	-moz-justify-content: flex-start;
	-moz-align-items: center;
}

.title_preview {
	font-family:OCR_A, Helvetica, sans-serif;
	font-size:1.35em;
	display:block;	
	word-wrap: break-word;
}

.title_event {
	margin-bottom:5%;
	margin-top:5%;	
	text-align:center;
	align-self:stretch;
	-webkit-align-self:stretch;
	-moz-align-self:stretch;
}
.title_event p {
	box-shadow:10px 0 0 #fdee71, -7px 0 0 #fdee71 !important;
	background-color: #fdee71 !important;
}

.title_action {
	text-align:center;
	align-self:stretch;
	-webkit-align-self:stretch;
	-moz-align-self:stretch;
	font-size:1.1em !important;
}

.title_preview p {
	box-shadow:10px 0 0 white, -7px 0 0 white;
	background-color:white;
	display:inline;
	padding:2%;
}

.info_event {
	font-size:0.8em;
	font-family: ORATOR, Helvetica, sans-serif;
	float:left;
	margin-top:10px;
}
.info_event span {
	box-shadow:6px 0 0 white, -7px 0 0 white;
	background-color:white;
	padding:1%;
}

.thumb {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
	margin-bottom:10px;
}
.thumb_img {
	height:125px;
	width:auto;	
}

#back {font-family:ORATOR, Helvetica, sans-serif; margin:6% 0 0 2%; font-size:1em; color:#fdee71; float:right; display:block;}
/*#retour:hover #back {display:block;}*/
#retour img {
  -moz-transform: scaleX(-1);    /* Gecko */
  -o-transform: scaleX(-1);      /* Opera */
  -webkit-transform: scaleX(-1); /* Webkit */
  transform: scaleX(-1);         /* Standard */
  filter: FlipH;                 /* IE 6/7/8 */
}

#action_container {
	height:50%;
	width:14%;
	overflow-x: hidden;
	padding-bottom:5%;
	position: absolute;
	top:25%;
	left:-10.5%;
	background-image:url(<?php bloginfo('stylesheet_directory');?>/img/fond_paysage.png);
	background-repeat:repeat;
}
#action_container_flex {
	display: inline-flex;
	display: -webkit-inline-flex;
	display: -moz-inline-flex;
	flex-direction:column;
	-webkit-flex-direction:column;
	-moz-flex-direction:column;
}
.action_list {
	font-family: OCR_A, Helvetica, sans-serif;
	font-size: 0.6em;
	margin-top: 4%;
	margin-bottom:1%;
	background-color: #fdee71;
	padding:2%;
	float:left;
}


</style>
