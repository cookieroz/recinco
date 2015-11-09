<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package recinco
 */

?>

	</div><!-- #content -->

	 <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-4 col-xs-5 hidden-xs footer-news">
          <h3>Ultimas Noticias</h3>    
          <?php
            $postslist = get_posts('numberposts=3&order=DESC&orderby=date');
            foreach ($postslist as $post) :
              setup_postdata($post);
            ?>
            <div class="footer-entry">
              <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(); ?>
                </a>
              <?php endif; ?>
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <?php echo substr(get_the_excerpt(), 0,62); ?>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="col-md-3 hidden-sm hidden-xs footer-choose-us">
          <h3>Elige Recinco</h3>
          <p>
            <?php echo get_theme_mod( 'text_setting' ); ?>
          </p>
        </div>
        <div class="col-md-3 col-sm-5 col-xs-10 footer-contact">
          <h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
          <ul class="footer-contact-address list-unstyled">
            <li class="footer-address">
              555 Somewhere st. <br/>
              Los Angeles, CA 92101
            </li>
            <li class="footer-phone"><a href="tel:+18184717492"><?php echo get_theme_mod( 'phone_setting' ); ?></a></li>
            <li class="footer-email">contact@yourdomain.com</li>
          </ul>
          <div class="social-media-squares">
            <a href="http://facebook.com/"><i class="fa fa-facebook"></i></a>
            <a href="http://linkedin.com/"><i class="fa fa-instagram"></i></a>
            <a href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="site-info">
      
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
