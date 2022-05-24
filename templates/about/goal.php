<?php 
  $title = get_sub_field( 'title' ) ?? [];

  $list = get_sub_field( 'list' ) ?? [];
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
        ?>
        <div class="goal__block <?= (($index % 2) === 0) ? 'goal__block--reverse' : ''; ?>">
          <h3 class="goal__headline headline">
            <?= $title; ?>
          </h3>
          <img class="goal__arrow" src="<?= get_template_directory_uri(  ); ?>/assets/img/arrow.svg" alt="arrow">
          <div class="goal__box">
            <?= $description; ?>
          </div>
        </div>
      <?php endforeach; ?>      
    <?php endif; ?>
  </div>
</section>