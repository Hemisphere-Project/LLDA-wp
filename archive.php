<?php get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();

        // Si vous avez besoin d'accéder à $post->ID par exemple
        global $post;

        get_template_part('action');
        
       // OU
      include(locate_template('action.php'));
      // si vous avez besoin d'accéder aux variables dans le template
endwhile; endif;

get_footer();