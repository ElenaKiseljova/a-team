<?php 
  /* ateam */
  
  add_action('wp_enqueue_scripts', 'ateam_styles', 3);
  add_action('wp_enqueue_scripts', 'ateam_scripts', 5);
  
  // Styles theme
  function ateam_styles () {    
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    wp_enqueue_style('ateam-style', get_stylesheet_uri());
  }

  // Scripts theme
  function ateam_scripts () {    
    wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', $deps = array(), $ver = null, $in_footer = true ); 
    wp_enqueue_script('additional-script', get_template_directory_uri() . '/assets/js/additional.js', $deps = array(), $ver = null, $in_footer = true ); 
  }

  // After setup
  add_action( 'after_setup_theme', 'ateam_after_setup_theme_function' );

  if (!function_exists('ateam_after_setup_theme_function')) :
    function ateam_after_setup_theme_function () {
      load_theme_textdomain('ateam', get_template_directory() . '/languages');

      /* ==============================================
      ********  //Миниатюрки
      =============================================== */
      add_theme_support( 'post-thumbnails' );

      /* ==============================================
      ********  //Title
      =============================================== */
      add_theme_support('title-tag');

      /* ==============================================
      ********  //Меню
      =============================================== */
      register_nav_menu( 'top_menu', 'Navigation on the Header' );

      register_nav_menu( 'bottom_menu', 'Navigation on the Footer' );

      register_nav_menu( 'social', 'Social on the Footer' );

      register_nav_menu( 'blog_news', 'Blog News on the Footer' );

      // register_nav_menu( 'category_menu', 'Навигация по категориям в подвале сайта' );

      /* ==============================================
      ********  //Размеры картирок
      =============================================== */
      // add_image_size( 'ateam_about', 470, 626, false);

      // add_image_size( 'ateam_docs', 516, 718, false);

      // add_image_size( 'ateam_technics_category_banner', 1600, 890, false);
      // add_image_size( 'ateam_technics_category_banner_mobile', 375, 650, false);
      // add_image_size( 'ateam_technics_category_offer', 570, 327, false);
      
      // add_image_size( 'ateam_technics_gallery', 540, 364, false);
    }
  endif;

  // Init
  add_action( 'init', 'ateam_init_function' );
  
  if (!function_exists('ateam_init_function')) :
    function ateam_init_function () {
      /* ==============================================
      ********  //Регистрация кастомных типов постов
      =============================================== */
      function register_custom_post_types () {
        // Expertise 
        register_post_type( 'expertise', [
          'label'  => null,
          'labels' => [
            'name'               => 'Expertise', // основное название для типа записи
            'singular_name'      => 'Single Expertise', // название для одной записи этого типа
            'add_new'            => 'Add Expertise', // для добавления новой записи
            'add_new_item'       => 'Adding Expertise', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Editing Expertise', // для редактирования типа записи
            'new_item'           => 'New Expertise', // текст новой записи
            'view_item'          => 'See Expertise', // для просмотра записи этого типа.
            'search_items'       => 'Search Expertise', // для поиска по этим типам записи
            'not_found'          => 'Not found Expertise', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found Expertise on the trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Expertise', // название меню
          ],
          'description'         => 'This is our Expertise',
          'public'              => true,
          'publicly_queryable'  => true, // зависит от public
          'exclude_from_search' => true, // зависит от public
          'show_ui'             => true, // зависит от public
          'show_in_nav_menus'   => true, // зависит от public
          'show_in_menu'        => true, // показывать ли в меню адмнки
          'show_in_admin_bar'   => true, // зависит от show_in_menu
          'show_in_rest'        => true, // добавить в REST API. C WP 4.7
          'rest_base'           => null, // $post_type. C WP 4.7
          'menu_position'       => 5,
          'menu_icon'           => 'dashicons-admin-post',
          //'capability_type'   => 'post',
          //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
          //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
          'hierarchical'        => false,
          'supports'            => ['title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
          'taxonomies'          => [],
          'has_archive'         => false,
          'rewrite'             => true,
          'query_var'           => true,
        ] );

        // Cases 
        register_post_type( 'Cases', [
          'label'  => null,
          'labels' => [
            'name'               => 'Cases', // основное название для типа записи
            'singular_name'      => 'Single Case', // название для одной записи этого типа
            'add_new'            => 'Add Case', // для добавления новой записи
            'add_new_item'       => 'Adding Case', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Editing Case', // для редактирования типа записи
            'new_item'           => 'New Case', // текст новой записи
            'view_item'          => 'See Case', // для просмотра записи этого типа.
            'search_items'       => 'Search Case', // для поиска по этим типам записи
            'not_found'          => 'Not found Case', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found Case on the trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Cases', // название меню
          ],
          'description'         => 'This is our Cases',
          'public'              => true,
          'publicly_queryable'  => true, // зависит от public
          'exclude_from_search' => true, // зависит от public
          'show_ui'             => true, // зависит от public
          'show_in_nav_menus'   => true, // зависит от public
          'show_in_menu'        => true, // показывать ли в меню адмнки
          'show_in_admin_bar'   => true, // зависит от show_in_menu
          'show_in_rest'        => true, // добавить в REST API. C WP 4.7
          'rest_base'           => null, // $post_type. C WP 4.7
          'menu_position'       => 6,
          'menu_icon'           => 'dashicons-admin-post',
          //'capability_type'   => 'post',
          //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
          //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
          'hierarchical'        => false,
          'supports'            => ['title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
          'taxonomies'          => [],
          'has_archive'         => false,
          'rewrite'             => true,
          'query_var'           => true,
        ] );
      }   
      
      register_custom_post_types();
    }  
  endif;

  // Customizer
add_action( 'customize_register', 'ateam_customizer' ); 
function ateam_customizer ( $wp_customize ) 
{
  /* Create Panel Logo */  
  $wp_customize->add_panel('logo', array(
    'priority' => 50,
    'theme_supports' => '',
    'title' => __('Логотип', 'ateam'),
    'description' => __('Изображения для Логотипа (хедер/футер)', 'ateam'),
  ));
  
  /* Create Sections for Panel Logo */  
  $wp_customize->add_section('logo_header', array(
    'panel' => 'logo',
    'type' => 'theme_mod', 
    'priority' => 5,
    'theme_supports' => '',
    'title' => __('Логотип (хедер)', 'ateam'),
    'description' => '',
  ));
  
  $wp_customize->add_section('logo_footer', array(
    'panel' => 'logo',
    'type' => 'theme_mod', 
    'priority' => 10,
    'theme_supports' => '',
    'title' => __('Логотип (футер)', 'ateam'),
    'description' => '',
  ));
  
  /* Create Settings for Panel Logo */  
  $wp_customize->add_setting('logo_header', array(
    'default'    =>  '',
    'transport'  =>  'refresh',
  ));
  
  $wp_customize->add_setting('logo_footer', array(
    'default'    =>  '',
    'transport'  =>  'refresh',
  ));
  
  /* Create Controls for Panel Logo */  
  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo_image_header', array(
      'label'    => __('Изображение логотипа', 'ateam'),
      'section'  => 'logo_header',
      'settings' => 'logo_header',
  )));
  
  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo_image_footer', array(
      'label'    => __('Изображение логотипа', 'ateam'),
      'section'  => 'logo_footer',
      'settings' => 'logo_footer',
  )));  
}

/* ==============================================
  ********  //Создаем страницу настроек A-team темы
  =============================================== */
  add_action('admin_menu', 'ateam_add_theme_page');
  function ateam_add_theme_page(){
    add_options_page( 'Settings for A-team theme', 'A-team', 'manage_options', 'ateam_slug', 'ateam_options_page_output' );
  }

  function ateam_options_page_output(){
    ?>
    <div class="wrap">
      <h2><?php echo get_admin_page_title() ?></h2>

      <form action="options.php" method="POST">
        <?php
          settings_fields( 'ateam_settings' );     // скрытые защитные поля
          do_settings_sections( 'ateam_page' ); // секции с настройками (опциями). У нас она всего одна 'term_of_use'
          submit_button();
        ?>
      </form>
    </div>
    <?php
  }

  /**
   * Регистрируем настройки.
   * Настройки будут храниться в массиве, а не одна настройка = одна опция.
   */
  add_action('admin_init', 'ateam_settings');
  function ateam_settings(){
    // параметры: $option_group, $option_name, $sanitize_callback
    register_setting( 'ateam_settings', 'ateam_settings_names', 'sanitize_callback' );

    // параметры: $id, $title, $callback, $page
    add_settings_section( 'ateam_settings_section', 'General settings', '', 'ateam_page' );

    // параметры: $id, $title, $callback, $page, $section, $args
    add_settings_field('ateam_term', 'Terms of use page', 'fill_ateam_term', 'ateam_page', 'ateam_settings_section' );
    add_settings_field('ateam_testimonials', 'Testimonials page', 'fill_ateam_testimonials', 'ateam_page', 'ateam_settings_section' );
  }

  ## Заполняем опцию 1
  function fill_ateam_term(){
    $val = get_option('ateam_settings_names');
    $val = $val ? $val['term'] : null;
  
    wp_dropdown_pages(
      array(
        'name'              => 'ateam_settings_names[term]',
        'show_option_none'  => __( '&mdash; Select &mdash;' ),
        'option_none_value' => '0',
        'selected'          => $val,
        'post_status'       => array( 'draft', 'publish' ),
      )
    );    
  }

  ## Заполняем опцию 2
  function fill_ateam_testimonials(){
    $val = get_option('ateam_settings_names');
    $val = $val ? $val['testimonials'] : null;
  
    wp_dropdown_pages(
      array(
        'name'              => 'ateam_settings_names[testimonials]',
        'show_option_none'  => __( '&mdash; Select &mdash;' ),
        'option_none_value' => '0',
        'selected'          => $val,
        'post_status'       => array( 'draft', 'publish' ),
      )
    );    
  }

  ## Очистка данных
  function sanitize_callback( $options ){
    // очищаем
    foreach( $options as $name => & $val ){
      if( $name == 'term' || $name == 'testimonials' )
        $val = intval( $val );
    }

    //die(print_r( $options )); // Array ( [input] => aaaa [checkbox] => 1 )

    return $options;
  }

   /* ==============================================
  ********  //Класс для пунктов меню
  =============================================== */
  add_filter( 'nav_menu_css_class', 'ateam_change_menu_item_css_classes', 10, 4 );
  function ateam_change_menu_item_css_classes( $classes, $item, $args, $depth ) {
  	if( $args->theme_location === 'top_menu' ){
      if ($depth === 0) {
        $classes[] = 'nav__item';
      }      
  	}

    if ($args->theme_location === 'bottom_menu' ) {
      $classes[] = 'footer__item';
    }

  	return $classes;
  }

  /* ==============================================
  ********  //Класс форм
  =============================================== */
  add_filter( 'wpcf7_form_class_attr', 'ateam_filter_cf7_class' );

  function ateam_filter_cf7_class( $class )
  {
    $class .= ' form';

    return $class;
  }

  /* ==============================================
  ********  //Вывод шорткодов в CF7
  =============================================== */
  add_filter( 'wpcf7_form_elements', 'ateam_wpcf7_form_elements' );
  
  function ateam_wpcf7_form_elements( $content ) {
      return do_shortcode( $content );
  }


  /* ==============================================
  ********  //Шорткод для Политики
  =============================================== */
  add_shortcode( 'ateam_privacy', 'ateam_privacy_function' );

  function ateam_privacy_function( $atts )
  {
    $policy_page_id = (int) get_option( 'wp_page_for_privacy_policy' );

    $atts = shortcode_atts(
      [         
        'title' => $policy_page_id ? get_the_title( $policy_page_id ) : 'Privacy Policy',
      ], $atts, 'ateam_privacy' );
    
    $output = '<a href="' . get_permalink( $policy_page_id ) . '" class="form__link">' . $atts['title'] . '</a>';

    return $output;
  }

  /* ==============================================
  ********  //Шорткод для Условий
  =============================================== */
  add_shortcode( 'ateam_term', 'ateam_term_function' );

  function ateam_term_function( $atts )
  {
    $term_page_id = null;

    $ateam_settings_names = get_option( 'ateam_settings_names' ) ?? [];

    if ( !empty($ateam_settings_names) && $ateam_settings_names['term'] ) {
      $term_page_id = (int) $ateam_settings_names['term'];
    }

    $atts = shortcode_atts(
      [         
        'title' => $term_page_id ? get_the_title( $term_page_id ) : 'Terms of use',
      ], $atts, 'ateam_term' );
    
    $output = '<a href="' . get_permalink( $term_page_id ) . '" class="form__link">' . $atts['title'] . '</a>';

    return $output;
  }

  /* ==============================================
  ********  //Шорткод для вывода Кроссворда
  =============================================== */
  add_shortcode( 'ateam_crossword', 'ateam_crossword_function' );

  function ateam_crossword_function()
  {
    $atts = shortcode_atts(
      [         
        
      ], $atts, 'ateam_term' );

    ob_start();

    get_template_part( 'templates/crossword' );

    $output = ob_get_contents();

    ob_end_clean();

    return $output;
  }

  /* ==============================================
  ********  //Шорткод для вывода Тумбнайла
  =============================================== */
  add_shortcode( 'ateam_thumbnail', 'ateam_thumbnail_function' );

  function ateam_thumbnail_function()
  {
    $atts = shortcode_atts(
      [         
        
      ], $atts, 'ateam_term' );
    
    $output = '';
    
    if ( has_post_thumbnail(  ) ) {
      $output = get_the_post_thumbnail(  );
    }

    $output = '<div class="promo__image">' . $output . '</div>';

    return $output;
  }
?>