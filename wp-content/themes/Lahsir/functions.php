<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
*/

 

require_once (TEMPLATEPATH . '/functions/custom.php');



function typical_title() { 
	global $page, $paged; 
	wp_title('|', true, 'right'); 
	bloginfo('name'); 
	$site_description = get_bloginfo('description', 'display'); 
	if ($site_description && (is_home() || is_front_page())) 
		echo " | $site_description"; 
	if ($paged >= 2 || $page >= 2) 
		echo ' | '.sprintf(__( 'Страница %s'), max($paged, $page)); 
}




if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}


function enqueue_styles() {
	
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/fonts.css');
	
    wp_enqueue_style( 'style-name', get_stylesheet_uri());
	wp_enqueue_style( 'style_wp', get_template_directory_uri() . '/style_wp.css');
	
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css');
	
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/fancybox/jquery.fancybox.css');
	
	wp_enqueue_style( 'rasponsiv', get_template_directory_uri() . '/rasponsiv.css');

}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function my_scripts_method() {
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
    wp_enqueue_script( 'jquery' );
	
	wp_register_script( 'jquery.maskedinput',get_template_directory_uri() .  '/js/jquery.maskedinput.js');
    wp_enqueue_script( 'jquery.maskedinput' );
	
	wp_register_script( 'slick',get_template_directory_uri() .  '/slick/slick.js');
    wp_enqueue_script( 'slick' );
	
	wp_register_script( 'fancybox',get_template_directory_uri() .  '/fancybox/jquery.fancybox.js');
    wp_enqueue_script( 'fancybox' );
	
	wp_register_script( 'main',get_template_directory_uri() .  '/js/main.js');
    wp_enqueue_script( 'main' );
	
	
    wp_register_script( 'gmap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA4zNzUcn6Hq8DizhHA6vQmrdPGlA4BWv8');
    wp_enqueue_script( 'gmap' );
	
    wp_register_script( 'map', get_template_directory_uri() .'/js/map.js');
    wp_enqueue_script( 'map' );    
	
	
    wp_register_script( 'packed', get_template_directory_uri() .'/js/packed.js');
    wp_enqueue_script( 'packed' );
	
    wp_register_script( 'script', get_template_directory_uri() .'/js/script.js');
    wp_enqueue_script( 'script' );
}    
 
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );


show_admin_bar(false);


add_theme_support('post-thumbnails'); 
set_post_thumbnail_size(200, 160); 
add_image_size('past-thumb', 200, 160); 
add_image_size('big-thumb', 400, 400, true); 




//отключаем смайлы
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );







$current_user = wp_get_current_user();
if ( 1 == $current_user->ID ) {
	// Не авторизован.
} else {
	
//убираем пункты меню
function remove_menus(){
  //remove_menu_page( 'index.php' );                  //Консоль
  remove_menu_page( 'edit.php' );                   //Записи
 // remove_menu_page( 'upload.php' );                 //Медиафайлы
  //remove_menu_page( 'edit.php?post_type=page' );    //Страницы
  remove_menu_page( 'edit-comments.php' );          //Комментарии
  //remove_menu_page( 'themes.php' );                 //Внешний вид
  remove_menu_page( 'plugins.php' );                //Плагины
  remove_menu_page( 'users.php' );                  //Пользователи
  remove_menu_page( 'tools.php' );
  //Инструменты
  remove_menu_page( 'options-general.php' );//Настройки
  remove_submenu_page( 'themes.php','nav-menus.php');
  
  
  

}
add_action( 'admin_menu', 'remove_menus' );


//админка +Добавить и прочее
function remove_admin_bar_links() {
     global $wp_admin_bar;
     $wp_admin_bar->remove_menu('new-content');
     $wp_admin_bar->remove_menu('new-link');
     $wp_admin_bar->remove_menu('comments');
     $wp_admin_bar->remove_menu('updates');
 }
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );


/* Удаление виджетов из Консоли WordPress */
function clear_dash(){
	$side = &$GLOBALS['wp_meta_boxes']['dashboard']['side']['core'];
	$normal = &$GLOBALS['wp_meta_boxes']['dashboard']['normal']['core'];
	
	unset($side['dashboard_primary']); //Блог WordPress
	unset($side['dashboard_secondary']); //Другие Новости WordPress

	unset($normal['dashboard_incoming_links']); //Входящие ссылки

	unset($normal['dashboard_recent_comments']); //Последние комментарии
	unset($normal['dashboard_plugins']); //Последние Плагины
}
add_action('wp_dashboard_setup', 'clear_dash' );




}


//ошибки только админу
add_action('init', 'enable_errors');
function enable_errors(){
	if( $GLOBALS['user_level'] < 5 )
		return;
	error_reporting(E_ALL ^ E_NOTICE);
	ini_set("display_errors", 1);
}





add_action('admin_head', 'admin_style');
function admin_style() {
	print '<style>
	/*Стили в админку*/
	#edit-slug-box {display: none;}
	#preview-action {display: none;}
	.type-product .row-actions .view {display: none;}
	.type-work .row-actions .view {display: none;}
	.post-type-product .updated a {display: none;}
	.post-type-work .updated a {display: none;}
	.post-type-page .updated a {display: none;}
	#accordion-panel-nav_menus {display: none;}
	
	</style>';
}




?>
