<?php /* Template Name: RChome */ ?>

<?php get_header(); ?>

  <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '40' ); } ?>

  <div class="homepage row">
    <div class="col-sm-12">
      <h2><?php echo get_theme_mod( 'slideshow_title' ); ?></h2>
      <p><?php echo get_theme_mod( 'slideshow_text' ); ?></h2></p>
    </div>
    <div class="col-sm-6">
      <h3><?php echo get_theme_mod( 'left_title' ); ?></h3>
      <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" data-content="Nuestras Bandas">
        <img src="http://mla-s1-p.mlstatic.com/bandas-para-cintas-de-correr-a-motor-repuestos-959401-MLA20330440012_062015-O.jpg" alt="Nuestras Bandas" />
      </a>
    </div>
    <div class="col-sm-6">
      <h3><?php echo get_theme_mod( 'right_title' ); ?></h3>
      <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" data-content="Nuestras Marcas">
        <img src="<?php echo esc_url( home_url( '//wp-content/uploads/2015/10/marcas-960x300_c.jpg' ) ); ?>" alt="Nuestras Bandas" />
      </a>
    </div>
  </div><!-- #primary -->
<?php get_footer(); ?>
