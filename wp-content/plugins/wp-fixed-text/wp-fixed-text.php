<?php
/*
Plugin Name: Fixed Text
Plugin URI:  http://link to your plugin homepage
Description: This plugin adds a fixed sentence
Version:     1.0
Author:      Yash Thumar
Author URI:  http://yashthumar.com to your website


*/

/*HI, In this function adds a fixed sentence to your end of your content*/
?>

  <?php
function post_advance_note( $content ) {
  if ( is_singular('post' ) ){
    $content .= '<div style="padding: 70px:"><h3>This is a fix text attach to every page.</h1></div>';
  }
	return $content;
}
add_filter( 'the_content', 'post_advance_note' );

			



?>