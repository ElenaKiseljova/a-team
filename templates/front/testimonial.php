<?php 
  $title = get_sub_field( 'title' ) ?? '';
  $text = get_sub_field( 'text' ) ?? '';
  $author = get_sub_field( 'author' ) ?? '';

  $discuss = get_sub_field( 'discuss' ) ?? [];
?>

<section class="review"> 
  <div class="container">
    <div class="review__testimonial testimonial">
      <h3 class="testimonial__headline headline"><?= $title; ?></h3>
      <div class="testimonial__wrapper">
        <div class="testimonial__block">
          <p class="testimonial__text text">
            <?= $text; ?>
          </p>
          <p class="testimonial__special text"><?= $author; ?></p>
        </div>
      </div>
    </div>

    <?php if ( !empty($discuss) ) : ?>
      <?php 
        $title = $discuss['title'] ?? '';

        $link = $discuss['link'] ?? [];
        $image = $discuss['image'] ?? [];
      ?>
      <div class="call">
        <div class="call__box">
          <h4 class="call__subtitle">
            <?= $title; ?>
          </h4>
          <img class="call__img call__img--mobile" src="<?= $image['mobile'] ?? ''; ?>" alt="<?= get_bloginfo( 'name' ); ?>">
          
          <?php if (!empty($link)) : ?>
            <a class="button" href="<?= $link['url'] ?? ''; ?>"><?= $link['text'] ?? ''; ?></a>
          <?php endif; ?> 
        </div>
        <img class="call__img" src="<?= $image['desktop'] ?? ''; ?>" alt="<?= get_bloginfo( 'name' ); ?>">
      </div>
    <?php endif; ?>       
  </div>
</section>