<?php the_post_thumbnail('post-thumbnail', array( 'class' => "center-block img-responsive attachment-post-thumbnail")); ?>
<h1 id="valuePropTitle"><?php the_field('value_proposition'); ?></h1>

<?php the_content(); ?>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
