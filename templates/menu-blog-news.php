<?php
  $menu_name = 'blog_news';

  $locations = get_nav_menu_locations();

  $menu_items = null;
  
  if( $locations && isset( $locations[ $menu_name ] ) ) {
  
    // получаем элементы меню
    $menu_items = wp_get_nav_menu_items( $locations[ $menu_name ] );
  }
?>

<?php if ($menu_items && !empty($menu_items) && is_array($menu_items) && !is_wp_error( $menu_items )) : ?>
  <h4 class="footer__headline headline"><?= wp_get_nav_menu_name( $menu_name ); ?></h4>

  <?php foreach ($menu_items as $key => $menu_item) : ?>
    <div class="footer__article">
      <a href="<?= $menu_item->url; ?>" class="footer__text text">
        <?= $menu_item->title; ?>
        <span class="footer__arrow"></span>
      </a>
    </div>
  <?php endforeach; ?>   
<?php endif; ?>
