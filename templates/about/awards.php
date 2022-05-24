<?php 
  $title = get_sub_field( 'title' ) ?? [];

  $list = get_sub_field( 'list' ) ?? [];
?>

<section class="awards">
  <div class="container">
    <h2 class="awards__title title">
      <?= $title['black'] ?? ''; ?>
      <span class="title--color"><?= $title['orange'] ?? ''; ?></span>
    </h2>
    
    <div class="awards__wrapper">
      <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
        <?php foreach ($list as $key => $item) : ?>
          <?php 
            $image = $item['image'] ?? '';
          ?>
          <img class="awards__img" src="<?= $image; ?>" alt="<?= get_bloginfo( 'name' ); ?>">
        <?php endforeach; ?>      
      <?php endif; ?>
    </div>
  </div>
</section>