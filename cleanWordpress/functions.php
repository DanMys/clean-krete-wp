<?php
register_nav_menus( array(
  'menu' => 'Menu Superior',
));

add_theme_support( 'post-thumbnails');
add_image_size( 'slider_thumbs', 300, 200, true );
add_image_size( 'list_articles_thumbs', 300, 200, true );

?>