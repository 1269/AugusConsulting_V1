<?php
/**
 * Template Name: Join Us Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/content', 'joinus'); ?>
	<?php endwhile; ?>
