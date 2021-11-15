<?php 

Function wjct_child_style_sheet_eqnueue(){

// go to the parent theme folder an grabbing the style about see us.

    wp_enqueue_style('parent-child', get_template_directory_uri(). '/style.css');

    wp_enqueue_style('main-css', get_stylesheet_directory_uri(). '/style.css');
    wp_enqueue_style('main-css', get_stylesheet_directory_uri(). 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&family=Palette+Mosaic&display=swap');


}
add_action('wp_enqueue_scripts', 'wjct_child_style_sheet_eqnueue');
