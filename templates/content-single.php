<?php while (have_posts()) : the_post(); ?>
  <div class="wrapper">
    <article <?php post_class(); ?>>
      <h1><?php single_post_title(); ?></h1>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <?php comments_template('/templates/comments.php'); ?>
    </article>
  </div>
<?php endwhile; ?>
