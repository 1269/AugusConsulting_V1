<?php // the_post_thumbnail('post-thumbnail', array( 'class' => "center-block img-responsive attachment-post-thumbnail")); ?>
<div class="cover-container">
	<div class="innerCover">
        <div class="cover-heading"></div>
        <p id="joinCall"></p>
     </div>
     <h1 id="valuePropTitle"><?php the_field('value_proposition'); ?></h1>

</div>
<div class="container">
	
	<div class="joinUsContent"><?php the_content(); ?></div>
	<h1 class="text-center titleText">Open Positions</h1>
	<div class="divider"></div>
	<div class="row joinSection">
	  <?php $the_query = new WP_Query( 'category_name=positions&showposts=3'); ?>
	  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<div class="col-sm-4">
	
	  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br>
	
	  <p><?php echo substr(strip_tags($post->post_content), 0, 250);?></p>
		</div>
	
	  <?php endwhile;?>
	</div>
</div>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
