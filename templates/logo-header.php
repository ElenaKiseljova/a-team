<?php 
  $logo_header = get_theme_mod( 'logo_header' ) ?? ''; 
?>

<a href="<?= get_bloginfo( 'url' ); ?>" class="header__logo">
  <img src="<?= $logo_header; ?>" alt="<?= get_bloginfo( 'name' ); ?>">
</a>