<?php 
  $title = get_sub_field( 'title' ) ?? '';

  $list = get_sub_field( 'list' ) ?? [];
?>

<section class="stack">
  <div class="container">
    <h2 class="title stack__title"><?= $title; ?></h2>

    <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
      <ul class="stack__list">        
        <?php foreach ($list as $key => $item) : ?>
          <?php 
            $icon = $item['icon'] ?? '';
            $title = $item['title'] ?? '';
          ?>

          <li class="stack__item">
            <div class="stack__img">
              <img src="<?= $icon; ?>" alt="<?= $title; ?>" />
            </div>
            <p class="text stack__name"><?= $title; ?></p>
          </li>
        <?php endforeach; ?> 
      </ul>                    
    <?php endif; ?>       
  </div>
</section>