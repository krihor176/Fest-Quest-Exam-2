<?php 
function fantasy_festival_load_resources() {
    wp_enqueue_style('Karla', "https://fonts.googleapis.com/css2?family=Anta&family=Karla:ital,wght@0,200..800;1,200..800&display=swap");
    wp_enqueue_style('IM Fell English SC', "https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&display=swap");

    wp_enqueue_style('fantasy-festival-style', get_stylesheet_uri());
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css");
}


add_action('wp_enqueue_scripts', 'fantasy_festival_load_resources');

function acf_remove_gutenberg() {
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action("init", "acf_remove_gutenberg");

function theme_name_scripts() {
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

