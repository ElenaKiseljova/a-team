<?php 
  $title = get_sub_field( 'title' ) ?? '';

  $cases = get_sub_field( 'cases' ) ?? [];
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
        <div class="cases__block" <?= (!empty($case_background_card_image) && is_front_page(  )) ? 'style="background-image: url(' . $case_background_card_image . ');"' : ''; ?>>
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
  </div>
</section>