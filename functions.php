<?php
	// Registro del menú de WordPress

	add_theme_support( 'nav-menus' );

	if ( function_exists( 'register_nav_menus' ) ) {
		register_nav_menus(array(
			'main' => 'Main'
		));
	}
?>


<?php
	//  Main Sidebar
	
	if (function_exists('register_sidebar')) {
		register_sidebar(array(
		'id' 						=> 'page_sidebar',
		'name' 					=> 'Page Sidebar',
		'description' 	=> 'Una breve descripción del Sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>'
		));
	}

	if (function_exists('register_sidebar')) {
		register_sidebar(array(
		'id' 						=> 'dynamic_sidebar',
		'name' 					=> 'Dynamic Sidebar',
		'description' 	=> 'Una breve descripción del Sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>'
		));
	}

//	add_action( 'widgets_init', 'my_register_sidebars' );
//
//	function my_register_sidebars() {
//
//	/* Register dynamic sidebar 'new_sidebar' */    register_sidebar(
//					array(
//					'id' => 'page_sidebar',
//					'name' => __( 'Page Sidebar' ),
//					'description' => __( 'A short description of the sidebar.' ),
//					'before_widget' => '<div id="%1$s" class="widget %2$s">',
//					'after_widget' => '</div>',
//					'before_title' => '<h3 class="widget-title">',
//					'after_title' => '</h3>'
//			)
//			);
//
//	/* Repeat the code pattern above for additional sidebars. */}

?>


<?php
	//Habilitar thumbnails

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(150, 150, true);
?>


<?php
	// Permitir comentarios encadenados
	function enable_threaded_comments(){
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
		   wp_enqueue_script('comment-reply');
		}
	}
	add_action('get_header', 'enable_threaded_comments');

?>


<?php
/***********************************************************************************************/
/* Add Menus */
/***********************************************************************************************/
function register_my_menus(){
    
	register_nav_menus(
		array(
			'top-menu' => __('Top Menu', 'webtegrity-framework'),
		)
	);
}
add_action('init', 'register_my_menus');

/***********************************************************************************************/
/* Add Theme Support */
/***********************************************************************************************/
if (function_exists('add_theme_support')) {
	
	add_theme_support('post-thumbnails', array('post'));
	//set_post_thumbnail_size(460, 460, true);
	add_image_size('custom-blog-image', 460, 460);

	add_theme_support('automatic-feed-links');
        
        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
}

/***********************************************************************************************/
/* Register Widgets */
/***********************************************************************************************/

// Regsiter Footer widget area
if (function_exists('register_sidebar')) {
	register_sidebar(array(
	'name' => 'Sidebar Widgets',
	'id'   => 'sidebar',
	'description'   => 'Display Widget Items in the Sidebar.',
	'before_widget' => '<div class="sidebar-widget col-lg-12 col-md-12 col-sm-12 col-xs-12">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',	
	'after_title'   => '</h3>'
			));
}
// Regsiter Footer widget area
if (function_exists('register_sidebar')) {
	register_sidebar(array(
	'name' => 'Page Widgets',
	'id'   => 'page_sidebar',
	'description'   => 'Display Widget Items in the Page Sidebar.',
	'before_widget' => '<div class="sidebar-widget col-lg-12 col-md-12 col-sm-12 col-xs-12">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',	
	'after_title'   => '</h3>'
			));
}
// Regsiter Footer widget area
if (function_exists('register_sidebar')) {
	register_sidebar(array(
	'name' => 'Blog Widgets',
	'id'   => 'blog_sidebar',
	'description'   => 'Display Widget Items in the Blog Sidebar.',
	'before_widget' => '<div class="sidebar-widget col-lg-12 col-md-12 col-sm-12 col-xs-12">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',	
	'after_title'   => '</h3>'
			));
}
// Regsiter Footer widget area
if (function_exists('register_sidebar')) {
	register_sidebar(array(
	'name' => 'Footer Widget',
	'id'   => 'footer_widget',
	'description'   => 'Display Widget Items in the Footer.',
	'before_widget' => '<div class="footer-widget col-lg-4 col-md-4 col-sm-4 col-xs-12">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',	
	'after_title'   => '</h3>'
			));
}

/***********************************************************************************************/
/* Register Scripts and Style */
/***********************************************************************************************/

// Register style sheet.
function webtegrity_scripts() {
	
	wp_enqueue_style( 'bootstrap_min_css', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' );
        wp_enqueue_style( 'webteg_main_css', get_stylesheet_uri(), NULL, NULL, 'all' );
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'masonry');
        wp_enqueue_script( 'double_tap', get_template_directory_uri() . '/js/scripts.min.js');

}

add_action( 'wp_enqueue_scripts', 'webtegrity_scripts' );

function load_google_fonts() {
	wp_register_style('googleRussoOne','http://fonts.googleapis.com/css?family=Russo+One');
        wp_enqueue_style( 'googleRussoOne'); 
        
	wp_register_style('googleOpenSans','http://fonts.googleapis.com/css?family=Open+Sans');
        wp_enqueue_style( 'googleOpenSans'); 

}
add_action('wp_print_styles', 'load_google_fonts');


remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'start_post_rel_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

/*********************************************************************************/
/*How to automatically insert a list of related articles below the post*/
/*********************************************************************************/

function wptuts_more_from_cat( $title = "More From This Category:" ) {
    global $post;
    // We should get the first category of the post
    $categories = get_the_category( $post->ID );
    $first_cat = $categories[0]->cat_ID;
    // Let's start the $output by displaying the title and opening the <ul>
    $output = '<div id="more-from-cat"><h4>' . $title . '</h4><hr>';
    // The arguments of the post list!
    $args = array(
        // It should be in the first category of our post:
        'category__in' => array( $first_cat ),
        // Our post should NOT be in the list:
        'post__not_in' => array( $post->ID ),
        // ...And it should fetch 5 posts - you can change this number if you like:
        'posts_per_page' => 3,
        'orderby' => 'rand',
    );
    // The get_posts() function
    $posts = get_posts( $args );
    if( $posts ) {
        $output .= '<ul>';
        // Let's start the loop!
        foreach( $posts as $post ) {
            setup_postdata( $post );
            $post_thumb = get_the_post_thumbnail();
            $post_title = get_the_title();
            $permalink = get_permalink();
            $output .= '<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="' . $permalink . '" title="' . esc_attr( $post_title ) . '">' . $post_thumb . '</a><a href="' . $permalink . '" class="more-from-cat" title="' . esc_attr( $post_title ) . '">' . $post_title . '</a></li>';
        }
        $output .= '</ul><div class="clearfix"></div>';
    } else {
        // If there are no posts, we should return something, too!
        $output .= '<p>Sorry, this category has just one post and you just read it!</p>';
    }
    // Let's close the <div> and return the $output:
    $output .= '</div>';
    return $output;
}

?>