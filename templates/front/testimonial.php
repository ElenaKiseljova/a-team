<?php 
  $title = get_sub_field( 'title' ) ?? '';
  $text = get_sub_field( 'text' ) ?? '';
  $author = get_sub_field( 'author' ) ?? '';

  $discuss = get_sub_field( 'discuss' ) ?? [];
?>

<section class="review">
  <div class="container">
    <div class="review__info">
      <h3 class="review__headline headline"><?= $title; ?></h3>
      <p class="review__text text">
        <?= $text; ?>
      </p>
    </div>
    <p class="review__special text"><?= $author; ?></p>

    <?php if ( !empty($discuss) ) : ?>
      <?php 
        $title = $discuss['title'] ?? '';

        $link = $discuss['link'] ?? [];
        $image = $discuss['image'] ?? [];
      ?>
      <div class="review__block">
        <div class="review__box">
          <h4 class="review__subtitle"><?= $title; ?></h4>
          <img class="review__img review__img--mobile" src="<?= $image['mobile'] ?? ''; ?>" alt="<?= get_bloginfo( 'name' ); ?>">
          
          <?php if (!empty($link)) : ?>
            <a class="button" href="<?= $link['url'] ?? ''; ?>"><?= $link['text'] ?? ''; ?></a>
          <?php endif; ?>          
        </div>
        <img class="review__img" src="<?= $image['desktop'] ?? ''; ?>" alt="<?= get_bloginfo( 'name' ); ?>">
      </div>
    <?php endif; ?>    
  </div>
</section>