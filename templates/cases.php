<?php 
  $title = get_sub_field( 'title' ) ?? '';

  $cases = get_sub_field( 'cases' ) ?? [];

  $cooperation = get_sub_field( 'cooperation' ) ?? [];
?>

<section class="cases">
  <div class="cases__container container">
    <h2 class="cases__title title"><?= $title; ?></h2>

    <?php if ( !empty($cases) && is_array($cases) && !is_wp_error( $cases ) ) : ?>
      <?php foreach ($cases as $key_case => $case_id) : ?>
        <?php 
          $case_background_card_image = get_field( 'case_background_card_image', $case_id ) ?? '';
          $case_card_description = get_field( 'case_card_description', $case_id ) ?? '';

          $achievements = get_field( 'achievements', $case_id ) ?? [];
        ?>
        <div class="cases__block" <?= (!empty($case_background_card_image) && (is_front_page(  ) || is_page_template( 'page-fast.php' ))) ? 'style="background-image: url(' . $case_background_card_image . ');"' : ''; ?>>
          <div class="cases__info">
            <h3>
              <?= get_the_title( $case_id ); ?>
            </h3>
            <p>
              <?= $case_card_description; ?>
            </p>
          </div>
          <div class="cases__details">
            <?php if ( !empty($achievements) && !is_wp_error( $achievements ) ) : ?>
              <ul class="cases__list <?= (count($achievements) < 2) ? 'cases__list--padding' : ''; ?>">
                <?php foreach ($achievements as $key => $achievement) : ?>
                  <li class="cases__item">
                    <h4 class="cases__number title"><?= $achievement['title'] ?? ''; ?></h4>
                    <p class="cases__desc text"><?= $achievement['description'] ?? ''; ?></p>
                  </li>

                  <?php 
                    // Выводить максимум 2 преимущества
                    if ( $key >= 1 ) {
                      break;
                    }
                  ?>
                <?php endforeach; ?>              
              </ul>
            <?php endif; ?>
            
            <?php if (get_the_content( null, false, $case_id ) !== '') : ?>
              <a href="<?= get_permalink( $case_id )?>" class="cases__link link"><?= __( 'View more', 'ateam' ); ?></a>
            <?php endif; ?>            
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

    <?php if ( !empty($cooperation) && !is_wp_error( $cooperation ) && $cooperation['text'] && !empty($cooperation['text'])) : ?>
      <div class="cooperation cooperation--discuss cases__cooperation">
        <p class="headline cooperation__headline cooperation__headline">
          <?= $cooperation['text']; ?>
        </p>

        <?php if ( $cooperation['button'] && $cooperation['button']['text'] && !empty($cooperation['button']['text']) && $cooperation['button']['link'] && !empty($cooperation['button']['link']) ) : ?>
          <a class="button button--filled cooperation__button" href="<?= $cooperation['button']['link']; ?>">
            <?= $cooperation['button']['text']; ?>
          </a>
        <?php endif; ?>        
      </div>
    <?php endif; ?>
  </div>
</section>