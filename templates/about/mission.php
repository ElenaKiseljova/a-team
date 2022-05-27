<?php 
  $title = get_sub_field( 'title' ) ?? [];

  $text = get_sub_field( 'text' ) ?? '';

  $image = get_sub_field( 'image' ) ?? '';
?>

<section class="mission">
  <div class="mission__container container">
    <img class="mission__img" src="<?= $image; ?>" alt="<?= $title['orange'] ?? ''; ?> <?= $title['black'] ?? ''; ?>">
    <div class="mission__block">
      <h2 class="mission__title title">        
        <span class="title--arrow"><?= $title['black'] ?? ''; ?></span>
        <span class="title--color"><?= $title['orange'] ?? ''; ?></span>
      </h2>
      <p class="mission__text text">
        <?= $text; ?>
      </p>
    </div>
  </div>
</section>