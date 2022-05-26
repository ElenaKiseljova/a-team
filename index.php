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
      $page_on_front_id = (int) get_option('page_on_front');

      get_template_part( 'templates/post', 'start' );  

      get_template_part( 'templates/post', 'content' );  

      // Check value exists.
      if( have_rows('content', $page_on_front_id) ):

        // Loop through rows.
        while ( have_rows('content', $page_on_front_id) ) : the_row();

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
  <?php endif; ?>
</main>

<?php
  get_footer(  );
?>
