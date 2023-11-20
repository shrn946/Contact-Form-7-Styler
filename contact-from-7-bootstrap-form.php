<?php
/*
Plugin Name: Contact Form 7 Styler
Description: Custom styling for Contact Form 7.
Version: 1.0
Author: Hassan Naqvi
*/

// Disable automatic <p> and <br> tags by Contact Form 7
define('WPCF7_AUTOP', false);

// Enqueue styles and scripts
function cfw_styler_enqueue_scripts() {
    // Enqueue Font Awesome CSS
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    // Enqueue custom style.css
    wp_enqueue_style('cfw-styler-style', plugins_url('assets/style.css', __FILE__));
}

// Hook to enqueue scripts and styles
add_action('wp_enqueue_scripts', 'cfw_styler_enqueue_scripts'); 

function my_plugin_settings_page() {
    ?>
    <div class="wrap">
        <h2>Your Plugin Settings</h2>

        <!-- Display the video iframe -->
        <div class="video-container" style="text-align:center;">
            <h3>Video Link</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/your_video_id" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <?php
}

// Add a menu item to the WordPress admin menu
function my_plugin_menu() {
    add_menu_page('My Plugin Settings', 'Contact Form 7 Styler', 'manage_options', 'my-plugin-settings', 'my_plugin_settings_page');
}

// Hook to add the menu item
add_action('admin_menu', 'my_plugin_menu');



