<h1 class="titleText text-center"><?php the_title( ); ?></h1>
<p class="text-center"><?php the_field('value_proposition'); ?></p>
<hr>
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
