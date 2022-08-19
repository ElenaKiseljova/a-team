<?php 
  $image = get_sub_field( 'image' ) ?? '';

  $list = get_sub_field( 'list' ) ?? [];

  $text = get_sub_field( 'text' ) ?? '';

  $button = get_sub_field( 'button' ) ?? [];
?>

<section class="tech">
  <div class="container tech__container">
    <div class="tech__left">
      <?php if (!empty($image)) : ?>
        <div class="tech__img">
          <img src="<?= $image; ?>" alt="goal loop vector" />
        </div>
      <?php endif; ?>

      <?php if ( !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
        <?php foreach ($list as $item) : ?>
          <div class="tech__item">
            <span class="tech__item--number"><?= $item['title'] ?? ''; ?></span>
            <?= $item['description'] ?? ''; ?>
          </div>
        <?php endforeach; ?>       
      <?php endif; ?>
    </div>

    <div class="tech__right">
      <?= $text; ?>
      
      <?php if (!empty($button) && $button['text'] && !empty($button['text']) && $button['link'] && !empty($button['link'])) : ?>
        <a class="button button--filled tech__button" href="<?= $button['link']; ?>">
          <?= $button['text']; ?>
        </a>
      <?php endif; ?>  
    </div>
  </div>
</section>