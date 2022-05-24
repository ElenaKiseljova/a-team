<?php 
  $title = get_sub_field( 'title' ) ?? '';

  $image = get_sub_field( 'image' ) ?? [];

  $link = get_sub_field( 'link' ) ?? [];
?>

<section class="discuss">
  <div class="discuss__container container">
    <div class="discuss__block">
      <h3 class="discuss__headline headline">
        <?= $title; ?>
      </h3>
      <img class="discuss__img-mob" src="<?= $image['mobile'] ?? ''; ?>" alt="<?= get_bloginfo( 'name' ); ?>">

      <?php if (!empty($link)) : ?>
        <a class="button" href="<?= $link['url'] ?? ''; ?>"><?= $link['text'] ?? ''; ?></a>
      <?php endif; ?>  
    </div>
    <img class="discuss__img" src="<?= $image['desktop'] ?? ''; ?>" alt="<?= get_bloginfo( 'name' ); ?>">
  </div>
</section>