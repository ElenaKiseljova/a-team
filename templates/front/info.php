<?php 
  $image = get_sub_field( 'image' ) ?? [];

  $content = get_sub_field( 'content' ) ?? '';
?>

<section class="info">
  <div class="info__container container">
    <?= $content; ?>
 
    <picture class="info__img">
      <source srcset="<?= $image['desktop'] ?? ''; ?>" media="(min-width: 767px)">
      <img src="<?= $image['mobile'] ?? ''; ?>" alt="<?= get_bloginfo( 'name' ); ?>">
    </picture>
  </div>
</section>