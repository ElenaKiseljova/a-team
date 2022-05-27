<?php 
  $title = get_sub_field( 'title' ) ?? [];

  $image = get_sub_field( 'image' ) ?? '';
?>

<section class="office">
  <div class="office__container container">
    <h2 class="office__title title">      
      <span class="title--arrow"><?= $title['black'] ?? ''; ?></span>
      <span class="title--color"><?= $title['orange'] ?? ''; ?></span>
    </h2>
    <img class="office__img" src="<?= $image; ?>" alt="<?= $title['orange'] ?? ''; ?> <?= $title['black'] ?? ''; ?>">
  </div>
</section>