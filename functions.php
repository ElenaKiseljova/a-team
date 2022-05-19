<?php 
  /* ateam */
  
  add_action('wp_enqueue_scripts', 'ateam_styles', 3);
  add_action('wp_enqueue_scripts', 'ateam_scripts', 5);
  
  // Styles theme
  function ateam_styles () {    
    // wp_enqueue_style('googleapis-fonts-style', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
    // wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/libs/swiper-bundle.min.css');
    wp_enqueue_style('ateam-style', get_stylesheet_uri());
  }

  // Scripts theme
  function ateam_scripts () {    
    // if (!is_404(  )) {
    //   wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/libs/swiper-bundle.min.js', $deps = array(), $ver = null, $in_footer = true );
    //   wp_enqueue_script('remove-active-class-elements-script', get_template_directory_uri() . '/assets/js/remove-active-class-elements.min.js', $deps = array(), $ver = null, $in_footer = true );
    //   wp_enqueue_script('popup-script', get_template_directory_uri() . '/assets/js/popup.min.js', $deps = array(), $ver = null, $in_footer = true );
    //   wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.min.js', $deps = array(), $ver = null, $in_footer = true );
    //   wp_enqueue_script('form-script', get_template_directory_uri() . '/assets/js/form.min.js', $deps = array(), $ver = null, $in_footer = true );
    // }
    
    // // AJAX
    // $args = array(
    //   'url' => admin_url('admin-ajax.php'),
    //   'nonce' => wp_create_nonce('ateam_nonce'),
    // );

    // wp_localize_script( 'form-script', 'ateam_ajax', $args);   
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
      }   
      
      register_custom_post_types();

      /* ==============================================
      ********  //Регистрация кастомных таксономий 
      =============================================== */
      // function register_custom_taxonomy () {
      //   // Категории техники
      //   register_taxonomy( 'technics_category', [ 'technics' ], [ 
      //     'label'                 => '', // определяется параметром $labels->name
      //     'labels'                => [
      //       'name'              => 'Категории техники',
      //       'singular_name'     => 'Категория техники',
      //       'search_items'      => 'Найти категорию',
      //       'all_items'         => 'Все категории',
      //       'view_item '        => 'Посмотреть категорию',
      //       'parent_item'       => 'Родительская категория',
      //       'parent_item_colon' => 'Родительская категория:',
      //       'edit_item'         => 'Редактировать категорию',
      //       'update_item'       => 'Обновить категорию',
      //       'add_new_item'      => 'Добавить новую категорию',
      //       'new_item_name'     => 'Имя новой категории',
      //       'menu_name'         => 'Категории техники',
      //     ],
      //     'description'           => 'Категории техники', // описание таксономии
      //     'public'                => true,
      //     'publicly_queryable'    => true, // равен аргументу public
      //     // 'show_in_nav_menus'     => true, // равен аргументу public
      //     'show_ui'               => true, // равен аргументу public
      //      'show_in_menu'          => true, // равен аргументу show_ui
      //     // 'show_tagcloud'         => true, // равен аргументу show_ui
      //     // 'show_in_quick_edit'    => null, // равен аргументу show_ui
      //     'hierarchical'          => true,
      
      //     'rewrite'               => true,
      //     //'query_var'             => $taxonomy, // название параметра запроса
      //     // 'capabilities'          => array(),
      //     // 'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
      //     // 'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
      //     'show_in_rest'          => true, // добавить в REST API
      //     // 'rest_base'             => null, // $taxonomy
      //     // '_builtin'              => false,
      //     //'update_count_callback' => '_update_post_term_count',
      //   ] );
      // }   
    
      // register_custom_taxonomy();
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

  /**
   * Создаем страницу настроек A-team темы
   */
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
    add_settings_field('ateam_term', 'Select terms of use page', 'fill_ateam_term', 'ateam_page', 'ateam_settings_section' );
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

  ## Очистка данных
  function sanitize_callback( $options ){
    // очищаем
    foreach( $options as $name => & $val ){
      if( $name == 'term' )
        $val = intval( $val );
    }

    //die(print_r( $options )); // Array ( [input] => aaaa [checkbox] => 1 )

    return $options;
  }
?>