<?php 
  $list = get_sub_field( 'list' ) ?? [];

  $cooperation = get_sub_field( 'cooperation' ) ?? [];
?>

<section class="steps">
  <div class="container">
    <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
      <?php foreach ($list as $key => $item) : ?>
        <?php 
          $index = $key + 1;

          $image = $item['image'] ?? '';  
          $title = $item['title'] ?? '';
          $description = $item['description'] ?? '';

          $link = $item['link'] ?? [];
        ?>
        <div class="steps__block <?= (($index % 2) === 0) ? 'steps__block--reverse' : ''; ?>">
          <div class="steps__info">
            <h3 class="steps__headline headline"><?= $title; ?></h3>
            <p class="steps__text text">
              <?= $description; ?>
            </p>

            <?php if ( !empty($link) ) : ?>
              <a class="link" href="<?= $link['url'] ?? ''; ?>"><?= $link['text'] ?? ''; ?></a>
            <?php endif; ?>            
          </div>
          <img class="steps__arrow" src="<?= get_template_directory_uri(  ); ?>/assets/img/arrow.svg" alt="arrow">
          <img class="steps__img" src="<?= $image; ?>" alt="<?= strip_tags($title); ?>">
        </div>
      <?php endforeach; ?>      
    <?php endif; ?>

    <?php if ( !empty($cooperation) && !is_wp_error( $cooperation ) && $cooperation['text'] && !empty($cooperation['text'])) : ?>
      <div class="cooperation steps__cooperation">
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