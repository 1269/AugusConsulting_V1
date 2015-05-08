<div class="container titleShuffle">
	<article <?php post_class(); ?>>
		<div class="row">
			<div class="col-sm-6">
				<div class="imgBlog"><?php the_post_thumbnail('post-thumbnail', array( 'class' => "center-block img-responsive attachment-post-thumbnail")); ?></div>
			</div>
			<div class="col-sm-6">
			<header>
			  <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			  <?php /* get_template_part('templates/entry-meta'); */ ?>
			</header>
			<div class="entry-summary">
			  <?php the_excerpt(); ?>
			</div>
			</div>		
		</div>	
	</article>
	<hr>
</div>