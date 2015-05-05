<?php
/**
 * Template Name: About Page
 */
?>

<div class="container">
	<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/content', 'about'); ?>
	<?php endwhile; ?>
</div>
