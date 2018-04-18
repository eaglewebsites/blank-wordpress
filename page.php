<?php get_header(); ?>
  <?php while ( have_posts() ) : the_post(); ?>
  	<!--CONTENT-->
  	  <?php the_content(); ?>
  	<!--END CONTENT-->
  <?php endwhile; ?>
<?php get_footer(); ?>
