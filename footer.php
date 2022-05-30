<?php 
  $policy_page_id = (int) get_option( 'wp_page_for_privacy_policy' );

  $term_page_id = null;

  $ateam_settings_names = get_option( 'ateam_settings_names' ) ?? [];

  if ( !empty($ateam_settings_names) && $ateam_settings_names['term'] ) {
    $term_page_id = (int) $ateam_settings_names['term'];
  }

  $description_footer = get_theme_mod( 'description_footer' ) ?? ''; 
?>

  <footer class="footer">
    <div class="footer__container container">
      <?php 
        get_template_part( 'templates/logo', 'footer' );
      ?>

      <div class="footer__info">     
        <div class="footer__description">
          <?= nl2br( $description_footer ); ?>
        </div>  

        <?php 
          get_template_part( 'templates/menu', 'social' );
        ?>
        
        <p class="footer__rigths text">A-Team.Global© 2012-<?= date( 'Y' ); ?>. <?= __( 'All rights reserved.', 'ateam' ); ?> </p>
        
        <div class="footer__docs">
          <?php if ( $term_page_id ) : ?>
            <a href="<?= get_permalink( $term_page_id ); ?>" class="footer__terms text"><?= get_the_title( $term_page_id ); ?></a>
          <?php endif; ?>

          <?php if ( $policy_page_id ) : ?>
            <a href="<?= get_permalink( $policy_page_id ); ?>" class="footer__terms text"><?= get_the_title( $policy_page_id ); ?></a>
          <?php endif; ?>   
        </div>
      </div>

      <div class="footer__company">
        <h4 class="footer__headline headline"><?= wp_get_nav_menu_name( 'bottom_menu' ); ?></h4>
        <nav class="footer__nav">          
          <?php
            wp_nav_menu(
              array(
                'theme_location'  => 'bottom_menu',
                'container'       => null,
                'menu_class'      => 'footer__list',
                'depth'           => 0,
              )
            );	
          ?>
        </nav>
      </div>

      <div class="footer__blog">
        <?php 
          get_template_part( 'templates/menu', 'blog-news' );
        ?>
      </div>
    </div>
  </footer>


  <?php
    wp_footer();
  ?>
</body>
</html>
