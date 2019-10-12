<?php
/*
Adds the stylesheet and javscript files.
*/

function custom_theme_scripts() {
  //We're adding bootstrap to the theme. This is another wp built in function that will add a select style sheet to our theme. First parameter is a unqie name and the second is the path to the file
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

  //main css
  wp_enqueue_style('main-styles', get_stylesheet_uri());

  //Javascript files
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js');
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
}

//The following will add the function and load it everytime and website loads
add_action('wp_enqueue_scripts','custom_theme_scripts');

/*
Custom header logo. This is going to add the header image feature on the customize theme bar. Its super cool
*/

$custom_image_header = array(
  'width' => 225,
  'height' => 120,
  'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);



?>
