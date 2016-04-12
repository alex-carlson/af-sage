<?php

/*
Plugin Name: My Admin Theme
Plugin URI: http://example.com/my-crazy-admin-theme
Description: My WordPress Admin Theme - Upload and Activate.
Author: Ms. WordPress
Version: 1.0
Author URI: http://example.com
*/

function my_admin_theme_style() {
    wp_enqueue_style('my-admin-theme', get_template_directory_uri().'/assets/styles/layouts/wp-admin.css');
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');

?>
