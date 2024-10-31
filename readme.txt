=== Plugin Name ===
Contributors: boborchard
Donate link: http://boborchard.com/wordpress-plugin-donations/
Tags: seo, tinymce
Requires at least: 3.9.0
Tested up to: 3.9
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily remove the H1 tag from the editor within the WordPress admin for SEO purposes.

== Description ==

Since most themes utilize the H1 tag in the template for semantic SEO markup, there's no reason to allow the h1 to be used in the Wordpress Editor. Tis plugin easily removes the H1 tag from the editor within the WordPress admin when activated.

== Installation ==

1. Upload `remove-h1.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. Screenshot of H1 removed from the editor


== Changelog ==

= 1.0.2 =
* Updated version compatible since to 3.9.x

= 1.0.1 =
* Initial version compatible before 3.9.0

== Upgrade Notice ==

= 1.0.2 =
After Wordpress 3.9 the theme_advanced_blockformats hook appears to be depreciated. I've replaced it with block_formats and an updated init to process correctly.