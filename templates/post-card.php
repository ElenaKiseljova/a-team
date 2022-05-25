<?php 
  $background_post_image = get_field( 'background_post_image' ) ?? '';
?>
<li class="latest__card card" <?= !empty($background_post_image) ? 'style="background-image: url(' . $background_post_image . ');"' : ''; ?>>
  <h3 class="card__headline headline"><?= get_the_title(  ); ?></h3>
  <p class="card__text text">
    <?= get_the_excerpt(  ); ?>
  </p>
  <div class="card__bottom">
    <p class="text"><?= get_the_date( 'F j, Y' ); ?></p>
    <a href="<?= get_permalink(  ); ?>" class="link"><?= __( 'View more', 'ateam' ); ?></a>
  </div>
</li>