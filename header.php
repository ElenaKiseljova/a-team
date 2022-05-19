<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
      wp_head();
    ?>
  </head>
  <body>

  <?php 
              $logo_footer = get_theme_mod( 'logo_footer' ) ?? '';
              $logo_header = get_theme_mod( 'logo_header' ) ?? '';   
              
              $ateam_option_names = get_option( 'ateam_settings_names' );

              var_dump($ateam_option_names);
            ?>
            <a href="<?= get_bloginfo( 'url' ); ?>" class="header__logo">
              <img src="<?= $logo_header; ?>" alt="<?= get_bloginfo( 'name' ); ?>" />
            </a>

            <a href="<?= get_bloginfo( 'url' ); ?>" class="header__logo header__logo--blue">
              <img src="<?= $logo_footer; ?>" alt="<?= get_bloginfo( 'name' ); ?>" />
            </a>
