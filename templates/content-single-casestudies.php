<?php while (have_posts()) : the_post(); ?>
<div class="container">
  <article <?php post_class(); ?>>
    <header>
      <?php the_post_thumbnail('post-thumbnail', array( 'class' => "center-block img-responsive attachment-post-thumbnail")); ?>
      <h1 class="caseTitle"><?php the_title(); ?></h1>
      <h1 class="text-center">Impact</h1>
      <hr>
      <div class="row #theImpact">
        <div class="col-sm-4 text-center"><?php the_field('impact_data_1'); ?></div>
        <div class="col-sm-4 text-center"><?php the_field('impact_data_2'); ?></div>
        <div class="col-sm-4 text-center"><?php the_field('impact_data_3'); ?></div>
      </div>
      <div class="row caseSummary">
        <div class="col-sm-3 caseProb">Problem</div>
        <div class="col-sm-9 caseAnswer"><?php the_field('problem'); ?></div>
      </div>
      <div class="row caseSummary">
        <div class="col-sm-3 caseSol">Solution</div>
        <div class="col-sm-9 caseAnswer"><?php the_field('solution'); ?></div>
      </div>
      <div class="row caseSummary">
        <div class="col-sm-3 caseRes">Result</div>
        <div class="col-sm-9 caseAnswer"><?php the_field('results'); ?></div>
      </div>

      <?php /* get_template_part('templates/entry-meta'); */ ?>
    </header>
    <h1 class="text-center">Summary</h1>
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
