<?php

namespace Drupal\module_builder\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use DrupalCodeBuilder\Exception\SanityException;

/**
 * Form for running the DCB analysis process.
 */
class ProcessForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'module_builder_process';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    \Drupal\module_builder\LibraryWrapper::loadLibrary();

    try {
      $task_handler_report = \DrupalCodeBuilder\Factory::getTask('ReportHookDataFolder');
      $task_report_summary = \DrupalCodeBuilder\Factory::getTask('ReportSummary');
    }
    catch (SanityException $e) {
      // We're in right place to do something about a problem, so no need to
      // show a message.
    }

    // The task handler returns sane values for these even if there's no hook
    // data.
    $last_update = $task_handler_report->lastUpdatedDate();
    $directory = \DrupalCodeBuilder\Factory::getEnvironment()->getHooksDirectory();

    $form['intro'] = array(
      '#markup' => '<p>' . t("Module Builder analyses your site's code to find data about Drupal components such as hooks, plugins, tagged services, and more." . ' '
        . "This processed data is stored in your local filesystem." . ' '
        . "You should update the code analysis when updating site code, or updating Module Builder or Drupal Code Builder."
        ) . '</p>',
    );

    $form['analyse'] = [
      '#type' => 'fieldset',
      '#title' => "Perform analysis",
    ];

    $form['analyse']['last_update'] = array(
      '#markup' => '<p>' . (
        $last_update ?
          t('Your last data update was %date.', array(
            '%date' => format_date($last_update, 'large'),
          )) :
          t("The site's code has not yet been analysed.")
        ) . '</p>',
    );

    $form['analyse']['submit'] = array(
      '#type' => 'submit',
      '#value' => $last_update
        ? t('Update code analysis')
        : t('Perform code analysis'),
    );

    if ($last_update) {
      $form['results'] = [
        '#type' => 'fieldset',
        '#title' => "Analysis results",
      ];

      $form['results']['text'] = array(
        '#markup' => '<p>' . t('You have the following data saved in %dir: ', array(
          '%dir' => $directory,
        )) . '</p>',
      );

      $analysis_data = $task_report_summary->listStoredData();

      foreach ($analysis_data as $type => $type_data) {
        $form['results'][$type] = [
          '#type' => 'details',
          '#title' => "{$type_data['label']} ({$type_data['count']})",
          '#open' => FALSE,
        ];

        if (is_array(reset($type_data['list']))) {
          $items = [];
          foreach ($type_data['list'] as $group_name => $group_items) {
            $items = array_merge($items, array_keys($group_items));
          }
        }
        else {
          $items = array_keys($type_data['list']);
        }

        $form['results'][$type]['items'] = [
          '#theme' => 'item_list',
          '#items' => $items,
        ];
      }
    }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    \Drupal\module_builder\LibraryWrapper::loadLibrary();

    // Safe to do this without exception handling: it's already been checked in
    // the form builder.
    $mb_task_handler_collect = \DrupalCodeBuilder\Factory::getTask('Collect');
    $mb_task_handler_collect->collectComponentData();
  }

}
