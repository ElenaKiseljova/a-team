<?php 
  $title = get_sub_field( 'title' ) ?? '';
  $text = get_sub_field( 'text' ) ?? '';
  $author = get_sub_field( 'author' ) ?? '';  
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

    <?php 
      get_template_part( 'templates/call' );
    ?>    
  </div>
</section>