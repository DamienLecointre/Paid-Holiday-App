<?php
function mon_theme_supports()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mon_theme_supports');

function mon_theme_enqueue_styles()
{
  wp_enqueue_style('mon-style', get_stylesheet_uri());
  wp_enqueue_style('main-style', get_template_directory_uri() . '/styleMain.css', array('mon-style'), '1.0');

  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"', false);

  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0');
}
add_action('wp_enqueue_scripts', 'mon_theme_enqueue_styles');
