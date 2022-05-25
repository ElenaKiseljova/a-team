<?php
  get_header(  );
?>

<?php if ( is_home(  ) ) : ?>
  <?php 
    $page_for_posts_id = (int) get_option( 'page_for_posts' );

    get_template_part( 'templates/latest' );

    // Check value exists.
    if( have_rows('content', $page_for_posts_id) ):

      // Loop through rows.
      while ( have_rows('content', $page_for_posts_id) ) : the_row();

          // Case: contact layout.
          if( get_row_layout() == 'contact' ):
            get_template_part( 'templates/contact' );
                    
          endif;

      // End loop.
      endwhile;

    // No value.
    else :
      // Do something...
    endif;
  ?>
<?php else : ?>
  <main class="main">
    <h1><?= get_the_title(  ); ?></h1>

    <?php 
      the_content(  );
    ?>
  </main>
<?php endif; ?>

<?php
  get_footer(  );
?>
