<?php

/**
 * Theme Functions.
 *
 * @package Pedagogia Concursos
 */

if (!defined('PEDAGOGIA_CONCURSOS_DIR_PATH')) {
  define('PEDAGOGIA_CONCURSOS_DIR_PATH', untrailingslashit(get_template_directory()));
}

if(!defined('PEDAGOGIA_CONCURSOS_DIR_URI')) {
  define('PEDAGOGIA_CONCURSOS_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once PEDAGOGIA_CONCURSOS_DIR_PATH . '/inc/helpers/autoloader.php';

function pedagogia_concursos_get_theme_instance()
{
  \PEDAGOGIA_CONCURSOS\Inc\PEDAGOGIA_CONCURSOS_THEME::get_instance();
}
pedagogia_concursos_get_theme_instance();

// echo '<pre>';
// print_r(get_template_directory_uri());
// print_r('<br>');
// print_r(get_stylesheet_uri());
// print_r('<br>');
// print_r(filemtime(get_template_directory() . '/style.css'));
// wp_die();
