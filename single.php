<?php 
  if ( get_the_content() === '') {
    wp_redirect( get_bloginfo( 'url' ) );

    die();
  }
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

          // Case: cases layout.
          if( get_row_layout() == 'cases' ):
            get_template_part( 'templates/cases' );
          
          // Case: why layout.
          elseif( get_row_layout() == 'why' ):
            get_template_part( 'templates/expertise/why' );

          // Case: hire layout.
          elseif( get_row_layout() == 'hire' ):
            get_template_part( 'templates/expertise/hire' );

          // Case: goal layout.
          elseif( get_row_layout() == 'goal' ):
            get_template_part( 'templates/goal' );

          // Case: happy layout.
          elseif( get_row_layout() == 'happy' ):
            get_template_part( 'templates/expertise/happy' );

          // Case: works layout.
          elseif( get_row_layout() == 'works' ):
            get_template_part( 'templates/works' );

          // Case: values layout.
          elseif( get_row_layout() == 'values' ):
            get_template_part( 'templates/goal' );          

          // Case: diff layout.
          elseif( get_row_layout() == 'diff' ):
            get_template_part( 'templates/diff' );

          // Case: models layout.
          elseif( get_row_layout() == 'models' ):
            get_template_part( 'templates/models' );
                    
          endif;

      // End loop.
      endwhile;

    // No value.
    else :
      // Do something...
    endif;

    // Повторяющиеся секции с Главной

    $page_on_front_id = (int) get_option('page_on_front');

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
</main>

<?php
  get_footer(  );
?>
