<?php 
/**
 * This is the main template file
 * 
 * If no other more specific template is found, WordPress will use this file. It is one of two files needed for WordPress to run.
 */

get_header();
?>

<div class="content-area">  

  <aside class="sidebar sidebar-1">
    <?php get_sidebar( 'left' ); ?>
  </aside>

  <main class="main" role="main">



  </main>

  <aside class="sidebar sidebar-2">
    <?php get_sidebar( 'right' ); ?>
  </aside>

<?php

get_footer();