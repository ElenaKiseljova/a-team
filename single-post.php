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
    get_template_part('templates/text-page-content');
  ?>
</main>

<?php
  get_footer(  );
?>
