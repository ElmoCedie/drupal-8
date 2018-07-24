<?php

namespace Drupal\module_builder\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the module_builder entity.
 *
 * @ConfigEntityType(
 *   id = "module_builder_module",
 *   label = @Translation("Module"),
 *   handlers = {
 *     "list_builder" = "Drupal\module_builder\ModuleBuilderComponentListBuilder",
 *     "component_sections" = "Drupal\module_builder\EntityHandler\ComponentSectionFormHandler",
 *     "form" = {
 *       "default" = "Drupal\module_builder\Form\ModuleNameForm",
 *       "add" = "Drupal\module_builder\Form\ModuleNameForm",
 *       "edit" = "Drupal\module_builder\Form\ModuleNameForm",
 *       "hooks" = "Drupal\module_builder\Form\ModuleHooksForm",
 *       "misc" = "Drupal\module_builder\Form\ModuleMiscForm",
 *       "generate" = "Drupal\module_builder\Form\ComponentGenerateForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\module_builder\Routing\ComponentRouteProvider",
 *     },
 *   },
 *   config_prefix = "component",
 *   admin_permission = "create modules",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name",
 *   },
 *   links = {
 *     "canonical" = "/admin/config/development/module_builder/manage/{module_builder_module}",
 *     "collection" = "/admin/config/development/module_builder",
 *     "add-form" = "/admin/config/development/module_builder/add",
 *     "edit-form" = "/admin/config/development/module_builder/manage/{module_builder_module}",
 *     "generate-form" = "/admin/config/development/module_builder/manage/{module_builder_module}/generate",
 *     "delete-form" = "/admin/config/development/module_builder/manage/{module_builder_module}/delete",
 *   },
 *   code_builder = {
 *     "section_forms" = {
 *       "name" = {
 *         "title" = "Edit %label basic properties",
 *         "op_title" = "Edit basic properties",
 *         "tab_title" = "Name",
 *         "properties" = {
 *           "short_description",
 *           "module_package",
 *           "module_dependencies",
 *         },
 *       },
 *       "hooks" = {
 *         "title" = "Edit %label hooks",
 *         "op_title" = "Edit hooks",
*          "tab_title" = "Hooks",
 *         "properties" = {
 *           "hooks",
 *         },
 *       },
 *       "plugins" = {
 *         "title" = "Edit %label plugins",
 *         "op_title" = "Edit plugins",
 *         "tab_title" = "Plugins",
 *         "properties" = {
 *           "plugins",
 *           "plugins_yaml",
 *           "plugin_types",
 *         },
 *       },
 *       "entities" = {
 *         "title" = "Edit %label entity types",
 *         "op_title" = "Edit entity types",
 *         "tab_title" = "Entity types",
 *         "properties" = {
 *           "content_entity_types",
 *           "config_entity_types",
 *         },
 *       },
 *       "tests" = {
 *         "title" = "Edit %label tests",
 *         "op_title" = "Edit tests",
 *         "tab_title" = "Tests",
 *         "properties" = {
 *           "phpunit_tests",
 *           "tests",
 *         },
 *       },
 *     },
 *   },
 * )
 */
class ModuleBuilderModule extends ConfigEntityBase {

  /**
   * The module_builder ID.
   *
   * @var string
   */
  public $id;

  /**
   * The module_builder label.
   *
   * @var string
   */
  public $label;

  // Your specific configuration property get/set methods go here,
  // implementing the interface.
}
