<?php 
  $title = get_sub_field( 'title' ) ?? '';
  $image = get_sub_field( 'image' ) ?? [];
  $list = get_sub_field( 'list' ) ?? [];
?>
<section class="models">
  <div class="container">
    <h2 class="models__title title"><?= $title; ?></h2>

    <?php if ( !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
      <ul class="models__block">
        <?php foreach ($list as $key => $item) : ?>
          <li class="models__item">
            <div class="models__head">
              <svg width="77" height="71" style="fill: <?= $item['background_check_icon'] ?? '#000000'; ?>;">
                <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#check"></use>
              </svg>
              <h3 class="headline"><?= $item['title'] ?? ''; ?></h3>
            </div>
            <p class="text">
              <?= $item['description'] ?? ''; ?>
            </p>
          </li>
        <?php endforeach; ?>        
      </ul>
    <?php endif; ?>    
  </div>

  <?php if ( !empty($image) && !is_wp_error( $image ) ) : ?>
    <picture>
      <source srcset="<?= $image['desktop'] ?? ''; ?>" media="(min-width: 1280px)">
      <source srcset="<?= $image['tablet'] ?? ''; ?>" media="(min-width: 768px)">
      <img class="models__img" src="<?= $image['mobile'] ?? ''; ?>" alt="<?= get_bloginfo( 'name' );?>">
    </picture>
  <?php endif; ?>  
</section>