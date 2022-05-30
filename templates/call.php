<?php 
  $discuss = get_sub_field( 'discuss' ) ?? [];
?>

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
        <p class="button">
          <a href="<?= $link['url'] ?? ''; ?>"><?= $link['text'] ?? ''; ?></a>
        </p>        
      <?php endif; ?> 
    </div>
    <img class="call__img" src="<?= $image['desktop'] ?? ''; ?>" alt="<?= get_bloginfo( 'name' ); ?>">
  </div>
<?php endif; ?>  