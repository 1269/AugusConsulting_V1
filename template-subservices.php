<?php
/**
 * Template Name: Services Sub Template
 */
?>
<div class="container">
	<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/content', 'subservices'); ?>
	<?php endwhile; ?>
</div>