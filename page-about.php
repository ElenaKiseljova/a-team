<?php 
  /**
   * Template Name: About
   * 
   */
?>

<?php
  get_header(  );
?>

<main class="main">
  <?php 
    get_template_part( 'templates/promo' );

    // Check value exists.
    if( have_rows('content') ):

      // Loop through rows.
      while ( have_rows('content') ) : the_row();

          // Case: goal layout.
          if( get_row_layout() == 'goal' ):
              get_template_part( 'templates/goal' );

          // Case: discuss layout.
          elseif( get_row_layout() == 'discuss' ):
            get_template_part( 'templates/about/discuss' );
          
          // Case: mission layout.
          elseif( get_row_layout() == 'mission' ):
            get_template_part( 'templates/about/mission' );

          // Case: office layout.
          elseif( get_row_layout() == 'office' ):
            get_template_part( 'templates/about/office' );

          // Case: comment layout.
          elseif( get_row_layout() == 'comment' ):
            get_template_part( 'templates/about/comment' );

          // Case: team layout.
          elseif( get_row_layout() == 'team' ):
            get_template_part( 'templates/about/team' );

          // Case: diff layout.
          elseif( get_row_layout() == 'diff' ):
            get_template_part( 'templates/diff' );

          // Case: awards layout.
          elseif( get_row_layout() == 'awards' ):
            get_template_part( 'templates/about/awards' );

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
