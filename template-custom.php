<?php
/**
 * Template Name: Home Template
 */
?>

  <?php get_template_part('templates/page', 'header'); ?>
  <!-- <?php get_template_part('templates/sidebar'); ?> -->
  <?php while(the_flexible_field('hero')) { ?>
    <div class="hero center-text" style="background-image: url(<?php the_sub_field('image'); ?>);">
      <span class="visor">
        <h1 contenteditable class="text--white hero-header"><?php the_sub_field('title'); ?></h1><br>
        <a href="<?php the_sub_field('button_link'); ?>" class="cta cta--white"><?php the_sub_field('button_text'); ?></a>
        <span class="banner bottom secondary"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
      </span>
    </div>
  <?php } ?>
  <section>
    <?php while(the_flexible_field('content')) { ?>

      <?php if( get_row_layout() == 'copy' ): ?>

        <article class="post container">
          <?php the_sub_field('content'); ?>
        </article>

      <?php elseif( get_row_layout() == 'highlight' ): ?>

        <div class="container">

          <?php while(the_repeater_field('item')) { ?>

            <span class="float left half highlight">
              <a href="<?php the_sub_field('link'); ?>">
                <span>
                  <img src="<?php the_sub_field('icon'); ?>" alt="" />
                </span>
                <span>
                  <h3><?php the_sub_field('title'); ?></h3>
                  <?php the_sub_field('description'); ?>
                </span>
              </a>
            </span>

          <?php } ?>

        </div>

      <?php elseif( get_row_layout() == 'divider' ): ?>
        <div class="divider" style="background-image: url(<?php the_sub_field('bg_image'); ?>)"></div>
      <?php endif; ?>

    <?php } ?>

    <div class="container">
      <hr>
      <h1>Blog Posts</h1>
      <hr>
      <?php


        $args = array( 'posts_per_page' => 3);

        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          <article class="">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
            <hr>
          </article>
      <?php endforeach;
      wp_reset_postdata();?>
    </div>

    <div class="container center-text">
      <?php echo do_shortcode( '[contact-form-7 id="133" title="Contact form 1"]' ); ?>
    </div>
    <?php get_template_part('templates/page', 'footer'); ?>

  </section>
