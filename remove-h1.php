<?php
/*
Plugin Name: SEO - Remove H1
Plugin URI: http://boborchard.com/plugins/seo-remove-h1-wordpress-editor/
Description: Easily remove the H1 tag from the editor within the WordPress admin for SEO purposes.
Version: 1.0.2
Author: Bob Orchard
Author URI: http://boborchard.com
*/

function tp_remove_h1($init) {

  $init['block_formats'] = "Paragraph=p; Heading 2=h2; Heading 3=h3; Heading 4=h4; Heading 5=h5; Heading 6=h6; Address=address; Pre=pre; Code=code";
  return $init;
}

add_filter('tiny_mce_before_init', 'tp_remove_h1' );