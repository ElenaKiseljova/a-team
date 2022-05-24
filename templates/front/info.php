<?php 
  $image = get_sub_field( 'image' ) ?? '';

  $content = get_sub_field( 'content' ) ?? '';
?>

<section class="info">
  <div class="info__container container">
    <?= $content; ?>
    
    <img class="info__img" src="<?= $image; ?>" alt="<?= get_bloginfo( 'name' ); ?>">
  </div>
</section>