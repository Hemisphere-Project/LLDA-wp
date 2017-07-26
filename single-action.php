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
</script>
<style>
/*------------------------------------------
------------------STYLE-------------------
------------------------------------------*/
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
@font-face {
font-family: 'newsGothic';
src: url('<?php bloginfo('stylesheet_directory');?>/fonts/newsgothic/NewsGothicStd.eot');
src: url('<?php bloginfo('stylesheet_directory');?>/fonts/newsgothic/NewsGothicStd.otf') format('truetype'),
     url('<?php bloginfo('stylesheet_directory');?>/fonts/newsgothic/NewsGothicStd.woff') format('woff'),
     url('<?php bloginfo('stylesheet_directory');?>/fonts/newsgothic/NewsGothicStd.eot?#iefix') format('embedded-opentype'),
     url('<?php bloginfo('stylesheet_directory');?>/fonts/newsgothic/NewsGothicStd.svg#QuadrantaBold') format('svg');
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
a {
	text-decoration:none;
	color:#d84c29;
}
p, li {
	color: #d84c29;
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
}
.bande_random p {
	font-size:0.75em;
	font-family: ORATOR, Helvetica, sans-serif;
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
#parents_container {
	height:65%;
	width:17.5%;
	display: inline-flex;
	flex-direction:column;
	display: -webkit-inline-flex;
	-webkit-flex-direction:column;
	display: -moz-inline-flex;
	-moz-flex-direction:column;
	overflow-y: hidden;
	padding-bottom:5%;
}
#parents_container:hover {
	overflow-y:auto;
}
#parents_container p {
	display:block;
	float:left;
}
.parents_list {
	font-family: OCR_A, Helvetica, sans-serif;
	font-size: 0.7em;
	margin-bottom:4%;
	margin-left:7%;
	padding:2%;
}
.quoi_list {
	float:left;
	display:block;
	margin-left:7%;
	font-family: OCR_A, Helvetica, sans-serif;
	font-size: 1.1em;
	background-color: #f9df68;
	padding:2% 2% 0 2%;
	margin-bottom:1%;
}
#quoi {
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
	  line-height:1.5em;
	  box-shadow:8px 0 0 white, 0 0 0 white;
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
	filter: gray;
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
audio {
	visibility:visible !important;
}
#back {font-family:ORATOR, Helvetica, sans-serif; margin:6% 0 0 0%; font-size:1em; color:#f9df68; float:left; display:inline;}


/*------VIDEO------*/
#content_img > .wp-video {
	display:none;
}
.wp-video{
	width:100% !important;
}
.wp-video-shortcode{
	width:100%;
  height: auto;
}

</style>

</head>
<body>


<!--Retour vers l'accueil-->
    <div style="height:21%; width:50%; display:inline-block;" id="retour">
    	<a href="<?php echo home_url(); ?>#action">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/picto_retour.svg" style="margin:3% 0 0 3%; display:inline; float:left;" height="40%"/>
        <p id="back">
        Retour
        </p>
        </a>
    </div>

<!--Liste de 3 posts au hasard-->
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

    <?php wp_reset_postdata();?>


<!--Vers l'épisode et/ou l'artiste-->

    <div id="parents_container">
			<p class="quoi_list">Fait par:</p>
			<br>
        <?php
        $object_terms_art = wp_get_object_terms($post->ID, 'artiste', array('parent' => 0));
        if ($object_terms_art) {
            foreach ($object_terms_art as $term_art) {
				//print_r($term_art);
                ?>
                    <div>
                    <a href="<?php echo get_term_link($term_art->slug, 'artiste'); ?>">
                    <!-- <p class="quoi_list">Fait par:</p> -->
                    <div style="clear:both"></div>
                    <p class="parents_list"><?php echo $term_art->name;?></p>
                    </a>
                    </div>
                <?php
				$args = (array('parent' => $term_art->term_id));
				$termchildrens = wp_get_object_terms($post->ID, 'artiste', $args);
				foreach ($termchildrens as $termChild) {
					?>
                    <div>
                    <a href="<?php echo get_term_link($termChild->slug, 'artiste'); ?>">
                    <p class="quoi_list">Dans le cadre de:</p>
                    <div style="clear:both"></div>
					<p class="parents_list"><?php echo $termChild->name; ?></p>
                    </a>
                    </div>
                    </br>
                <?php
				}
            }
        }
        ?>
    </div>

<!--Contenu-->
	<div id="quoi">
    	<p>L'Action passée</p>
    </div>
    <div id="content_text">
        <a href="<?php the_permalink(); ?>"><span id="titre"><?php the_title();?></span></a>
    	<div style="background-color: rgba(255, 255, 255, 0.8);padding:10px;"><?php the_content(); ?></div>
    </div>
    <div id="content_img">
    	<?php the_content(); ?>
    </div>


<script>
$('#content_img iframe').parent('p').replaceTag('<span>'), true;
</script>


</body>
</html>
