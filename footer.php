<?php 
/**
 * The template that displays the footer
 * 
 * It closes off all the divs opened in the header template
 */
?>

  </div><!-- .content-area -->

  <footer class="site-footer">

    <aside class="sidebar sidebar-3">
      <?php get_sidebar( 'bottom' ); ?>
    </aside>
    
    <?php get_template_part( 'template-parts/content', 'footer' ); ?>

  </footer>

  </div><!-- .page -->
  <?php wp_footer(); ?>
</body>
</html>