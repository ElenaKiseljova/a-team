<?php 
  $title = get_sub_field( 'title' ) ?? [];

  $list = get_sub_field( 'list' ) ?? [];

  $values = false;

  if (get_row_layout() == 'values') {
    $values = true;
  }
?>

<section class="goal">
  <div class="container">
    <h2 class="goal__title title"><?= $title['black'] ?? ''; ?> <span class="title--color"><?= $title['orange'] ?? ''; ?></span></h2>

    <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
      <?php foreach ($list as $key => $item) : ?>
        <?php 
          $index = $key + 1;
 
          $title = $item['title'] ?? '';
          $description = $item['description'] ?? '';

          $background_check_icon = $item['background_check_icon'] ?? '#801f3d';
        ?>
        <div class="goal__block <?= $values ? 'goal__block--values' : ''; ?> <?= (($index % 2) === 0) ? 'goal__block--reverse' : ''; ?>">
          <?php if ( $values ) : ?>
            <div class="goal__name">
              <svg class="goal__check <?= (($index % 2) === 0) ? 'goal__check--reverse' : ''; ?>" width="77" height="71" style="fill: <?= $background_check_icon; ?>;">
                <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#check"></use>
              </svg>
              <h3 class="goal__headline headline <?= (($index % 2) === 0) ? 'goal__headline--reverse' : ''; ?>">
                <?= $title; ?>
              </h3>
              <svg class="goal__arrow-head <?= (($index % 2) === 0) ? 'goal__arrow-head--reverse' : ''; ?>" width="60" height="23" style="fill: <?= $background_check_icon; ?>;">
                <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#arrow"></use>
              </svg>
            </div>
          <?php else : ?>
            <div class="goal__name">
              <h3 class="goal__headline headline">
                <?= $title; ?>
              </h3>
            </div>

            <img class="goal__arrow" src="<?= get_template_directory_uri(  ); ?>/assets/img/arrow.svg" alt="arrow">
          <?php endif; ?>
          
          <div class="goal__box">
            <?= $description; ?>          
          </div>
        </div>
      <?php endforeach; ?>      
    <?php endif; ?>
  </div>
</section>