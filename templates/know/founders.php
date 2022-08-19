<?php 
  $title = get_sub_field( 'title' ) ?? '';

  $list = get_sub_field( 'list' ) ?? [];

  $cooperation = get_sub_field( 'cooperation' ) ?? [];
?>

<section class="founders">
  <div class="container">
    <h2 class="title founders__title"><?= $title; ?></h2>

    <?php if ( !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
      <div class="founders__body">
        <?php foreach ($list as $key => $item) : ?>
          <div class="founders__block">
            <div class="founders__about">
              <?php if ($item['image'] && !empty($item['image'])) : ?>
                <div class="founders__photo">
                  <img src="<?= $item['image']; ?>" alt="<?= $item['name'] ?? 'founder'; ?>" />
                </div>
              <?php endif; ?>
              
              <div class="founders__head">
                <?php if ($item['name'] && !empty($item['name'])) : ?>
                  <p class="title founders__name"><?= $item['name']; ?></p>
                <?php endif; ?>                

                <?php if ($item['linkedin']  && !empty($item['linkedin'] )) : ?>
                  <a class="founders__link" href="<?= $item['linkedin']; ?>">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#linkedin"></use>
                    </svg>
                  </a>
                <?php endif; ?>                
              </div>

              <?php if ($item['position'] && !empty($item['position'])) : ?>
                <p class="text founders__post"><?= $item['position']; ?></p>
              <?php endif; ?>              
            </div>
            <p class="text founders__text">
              <?= $item['description'] ?? ''; ?>
            </p>
          </div>
        <?php endforeach; ?>          
      </div>
    <?php endif; ?>     

    <?php if ( !empty($cooperation) && !is_wp_error( $cooperation ) && $cooperation['text'] && !empty($cooperation['text'])) : ?>
      <div class="cooperation founders__cooperation">
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