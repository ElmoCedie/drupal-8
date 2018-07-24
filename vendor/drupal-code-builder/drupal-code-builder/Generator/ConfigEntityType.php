<?php

namespace DrupalCodeBuilder\Generator;

use DrupalCodeBuilder\Generator\FormattingTrait\AnnotationTrait;
use DrupalCodeBuilder\Utility\InsertArray;
use CaseConverter\CaseString;

/**
 * Generator for a config entity type.
 */
class ConfigEntityType extends EntityTypeBase {

  /**
   * {@inheritdoc}
   */
  public static function componentDataDefinition() {
    $data_definition = parent::componentDataDefinition();

    $config_schema_property = [
      'entity_properties' => [
        'label' => 'Entity properties',
        'description' => "The config properties that are stored for each entity of this type. An ID and label property are provided automatically.",
        'format' => 'compound',
        'properties' => [
          'name' => [
            'label' => 'Property name',
            'required' => TRUE,
          ],
          'label' => [
            'label' => 'Property label',
            'default' => function($component_data) {
              $entity_type_id = $component_data['name'];
              return CaseString::snake($entity_type_id)->title();
            },
            'process_default' => TRUE,
          ],
          'type' => [
            'label' => 'Data type',
            'required' => TRUE,
            'options' => 'ReportDataTypes:listDataTypesOptions',
          ],
        ],
        'processing' => function($value, &$component_data, $property_name, &$property_info) {
          $id_name_entity_properties = [
            0 => [
              'name' => 'id',
              'label' => 'Machine name',
              'type' => 'string',
            ],
            1 => [
              'name' => 'label',
              'label' => 'Name',
              'type' => 'label',
            ],
          ];

          $component_data[$property_name] = array_merge($id_name_entity_properties, $value);
        },
        'process_empty' => TRUE,
      ],
    ];
    InsertArray::insertAfter($data_definition, 'interface_parents', $config_schema_property);

    $data_definition['parent_class_name']['default'] = '\Drupal\Core\Config\Entity\ConfigEntityBase';

    $bundle_of_entity_properties = [
      'bundle_of_entity' => [
        'label' => 'Bundle of entity',
        'internal' => TRUE,
      ],
    ];
    InsertArray::insertAfter($data_definition, 'entity_class_name', $bundle_of_entity_properties);

    // Change the computed value for entity keys.
    $data_definition['entity_keys']['default'] = function($component_data) {
      $keys = [
        'id' => 'id',
        'label' => 'label',
      ];

      return $keys;
    };

    return $data_definition;
  }

  /**
   * {@inheritdoc}
   */
  protected static function interfaceParents() {
    return [
      'Drupal\Core\Entity\EntityWithPluginCollectionInterface' => 'EntityWithPluginCollectionInterface',
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function interfaceBasicParent() {
    return '\Drupal\Core\Config\Entity\ConfigEntityInterface';
  }

  /**
   * {@inheritdoc}
   */
  protected static function getHandlerTypes() {
    $handler_types = parent::getHandlerTypes();

    $handler_types['storage']['base_class'] = '\Drupal\Core\Config\Entity\ConfigEntityStorage';

    // These get overridden in requiredComponents() if this is a bundle config
    // entity.
    $handler_types['form_default']['base_class'] = '\Drupal\Core\Entity\EntityForm';
    $handler_types['form_add']['base_class'] = '\Drupal\Core\Entity\EntityForm';
    $handler_types['form_edit']['base_class'] = '\Drupal\Core\Entity\EntityForm';

    $handler_types['form_delete']['base_class'] = '\Drupal\Core\Entity\EntityDeleteForm';

    return $handler_types;
  }

  /**
   * {@inheritdoc}
   */
  public function requiredComponents() {
    $components = parent::requiredComponents();

    // Override the base class of any form handlers if this is a bundle entity.
    // TODO: clean this up!
    if (isset($this->component_data['bundle_of_entity'])) {
      foreach ($components as $component_key => $component_data) {
        if (isset($component_data['parent_class_name']) && $component_data['parent_class_name'] == '\Drupal\Core\Entity\EntityForm') {
          $components[$component_key]['parent_class_name'] = 'Drupal\Core\Entity\BundleEntityFormBase';
        }
      }
    }

    $entity_config_key = $this->component_data['entity_type_id'];
    $module = $this->component_data['root_component_name'];

    $schema_properties_yml = [];
    foreach ($this->component_data['entity_properties'] as $schema_item) {
      $schema_properties_yml[$schema_item['name']] = [
        'type' => $schema_item['type'],
        'label' => $schema_item['label'],
      ];
    }

    $components["config/schema/%module.schema.yml"] = [
      'component_type' => 'ConfigSchema',
      'yaml_data' => [
        "{$module}.{$entity_config_key}"=> [
          'type' => 'config_entity',
          'label' => $this->component_data['entity_type_label'],
          'mapping' => $schema_properties_yml,
        ],
      ],
    ];

    // Add menu plugins for the entity type if the UI option is set.
    if (!empty($this->component_data['entity_ui'])) {
      // Name must be unique among the component type.
      $components['collection_menu_link_' . $this->component_data['entity_type_id']] = [
        'component_type' => 'PluginYAML',
        'plugin_type' => 'menu.link',
        'prefix_name' => FALSE,
        'plugin_name' => "entity.{$this->component_data['entity_type_id']}.collection",
        'plugin_properties' => [
          'title' => $this->component_data['entity_type_label'] . 's',
          'description' => "Create and manage fields, forms, and display settings for {$this->component_data['entity_type_label']}s.",
          'route_name' => "entity.{$this->component_data['entity_type_id']}.collection",
          'parent' => 'system.admin_structure',
        ],
      ];
    }

    return $components;
  }

  /**
   * {@inheritdoc}
   */
  protected function collectSectionBlocks() {
    // Set up properties.
    foreach ($this->component_data['entity_properties'] as $schema_item) {
      // Just take the label as the description.
      // TODO: add a description property?
      $description = $schema_item['label'];
      if (substr($description, 0, 1) != '.') {
        $description .= '.';
      }

      $this->properties[] = $this->createPropertyBlock(
        $schema_item['name'],
        $schema_item['type'], // TODO: config schema type not the same as PHP type!!!!!
        [
          'docblock_first_line' => $schema_item['label'] . '.',
        ]
        // TODO: default value?
      );
    }
  }

  /**
   * {@inheritdoc}
   */
  protected function getAnnotationData() {
    $annotation = parent::getAnnotationData();

    $annotation['#class'] = 'ConfigEntityType';

    // Standard ordering for our annotation keys.
    $annotation_keys = [
      'id',
      'label',
      'label_collection',
      'label_singular',
      'label_plural',
      'label_count',
      'handlers',
      'admin_permission',
      'entity_keys',
      'config_export',
      'links',
    ];
    $annotation_data = array_fill_keys($annotation_keys, NULL);

    // Re-create the annotation #data array, with the properties in our set
    // order.
    foreach ($annotation['#data'] as $key => $data) {
      $annotation_data[$key] = $data;
    }

    // Add further annotation properties.
    if (isset($this->component_data['bundle_of_entity'])) {
      $annotation_data['bundle_of'] = $this->component_data['bundle_of_entity'];
    }

    if (!empty($this->component_data['entity_ui'])) {
      $annotation_data['links'] = [];
      $entity_path_component = $this->component_data['entity_type_id'];
      $annotation_data['links']["add-form"] = "/admin/structure/{$entity_path_component}/add";
      $annotation_data['links']["canonical"] = "/admin/structure/{$entity_path_component}/{{$entity_path_component}}";
      $annotation_data['links']["collection"] = "/admin/structure/{$entity_path_component}";
      $annotation_data['links']["edit-form"] = "/admin/structure/{$entity_path_component}/{{$entity_path_component}}/edit";
      $annotation_data['links']["delete-form"] = "/admin/structure/{$entity_path_component}/{{$entity_path_component}}/delete";
    }

    $config_export_values = [];
    foreach ($this->component_data['entity_properties'] as $schema_item) {
      $config_export_values[] = $schema_item['name'];
    }
    if ($config_export_values) {
      $annotation_data['config_export'] = $config_export_values;
    }

    // Filter the annotation data to remove any keys which are NULL; that is,
    // which are still in the state that the array fill put them in and that
    // have not had any actual data in. AFAIK annotation values are never
    // actually NULL, so this is ok.
    $annotation_data = array_filter($annotation_data, function($item) {
      return !is_null($item);
    });

    // Put our data into the annotation array.
    $annotation['#data'] = $annotation_data;

    return $annotation;
  }


}
