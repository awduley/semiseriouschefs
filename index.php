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

<?php
if ( have_posts() ) : 

  // We'll load the posts loop here.
  while ( have_posts() ) : the_post();
?>

<?php
  get_template_part( 'template-parts/content' );
?>  

  <?php
  endwhile; 
  ?>

  </main>

  <aside class="sidebar sidebar-2">
    <?php get_sidebar( 'right' ); ?>
  </aside>

  <?php
  else:

  // If there isn't any content, then content-none will be displayed.
  get_template_part( 'template-parts/content', 'none' );

  endif;

?>

<?php

get_footer();