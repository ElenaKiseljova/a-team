<?php 
  $image = get_sub_field( 'image' ) ?? '';

  $list = get_sub_field( 'list' ) ?? [];

  $title = get_sub_field( 'title' ) ?? '';

  $button = get_sub_field( 'button' ) ?? [];
?>

<section class="let">
  <div class="container let__container">
    <div class="let__left">
      <?php if (!empty($image)) : ?>
        <div class="let__img">
          <img src="<?= $image; ?>" alt="<?= !empty($title) ? $title : 'img'; ?>" />
        </div>
      <?php endif; ?>      

      <?php if ( !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
        <ul class="let__list">
          <?php foreach ($list as $item) : ?>
            <li class="let__item">
              <div class="let__circle"><?= $item['title'] ?? ''; ?></div>
              <p class="text let__text"><?= $item['description'] ?? ''; ?></p>
            </li>
          <?php endforeach; ?>
        </ul>        
      <?php endif; ?>
      
    </div>
    <div class="let__right">
      <?php if (!empty($title)) : ?>
        <h3 class="headline let__headline">
          <?= $title; ?>
        </h3>
      <?php endif; ?>
      
      <?php if (!empty($button) && $button['text'] && !empty($button['text']) && $button['link'] && !empty($button['link'])) : ?>
        <a class="button button--filled let__button" href="<?= $button['link']; ?>">
          <?= $button['text']; ?>
        </a>
      <?php endif; ?>      
    </div>
  </div>
</section>