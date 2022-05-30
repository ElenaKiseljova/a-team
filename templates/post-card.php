<?php 
  $post_thumbnail_url = get_the_post_thumbnail_url( null, 'large' ) ?? '';  
?>
<li class="latest__card card" <?= !empty($post_thumbnail_url) ? 'style="background-image: url(' . $post_thumbnail_url . ');"' : ''; ?>>
  <h3 class="card__headline headline">
    <a href="<?= get_permalink(  ); ?>"><?= get_the_title(  ); ?></a>    
  </h3>
  <p class="card__text text">
    <?= get_the_excerpt(  ); ?>
  </p>
  <div class="card__bottom">
    <p class="text"><?= get_the_date( 'F j, Y' ); ?></p>
    <a href="<?= get_permalink(  ); ?>" class="link"><?= __( 'View more', 'ateam' ); ?></a>
  </div>
</li>