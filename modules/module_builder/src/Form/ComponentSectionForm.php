<?php

namespace Drupal\module_builder\Form;

use Drupal\Core\Form\FormStateInterface;

/**
 * Generic form for entering a section of data for a component.
 *
 * This determines which properties of the component to show from the values of
 * the entity type's code_builder annotation.
 *
 * @see \Drupal\module_builder\EntityHandler\ComponentSectionFormHandler
 */
class ComponentSectionForm extends ComponentFormBase {

   /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    // Get the list of component properties this section form uses from the
    // handler, which gets them from the entity type annotation.
    $component_entity_type_id = $this->entity->getEntityTypeId();
    $component_sections_handler = $this->entityTypeManager->getHandler($component_entity_type_id, 'component_sections');

    $operation = $this->getOperation();
    $component_properties_to_use = $component_sections_handler->getSectionFormComponentProperties($operation);

    $form = $this->componentPropertiesForm($form, $form_state, $component_properties_to_use);

    return $form;
  }

}
