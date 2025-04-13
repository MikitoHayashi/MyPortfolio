<?php
function basictheme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
}
add_action('after_setup_theme', 'basictheme_setup');

function basictheme_scripts() {
  wp_enqueue_style('basictheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'basictheme_scripts');
?>