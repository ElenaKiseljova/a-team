<?php 
  $content = get_sub_field( 'content' ) ?? '';

  $link = get_sub_field( 'link' ) ?? [];

  $image = get_sub_field( 'image' ) ?? '';
?>
<section class="hire">
  <div class="hire__container container">
    <div class="hire__block">
      <?= $content; ?>
 
      <?php if (!empty($link)) : ?>
        <p class="hire__button button button">
          <a href="<?= $link['url'] ?? ''; ?>"><?= $link['text'] ?? ''; ?></a>
        </p>        
      <?php endif; ?> 
    </div>

    <img class="hire__img" src="<?= $image; ?>" alt="<?= strip_tags( get_the_title(  ) ); ?>">
    
    <?php if (!empty($link)) : ?>
      <p class="hire__button hire__button--mob button">
        <a href="<?= $link['url'] ?? ''; ?>"><?= $link['text'] ?? ''; ?></a>
      </p>      
    <?php endif; ?> 
  </div>
</section>
