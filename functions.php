<?php

register_nav_menus([ 'primary' => 'Primary Menu']);

register_sidebar([
  'id'   => 'sidebar-1',
  'name' => 'Sidebar'
]);

add_theme_support( 'automatic-feed-links' );

function my_init_method() {
  if( !is_admin() ) {
    wp_enqueue_script( 'jquery' );
    wp_register_style( 'global', get_bloginfo('template_directory') . '/css/global.css');
    wp_enqueue_style( 'global' );
  }
}
add_action( 'init', 'my_init_method' );
add_action( 'after_setup_theme', function() {
  add_theme_support( 'pageviews' );
});
function true_301_redirect() {
	/* в массиве указываем все старые=>новые ссылки  */
	$rules = array(
		array('old'=>'/category/cat/','new'=>'/blog/'), // рубрика
	);
	foreach( $rules as $rule ) :
		// если URL совпадает с одним из указанных в массиве, то редиректим
		if( urldecode($_SERVER['REQUEST_URI']) == $rule['old'] ) :
			wp_redirect( site_url( $rule['new'] ), 301 );
			exit();
		endif;
	endforeach;
}
 
add_action('template_redirect', 'true_301_redirect');
add_theme_support( 'title-tag' );

