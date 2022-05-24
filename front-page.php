<?php
  get_header(  );
?>

<main class="main">
    <?php 
      get_template_part( 'templates/front/start' );

      // Check value exists.
      if( have_rows('content') ):

        // Loop through rows.
        while ( have_rows('content') ) : the_row();

            // Case: advantages layout.
            if( get_row_layout() == 'advantages' ):
                get_template_part( 'templates/front/advantages' );

            // Case: info layout.
            elseif( get_row_layout() == 'info' ):
              get_template_part( 'templates/front/info' );
            
            // Case: awards layout.
            elseif( get_row_layout() == 'awards' ):
              get_template_part( 'templates/front/awards' );

            // Case: cases layout.
            elseif( get_row_layout() == 'cases' ):
              get_template_part( 'templates/front/cases' );

            // Case: testimonial layout.
            elseif( get_row_layout() == 'testimonial' ):
              get_template_part( 'templates/front/testimonial' );

            // Case: models layout.
            elseif( get_row_layout() == 'models' ):
              get_template_part( 'templates/models' );

            // Case: contact layout.
            elseif( get_row_layout() == 'contact' ):
              get_template_part( 'templates/contact' );
                      
            endif;

        // End loop.
        endwhile;

      // No value.
      else :
        // Do something...
      endif;
    ?>
  </main>

<?php
  get_footer(  );
?>
