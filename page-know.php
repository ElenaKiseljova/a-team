<?php 
  /**
   * Template Name: We know how to scale your team
   * 
   */
?>

<?php
  get_header(  );
?>

<main class="main">
   <?php 
    get_template_part( 'templates/know/screen' );

    // Check value exists.
    if( have_rows('content') ):

      // Loop through rows.
      while ( have_rows('content') ) : the_row();

          // Case: tech layout.
          if( get_row_layout() == 'tech' ):
              get_template_part( 'templates/know/tech' );

          // Case: awards layout.
          elseif( get_row_layout() == 'awards' ):
            get_template_part( 'templates/awards' );

          // Case: founders layout.
          elseif( get_row_layout() == 'founders' ):
            get_template_part( 'templates/know/founders' );

          // Case: works layout.
          elseif( get_row_layout() == 'works' ):
            get_template_part( 'templates/works' );         
          
          // Case: business layout.
          elseif( get_row_layout() == 'business' ):
            get_template_part( 'templates/know/business' );

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