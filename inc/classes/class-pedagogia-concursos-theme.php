<?php

/**
 * Bootstraps the theme.
 *
 * @package Pedagogia Concursos
 */

namespace PEDAGOGIA_CONCURSOS\Inc;

use PEDAGOGIA_CONCURSOS\Inc\Traits\Singleton;

class PEDAGOGIA_CONCURSOS_THEME
{
  use Singleton;

  protected function __construct()
  {
    // load class.

    Assets::get_instance();

    $this->setup_hooks();
  }

  protected function setup_hooks()
  {
    // Actions.
    add_action('after_setup_theme', [$this, 'setup_theme']);
  }

  public function setup_theme()
  {
    add_theme_support('title-tag');

    add_theme_support('custom-logo', [
      'header-text' => ['site-title', 'site-description'],
      'height' => 100,
      'width' => 400,
      'flex-height' => true,
      'flex-width' => true,
    ]);
  }
}
