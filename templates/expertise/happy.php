<?php 
  $content = get_sub_field( 'content' ) ?? '';

  $image = get_sub_field( 'image' ) ?? '';
?>

<section class="happy">
  <div class="happy__container container">
    <div class="happy__block happy__block--desktop">
      <?= $content; ?>
    </div>

    <img class="happy__img" src="<?= $image; ?>" alt="<?= strip_tags( get_the_title(  ) ); ?>">
    
    <div class="happy__block happy__block--mobile">
      <?= $content; ?>
    </div>
  </div>
</section>