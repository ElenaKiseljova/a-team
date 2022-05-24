<?php 
  $logo_footer = get_theme_mod( 'logo_footer' ) ?? ''; 
?>

<a href="<?= get_bloginfo( 'url' ); ?>" class="footer__logo">
  <img src="<?= $logo_footer; ?>" alt="<?= get_bloginfo( 'name' ); ?>">
</a>