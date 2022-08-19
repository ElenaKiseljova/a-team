<?php 
  $title = get_sub_field( 'title' ) ?? '';

  $list = get_sub_field( 'list' ) ?? [];
?>

<section class="testimonials">
  <div class="container">
    <h2 class="title testimonials__title"><?= $title; ?></h2>

    <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
      <?php foreach ($list as $key => $item) : ?>
        <?php 
          $icon = $item['icon'] ?? '';
          $author = $item['author'] ?? '';
          $text = $item['text'] ?? '';

          // Старница Отзывов (пока не существует)
          $testimonials_page_id = null;
          $ateam_settings_names = get_option( 'ateam_settings_names' ) ?? [];
          if ( !empty($ateam_settings_names) && $ateam_settings_names['testimonials'] ) {
            $testimonials_page_id = (int) $ateam_settings_names['testimonials'];
          }
        ?>

        <div class="testimonials__testimonial testimonial">
          <div class="testimonial__left">
            <img
              class="testimonial__img"
              src="<?= $icon; ?>"
              alt="flag"
            />
            <p class="testimonial__post text">
              <?= $author; ?>
            </p>
          </div>
          <div class="testimonial__wrapper">
            <div class="testimonial__block">
              <p class="testimonial__text text">
              <?= $text; ?>
              </p>
            </div>
          </div>
        </div>  
      <?php endforeach; ?>               
    <?php endif; ?>      
  </div>
</section>