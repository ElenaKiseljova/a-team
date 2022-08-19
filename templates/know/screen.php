<section class="screen screen--global">
  <div class="container screen__container">
    <?php the_content(  ); ?>
  </div>

  <?php if ( has_post_thumbnail(  )) : ?>
    <div class="screen__bg">
      <?php the_post_thumbnail( 'full' ); ?>
    </div>      
  <?php endif; ?>    
</section>