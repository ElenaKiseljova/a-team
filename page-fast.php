<?php 
  /**
   * Template Name: Fast enough to save time
   * 
   */
?>

<?php
  get_header(  );
?>

<main class="main">
   <?php 
    get_template_part( 'templates/fast/screen' );

    // Check value exists.
    if( have_rows('content') ):

      // Loop through rows.
      while ( have_rows('content') ) : the_row();

          // Case: let layout.
          if( get_row_layout() == 'let' ):
              get_template_part( 'templates/fast/let' );

          // Case: model layout.
          elseif( get_row_layout() == 'model' ):
            get_template_part( 'templates/fast/model' );

          // Case: testimonials layout.
          elseif( get_row_layout() == 'testimonials' ):
            get_template_part( 'templates/fast/testimonials' );
          
          // Case: awards layout.
          elseif( get_row_layout() == 'awards' ):
            get_template_part( 'templates/awards' );

            // Case: stack layout.
          elseif( get_row_layout() == 'stack' ):
            get_template_part( 'templates/fast/stack' );

          // Case: cases layout.
          elseif( get_row_layout() == 'cases' ):
            get_template_part( 'templates/cases' );

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