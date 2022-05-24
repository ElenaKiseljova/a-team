<?php 
  $title = get_sub_field( 'title' ) ?? [];

  $text = get_sub_field( 'text' ) ?? '';

  $list = get_sub_field( 'list' ) ?? [];
?>

<section class="diff">
  <div class="diff__container container">
    <h2 class="diff__title title">
      <?= $title['black'] ?? ''; ?>
      <span class="title--color"><?= $title['orange'] ?? ''; ?></span>
    </h2>
    <p class="diff__text text">
      <?= $text; ?>
    </p>

    <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
      <?php foreach ($list as $key => $item) : ?>
        <?php 
          $index = $key + 1;
 
          $title = $item['title'] ?? '';
          $description = $item['description'] ?? '';
          $image = $item['image'] ?? '';
        ?>
        <div class="diff__block <?= (($index % 2) !== 0) ? 'diff__block--reverse' : ''; ?>">
          <img class="diff__img" src="<?= $image; ?>" alt="<?= $title; ?>">
          <div class="diff__info">
            <h3 class="diff__headline headline"><?= $title; ?></h3>
            <p class="text">
              <?= $description; ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>      
    <?php endif; ?>
  </div>
</section>