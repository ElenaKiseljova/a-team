<?php 
  $title = get_sub_field( 'title' ) ?? '';

  $form = get_sub_field( 'form' ) ?? [];

  $background = get_sub_field( 'background' ) ?? '';
?>

<section class="business" <?= !empty($background) ? 'style="background-image: url(' . $background . ');"' : ''; ?>>
  <div class="container">
    <h2 class="title business__title">
      <?= $title; ?>
    </h2>
    <div class="business__wrapper">
      <button id="btn-no" class="button button--outline business__button">
        No
      </button>
      <a href="#contact" class="button button--filled business__button"
        >Yes</a
      >
    </div>
  </div>
</section>

<div class="popup">
  <div class="popup__window">
    <img class="popup__close" src="<?= get_template_directory_uri(  ); ?>/assets/img/burger-x.svg" alt="close icon" />
    <svg>
      <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#problem"></use>
    </svg>

    <?= $form; ?>
  </div>
</div>