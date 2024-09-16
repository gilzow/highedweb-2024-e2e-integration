<?php
/**
 * Plugin Name:     test-plugin
 * Plugin URI:      https://gilzow.com/
 * Description:     Purposely break an E2E test
 * Author:          Paul Gilzow
 * Author URI:      https://gilzow.com/
 * Text Domain:     test-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         E2E-test
 */
/**
 * Customer requested the editors no longer can delete their posts.
 * @todo maybe make a new role instead??
 */
add_action('init',function (){
	$editor = get_role('editor');
	$editor->remove_cap('delete_posts');
	$editor->remove_cap('delete_published_posts');
});
