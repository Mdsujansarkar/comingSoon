<?php 
function luncher_setup_theme(){
	load_theme_textdomain("luncher");
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
}
add_action('after_setup_theme','luncher_setup_theme');
function style_and_css(){
	wp_enqueue_style('animated-css', get_theme_file_uri("/assets/css/animate.css"));
	wp_enqueue_style('icomoon-css', get_theme_file_uri("/assets/css/icomoon.css"));
	wp_enqueue_style('bootstrap-css', get_theme_file_uri("/assets/css/bootstrap.css"));
	wp_enqueue_style('style-css', get_theme_file_uri("/assets/css/style.css"));
	wp_enqueue_style('style-css', "//fonts.googleapis.com/css?family=Open+Sans:400,700,800");
	wp_enqueue_style('luncher', get_stylesheet_uri());

	wp_enqueue_script('easing-js', get_theme_file_uri("/assets/js/jquery.easing.1.3.js"),array("jquery"), null,true);
	wp_enqueue_script('bootstrap-js', get_theme_file_uri("/assets/js/bootstrap.min.js"),array("jquery"), null,true);
	wp_enqueue_script('waypoints-js', get_theme_file_uri("/assets/js/jquery.waypoints.min.js"),array("jquery"), null,true);
	wp_enqueue_script('simplyCountdown-js', get_theme_file_uri("/assets/js/simplyCountdown.js"),array("jquery"), null,true);
	wp_enqueue_script('main-js', get_theme_file_uri("/assets/js/main.js"),array("jquery"), null,true);
}
add_action('wp_enqueue_scripts','style_and_css');
function footer_widgets(){
	  register_sidebar( array(
    'name' => __( 'left sidebar', 'luncher' ),
    'id' => 'left-sidebar',
    'description' => __( 'left', 'luncher' ),
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
  	'after_widget'  => '</li>',
  	'before_title'  => '<h2 class="widgettitle">',
  	'after_title'   => '</h2>',
  ));
  
  
  register_sidebar( array(
    'name' => __( 'right sidebar', 'luncher' ),
    'id' => 'right-sidebar',
    'description' => __( 'right', 'luncher' ),
    'class'         => '',
    'before_widget' => '<li id="%1$s" class=" text-right widget %2$s">',
  	'after_widget'  => '</li>',
  	'before_title'  => '<h2 class="widgettitle">',
  	'after_title'   => '</h2>',
  ));
}

add_action("widgets_init","footer_widgets");
function image_add(){
	$thumbnailUrl = get_the_post_thumbnail_url(null,"large");
 if(is_page()){
 ?>
  <style> 
   .head-side{
   	background-image: url(<?php echo $thumbnailUrl; ?>);
   }
 </style>
<?php }
 }
add_action("wp_head","image_add");