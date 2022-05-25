<?php 
  $numbers = get_field( 'numbers' ) ?? [];
?>
<?php if ( !empty($numbers) && is_array($numbers) && !is_wp_error( $numbers )) : ?>
  <ul class="numbers__list">
    <?php foreach ($numbers as $key => $number) : ?>
      <li class="numbers__item">
        <h4 class="numbers__amount"><?= $number['title'] ?? ''; ?></h4>
        <p class="text"><?= $number['text'] ?? ''; ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
