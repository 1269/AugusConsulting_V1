<div id="topValueProp" class="titleText">
	<div class="container">
		<h1>Augus consultants help businesses, governments and non-profits bridge the gap between business strategy and execution.</h1>
	</div>
</div>

<div class="container"><?php while (have_posts()) : the_post(); ?>
		  <?php /* get_template_part('templates/page', 'header'); */ ?><!-- get rid of the Header -->
		  <?php get_template_part('templates/content', 'page'); ?>
	<?php endwhile; ?>
</div>