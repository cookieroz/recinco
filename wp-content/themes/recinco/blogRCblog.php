<?php /* Template Name: RCblog */ ?>
<?php get_header(); ?>

  <div class="row">
    <div id="primary" class="content-area col-sm-9">
      <main id="main" class="site-main" role="main">
        TEST
      <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

              <?php if ( 'post' === get_post_type() ) : ?>
              <div class="entry-meta">
                <?php recinco_posted_on(); ?>
              </div><!-- .entry-meta -->
              <?php endif; ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
              <?php
                the_content( sprintf(
                  /* translators: %s: Name of current post. */
                  wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'recinco' ), array( 'span' => array( 'class' => array() ) ) ),
                  the_title( '<span class="screen-reader-text">"', '"</span>', false )
                ) );
              ?>

              <?php
                wp_link_pages( array(
                  'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'recinco' ),
                  'after'  => '</div>',
                ) );
              ?>
            </div> <!-- .entry-content -->

          <footer class="entry-footer">
            <?php recinco_entry_footer(); ?>
          </footer><!-- .entry-footer -->
        </article><!-- #post-## -->

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->
  </div>  <!-- end .row -->
<?php get_footer(); ?>
