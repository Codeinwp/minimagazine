<?php
/**
 * minimagazine functions and definitions
 *
 * @package minimagazine
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */

function minimagazine_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on minimagazine, use a find and replace
	 * to change 'minimagazine' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'minimagazine', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'minimagazine' ),
		'footer_menu' => __( 'Footer Menu', 'minimagazine' )
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'cwp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	add_image_size( 'blog-small', 120, 120, true );
	add_image_size( 'related', 196, 198, true );

	/**
     * Enable support for Post Formats
     */
    add_theme_support( 'post-formats', array( 'aside', 'gallery','link','image','quote','status','video','audio','chat' ) );
	
	/* tgm-plugin-activation */
    require_once get_template_directory() . '/class-tgm-plugin-activation.php';

}

add_action( 'after_setup_theme', 'minimagazine_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function minimagazine_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'minimagazine' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'minimagazine_widgets_init' );

/**
 * Set excerpt length
 */
function minimagazine_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'minimagazine_custom_excerpt_length', 999 );

/**
 * Enqueue scripts and styles
 */
function minimagazine_scripts() {

	
	wp_register_style( 'minimagazine_base', get_template_directory_uri() . '/css/base.css');

    wp_enqueue_style( 'minimagazine_base' );
	
	wp_register_style( 'minimagazine_font-awesome', get_template_directory_uri() . '/css/font-awesome.css');

    wp_enqueue_style( 'minimagazine_font-awesome' );

	wp_enqueue_style( 'minimagazine-style', get_stylesheet_uri() );
	
	wp_enqueue_script('jquery');

	
	wp_enqueue_script( 'minimagazine_cycle', get_template_directory_uri() . '/js/jquery.cycle.all.js', array("jquery"), '20120206', true );
	wp_enqueue_script( 'minimagazine_customscript', get_template_directory_uri() . '/js/customscript.js', array("jquery"), '20120206', true );
	wp_enqueue_script( 'minimagazine_tiptip', get_template_directory_uri() . '/js/jquery.tipTip.minified.js', array("jquery"), '20120206', true );
	wp_enqueue_script( 'minimagazine_main', get_template_directory_uri() . '/js/main.js', array("jquery"), '20120206', true );
	
	wp_enqueue_script( 'minimagazine-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'minimagazine-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'minimagazine-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'minimagazine_scripts' );

/**
 * Implement the Custom Header feature.
 */
$args = array(
		'width'         => 980,
		'height'        => 60,
		'default-image' => '',
		'uploads'       => true,
	);
add_theme_support( 'custom-header', $args );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

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

function minimagazine_add_editor_styles() {
    add_editor_style( '/css/custom-editor-style.css' );
}
add_action( 'init', 'minimagazine_add_editor_styles' );


add_filter( 'the_title', 'minimagazine_default_title' );

function minimagazine_default_title( $title ) {

	if($title == '')
		$title = "Default title";

	return $title;
}

function minimagazine_related_posts() {

	$posttags = get_the_tags();	
	
	$tag_list = array();
	
	if ($posttags) {
		foreach($posttags as $tag) {
			array_push($tag_list,$tag->term_id); 
		}
	}
	
	$notin = get_option('sticky_posts');
	array_push($notin, get_the_ID());
	
	if($tag_list) {
		$args = array(
			'posts_per_page' => 3,
			'post__not_in' => $notin,
			'tag__in'  => $tag_list
		);
	}
	else {
		$args = array(
			'posts_per_page' => 3,
			'post__not_in' => $notin
		);
	}
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) :
	echo '<section id="relatedArticles" class="clearfix"><header><h2>'.__('Related Articles','minimagazine').'</h2></header>';
	
	while ( $the_query->have_posts() ) : $the_query->the_post();
			?> 
			<article>
				<div class="articleThumbnail">
					<a href="<?php the_permalink(); ?>">
						
						<?php
							if ( has_post_thumbnail(get_the_ID()) ) {
								echo get_the_post_thumbnail(get_the_ID(), 'related'); 
							}
							else
								echo '<img src="'.get_template_directory_uri().'/images/default.jpg" alt=""/>';
						?>
					</a>
					<a href="<?php the_permalink(); ?>">
						<div class="hoverEffect">
							<i class="icon-link"></i>
						</div>
					</a>
				</div>
				<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</article>
			
			<?php
		
	endwhile;
	echo '</section>';
	endif;
	wp_reset_postdata();

}

add_filter('next_posts_link_attributes', 'minimagazine_next_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'minimagazine_prev_posts_link_attributes');

function minimagazine_next_posts_link_attributes(){
   return 'class="next"';
}

function minimagazine_prev_posts_link_attributes(){
   return 'class="prev"';
}

add_action('tgmpa_register', 'minimagazine_register_required_plugins');
function minimagazine_register_required_plugins()
{
	$plugins = array(
		array(
	 
			'name'      => 'Login customizer',
	 
			'slug'      => 'login-customizer',
	 
			'required'  => false,
	 
		),
		array(
	 
			'name'      => 'Revive Old Post (Former Tweet Old Post)',
	 
			'slug'      => 'tweet-old-post',
	 
			'required'  => false,
	 
		)
	);
	
	 
    $config = array(
        'default_path' => '',
        'menu' => 'tgmpa-install-plugins',
        'has_notices' => true,
        'dismissable' => true,
        'dismiss_msg' => '',
        'is_automatic' => false,
        'message' => '',
        'strings' => array(
            'page_title' => __('Install Required Plugins', 'minimagazine'),
            'menu_title' => __('Install Plugins', 'minimagazine'),
            'installing' => __('Installing Plugin: %s', 'minimagazine'),
            'oops' => __('Something went wrong with the plugin API.', 'minimagazine'),
            'notice_can_install_required' => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.','minimagazine'),
            'notice_can_install_recommended' => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.','minimagazine'),
            'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.','minimagazine'),
            'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.','minimagazine'),
            'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.','minimagazine'),
            'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.','minimagazine'),
            'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.','minimagazine'),
            'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.','minimagazine'),
            'install_link' => _n_noop('Begin installing plugin', 'Begin installing plugins','minimagazine'),
            'activate_link' => _n_noop('Begin activating plugin', 'Begin activating plugins','minimagazine'),
            'return' => __('Return to Required Plugins Installer', 'minimagazine'),
            'plugin_activated' => __('Plugin activated successfully.', 'minimagazine'),
            'complete' => __('All plugins installed and activated successfully. %s', 'minimagazine'),
            'nag_type' => 'updated'
        )
    );
    tgmpa($plugins, $config);
}