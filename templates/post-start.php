<?php 
  $description = get_field( 'description' ) ?? '';
?>
<section class="news">
  <div class="container">
    <h1>
      <?= get_the_title(  ); ?>
    </h1>
    
    <?= $description; ?>

    <div class="news__date">
      <p>
        <?= get_the_date( 'F j, Y' ); ?>
      </p>
    </div>
  </div>
</section>