<?php

function kisubi_theme_styles() {

    wp_enqueue_style(
        'kisubi-style',
        get_stylesheet_uri()
    );

    wp_enqueue_style(
        'kisubi-main',
        get_theme_file_uri('/kisubi.css'),
        array(),
        '1.0'
    );

}

add_action('wp_enqueue_scripts', 'kisubi_theme_styles');

?>
<?php
function kisubi_events_slideshow() {
    if (is_page('events')) {
        wp_enqueue_script(
            'kisubi-events',
            get_theme_file_uri('/js/events.js'),
            array(),
            '1.0',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'kisubi_events_slideshow'); 
?>