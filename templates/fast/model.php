<?php 
  $title = get_sub_field( 'title' ) ?? '';
 
  $list = get_sub_field( 'list' ) ?? [];

  $cooperation = get_sub_field( 'cooperation' ) ?? [];
?>

<section class="model">
  <div class="container">
    <h2 class="title model__title"><?= $title; ?></h2>

    <?php if ( !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
      <ul class="model__list">
        <?php foreach ($list as $key => $item) : ?>
          <li class="model__item">
            <div class="model__icon">
              <img src="<?= $item['icon'] ?? ''; ?>" alt="<?= $item['title'] ?? 'img'; ?>" />
            </div>
            <h4 class="headline model__name"><?= $item['title'] ?? ''; ?></h4>
            <p class="text model__text">
              <?= $item['description'] ?? ''; ?>
            </p>
          </li>
        <?php endforeach; ?>   
      </ul>
    <?php endif; ?>   
    
    <?php if ( !empty($cooperation) && !is_wp_error( $cooperation ) && $cooperation['text'] && !empty($cooperation['text'])) : ?>
      <div class="cooperation model__cooperation">
        <p class="headline cooperation__headline">
          <?= $cooperation['text']; ?>
        </p>

        <?php if ( $cooperation['button'] && $cooperation['button']['text'] && !empty($cooperation['button']['text']) && $cooperation['button']['link'] && !empty($cooperation['button']['link']) ) : ?>
          <a class="button button--filled cooperation__button" href="<?= $cooperation['button']['link']; ?>">
            <?= $cooperation['button']['text']; ?>
          </a>
        <?php endif; ?>        
      </div>
    <?php endif; ?>
  </div>
</section>