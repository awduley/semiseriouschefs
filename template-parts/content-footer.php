

<section class="sidebar-footer">
  <?php 

  // if (is_active_sidebar( 'sidebar-3' ) ) {
  //   dynamic_sidebar( 'sidebar-3' );
  // }

  ?>
</section>


  <?php if ( has_nav_menu( 'menu-footer' ) ) : ?>
    <nav class="footer-nav" aria-label="<?php esc_attr_e( 'Footer Menu', 'semiseriouschefs' ); ?>">  
      <?php 
        wp_nav_menu(
          [
            'theme_location'        => 'menu-footer',
            'menu_class'            => 'menu-nav-footer__ul',
            'container'             => 'nav',
            'container_aria_label'  => 'navigation',
          ]
        );
      ?>
    </nav><!-- .footer-nav -->
    <?php endif; ?>
  
    <section class="site-copy">
      <?php if ( has_custom_logo() ) : ?>
        <div class="site-logo">
          <?php the_custom_logo(); ?>
        </div>
      <?php else : ?>
        <p class="attribution"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home-link"><?php bloginfo( 'name' ); ?></a> theme developed by <a class="cfs-link" href="<?php echo esc_url( 'http://crookedfallstudios.com', 'semiseriouschef' );?>"><?php esc_html_e( 'Crooked Fall Studios' ); ?></a> | &copy;<?php echo date( "Y" ); ?> <?php esc_html_e( '- All rights reserved', 'semiseriouschefs' ); ?></p>
        
      <?php endif; ?>
    </section><!-- site-copy -->