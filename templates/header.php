<header data-start="height: 80px;" data-300-start="height: 50px;">

  <!-- data-start="background-color: <?php the_field('header_top', 'options')?>; color: rgb(97, 150, 58); height: 80px;" data-300-start="background-color: <?php the_field('header_scroll', 'options')?>; color: rgb(255, 255, 255); height: 64px;" -->
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo( 'name' ); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
    <span class="menuToggle">
      menu
    </span>
  </div>
</header>
