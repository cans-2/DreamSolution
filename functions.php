<?php
  function enqueue_name(){
    // スタイルシート
    wp_enqueue_style('reset', 'https://unpkg.com/destyle.css@3.0.2/destyle.min.css', array(), '1.0.0');
    wp_enqueue_style('style_name', get_template_directory_uri() . '/assets/css/style.css', array("reset"), '1.0.0');
    wp_enqueue_style('hover', get_template_directory_uri() . '/assets/css/hover-min.css', array("reset"), '1.0.0');
    wp_enqueue_style('font1','https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array("reset"), '1.0.0');
    wp_enqueue_style('font2','https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array("reset"), '1.0.0');
    wp_enqueue_style('rewind','https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array("reset"), '1.0.0');
    // フロントページのみで main.js を読み込み
    if (is_front_page()) {
        wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/main.js', array("jquery"), '1.0.0', true);
      }
      wp_enqueue_script('ani-script', get_template_directory_uri() . '/assets/js/animation.js', array("jquery"), '1.0.0', false);
}
add_action('wp_enqueue_scripts','enqueue_name');

function setup_theme() {
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_theme');

$news = array(
  'post_type' => 'post',
  'category_name' => 'news',
  'posts_per_page' => 3,
  'post_status' => 'publish',
);
$news_query = new WP_Query( $news );

$column = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' => 'column',
  'posts_per_page' => 15
);
$column_query = new WP_Query( $column );
