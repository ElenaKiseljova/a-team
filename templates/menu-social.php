<?php
  $menu_name = 'social';

  $locations = get_nav_menu_locations();

  $menu_items = null;
  
  if( $locations && isset( $locations[ $menu_name ] ) ) {
  
    // получаем элементы меню
    $menu_items = wp_get_nav_menu_items( $locations[ $menu_name ] );
  }
?>

<?php if ($menu_items && !empty($menu_items) && is_array($menu_items) && !is_wp_error( $menu_items )) : ?>
  <div class="social">
    <?php foreach ($menu_items as $key => $menu_item) : ?>
      <a class="social__link" href="<?= $menu_item->url; ?>">
        <img src="<?= get_template_directory_uri(  ); ?>/assets/img/<?= strtolower( $menu_item->title ); ?>.png" alt="<?= $menu_item->title; ?>">
      </a>
    <?php endforeach; ?>   
  </div>
<?php endif; ?>
