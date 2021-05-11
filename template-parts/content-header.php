<?php 
/**
 * Displays the site header.
 */
?>

<header class="masthead" role="banner">

  <?php if ( has_custom_logo() ): ?>
    <div class="site-logo"><a href="<?php esc_url( home_url( '/' ) ); ?>"><?php the_custom_logo(); ?></a></div>
  <?php endif; ?>
    <?php wp_nav_menu(
      [
        'theme_location'        => 'menu-header',
        'menu_class'            => 'menu-nav__ul',
        'container'             => 'nav',
        'container_aria_label'  => 'navigation',
      ]
    ); ?>

</header><!-- .masthead -->