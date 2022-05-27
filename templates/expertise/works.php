<?php 
  $title = get_sub_field( 'title' ) ?? '';

  $list = get_sub_field( 'list' ) ?? [];
?>

<section class="works">
  <div class="works__container container">
    <h2 class="works__title title"><?= $title; ?></h2>
    
    <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
      <?php foreach ($list as $key => $item) : ?>
        <?php 
          $description = $item['description'] ?? '';

          $steps = $item['steps'] ?? [];

          $testimonials = $item['testimonials'] ?? [];
        ?>
        <div class="works__block">
          <div class="works__info">
            <?= $description; ?>
          </div>
          <div class="works__plan">
            <?php if ( $steps && !empty($steps) && is_array($steps) && !is_wp_error( $steps ) ) : ?>
              <ul class="works__list">
                <?php foreach ($steps as $index => $step) : ?>
                  <li class="works__item text">
                    <span class="text--color"><strong>0<?= $index + 1; ?>.</strong></span>
                    <?= $step['name']; ?>
                  </li>
                <?php endforeach; ?>                  
              </ul>
            <?php endif; ?>              
          </div>
        </div>
        
        <?php if ( $testimonials && !empty($testimonials) && is_array($testimonials) && !is_wp_error( $testimonials ) ) : ?>
          <div class="testimonial">
            <h3 class="testimonial__headline headline"><?= $testimonials['title'] ?? ''; ?></h3>

            <div class="testimonial__wrapper">
              <?php 
                $testimonials_list = $testimonials['list'] ?? [];
              ?>
              <?php if ( $testimonials_list && !empty($testimonials_list) && is_array($testimonials_list) && !is_wp_error( $testimonials_list ) ) : ?>
                <?php foreach ($testimonials_list as $key => $testimonial) : ?>
                  <div class="testimonial__block">
                    <p class="testimonial__text text">
                      <?= $testimonial['text'] ?? ''; ?>
                    </p>
                    <p class="testimonial__special text">
                      <?= $testimonial['author'] ?? ''; ?>
                    </p>
                  </div>
                <?php endforeach; ?> 
              <?php endif; ?>              
            </div>
          </div>
        <?php endif; ?>          
      <?php endforeach; ?>
    <?php endif; ?>    
  
    <?php 
      get_template_part( 'templates/call' );
    ?>
  </div>
</section>