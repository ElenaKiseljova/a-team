<?php 
  $list = get_sub_field( 'list' ) ?? '';  
?>
<section class="why"> 
  <div class="why__container container">
    <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
      <?php foreach ($list as $key => $item) : ?>
        <?php 
          $row_style = $item['row_style'] ?? 'text';

          $title = $item['title'] ?? '';

          $image = $item['image'] ?? '';

          $description_1 = $item['description_1'] ?? '';
          $description_2 = $item['description_2'] ?? '';
        ?>

        <?php if ( $row_style === 'text' ) : ?>
          <div class="why__row why__row--text">
            <div class="why__content why__content--100">
              <h3><?= $title; ?></h3>
            </div>

            <div class="why__content why__content--left">
              <?= $description_1; ?>
            </div>

            <div class="why__content why__content--right">
              <?= $description_2; ?>
            </div>
          </div>        
        <?php else : ?>
          <div class="why__row <?= ($row_style === 'text_i') ? 'why__row--reverse' : ''; ?>">
            <div class="why__content why__content--top">
              <?= $description_1; ?>
            </div>

            <div class="why__image">
              <img src="<?= $image; ?>" alt="<?= strip_tags( get_the_title(  ) ); ?>">
            </div>

            <div class="why__content why__content--bottom">
              <?= $description_2; ?>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>      
    <?php endif; ?>    
  </div>
</section>