<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

	</script>

</head>

<body>

<!--Retour vers l'accueil-->
    <div style="height:21%; width:50%; display:inline-block; position:fixed; top:0px;" id="retour">
    	<a href="<?php echo home_url(); ?>#histoire">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/picto_retour.svg" style="margin:3% 0 0 3%; display:inline; float:left;" height="40%"/>
        <p id="back">
        Retour
        </p>
        </a>
    </div>

<?php wp_reset_query(); ?>


<!--en_Tête-->
	<div id="histoire">
		<p style="border-top: solid 3px #844184; display:inline-block; padding-top:1.1%;">L'histoire</p>
    </div>


<?php wp_reset_query(); ?>

<!--Contenu-->
    <div id="content_img">
    	<?php echo the_content(); ?>
    </div>

    <div id="content_text">
        <!--Le titre-->
        <a href="<?php the_permalink(); ?>"><span id="titre"><?php the_title();?></span></a>
    	<div style="background-color: rgba(255, 255, 255, 0.8);padding:10px;"><?php echo the_content(); ?></div>
    </div>



<!--Liste des recits-->
	<div id="action_container">

		<div id="action_container_flex">
        	<p class="action_list" style="color:#844184; font-size:1.25em;">Les histoires</p>
			<?php
            $currentID = get_the_ID();
            // $my_query = new WP_Query( array('post_type' => 'recit', 'post__not_in' => array($currentID), 'posts_per_page'=>'-1', 'numberposts'=>'100'));
            $my_query = new WP_Query( array('post_type' => 'recit', 'posts_per_page'=>'-1', 'numberposts'=>'100'));
            if ($my_query->have_posts()):while($my_query->have_posts()):$my_query->the_post();?>
            <div>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <p class="action_list <?php if (get_the_ID()==$currentID){echo'action_active';}?>" ><?php the_title() ?></p>
                </a>
              <!-- <?php if (get_the_ID()==$currentID){echo'VOUS ICI';}?> -->
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
		</div>
    </div>

<?php wp_reset_query(); ?>


    <script>
	$('#content_img iframe').parent('p').replaceTag('<span>'), true;

	$('#action_container').mouseenter (function() {
		$('#action_container').stop().animate({left:'0'}, 'normal', 'swing');
	});
	$('#action_container').mouseleave (function() {
		$('#action_container').animate({left:'-17.5%'}, 'normal', 'swing');
	});

	$('#content_text').mouseenter (function() {
		$('#content_text').stop().animate({bottom:'15px'}, 'normal', 'swing');
	});
	$('#content_text').mouseleave (function() {
		$('#content_text').animate({bottom:'-37%'}, 'normal', 'swing');
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
	color:#844184;
}

#histoire {
	margin-top:4%;
	margin-left:9.4%;
	font-family: OCR_A, Helvetica, sans-serif;
	font-size: 1.5em;
	color:#844184;
}

#content_img > a, #content_img > p, #content_img > audio, #content_img > h1, #content_img > h2 {
	display:none;
}

#content_img {
	width:95%;
	display:block;
	padding:0;
	overflow:hidden;
	height:80%;
}

#content_img img {
	height:auto !important;
	border: 0;
	width:80% !important;
	filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
	-webkit-filter: grayscale(100%);
	filter: gray;
}

#content_img img:hover,
#content_img img:focus,
#content_img img.active {
  filter: none;
  -webkit-filter: grayscale(0) !important;

}

#content_img:hover {
	overflow-y:scroll !important;
}
#content_img iframe {
	margin: 2% auto;
}

#titre {
	background-color:#f9df68; color:#844184;
	display:table;
	box-shadow:12px 0 0 #f9df68, -7px 0 0 #f9df68;
	padding-top:5px;
	margin-bottom: 2.5%;
	font-family: ORATOR, Helvetica, sans-serif;
	letter-spacing: 2px;
	font-size:1.75em;
}

#content_text {
	background-image:url(<?php bloginfo('stylesheet_directory');?>/img/fond_recit.png);
	background-repeat:repeat;
	width:45%;
	padding-right:9.5%;
	padding-left:3%;
	height:45%;
	overflow-y: hidden;
	position:absolute;
	z-index:2;
	right:0;
	bottom:15px;
	color:#844184;
	padding-bottom:20px;
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
	  line-height:1.5em;
	  box-shadow:8px 0 0 white, 0 0 0 white;
	  font-family:newsGothic, Helvetica, sans-serif !important;
	  padding:1px 0;
	  }

#content_text audio {
	display:block;
	margin: 10px 0 10px 0;
}
audio {
	visibility:visible !important;
}

#action_container {
	height:50%;
	width:22%;
	overflow-y: hidden;
	padding-bottom:5%;
	position: absolute;
	top:25%;
	left:-17.5%;
	background-image:url(<?php bloginfo('stylesheet_directory');?>/img/fond_recit.png);
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

#action_container:hover {
	overflow-y:auto;
}

#action_container p {
	display:inline-block;
}
.action_list {
	font-family: OCR_A, Helvetica, sans-serif;
	font-size: 0.6em;
	margin-top: 4%;
	margin-bottom:1%;
	background-color: #f9df68;
	padding:2%;
	float:left;
}
.action_active {
	background-color: #fef5d8;
}

#back {font-family:ORATOR, Helvetica, sans-serif; margin:6% 0 0 0%; font-size:1em; color:#f9df68; float:left; display:block;}



</style>
