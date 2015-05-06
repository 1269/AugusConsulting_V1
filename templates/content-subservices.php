<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
<div class="imgHeader" style="background-image: url(<?php echo $src[0]; ?> ) !important; background-repeat: no-repeat; background-size: cover; background-position: center center fixed;">

	<h1 class="titleText text-center center-block"><?php the_title( ); ?></h1>
	<p class="text-center"><?php the_field('value_proposition'); ?></p>
</div>

<div class="container"><hr><?php the_content(); ?></div>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
