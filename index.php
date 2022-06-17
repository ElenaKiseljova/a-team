<?php
  get_header(  );
?>

<main class="main">
  <?php if ( is_home(  ) && !is_front_page(  ) ) : ?>
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
    <?php 
      get_template_part('templates/text-page-content');
    ?>
  <?php endif; ?>
</main>

<?php
  get_footer(  );
?>
