<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<title>Document sans titre</title>
</head>

<body>

    <div id="MenuInfo">
        
        <input type="image" id="button_info_close" src="<?php bloginfo('stylesheet_directory'); ?>/img/button_close.png"/>
        <?php (get_pages()); ?>
        <p><?php the_title(); ?></p>
        <?php the_content();?>

        
    </div>


</body>
</html>