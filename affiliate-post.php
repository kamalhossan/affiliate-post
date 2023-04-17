<?php 
/*
 * Plugin Name:       Affiliate Post
 * Description:       Build for custom post layout
 * Version:           1
 * Author:            Kamal Hossan
 * Author URI:        https://promedia66.co.uk
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       affiliate
 */

 /**
 * Register the "birthchart shortcode"
 */
function register_affiliate_shortcode() {

  add_shortcode( 'long_post', 'affiliate_shortchode' );
	
  function affiliate_shortchode() {

    ob_start();

    // include template with the arguments (The $args parameter was added in v5.5.0)
    include 'template-parts/posts.php';
    // get_template_part('template-parts/form');

    return ob_get_clean();
    // return"Hello from birthchart.php";
  
   }
   


} 
add_action( 'init', 'register_affiliate_shortcode' );


/**
 * Activate the plugin.
 */
function affiliate_activate() { 
	// Trigger our function that registers the custom post type plugin.
	register_affiliate_shortcode();
  affiliate_shortchode();

}
register_activation_hook( __FILE__, 'affiliate_activate' );


?>

