<?php while (have_posts()) : the_post(); ?>
<div class="container">
  <article <?php post_class(); ?>>
    <header>
<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
<div class="imgHeader" style="background-image: url(<?php echo $src[0]; ?> ) !important; background-repeat: no-repeat; background-size: cover; background-position: center center fixed;">

  <p class="text-center"><?php the_field('value_proposition'); ?></p>
</div>
      <h1 class="caseTitle"><?php the_title(); ?></h1>
      <h1 class="text-center">Impact</h1>
      <hr>
      <div class="row #theImpact">
        <div class="col-sm-4 text-center"><?php the_field('impact_data_1'); ?></div>
        <div class="col-sm-4 text-center"><?php the_field('impact_data_2'); ?></div>
        <div class="col-sm-4 text-center"><?php the_field('impact_data_3'); ?></div>
      </div>

      <?php /* get_template_part('templates/entry-meta'); */ ?>
    </header>
    <hr>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
</div><?php endwhile; ?>
