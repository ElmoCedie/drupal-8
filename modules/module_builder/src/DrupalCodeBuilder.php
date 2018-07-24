<?php

namespace Drupal\module_builder;

/**
 * Service class that wraps around the DCB library, to make it injectable.
 */
class DrupalCodeBuilder {

  /**
   * Whether the library has been initialized.
   *
   * @var bool
   */
  protected $loaded = FALSE;

  /**
   * Gets a task handler from the library.
   *
   * Same parameters as \DrupalCodeBuilder\Factory::getTask().
   *
   * @param string $task_name
   *   The task name.
   * @param mixed $task_options
   *   (optional) Options for the task.
   *
   * @return
   *   The task object.
   */
  public function getTask($task_name, $task_options) {
    if (!$this->loaded) {
      $this->loadLibrary();
    }

    return \DrupalCodeBuilder\Factory::getTask($task_name, $task_options);
  }

  /**
   * Loads the Drupal Coder Builder library and sets the environment.
   *
   * @throws \Exception
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
