<?php 
  $title = get_sub_field( 'title' ) ?? [];

  $list = get_sub_field( 'list' ) ?? [];
?>

<section class="comment">
  <div class="comment__container container">
    <h2 class="comment__title title">
      <?= $title['black'] ?? ''; ?>
      <span class="title--color"><?= $title['orange'] ?? ''; ?></span>
    </h2>

    <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
      <div class="comment__slider swiper">
        <div class="comment__wrapper swiper-wrapper">
          <?php foreach ($list as $key => $item) : ?>
            <?php 
              $title = $item['title'] ?? '';
              $description = $item['description'] ?? '';

              // Старница Отзывов (пока не существует)
              $testimonials_page_id = null;
              $ateam_settings_names = get_option( 'ateam_settings_names' ) ?? [];
              if ( !empty($ateam_settings_names) && $ateam_settings_names['testimonials'] ) {
                $testimonials_page_id = (int) $ateam_settings_names['testimonials'];
              }
            ?>

            <div class="comment__slide swiper-slide">
              <h3 class="comment__headline headline">
                <?= $title; ?>
              </h3>
              <p class="comment__text text">
                <?= $description; ?>
              </p>

              <?php if ($testimonials_page_id) : ?>
                <a href="<?= get_permalink( $testimonials_page_id ); ?>" class="comment__link link"><?= __( 'View more', 'ateam' ); ?></a>
              <?php endif; ?>              
            </div>
          <?php endforeach; ?>           
        </div>
        <div class="comment__dots"></div>
      </div>           
    <?php endif; ?>    
  </div>
</section>