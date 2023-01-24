<?php

/**
 * Enqueue theme assets.
 *
 * @package Pedagogia Concursos
 */

namespace PEDAGOGIA_CONCURSOS\Inc;

use PEDAGOGIA_CONCURSOS\Inc\Traits\Singleton;

class Assets {
  use Singleton;

  protected function __construct()
  {
    // load class.
    $this->setup_hooks();
  }

  protected function setup_hooks()
  {
    // Actions.
    add_action('wp_enqueue_scripts', [$this, 'register_styles']);
    add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
  }

  public function register_styles()
  {
    // Resgister Styles
    wp_register_style('pedagogia-concursos', get_stylesheet_uri(), [], filemtime(PEDAGOGIA_CONCURSOS_DIR_PATH . '/style.css'), 'all');
    wp_register_style('bootstrap', PEDAGOGIA_CONCURSOS_DIR_URI . '/assets/src/css/bootstrap.min.css', [], false, 'all');

    // Enqueue Styles
    wp_enqueue_style('pedagogia-concursos');
    wp_enqueue_style('bootstrap');
  }

  public function register_scripts()
  {
    // Register Scripts
    wp_register_script('pedagogia-concursos', PEDAGOGIA_CONCURSOS_DIR_URI . '/assets/main.js', [], filemtime(PEDAGOGIA_CONCURSOS_DIR_PATH . '/assets/main.js'), true);
    wp_register_script('bootstrap', PEDAGOGIA_CONCURSOS_DIR_URI . '/assets/src/js/bootstrap.bundle.min.js', ['jquery'], false, true);

    // Enqueue Cripts
    wp_enqueue_script('pedagogia-concursos');
    wp_enqueue_script('bootstrap');
  }
}
