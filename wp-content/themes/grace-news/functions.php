<?php                     
/**
 * Grace News functions and definitions
 *
 * @package Grace News
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'grace_news_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.  
 */
function grace_news_setup() {		
	global $content_width;   
    if ( ! isset( $content_width ) ) {
        $content_width = 680; /* pixels */
    }	

	load_theme_textdomain( 'grace-news', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support('html5');
	add_theme_support( 'post-thumbnails' );	
	add_theme_support( 'title-tag' );	
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		//'width'       => 120,
		'flex-height' => true,
	) );	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'grace-news' ),
		'footer' => __( 'Footer Menu', 'grace-news' ),						
	) );
	add_editor_style( 'editor-style.css' );
} 
endif; // grace_news_setup
add_action( 'after_setup_theme', 'grace_news_setup' );
function grace_news_widgets_init() { 	
	
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'grace-news' ),
		'description'   => __( 'Appears on blog page sidebar', 'grace-news' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'grace_news_widgets_init' );


function grace_news_font_url(){
		$font_url = '';		
		/* Translators: If there are any character that are not
		* supported by Assistant, trsnalate this to off, do not
		* translate into your own language.
		*/
		$assistant = _x('on','Assistant:on or off','grace-news');		
		
		
		
		    if('off' !== $assistant ){
			    $font_family = array();
			
			if('off' !== $assistant){
				$font_family[] = 'Roboto:300,400,600';
			}
							
						
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
		
	return $font_url;
	}


function grace_news_scripts() {
	wp_enqueue_style('grace-news-font', grace_news_font_url(), array());
	wp_enqueue_style( 'grace-news-basic-style', get_stylesheet_uri() );	
	wp_enqueue_style( 'nivo-slider', get_template_directory_uri()."/css/nivo-slider.css" );
	wp_enqueue_style( 'fontawesome-all-style', get_template_directory_uri().'/fontsawesome/css/fontawesome-all.css' );
	wp_enqueue_style( 'grace-news-responsive', get_template_directory_uri()."/css/responsive.css" );
	wp_enqueue_style( 'hover-min', get_template_directory_uri()."/css/hover-min.css" );
	wp_enqueue_script( 'jquery-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'grace-news-editable', get_template_directory_uri() . '/js/editable.js' );
	wp_enqueue_style( 'grace-news-editable', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap-grid.css' );
	wp_enqueue_style( 'grace-news-basic-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'grace_news_scripts' );

function grace_news_ie_stylesheet(){
	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style('grace-news-ie', get_template_directory_uri().'/css/ie.css', array( 'grace-news-style' ), '20190312' );
	wp_style_add_data('grace-news-ie','conditional','lt IE 10');
	
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'grace-news-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'grace-news-style' ), '20190312' );
	wp_style_add_data( 'grace-news-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'grace-news-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'grace-news-style' ), '20190312' );
	wp_style_add_data( 'grace-news-ie7', 'conditional', 'lt IE 8' );	
	}
add_action('wp_enqueue_scripts','grace_news_ie_stylesheet');

// define('GRACE_NEWS_THEME_DOC','http://www.gracethemesdemo.com/documentation/grace-news/#homepage-lite','grace-news');
// define('GRACE_NEWS_PROTHEME_URL','https://gracethemes.com/themes/magazine-style-wordpress-theme/','grace-news');
// define('GRACE_NEWS_LIVE_DEMO','http://www.gracethemesdemo.com/grace-news/','grace-news');

if ( ! function_exists( 'grace_news_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function grace_news_the_custom_logo() {
	
	// if ( function_exists( 'the_custom_logo' ) ) {
	// 	the_custom_logo();
	// }
	if(has_custom_logo()){
		$image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
		echo "<img src=\"" . $image[0]."\" class=\"rounded-sm \" style=\"height: 100px; \">";
	}
}
endif;

/**
 * Customize Pro included.
 */
require_once get_template_directory() . '/customize-pro/example-1/class-customize.php';

//Custom Excerpt length.
function grace_news_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'grace_news_excerpt_length', 999 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template for about theme.
 */
if ( is_admin() ) { 
require get_template_directory() . '/inc/about-themes.php';
}

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


register_sidebar(array(
	'name' => 'sidbar_lang', // Отображаемое название области в панели управления
	'id' => 'sidebar_lang', // Уникальный ID области
	'description' => __( 'Описание виджета (подсказка).'),
	'before_widget' => '<div class="lang_panel">', // Начало обертки блока
	'after_widget' => '</div>', // Конец обертки блока
	'before_title' => '<h3 class="">', // Начало обертки заголовка
	'after_title' => '</h3>' // Конец обертки заголовка
));

register_sidebar(array(
	'name' => 'sidebar_persona', // Отображаемое название области в панели управления
	'id' => 'sidebar_persona', // Уникальный ID области
	'description' => __( 'Описание виджета (подсказка).'),
	'before_widget' => '<div class="sidebar_persona">', // Начало обертки блока
	'after_widget' => '</div>', // Конец обертки блока
	'before_title' => '', // Начало обертки заголовка
	'after_title' => '' // Конец обертки заголовка
));


function get_nav_menu_to_post($atts)
{
	// echo wp_nav_menu(array('theme_location' => 'primary'));
	    // First get all the pages in your site
		$wp_query = new WP_Query();
		$all_pages = $wp_query->query(array('post_type' => 'page'));
		$res = "";
		// Then get your current page ID and children (out of all the pages)
		$current_page_id = get_the_id();
		$current_page_children = get_page_children($current_page_id, $all_pages);
		return (wp_get_nav_menu_items($current_page_id));
		// Loop through the array of children pages
		foreach ($all_pages as $child_page) {	
			echo "<pre>";
			// echo $child_page->post_title;
			// if($child_page->ID !== $current_page_id && !empty($child_page->post_title)){
			// 	 $r = "- <a href=\"". $child_page->guid ."\" >".$child_page->post_title . "</a> <br>" ;
			// 	 $res = $res . $r;
			// }
			
		}
		return $res;
}

add_shortcode('nav', 'get_nav_menu_to_post');

function true_remove_default_widget() {
	unregister_widget('WP_Widget_Archives'); // Архивы
	//unregister_widget('WP_Widget_Calendar'); // Календарь
	//unregister_widget('WP_Widget_Categories'); // Рубрики
	unregister_widget('WP_Widget_Meta'); // Мета
	unregister_widget('WP_Widget_Pages'); // Страницы
	unregister_widget('WP_Widget_Recent_Comments'); // Свежие комментарии
	unregister_widget('WP_Widget_Recent_Posts'); // Свежие записи
	unregister_widget('WP_Widget_RSS'); // RSS
	//unregister_widget('WP_Widget_Search'); // Поиск
	unregister_widget('WP_Widget_Tag_Cloud'); // Облако меток
	unregister_widget('WP_Widget_Text'); // Текст
	unregister_widget('WP_Nav_Menu_Widget'); // Произвольное меню
}
 
add_action( 'widgets_init', 'true_remove_default_widget', 20 );