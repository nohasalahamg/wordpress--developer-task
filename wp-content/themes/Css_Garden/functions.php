
<?php

require_once('js/walker.php');



// function for add css file to my custom theme
function theme_styles()  
{ 

	// Example of loading a jQuery slideshow plugin just on the homepage
wp_enqueue_style( 'custom', bloginfo('template_url').'/css/custom.css' );
// Conditionally load the FlexSlider CSS on the homepage
}

// function for custom menu(navbar for designs and designers)
  function wpb_custom_new_menu() {
	register_nav_menus(
    array(
      'my-custom-menu',__( 'My Custom Menu' )));}
// function for resource menu(navbar for  view all )
  function wpb_resource_new_menu() {
	register_nav_menu('my-resource-menu',__( 'My resource Menu' ));}

  add_action( 'init', 'wpb_custom_new_menu' );
  add_action( 'init', 'wpb_resource_new_menu' );

add_action('wp_enqueue_scripts', 'theme_styles');



?>