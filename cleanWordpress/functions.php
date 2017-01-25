<?php
register_nav_menus( array(
  'menu' => 'Menu Superior',
));

add_theme_support( 'post-thumbnails');
add_image_size( 'slider_thumbs', 800, 500, true );
add_image_size( 'list_articles_thumbs', 400, 300, true );

register_sidebar( array(
'name' => 'Sidebar',
'before_widget' => '<section class="widget">',
'after_widget' => '</section>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

register_sidebar( array(
'name' => 'Footer',
'before_widget' => '<section class="widget">',
'after_widget' => '</section>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
?>
