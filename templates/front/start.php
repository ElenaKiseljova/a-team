<section class="start">
  <div class="start__container container">
    <div class="start__block">
      <?php the_content(  ); ?>
    </div>

    <?php if ( has_post_thumbnail(  ) ) : ?>
      <img class="start__img" src="<?= get_the_post_thumbnail_url(  ); ?>" alt="<?= get_bloginfo( 'name' ); ?>">
    <?php endif; ?>          
  </div>
</section>