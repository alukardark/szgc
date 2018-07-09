<?php
/**
 * szgc-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package szgc-theme
 */

if ( ! function_exists( 'szgc_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function szgc_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on szgc-theme, use a find and replace
		 * to change 'szgc-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'szgc-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'szgc-theme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'szgc_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'szgc_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function szgc_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'szgc_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'szgc_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function szgc_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'szgc-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'szgc-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'szgc_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function szgc_theme_scripts() {





    wp_enqueue_style( 'slick.css', get_template_directory_uri().'/lib/slick/slick.css');
    wp_enqueue_style( 'slick-theme.css', get_template_directory_uri().'/lib/slick/slick-theme.css');
    wp_enqueue_style( 'aos-aos.css', get_template_directory_uri().'/lib/aos/aos.css');
    wp_enqueue_style( 'jquery.fancybox.min.css', get_template_directory_uri().'/lib/fancybox/jquery.fancybox.min.css');
    wp_enqueue_style( 'bootstrap.css', get_template_directory_uri().'/lib/bootstrap/css/bootstrap.css');
    wp_enqueue_style( 'animate.min.css', get_template_directory_uri().'/lib/animate.min.css');
    wp_enqueue_style( 'multiple-select.css', get_template_directory_uri().'/lib/multiple-select/multiple-select.css');
    wp_enqueue_style( 'font-awesome.min.css', get_template_directory_uri().'/lib/font-awesome-4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'szgc-theme-style', get_stylesheet_uri() );








    wp_enqueue_script( 'jquery.min.js', get_template_directory_uri() . '/lib/jquery.min.js', '', '', false);
    wp_enqueue_script( 'jquery.waypoints.min.js', get_template_directory_uri() . '/lib/waypoints/lib/jquery.waypoints.min.js', '', '', false);
    wp_enqueue_script( 'slick.min.js', get_template_directory_uri() . '/lib/slick/slick.min.js', '', '', false);
    wp_enqueue_script( 'js.cookie.js', get_template_directory_uri() . '/lib/js.cookie.js', '', '', false);
    wp_enqueue_script( 'aos.js', get_template_directory_uri() . '/lib/aos/aos.js', '', '', false);
    wp_enqueue_script( 'jquery.fancybox.min.js', get_template_directory_uri() . '/lib/fancybox/jquery.fancybox.min.js', '', '', false);
    wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', '', '', false);
    wp_enqueue_script( 'scrollify.min.js', get_template_directory_uri() . '/lib/scrollify.min.js', '', '', false);
    wp_enqueue_script( 'uikit.min.js', get_template_directory_uri() . '/lib/uikit.min.js', '', '', false);
    wp_enqueue_script( 'multiple-select.js', get_template_directory_uri() . '/lib/multiple-select/multiple-select.js', '', '', false);
    wp_enqueue_script( 'jquery.animateNumber.min.js', get_template_directory_uri() . '/lib/animateNumber/jquery.animateNumber.min.js', '', '', false);
    wp_enqueue_script( 'jquery.maskedinput.min.js', get_template_directory_uri() . '/lib/jquery.maskedinput.min.js', '', '', false);
    wp_enqueue_script( 'common-scrollify.js', get_template_directory_uri() . '/js/common-scrollify.js', '', '', false);
    wp_enqueue_script( 'common.js', get_template_directory_uri() . '/js/common.js', '', '', false);


	wp_enqueue_script( 'szgc-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'szgc-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'szgc_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



function IE(){
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    if (stripos($user_agent, 'MSIE 6.0') !== false) {
        header("Location: /ie67/ie6.html");
        exit;
    }
    if (stripos($user_agent, 'MSIE 7.0') !== false) {
        header("Location: /ie67/ie7.html");
        exit;
    }
    if (stripos($user_agent, 'MSIE 8.0') !== false) {
        header("Location: /ie67/ie8.html");
        exit;
    }
    if (stripos($user_agent, 'MSIE 9.0') !== false) {
        header("Location: /ie67/ie9.html");
        exit;
    }
}
IE();



if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'certificates', 260, 360, true );
    add_image_size( 'mygallery', 280, 262, true );
}

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function startsWith($haystack, $needle)
{
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
}
function endsWith($haystack, $needle)
{
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
}

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});
function remove_image_size_attributes( $html ) {
    return preg_replace( '/(width|height)="\d*"/', '', $html );
}

// Remove image size attributes from post thumbnails
add_filter( 'post_thumbnail_html', 'remove_image_size_attributes' );

// Remove image size attributes from images added to a WordPress post
add_filter( 'image_send_to_editor', 'remove_image_size_attributes' );

function reset_editor()
{
    global $_wp_post_type_features;

    if ( $_GET['post'] == 123) {
        $post_type = "page";
        $feature = "editor";
        if (!isset($_wp_post_type_features[$post_type])) {

        } elseif (isset($_wp_post_type_features[$post_type][$feature]))
            unset($_wp_post_type_features[$post_type][$feature]);
    }
}

add_action("init","reset_editor");





/**
 * Converts array to object recursively.
 *
 * @param array $array Array to be converted.
 *
 * @return object
 */
function array_to_object($array)
{
    $obj = new \stdClass;

    foreach ($array as $k => $v) {
        if (strlen($k)) {
            if (is_array($v)) {
                $obj->{$k} = array_to_object($v); // Recursion.
            } else {
                $obj->{$k} = $v;
            }
        }
    }

    return $obj;
}

/**
 * Retrieve paginated link for archive post pages.
 *
 * @param string|array $args Optional. Array or string of arguments for generating paginated links for archives.
 *
 * @return array
 */
function mypaginate_links($args = '')
{
    $defaults = array(
        'base' => '%_%', // Example http://example.com/all_posts.php%_% : %_% is replaced by format (below).
        'format' => '?page=%#%', // Example ?page=%#% : %#% is replaced by the page number.
        'total' => 1,
        'current' => 0,
        'show_all' => false,
        'prev_next' => true,
        'prev_text' => __('&laquo; Previous'),
        'next_text' => __('Next &raquo;'),
        'end_size' => 1,
        'mid_size' => 2,
        'type' => 'array',
        'add_args' => false, // Array of query args to add.
        'add_fragment' => '',
    );
    $args = wp_parse_args($args, $defaults);

    // Who knows what else people pass in $args.
    $args['total'] = intval((int) $args['total']);
    if ($args['total'] < 2) {
        return array();
    }
    $args['current'] = (int) $args['current'];
    $args['end_size'] = 0 < (int) $args['end_size'] ? (int) $args['end_size'] : 1; // Out of bounds?  Make it the default.
    $args['mid_size'] = 0 <= (int) $args['mid_size'] ? (int) $args['mid_size'] : 2;
    $args['add_args'] = is_array($args['add_args']) ? $args['add_args'] : false;
    $page_links = array();
    $dots = false;
    if ($args['prev_next'] && $args['current'] && 1 < $args['current']) {
        $link = str_replace('%_%', 2 === absint($args['current']) ? '' : $args['format'], $args['base']);
        $link = str_replace('%#%', $args['current'] - 1, $link);
        if ($args['add_args']) {
            $link = add_query_arg($args['add_args'], $link);
        }
        $link .= $args['add_fragment'];
        $link = untrailingslashit($link);
        $page_links[] = array(
            'class' => 'prev page-numbers',
            'link' => esc_url(apply_filters('mypaginate_links', $link)),
            'title' => $args['prev_text'],
        );
    }
    for ($n = 1; $n <= $args['total']; $n++) {
        $n_display = number_format_i18n($n);
        if (absint($args['current']) === $n) {
            $page_links[] = array(
                'class' => 'page-number page-numbers current',
                'title' => $n_display,
                'text' => $n_display,
                'name' => $n_display,
                'current' => true,
            );
            $dots = true;
        } else {
            if ($args['show_all'] || ( $n <= $args['end_size'] || ( $args['current'] && $n >= $args['current'] - $args['mid_size'] && $n <= $args['current'] + $args['mid_size'] ) || $n > $args['total'] - $args['end_size'] )) {
                $link = str_replace('%_%', 1 === absint($n) ? '' : $args['format'], $args['base']);
                $link = str_replace('%#%', $n, $link);
                $link = trailingslashit($link) . ltrim($args['add_fragment'], '/');
                if ($args['add_args']) {
                    $link = rtrim(add_query_arg($args['add_args'], $link), '/');
                }
                $link = str_replace(' ', '+', $link);
                $link = untrailingslashit($link);
                $page_links[] = array(
                    'class' => 'page-number page-numbers',
                    'link' => esc_url(apply_filters('mypaginate_links', $link)),
                    'title' => $n_display,
                    'name' => $n_display,
                    'current' => absint($args['current']) === $n,
                );
                $dots = true;
            } elseif ($dots && ! $args['show_all']) {
                $page_links[] = array(
                    'class' => 'dots',
                    'title' => __('&hellip;'),
                );
                $dots = false;
            }
        }
    }
    if ($args['prev_next'] && $args['current'] && ( $args['current'] < $args['total'] || -1 === intval($args['total']) )) {
        $link = str_replace('%_%', $args['format'], $args['base']);
        $link = str_replace('%#%', $args['current'] + 1, $link);
        if ($args['add_args']) {
            $link = add_query_arg($args['add_args'], $link);
        }
        $link = untrailingslashit(trailingslashit($link) . $args['add_fragment']);
        $page_links[] = array(
            'class' => 'next page-numbers',
            'link' => esc_url(apply_filters('mypaginate_links', $link)),
            'title' => $args['next_text'],
        );
    }
    return $page_links;
}

/**
 * @todo: Write description here.
 *
 * @param array $prefs Args for mypaginate_links.
 *
 * @return array mixed
 */
function get_pagination($prefs = array())
{

    global $wp_query;
    global $paged;
    global $wp_rewrite;

    $args = array();
    $args['total'] = ceil($wp_query->found_posts / $wp_query->query_vars['posts_per_page']);

    if ($wp_rewrite->using_permalinks()) {
        $url = explode('?', get_pagenum_link(0));

        if (isset($url[1])) {
            parse_str($url[1], $query);
            $args['add_args'] = $query;
        }

        $args['format'] = 'page/%#%';
        $args['base'] = trailingslashit($url[0]).'%_%';
    } else {
        $big = 999999999;
        $args['base'] = str_replace($big, '%#%', esc_url(get_pagenum_link($big)));
    }

    $args['type'] = 'array';
    $args['current'] = max(1, get_query_var('paged'));
    $args['mid_size'] = max(9 - $args['current'], 3);
    $args['prev_next'] = false;

    if (is_int($prefs)) {
        $args['mid_size'] = $prefs - 2;
    } else {
        $args = array_merge($args, $prefs);
    }

    $data = array();
    $data['pages'] = mypaginate_links($args);
    $next = get_next_posts_page_link($args['total']);

    if ($next) {
        $data['next'] = array( 'link' => untrailingslashit($next), 'class' => 'page-numbers next' );
    }

    $prev = previous_posts(false);

    if ($prev) {
        $data['prev'] = array( 'link' => untrailingslashit($prev), 'class' => 'page-numbers prev' );
    }

    if ($paged < 2) {
        $data['prev'] = null;
    }

    return array_to_object($data);
}


function iti_custom_posts_per_page($query)
{
    if(startsWith($_SERVER['REQUEST_URI'], '/company/developments/')){
        switch ($query->query_vars['post_type']) {
            case 'developments':
                $query->query_vars['posts_per_page'] = 6;
                break;
            default:
                break;
        }
        return $query;
    }

    if(startsWith($_SERVER['REQUEST_URI'], '/company/certificates/')){
        switch ($query->query_vars['post_type']) {
            case 'certificates':
                $query->query_vars['posts_per_page'] = 6;
                break;
            default:
                break;
        }
        return $query;
    }

    if(startsWith($_SERVER['REQUEST_URI'], '/company/reviews/')){
        switch ($query->query_vars['post_type']) {
            case 'reviews':
                $query->query_vars['posts_per_page'] = 6;
                break;
            default:
                break;
        }
        return $query;
    }

}
if( !is_admin() )
{
    add_filter( 'pre_get_posts', 'iti_custom_posts_per_page' );
}



function register_post_type_settings() {
    $labels = array(
        'name' => 'Контактные данные и прочее',
        'singular_name' => 'Контактные данные и прочее', // админ панель Добавить->Функцию
        'add_new' => 'Добавить настройки',
        'add_new_item' => 'Добавить новые настройки',
        'edit_item' => 'Редактировать настройки',
        'new_item' => 'Новые настройки',
        'all_items' => 'Все настройки',
        'view_item' => 'Просмотр настроек',
        'search_items' => 'Искать настройки',
        'not_found' =>  'Настроек не найдено.',
        'not_found_in_trash' => 'В корзине нет Настроек.',
        'menu_name' => 'Контактные данные и прочее' // ссылка в меню в админке
    );
    $args = array(
        'exclude_from_search' => true,
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        //'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
        'menu_icon' => 'dashicons-wordpress-alt', // иконка в меню
        'menu_position' => 29 // порядок в меню
    ,'supports' => array( '' )
    );
    register_post_type('settings', $args);
}

add_action( 'init', 'register_post_type_settings' ); // Использовать функцию только внутри хука init

function register_post_type_maincompany() {
    $labels = array(
        'name' => '"О компании"',
        'singular_name' => '"О компании"', // админ панель Добавить->Функцию
        'add_new' => 'Добавить "О компании"',
        'add_new_item' => 'Добавить "О компании"',
        'edit_item' => 'Редактировать "О компании"',
        'new_item' => '"О компании"',
        'all_items' => 'Просмотреть',
        'view_item' => 'Просмотреть "О компании"',
        'search_items' => 'Искать "О компании"',
        'not_found' =>  '"О компании" не найдено.',
        'not_found_in_trash' => 'В корзине нет "О компании".',
        'menu_name' => '"О компании"' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        //'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
        'menu_icon' => 'dashicons-building', // иконка в меню
        'menu_position' => 30 // порядок в меню
    ,'supports' => array('')
    );
    register_post_type('maincompany', $args);
}
add_action( 'init', 'register_post_type_maincompany' );


function register_post_type_developments() {
    $labels = array(
        'name' => 'События',
        'singular_name' => 'События', // админ панель Добавить->Функцию
        'add_new' => 'Добавить событие',
        'add_new_item' => 'Добавить новое событие',
        'edit_item' => 'Редактировать событие',
        'new_item' => 'Новое событие',
        'all_items' => 'Все события',
        'view_item' => 'Просмотреть событие',
        'search_items' => 'Искать событие',
        'not_found' =>  'Событий не найдено.',
        'not_found_in_trash' => 'В корзине нет событий.',
        'menu_name' => 'События' // ссылка в меню в админке
    );
    $args = array(
        'rewrite' => array( 'slug'=>'company/developments', 'with_front' => false ),
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        //'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
        'menu_icon' => 'dashicons-calendar-alt', // иконка в меню
        'menu_position' => 30 // порядок в меню
    ,'supports' => array('title')
    );
    register_post_type('developments', $args);
}
add_action( 'init', 'register_post_type_developments' );

function register_post_type_services() {
    $labels = array(
        'name' => 'Услуги',
        'singular_name' => 'Услуги', // админ панель Добавить->Функцию
        'add_new' => 'Добавить услугу',
        'add_new_item' => 'Добавить новую услугу',
        'edit_item' => 'Редактировать услугу',
        'new_item' => 'Новая услуга',
        'all_items' => 'Все услуги',
        'view_item' => 'Просмотреть услугу',
        'search_items' => 'Искать услуги',
        'not_found' =>  'Услуги не найдено.',
        'not_found_in_trash' => 'В корзине нет услуг.',
        'menu_name' => 'Услуги' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        //'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
        'menu_icon' => 'dashicons-yes', // иконка в меню
        'menu_position' => 30 // порядок в меню
    ,'supports' => array('title')
    );
    register_post_type('services', $args);
}

add_action( 'init', 'register_post_type_services' ); // Использовать функцию только внутри хука init

function register_post_type_stages() {
    $labels = array(
        'name' => 'Этапы цинкования',
        'singular_name' => 'Этапы цинкования', // админ панель Добавить->Функцию
        'add_new' => 'Добавить этап',
        'add_new_item' => 'Добавить новый этап',
        'edit_item' => 'Редактировать этап',
        'new_item' => 'Новый этап',
        'all_items' => 'Все этапы',
        'view_item' => 'Просмотреть этап',
        'search_items' => 'Искать этап',
        'not_found' =>  'Этапов не найдено.',
        'not_found_in_trash' => 'В корзине нет этапов.',
        'menu_name' => 'Этапы цинкования' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        //'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
        'menu_icon' => 'dashicons-editor-ol', // иконка в меню
        'menu_position' => 30 // порядок в меню
    ,'supports' => array('title')
    );
    register_post_type('stages', $args);
}
add_action( 'init', 'register_post_type_stages' );

function register_post_type_advantage() {
    $labels = array(
        'name' => 'Преимущества цинкования',
        'singular_name' => 'Преимущества цинкования', // админ панель Добавить->Функцию
        'add_new' => 'Добавить преимущество',
        'add_new_item' => 'Добавить новое преимущество',
        'edit_item' => 'Редактировать преимущество',
        'new_item' => 'Новое преимущество',
        'all_items' => 'Все преимущества',
        'view_item' => 'Просмотреть преимущество',
        'search_items' => 'Искать преимущество',
        'not_found' =>  'Преимуществ не найдено.',
        'not_found_in_trash' => 'В корзине нет преимуществ.',
        'menu_name' => 'Преимущества цинкования' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        //'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
        'menu_icon' => 'dashicons-thumbs-up', // иконка в меню
        'menu_position' => 30 // порядок в меню
    ,'supports' => array('title')
    );
    register_post_type('advantage', $args);
}
add_action( 'init', 'register_post_type_advantage' );

function register_post_type_partners() {
    $labels = array(
        'name' => 'Партнеры',
        'singular_name' => 'Партнеры', // админ панель Добавить->Функцию
        'add_new' => 'Добавить партнера',
        'add_new_item' => 'Добавить нового партнера',
        'edit_item' => 'Редактировать партнера',
        'new_item' => 'Новый партнер',
        'all_items' => 'Все партнераы',
        'view_item' => 'Просмотреть партнера',
        'search_items' => 'Искать партнеров',
        'not_found' =>  'Партнеров не найдено.',
        'not_found_in_trash' => 'В корзине нет партнера.',
        'menu_name' => 'Партнеры' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        //'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
        'menu_icon' => 'dashicons-nametag', // иконка в меню
        'menu_position' => 30 // порядок в меню
    ,'supports' => array('title')
    );
    register_post_type('partners', $args);
}

add_action( 'init', 'register_post_type_partners' ); // Использовать функцию только внутри хука init

function register_post_type_people() {
    $labels = array(
        'name' => 'Люди',
        'singular_name' => 'Люди', // админ панель Добавить->Функцию
        'add_new' => 'Добавить человека',
        'add_new_item' => 'Добавить нового человека',
        'edit_item' => 'Редактировать человека',
        'new_item' => 'Новый человек',
        'all_items' => 'Все люди',
        'view_item' => 'Просмотреть человека',
        'search_items' => 'Искать человека',
        'not_found' =>  'Людей не найдено.',
        'not_found_in_trash' => 'В корзине ничего нет.',
        'menu_name' => 'Люди' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        //'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
        'menu_icon' => 'dashicons-groups', // иконка в меню
        'menu_position' => 30 // порядок в меню
    ,'supports' => array('title')
    );
    register_post_type('people', $args);
}

add_action( 'init', 'register_post_type_people' ); // Использовать функцию только внутри хука init


// function register_post_type_certificates() {
//     $labels = array(
//         'name' => 'Сертификаты',
//         'singular_name' => 'Сертификаты', // админ панель Добавить->Функцию
//         'add_new' => "Новый сертификат",
//         'add_new_item' => 'Добавить новый сертификат',
//         'edit_item' => 'Редактировать сертификат',
//         'new_item' => 'Новый сертификат',
//         'all_items' => 'Все сертификаты',
//         'view_item' => 'Просмотреть сертификат',
//         'search_items' => 'Искать сертификаты',
//         'not_found' =>  'Сертификатов не найдено.',
//         'not_found_in_trash' => 'В корзине нет сертификатов.',
//         'menu_name' => 'Сертификаты' // ссылка в меню в админке
//     );
//     $args = array(
//         'rewrite' => array( 'slug'=>'company/certificates', 'with_front' => false ),
//         'labels' => $labels,
//         'public' => true,
//         'show_ui' => true, // показывать интерфейс в админке
//         'has_archive' => true,
//         //'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
//         'menu_icon' => 'dashicons-clipboard', // иконка в меню
//         'menu_position' => 30 // порядок в меню
//     ,'supports' => array('title')
//     );
//     register_post_type('certificates', $args);
// }

// add_action( 'init', 'register_post_type_certificates' ); // Использовать функцию только внутри хука init

function register_post_type_reviews() {
    $labels = array(
        'name' => 'Отзывы',
        'singular_name' => 'Отзывы', // админ панель Добавить->Функцию
        'add_new' => 'Добавить отзыв',
        'add_new_item' => 'Добавить новый отзыв',
        'edit_item' => 'Редактировать отзыв',
        'new_item' => 'Новый отзыв',
        'all_items' => 'Все отзывы',
        'view_item' => 'Просмотреть отзыв',
        'search_items' => 'Искать отзывы',
        'not_found' =>  'Отзывов не найдено.',
        'not_found_in_trash' => 'В корзине нет отзывов.',
        'menu_name' => 'Отзывы' // ссылка в меню в админке
    );
    $args = array(
        'rewrite' => array( 'slug'=>'company/reviews', 'with_front' => false ),
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        //'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
        'menu_icon' => 'dashicons-format-status', // иконка в меню
        'menu_position' => 30 // порядок в меню
    ,'supports' => array('title')
    );
    register_post_type('reviews', $args);
}

add_action( 'init', 'register_post_type_reviews' ); // Использовать функцию только внутри хука init

function register_post_type_photogallery() {
    $labels = array(
        'name' => 'Фотогалерея',
        'singular_name' => 'Фотогалерея', // админ панель Добавить->Функцию
        'add_new' => 'Добавить альбом',
        'add_new_item' => 'Добавить новый альбом',
        'edit_item' => 'Редактировать альбом',
        'new_item' => 'Новый альбом',
        'all_items' => 'Все альбомы',
        'view_item' => 'Просмотреть альбом',
        'search_items' => 'Искать альбомы',
        'not_found' =>  'Альбомов не найдено.',
        'not_found_in_trash' => 'В корзине нет альбомов.',
        'menu_name' => 'Фотогалерея' // ссылка в меню в админке
    );
    $args = array(
        'rewrite' => array( 'slug'=>'company/photogallery', 'with_front' => false ),
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        //'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
        'menu_icon' => 'dashicons-format-gallery', // иконка в меню
        'menu_position' => 30 // порядок в меню
    ,'supports' => array('title')
    );
    register_post_type('photogallery', $args);
}

add_action( 'init', 'register_post_type_photogallery' ); // Использовать функцию только внутри хука init



