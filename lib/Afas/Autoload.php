<?php

/**
 * @file
 * Contains \Afas\Autoload.
 */

namespace Afas;

/**
 * Autoloads Afas classes.
 */
class Autoload {
  /**
   * Registers the autoloader.
   */
  public static function register() {
    ini_set('unserialize_callback_func', 'spl_autoload_call');
    spl_autoload_register(array(new self(), 'autoload'));
  }

  /**
   * Handles autoloading of classes.
   *
   * @param string $class
   *   The class to load.
   *
   * @return boolean
   *   TRUE if the class was found.
   *   FALSE otherwise.
   */
  public static function autoload($class) {
    // Check if the class is in the Afas namespace.
    if (strpos($class, 'Afas') !== 0) {
      return FALSE;
    }

    $file_path = $class;
    $file_path = str_replace('\\', '/', $file_path);
    $file_path = preg_replace('/^Afas\//', '', $file_path);
    $file_path = __DIR__ . '/' . $file_path . '.php';

    if (is_file($file_path)) {
      require_once $file_path;
      return TRUE;
    }
    return FALSE;
  }
}
