<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php
    wp_head();
  ?>
</head>

<body>
  <header class="header <?= (is_page_template( 'page-fast.php' ) || is_page_template( 'page-know.php' )) ? 'header--white' : ''; ?>">
    <div class="header__container container">
      <?php 
        get_template_part( 'templates/logo', 'header' );
      ?>

      <nav class="nav">
        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'top_menu',
              'container'       => null,
              'menu_class'      => 'nav__list',
              'depth'           => 0,
            )
          );	
        ?>
      </nav>

      <button class="burger">
        <img class="burger__icon" src="<?= get_template_directory_uri(  ); ?>/assets/img/burger.svg" alt="burger">
        <img class="burger__x-icon" src="<?= get_template_directory_uri(  ); ?>/assets/img/burger-x.svg" alt="x-icon">
      </button>
    </div>
  </header>
