<?php 
  $title = get_sub_field( 'title' ) ?? [];

  $text = get_sub_field( 'text' ) ?? '';

  $list = get_sub_field( 'list' ) ?? [];
?>

<section class="team">
  <div class="container">
    <h2 class="team__title title">
      <?= $title['black'] ?? ''; ?>
      <span class="title--color"><?= $title['orange'] ?? ''; ?></span>
    </h2>
    <p class="team__text text">
      <?= $text; ?>    
    </p>

    <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?> 
      <ul class="team__wrapper">
        <?php foreach ($list as $key => $item) : ?>
          <?php 
            $title = $item['title'] ?? '';
            $position = $item['position'] ?? '';
            $linkedin = $item['linkedin'] ?? '';

            $image = $item['image'] ?? [];
          ?>

          <li class="team__block">
            <div class="team__img">
              <img class="team__img-desk" src="<?= $image['gray'] ?? ''; ?>" alt="<?= $title; ?>">
              <img class="team__img-hover" src="<?= $image['color'] ?? ''; ?>" alt="<?= $title; ?>">
            </div>
            <div class="team__head">
              <h4 class="team__name title"><?= $title; ?></h4>
              <a href="<?= $linkedin; ?>" class="team__icon">
                <svg width="27" height="27">
                  <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#linkedin"></use>
                </svg>
              </a>
            </div>
            <p class="team__special text">
              <?= $position; ?>
            </p>
          </li>
        <?php endforeach; ?>          
      </ul>        
    <?php endif; ?> 
  </div>
</section>