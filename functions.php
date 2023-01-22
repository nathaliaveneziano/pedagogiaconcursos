<?php

/**
 * Theme Functions.
 *
 * @package Pedagogia Concursos
 */

// echo '<pre>';
// print_r(get_template_directory_uri());
// print_r('<br>');
// print_r(get_stylesheet_uri());
// print_r('<br>');
// print_r(filemtime(get_template_directory() . '/style.css'));
// wp_die();

function pedagogia_concursos_enqueue_scripts()
{
  wp_register_style('pedagogia-concursos', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
  wp_register_script('pedagogia-concursos', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);

  wp_enqueue_style( 'pedagogia-concursos' );
  wp_enqueue_script( 'pedagogia-concursos' );
}

add_action('wp_enqueue_scripts', 'pedagogia_concursos_enqueue_scripts');
