<?php

namespace Drupal\module_builder;

use Drupal\module_builder\Environment\Drupal8Module;

/**
 * Quick and dirty wrapper class to load our library.
 */
class LibraryWrapper {

  /**
   * Loads the Drupal Coder Builder library and sets the environment.
   *
   * @throws
   *  Throws an exception if the library can't be found.
   */
  public static function loadLibrary() {
    if (!class_exists(\DrupalCodeBuilder\Factory::class)) {
      throw new \Exception("Mising library.");
    }

    // TODO: add an environment class with a more appropriate name.
    \DrupalCodeBuilder\Factory::setEnvironmentLocalClass('DrupalLibrary')
      ->setCoreVersionNumber(\Drupal::VERSION);
  }

}
