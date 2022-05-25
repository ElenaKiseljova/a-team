<?php
  $page_for_posts_id = (int) get_option( 'page_for_posts' );

  $title = get_field( 'title', $page_for_posts_id  ) ?? '';
?>

<section class="latest">
  <div class="latest__container container">
    <h1 class="latest__title title"><?= $title; ?></h1>
    <div class="latest__wrapper">
      <div class="latest__blog">
        <h2 class="latest__subtitle title"><?= get_the_title( $page_for_posts_id ) ?? __( 'Blog', 'ateam' ); ?></h2>
        
        <?php 
          if ( have_posts() ) :
            ?>
              <ul class="latest__cards">                
                <?php 
                  while ( have_posts() ) : the_post();
                    get_template_part( 'templates/post', 'card' );
                  endwhile;
                ?>
              </ul>

              <div class="latest__pagination">
                <?php 
                  $args = array(
                    'show_all'     => false, // показаны все страницы участвующие в пагинации
                    'end_size'     => 3,     // количество страниц на концах
                    'mid_size'     => 3,     // количество страниц вокруг текущей
                    'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                    'prev_text'    => '<span class="visually-hidden">' . __('Previous') . '</span>',
                    'next_text'    => '<span class="visually-hidden">' . __('Next') . '</span>',
                    'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                    'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                    'screen_reader_text' => __( 'Posts navigation' ),
                    'class'        => 'pagination', // CSS класс, добавлено в 5.5.0.
                  );
                  
                  the_posts_pagination( $args ); 
                ?>
              </div>
            <?php          
          else :
              _e( 'Sorry, no posts were found.', 'ateam' );
          endif;
        ?>         
      </div>
      <?php 
        get_template_part( 'templates/latest', 'cases' );
      ?>
    </div>
  </div>
</section>