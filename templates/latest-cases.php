<?php
  $page_for_posts_id = (int) get_option( 'page_for_posts' );

  $cases = get_field( 'cases', $page_for_posts_id  ) ?? [];
?>

<div class="latest__cases">
  <?php if ( !empty($cases) ) : ?>
    <?php 
      $title = $cases['title'] ?? '';  
      $list = $cases['list'] ?? [];  
    ?>

    <h2 class="latest__subtitle title"><?= $title; ?></h2>
    
    <?php if ( !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
      <ul class="latest__list">
        <?php foreach ($list as $key_case => $case_id) : ?>
          <li class="latest__item">
            <a href="<?= get_permalink( $case_id ); ?>" class="latest__link <?= (get_the_content( null, false, $case_id ) === '') ? 'latest__link--disabled' : ''; ?>">
              <h4 class="latest__name headline">
                <?= get_the_title( $case_id ); ?>e
              </h4>
              <p class="text">
                <?= get_the_excerpt( $case_id ); ?>
              </p>
            </a>
          </li>
        <?php endforeach; ?>      
      </ul>    
    <?php endif; ?>
  <?php endif; ?>
</div>