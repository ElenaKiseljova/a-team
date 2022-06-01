<?php 
  $link = get_field( 'link' ) ?? [];

  $background_image_style = get_field( 'background_image_style' ) ?? 'about';
?>
<section class="promo <?= $background_image_style === 'expertise' ? 'promo--expertise' : ''; ?> <?= is_page_template( 'page-about.php' ) ? 'promo--about' : ''; ?>">
  <div class="promo__container container">
    <div class="promo__left">
      <div class="promo__content">
        <?php the_content(  ); ?>
      </div>

      <div class="numbers numbers--desktop">
        <?php 
          get_template_part( 'templates/promo', 'numbers' );
        ?>
      </div>

      <?php if ( !empty($link) && $link['text'] && !empty($link['text'])) : ?>
        <a href="<?= $link['url']; ?>" class="promo__button promo__button--desktop button">
          <?= $link['text']; ?>
        </a>
      <?php endif; ?>          
    </div>
    
    <div class="promo__right">     
      <?php 
        if ( is_page_template( 'page-about.php' ) ) {
          get_template_part( 'templates/crossword' );
        } else {
          ?>
            <div class="promo__image">
              <?php 
                if ( has_post_thumbnail(  ) ) {
                  the_post_thumbnail( 'large' );
                }
              ?>
            </div>
          <?php          
        }        
      ?>

      <div class="numbers numbers--mobile">
        <?php 
          get_template_part( 'templates/promo', 'numbers' );
        ?>
      </div> 

      <?php if ( !empty($link) && $link['text'] && !empty($link['text'])) : ?>
        <a href="<?= $link['url']; ?>" class="promo__button promo__button--mobile button">
          <?= $link['text']; ?>
        </a>
      <?php endif; ?>
    </div>    
  </div>
</section>