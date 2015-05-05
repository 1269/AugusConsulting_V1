<?php while (have_posts()) : the_post(); ?>
<div class="container">
  <article <?php post_class(); ?>>
    <header>
      <?php the_post_thumbnail('post-thumbnail', array( 'class' => "center-block img-responsive attachment-post-thumbnail")); ?>

      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php /* get_template_part('templates/entry-meta'); */ ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
</div><?php endwhile; ?>
