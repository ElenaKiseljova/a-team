<?php 
  $list = get_sub_field( 'list' ) ?? [];
?>

<section class="advantages">
  <div class="advantages__container container">
    <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>       
      <ul class="advantages__block">
        <?php foreach ($list as $key => $item) : ?>
          <?php  
            $title = $item['title'] ?? '';
            $description = $item['description'] ?? '';
          ?>
          <li class="advantages__item">
            <div class="advantages__info">
              <h2 class="advantages__title title"><?= $title; ?></h2>
              <p class="advantages__subtitle">
                <?= $description; ?>
              </p>
            </div>
          </li>
        <?php endforeach; ?>          
      </ul>   
    <?php endif; ?>    
  </div>
</section>