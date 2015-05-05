<?php
/**
 * Template Name: Case Studies
 */
?>

<div class="container"><?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/content', 'casestudies'); ?>
	<?php endwhile; ?>
</div>