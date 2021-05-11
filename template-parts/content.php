<?php 
/**
 * Template part that displays posts
 */
?>

<article class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">

    <h2><a class="entry-title" href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h2>

    <div class="entry-thumbnail">
      <?php the_post_thumbnail(); ?>
    </div>
  </header><!-- .entry-header -->

  <div class="entry-excerpt">
    <?php the_excerpt(); ?>
  </div>

  <?php 
    wp_link_pages(
      [
        'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'semiseriouschefs' ) . '">',
        'after'    => '</nav>',
        /* translators: %: Page number. */
        'pagelink' => esc_html__( 'Page %', 'semiseriouschefs' ),
      ]
    );
  ?>

  

</article>