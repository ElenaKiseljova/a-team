<?php 
  $title = get_sub_field( 'title' ) ?? '';
  $form = get_sub_field( 'form' ) ?? '';
?>
<section class="contact" id="contact">
  <div class="contact__container container">
    <h3 class="contact__headline headline"><?= $title; ?></h3>

    <?= $form; ?>
  </div>
</section>