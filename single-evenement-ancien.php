<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php wp_title(); ?></title>
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/picto_recit.svg">

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script>
	$("#content img").mouseenter(function(){
	$("#content img").removeClass("active");
	$(this).addClass("active");
	});
</script>

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


<!--en_Tête-->
	<div id="RDV">
		<p style="border-top: solid 3px #4b99ad; display:inline-block; padding-top:0.5%; padding-bottom:0.5%;">Prochains</p>
        </br>
        <p style="border-top: solid 3px #4b99ad; display:inline-block; padding-top:0.5%;">rendez-vous</p>
    </div>

<?php wp_reset_query(); ?>


<!--Contenu-->
    <div id="content">
    	<?php echo the_content(); ?>
    </div>


<!--Liste des 2 prochains événements + Current Post-->
	<div class="events">
		<?php
        $currentID = get_the_ID();
        $my_query = new WP_Query( array('post_type' => 'evenement', 'posts_per_page' => 2, 'numberposts' => 2, 'post__not_in' => array($currentID)));
        if ($my_query->have_posts()):while($my_query->have_posts()):$my_query->the_post();?>
        <div class="other_event">
            <a href="<?php the_permalink(); ?>">
        		<img src="<?php bloginfo('stylesheet_directory'); ?>/img/picto_event.svg" alt="*"/>
                <p class="other_title"><?php the_title() ?></p>
                <div class="other_info">
					<?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?>
                    <?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?>
                </div>
            </a>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

    <?php wp_reset_query(); ?>

        <div id="title">
            <a href="<?php the_permalink(); ?>">
        		<img src="<?php bloginfo('stylesheet_directory'); ?>/img/picto_event.svg" alt="*">
                <p id="title_yellow"><?php the_title();?></p>
                <div class="other_info">
                	<?php echo types_render_field("lieu_event", array("show_name"=>"true","output"=>"html")); ?>
                	<?php echo types_render_field("date_event", array("show_name"=>"true","output"=>"html")); ?>
                </div>
            </a>
        </div>
	</div>
<?php wp_reset_query(); ?>


    <script>
		$('.other_event').mouseenter(function(){$('#title').delay(900).css('transform','scale(1)')});
		$('.other_event').mouseleave(function(){$('#title').delay(900).css('transform','scale(1.25)')});

		$('.other_event').mouseenter(function(){$('#title_yellow').css({
			'background-color':'transparent',
			'box-shadow':'5px 0 0 transparent, -5px 0 0 transparent'
			})
		});
		$('.other_event').mouseleave(function(){$('#title_yellow').css({
			'background-color':'#fbec70',
			'box-shadow':'5px 0 0 #fbec70, -5px 0 0 #fbec70'
			})
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
	background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/fond_event_carte.png);
	background-repeat:no-repeat;
	background-size: 100%;
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
	color:#4b99ad;
	z-index:10;
}

#RDV {
	margin-top:2.5%;
	margin-left:5.5%;
	font-family: OCR_A, Helvetica, sans-serif;
	font-size: 1.35em;
	color:#4b99ad;
	background-color:white;
}

#content {
	width:43%;
	padding-right:5.2%;
	padding-left:0.5%;
	height:50%;
	overflow-y: hidden;
	z-index:2;
	color:#226979;
	margin-left:5.5%;
	margin-top:1.7%;
	font-size: 1em;
	text-transform:uppercase;
	background-color:rgba(255,255,255,0.6);
}

#content:hover {
	overflow-y:auto;
}

#content img {
	width:90%; height:auto;
	margin:3% auto;
	border:0;
	filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
	-webkit-filter: grayscale(100%);
	filter: gray;
}

#content img:hover,
#content img:focus,
#content img.active {
  filter: none;
  -webkit-filter: grayscale(0);

}

#content iframe {
	margin:3% auto;
}


#content p {
	  background-color:#fbec70;
	  display:inline;
	  line-height:1.5em;
	  box-shadow:10px 0 0 #fbec70, -10px 0 0 #fbec70;
	  font-family:newsGothic, Helvetica, sans-serif !important;
	  padding:1px 0;
	  }

#content audio {
	display:block;
	margin: 10px 0 10px 0;
}
audio {
	visibility:visible !important;
}

.events {
	color:#4b99ad;
	display:flex;
	display:-webkit-flex;
	display:-moz-flex;
	align-items: center;
	justify-content: flex-start;
	-webkit-align-items: center;
	-webkit-justify-content: flex-start;
	-moz-align-items: center;
	-moz-justify-content: flex-start;
	margin:3% 0 0 5.5%;
}

.other_event {
	margin-right:3.6%;
}

.other_event img {
	height:100px;
	display:inline;
	margin:0 4% 0 1.8%;
	float:left;
}

.other_title {
	font-family:OCR_A, Helvetica, sans-serif;
	font-size: 1.3em;
	color:#4b99ad;
}
.other_info {
	font-family:ORATOR, Helvetica, sans-serif;
	font-size: 1em;
	color:#4b99ad;
}

#title {
	transform: scale(1.25);
	margin-right:3.6%;
}
#title img {
	height:100px;
	display:inline;
	margin:0 4% 0 1.8%;
	float:left;
}

#title #title_yellow {
	  background-color:#fbec70;
	  display:inline;
	  line-height:1.5em;
	  box-shadow:5px 0 0 #fbec70, -5px 0 0 #fbec70;
	  padding: 3px 0;
	  font-family:OCR_A, Helvetica, sans-serif;
	  font-size: 1.3em;
	  color:#4b99ad;
}
.other_event:hover {
	transform: scale(1.25);
}

.other_event:hover .other_title {
	  background-color:#fbec70;
	  display:inline;
	  line-height:1.5em;
	  box-shadow:5px 0 0 #fbec70, -5px 0 0 #fbec70;
	  padding: 3px 0;
}

#back {font-family:ORATOR, Helvetica, sans-serif; margin:6% 0 0 2%; font-size:1em; color:#f9df68; float:right; display:block;	}
/*#retour:hover #back {display:block;}*/
#retour img {
  -moz-transform: scaleX(-1);    /* Gecko */
  -o-transform: scaleX(-1);      /* Opera */
  -webkit-transform: scaleX(-1); /* Webkit */
  transform: scaleX(-1);         /* Standard */
  filter: FlipH;                 /* IE 6/7/8 */
}

</style>
