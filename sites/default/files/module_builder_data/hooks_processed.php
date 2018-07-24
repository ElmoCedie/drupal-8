a:38:{s:5:"block";a:5:{s:21:"hook_block_view_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_block_view_alter";s:10:"definition";s:93:"function hook_block_view_alter(array &$build, \Drupal\Core\Block\BlockPluginInterface $block)";s:11:"description";s:58:"Alter the result of \Drupal\Core\Block\BlockBase::build().";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"block";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/block.api.php";s:4:"body";s:155:"
  // Remove the contextual links on all blocks that provide them.
  if (isset($build['#contextual_links'])) {
    unset($build['#contextual_links']);
  }
";}s:35:"hook_block_view_BASE_BLOCK_ID_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:35:"hook_block_view_BASE_BLOCK_ID_alter";s:10:"definition";s:107:"function hook_block_view_BASE_BLOCK_ID_alter(array &$build, \Drupal\Core\Block\BlockPluginInterface $block)";s:11:"description";s:54:"Provide a block plugin specific block_view alteration.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"block";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/block.api.php";s:4:"body";s:96:"
  // Change the title of the specific block.
  $build['#title'] = t('New title of the block');
";}s:22:"hook_block_build_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_block_build_alter";s:10:"definition";s:94:"function hook_block_build_alter(array &$build, \Drupal\Core\Block\BlockPluginInterface $block)";s:11:"description";s:58:"Alter the result of \Drupal\Core\Block\BlockBase::build().";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"block";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/block.api.php";s:4:"body";s:125:"
  // Add the 'user' cache context to some blocks.
  if ($some_condition) {
    $build['#cache']['contexts'][] = 'user';
  }
";}s:36:"hook_block_build_BASE_BLOCK_ID_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:36:"hook_block_build_BASE_BLOCK_ID_alter";s:10:"definition";s:108:"function hook_block_build_BASE_BLOCK_ID_alter(array &$build, \Drupal\Core\Block\BlockPluginInterface $block)";s:11:"description";s:55:"Provide a block plugin specific block_build alteration.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"block";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/block.api.php";s:4:"body";s:102:"
  // Explicitly enable placeholdering of the specific block.
  $build['#create_placeholder'] = TRUE;
";}s:17:"hook_block_access";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:17:"hook_block_access";s:10:"definition";s:121:"function hook_block_access(\Drupal\block\Entity\Block $block, $operation, \Drupal\Core\Session\AccountInterface $account)";s:11:"description";s:35:"Control access to a block instance.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"block";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/block.api.php";s:4:"body";s:366:"
  // Example code that would prevent displaying the 'Powered by Drupal' block in
  // a region different than the footer.
  if ($operation == 'view' && $block->getPluginId() == 'system_powered_by_block') {
    return AccessResult::forbiddenIf($block->getRegion() != 'footer')->addCacheableDependency($block);
  }

  // No opinion.
  return AccessResult::neutral();
";}}s:8:"ckeditor";a:2:{s:31:"hook_ckeditor_plugin_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:31:"hook_ckeditor_plugin_info_alter";s:10:"definition";s:57:"function hook_ckeditor_plugin_info_alter(array &$plugins)";s:11:"description";s:46:"Modify the list of available CKEditor plugins.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:8:"ckeditor";s:4:"core";b:1;s:9:"file_path";s:45:"public://module_builder_data/ckeditor.api.php";s:4:"body";s:55:"
  $plugins['someplugin']['label'] = t('Better name');
";}s:23:"hook_ckeditor_css_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_ckeditor_css_alter";s:10:"definition";s:61:"function hook_ckeditor_css_alter(array &$css, Editor $editor)";s:11:"description";s:71:"Modify the list of CSS files that will be added to a CKEditor instance.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:8:"ckeditor";s:4:"core";b:1;s:9:"file_path";s:45:"public://module_builder_data/ckeditor.api.php";s:4:"body";s:82:"
  $css[] = drupal_get_path('module', 'mymodule') . '/css/mymodule-ckeditor.css';
";}}s:7:"comment";a:1:{s:24:"hook_comment_links_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_comment_links_alter";s:10:"definition";s:91:"function hook_comment_links_alter(array &$links, CommentInterface $entity, array &$context)";s:11:"description";s:29:"Alter the links of a comment.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:7:"comment";s:4:"core";b:1;s:9:"file_path";s:44:"public://module_builder_data/comment.api.php";s:4:"body";s:419:"
  $links['mymodule'] = [
    '#theme' => 'links__comment__mymodule',
    '#attributes' => ['class' => ['links', 'inline']],
    '#links' => [
      'comment-report' => [
        'title' => t('Report'),
        'url' => Url::fromRoute('comment_test.report', ['comment' => $entity->id()], ['query' => ['token' => \Drupal::getContainer()->get('csrf_token')->get("comment/{$entity->id()}/report")]]),
      ],
    ],
  ];
";}}s:10:"contextual";a:1:{s:32:"hook_contextual_links_view_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:32:"hook_contextual_links_view_alter";s:10:"definition";s:60:"function hook_contextual_links_view_alter(&$element, $items)";s:11:"description";s:55:"Alter a contextual links element before it is rendered.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"contextual";s:4:"core";b:1;s:9:"file_path";s:47:"public://module_builder_data/contextual.api.php";s:4:"body";s:143:"
  // Add another class to all contextual link lists to facilitate custom
  // styling.
  $element['#attributes']['class'][] = 'custom-class';
";}}s:9:"core:core";a:14:{s:9:"hook_cron";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:9:"hook_cron";s:10:"definition";s:20:"function hook_cron()";s:11:"description";s:25:"Perform periodic actions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:core";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/core.api.php";s:4:"body";s:1107:"
  // Short-running operation example, not using a queue:
  // Delete all expired records since the last cron run.
  $expires = \Drupal::state()->get('mymodule.last_check', 0);
  \Drupal::database()->delete('mymodule_table')
    ->condition('expires', $expires, '>=')
    ->execute();
  \Drupal::state()->set('mymodule.last_check', REQUEST_TIME);

  // Long-running operation example, leveraging a queue:
  // Queue news feeds for updates once their refresh interval has elapsed.
  $queue = \Drupal::queue('aggregator_feeds');
  $ids = \Drupal::entityManager()->getStorage('aggregator_feed')->getFeedIdsToRefresh();
  foreach (Feed::loadMultiple($ids) as $feed) {
    if ($queue->createItem($feed)) {
      // Add timestamp to avoid queueing item more than once.
      $feed->setQueuedTime(REQUEST_TIME);
      $feed->save();
    }
  }
  $ids = \Drupal::entityQuery('aggregator_feed')
    ->condition('queued', REQUEST_TIME - (3600 * 6), '<')
    ->execute();
  if ($ids) {
    $feeds = Feed::loadMultiple($ids);
    foreach ($feeds as $feed) {
      $feed->setQueuedTime(0);
      $feed->save();
    }
  }
";}s:25:"hook_data_type_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:25:"hook_data_type_info_alter";s:10:"definition";s:48:"function hook_data_type_info_alter(&$data_types)";s:11:"description";s:51:"Alter available data types for typed data wrappers.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:core";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/core.api.php";s:4:"body";s:66:"
  $data_types['email']['class'] = '\Drupal\mymodule\Type\Email';
";}s:21:"hook_queue_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_queue_info_alter";s:10:"definition";s:40:"function hook_queue_info_alter(&$queues)";s:11:"description";s:46:"Alter cron queue information before cron runs.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:core";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/core.api.php";s:4:"body";s:173:"
  // This site has many feeds so let's spend 90 seconds on each cron run
  // updating feeds instead of the default 60.
  $queues['aggregator_feeds']['cron']['time'] = 90;
";}s:15:"hook_mail_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:15:"hook_mail_alter";s:10:"definition";s:35:"function hook_mail_alter(&$message)";s:11:"description";s:65:"Alter an email message created with MailManagerInterface->mail().";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:core";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/core.api.php";s:4:"body";s:369:"
  if ($message['id'] == 'modulename_messagekey') {
    if (!example_notifications_optin($message['to'], $message['id'])) {
      // If the recipient has opted to not receive such messages, cancel
      // sending.
      $message['send'] = FALSE;
      return;
    }
    $message['body'][] = "--\nMail sent out from " . \Drupal::config('system.site')->get('name');
  }
";}s:9:"hook_mail";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:9:"hook_mail";s:10:"definition";s:44:"function hook_mail($key, &$message, $params)";s:11:"description";s:39:"Prepares a message based on parameters;";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:core";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/core.api.php";s:4:"body";s:1336:"
  $account = $params['account'];
  $context = $params['context'];
  $variables = [
    '%site_name' => \Drupal::config('system.site')->get('name'),
    '%username' => $account->getDisplayName(),
  ];
  if ($context['hook'] == 'taxonomy') {
    $entity = $params['entity'];
    $vocabulary = Vocabulary::load($entity->id());
    $variables += [
      '%term_name' => $entity->name,
      '%term_description' => $entity->description,
      '%term_id' => $entity->id(),
      '%vocabulary_name' => $vocabulary->label(),
      '%vocabulary_description' => $vocabulary->getDescription(),
      '%vocabulary_id' => $vocabulary->id(),
    ];
  }

  // Node-based variable translation is only available if we have a node.
  if (isset($params['node'])) {
    /** @var \Drupal\node\NodeInterface $node */
    $node = $params['node'];
    $variables += [
      '%uid' => $node->getOwnerId(),
      '%url' => $node->url('canonical', ['absolute' => TRUE]),
      '%node_type' => node_get_type_label($node),
      '%title' => $node->getTitle(),
      '%teaser' => $node->teaser,
      '%body' => $node->body,
    ];
  }
  $subject = strtr($context['subject'], $variables);
  $body = strtr($context['message'], $variables);
  $message['subject'] .= str_replace(["\r", "\n"], '', $subject);
  $message['body'][] = MailFormatHelper::htmlToText($body);
";}s:28:"hook_mail_backend_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_mail_backend_info_alter";s:10:"definition";s:45:"function hook_mail_backend_info_alter(&$info)";s:11:"description";s:50:"Alter the list of mail backend plugin definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:core";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/core.api.php";s:4:"body";s:40:"
  unset($info['test_mail_collector']);
";}s:20:"hook_countries_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:20:"hook_countries_alter";s:10:"definition";s:42:"function hook_countries_alter(&$countries)";s:11:"description";s:31:"Alter the default country list.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:core";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/core.api.php";s:4:"body";s:97:"
  // Elbonia is now independent, so add it to the country list.
  $countries['EB'] = 'Elbonia';
";}s:33:"hook_display_variant_plugin_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:33:"hook_display_variant_plugin_alter";s:10:"definition";s:63:"function hook_display_variant_plugin_alter(array &$definitions)";s:11:"description";s:41:"Alter display variant plugin definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:core";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/core.api.php";s:4:"body";s:65:"
  $definitions['full_page']['admin_label'] = t('Block layout');
";}s:17:"hook_layout_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:17:"hook_layout_alter";s:10:"definition";s:41:"function hook_layout_alter(&$definitions)";s:11:"description";s:49:"Allow modules to alter layout plugin definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:core";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/core.api.php";s:4:"body";s:56:"
  // Remove a layout.
  unset($definitions['twocol']);
";}s:16:"hook_cache_flush";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:16:"hook_cache_flush";s:10:"definition";s:27:"function hook_cache_flush()";s:11:"description";s:39:"Flush all persistent and static caches.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:core";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/core.api.php";s:4:"body";s:101:"
  if (defined('MAINTENANCE_MODE') && MAINTENANCE_MODE == 'update') {
    _update_cache_clear();
  }
";}s:12:"hook_rebuild";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:12:"hook_rebuild";s:10:"definition";s:23:"function hook_rebuild()";s:11:"description";s:41:"Rebuild data based upon refreshed caches.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:core";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/core.api.php";s:4:"body";s:134:"
  $themes = \Drupal::service('theme_handler')->listInfo();
  foreach ($themes as $theme) {
    _block_rehash($theme->getName());
  }
";}s:30:"hook_config_import_steps_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_config_import_steps_alter";s:10:"definition";s:106:"function hook_config_import_steps_alter(&$sync_steps, \Drupal\Core\Config\ConfigImporter $config_importer)";s:11:"description";s:46:"Alter the configuration synchronization steps.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:1:{i:0;s:24:"callback_batch_operation";}s:5:"group";s:9:"core:core";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/core.api.php";s:4:"body";s:181:"
  $deletes = $config_importer->getUnprocessedConfiguration('delete');
  if (isset($deletes['field.storage.node.body'])) {
    $sync_steps[] = '_additional_configuration_step';
  }
";}s:29:"hook_config_schema_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:29:"hook_config_schema_info_alter";s:10:"definition";s:53:"function hook_config_schema_info_alter(&$definitions)";s:11:"description";s:36:"Alter config typed data definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:core";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/core.api.php";s:4:"body";s:402:"
  // Enhance the text and date type definitions with classes to generate proper
  // form elements in ConfigTranslationFormBase. Other translatable types will
  // appear as a one line textfield.
  $definitions['text']['form_element_class'] = '\Drupal\config_translation\FormElement\Textarea';
  $definitions['date_format']['form_element_class'] = '\Drupal\config_translation\FormElement\DateFormat';
";}s:32:"hook_validation_constraint_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:32:"hook_validation_constraint_alter";s:10:"definition";s:62:"function hook_validation_constraint_alter(array &$definitions)";s:11:"description";s:47:"Alter validation constraint plugin definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:core";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/core.api.php";s:4:"body";s:85:"
  $definitions['Null']['class'] = '\Drupal\mymodule\Validator\Constraints\MyClass';
";}}s:13:"core:database";a:3:{s:16:"hook_query_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:16:"hook_query_alter";s:10:"definition";s:79:"function hook_query_alter(Drupal\Core\Database\Query\AlterableInterface $query)";s:11:"description";s:42:"Perform alterations to a structured query.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:13:"core:database";s:4:"core";b:1;s:9:"file_path";s:45:"public://module_builder_data/database.api.php";s:4:"body";s:69:"
  if ($query->hasTag('micro_limit')) {
    $query->range(0, 2);
  }
";}s:20:"hook_query_TAG_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:20:"hook_query_TAG_alter";s:10:"definition";s:83:"function hook_query_TAG_alter(Drupal\Core\Database\Query\AlterableInterface $query)";s:11:"description";s:58:"Perform alterations to a structured query for a given tag.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:13:"core:database";s:4:"core";b:1;s:9:"file_path";s:45:"public://module_builder_data/database.api.php";s:4:"body";s:1226:"
  // Skip the extra expensive alterations if site has no node access control modules.
  if (!node_access_view_all_nodes()) {
    // Prevent duplicates records.
    $query->distinct();
    // The recognized operations are 'view', 'update', 'delete'.
    if (!$op = $query->getMetaData('op')) {
      $op = 'view';
    }
    // Skip the extra joins and conditions for node admins.
    if (!\Drupal::currentUser()->hasPermission('bypass node access')) {
      // The node_access table has the access grants for any given node.
      $access_alias = $query->join('node_access', 'na', '%alias.nid = n.nid');
      $or = new Condition('OR');
      // If any grant exists for the specified user, then user has access to the node for the specified operation.
      foreach (node_access_grants($op, $query->getMetaData('account')) as $realm => $gids) {
        foreach ($gids as $gid) {
          $or->condition((new Condition('AND'))
            ->condition($access_alias . '.gid', $gid)
            ->condition($access_alias . '.realm', $realm)
          );
        }
      }

      if (count($or->conditions())) {
        $query->condition($or);
      }

      $query->condition($access_alias . 'grant_' . $op, 1, '>=');
    }
  }
";}s:11:"hook_schema";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:11:"hook_schema";s:10:"definition";s:22:"function hook_schema()";s:11:"description";s:50:"Define the current version of the database schema.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:13:"core:database";s:4:"core";b:1;s:9:"file_path";s:45:"public://module_builder_data/database.api.php";s:4:"body";s:1510:"
  $schema['node'] = [
    // Example (partial) specification for table "node".
    'description' => 'The base table for nodes.',
    'fields' => [
      'nid' => [
        'description' => 'The primary identifier for a node.',
        'type' => 'serial',
        'unsigned' => TRUE,
        'not null' => TRUE,
      ],
      'vid' => [
        'description' => 'The current {node_field_revision}.vid version identifier.',
        'type' => 'int',
        'unsigned' => TRUE,
        'not null' => TRUE,
        'default' => 0,
      ],
      'type' => [
        'description' => 'The type of this node.',
        'type' => 'varchar',
        'length' => 32,
        'not null' => TRUE,
        'default' => '',
      ],
      'title' => [
        'description' => 'The node title.',
        'type' => 'varchar',
        'length' => 255,
        'not null' => TRUE,
        'default' => '',
      ],
    ],
    'indexes' => [
      'node_changed'        => ['changed'],
      'node_created'        => ['created'],
    ],
    'unique keys' => [
      'nid_vid' => ['nid', 'vid'],
      'vid'     => ['vid'],
    ],
    // For documentation purposes only; foreign keys are not created in the
    // database.
    'foreign keys' => [
      'node_revision' => [
        'table' => 'node_field_revision',
        'columns' => ['vid' => 'vid'],
      ],
      'node_author' => [
        'table' => 'users',
        'columns' => ['uid' => 'uid'],
      ],
    ],
    'primary key' => ['nid'],
  ];
  return $schema;
";}}s:11:"core:entity";a:62:{s:18:"hook_entity_access";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:18:"hook_entity_access";s:10:"definition";s:132:"function hook_entity_access(\Drupal\Core\Entity\EntityInterface $entity, $operation, \Drupal\Core\Session\AccountInterface $account)";s:11:"description";s:32:"Control entity operation access.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:52:"
  // No opinion.
  return AccessResult::neutral();
";}s:23:"hook_ENTITY_TYPE_access";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_ENTITY_TYPE_access";s:10:"definition";s:137:"function hook_ENTITY_TYPE_access(\Drupal\Core\Entity\EntityInterface $entity, $operation, \Drupal\Core\Session\AccountInterface $account)";s:11:"description";s:59:"Control entity operation access for a specific entity type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:52:"
  // No opinion.
  return AccessResult::neutral();
";}s:25:"hook_entity_create_access";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:25:"hook_entity_create_access";s:10:"definition";s:114:"function hook_entity_create_access(\Drupal\Core\Session\AccountInterface $account, array $context, $entity_bundle)";s:11:"description";s:29:"Control entity create access.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:52:"
  // No opinion.
  return AccessResult::neutral();
";}s:30:"hook_ENTITY_TYPE_create_access";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_ENTITY_TYPE_create_access";s:10:"definition";s:119:"function hook_ENTITY_TYPE_create_access(\Drupal\Core\Session\AccountInterface $account, array $context, $entity_bundle)";s:11:"description";s:56:"Control entity create access for a specific entity type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:52:"
  // No opinion.
  return AccessResult::neutral();
";}s:22:"hook_entity_type_build";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_entity_type_build";s:10:"definition";s:53:"function hook_entity_type_build(array &$entity_types)";s:11:"description";s:31:"Add to entity type definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:308:"
  /** @var $entity_types \Drupal\Core\Entity\EntityTypeInterface[] */
  // Add a form for a custom node form without overriding the default
  // node form. To override the default node form, use hook_entity_type_alter().
  $entity_types['node']->setFormClass('mymodule_foo', 'Drupal\mymodule\NodeFooForm');
";}s:22:"hook_entity_type_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_entity_type_alter";s:10:"definition";s:53:"function hook_entity_type_alter(array &$entity_types)";s:11:"description";s:34:"Alter the entity type definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:288:"
  /** @var $entity_types \Drupal\Core\Entity\EntityTypeInterface[] */
  // Set the controller class for nodes to an alternate implementation of the
  // Drupal\Core\Entity\EntityStorageInterface interface.
  $entity_types['node']->setStorageClass('Drupal\mymodule\MyCustomNodeStorage');
";}s:32:"hook_entity_view_mode_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:32:"hook_entity_view_mode_info_alter";s:10:"definition";s:55:"function hook_entity_view_mode_info_alter(&$view_modes)";s:11:"description";s:38:"Alter the view modes for entity types.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:49:"
  $view_modes['user']['full']['status'] = TRUE;
";}s:23:"hook_entity_bundle_info";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_entity_bundle_info";s:10:"definition";s:34:"function hook_entity_bundle_info()";s:11:"description";s:38:"Describe the bundles for entity types.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:69:"
  $bundles['user']['user']['label'] = t('User');
  return $bundles;
";}s:29:"hook_entity_bundle_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:29:"hook_entity_bundle_info_alter";s:10:"definition";s:49:"function hook_entity_bundle_info_alter(&$bundles)";s:11:"description";s:35:"Alter the bundles for entity types.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:58:"
  $bundles['user']['user']['label'] = t('Full account');
";}s:25:"hook_entity_bundle_create";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:25:"hook_entity_bundle_create";s:10:"definition";s:60:"function hook_entity_bundle_create($entity_type_id, $bundle)";s:11:"description";s:30:"Act on entity_bundle_create().";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:164:"
  // When a new bundle is created, the menu needs to be rebuilt to add the
  // Field UI menu item tabs.
  \Drupal::service('router.builder')->setRebuildNeeded();
";}s:25:"hook_entity_bundle_delete";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:25:"hook_entity_bundle_delete";s:10:"definition";s:60:"function hook_entity_bundle_delete($entity_type_id, $bundle)";s:11:"description";s:30:"Act on entity_bundle_delete().";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:354:"
  // Remove the settings associated with the bundle in my_module.settings.
  $config = \Drupal::config('my_module.settings');
  $bundle_settings = $config->get('bundle_settings');
  if (isset($bundle_settings[$entity_type_id][$bundle])) {
    unset($bundle_settings[$entity_type_id][$bundle]);
    $config->set('bundle_settings', $bundle_settings);
  }
";}s:18:"hook_entity_create";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:18:"hook_entity_create";s:10:"definition";s:72:"function hook_entity_create(\Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:32:"Acts when creating a new entity.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:95:"
  \Drupal::logger('example')->info('Entity created: @label', ['@label' => $entity->label()]);
";}s:23:"hook_ENTITY_TYPE_create";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_ENTITY_TYPE_create";s:10:"definition";s:77:"function hook_ENTITY_TYPE_create(\Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:51:"Acts when creating a new entity of a specific type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:100:"
  \Drupal::logger('example')->info('ENTITY_TYPE created: @label', ['@label' => $entity->label()]);
";}s:16:"hook_entity_load";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:16:"hook_entity_load";s:10:"definition";s:59:"function hook_entity_load(array $entities, $entity_type_id)";s:11:"description";s:28:"Act on entities when loaded.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:92:"
  foreach ($entities as $entity) {
    $entity->foo = mymodule_add_something($entity);
  }
";}s:21:"hook_ENTITY_TYPE_load";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_ENTITY_TYPE_load";s:10:"definition";s:41:"function hook_ENTITY_TYPE_load($entities)";s:11:"description";s:47:"Act on entities of a specific type when loaded.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:92:"
  foreach ($entities as $entity) {
    $entity->foo = mymodule_add_something($entity);
  }
";}s:24:"hook_entity_storage_load";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_entity_storage_load";s:10:"definition";s:64:"function hook_entity_storage_load(array $entities, $entity_type)";s:11:"description";s:53:"Act on content entities when loaded from the storage.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:101:"
  foreach ($entities as $entity) {
    $entity->foo = mymodule_add_something_uncached($entity);
  }
";}s:29:"hook_ENTITY_TYPE_storage_load";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:29:"hook_ENTITY_TYPE_storage_load";s:10:"definition";s:55:"function hook_ENTITY_TYPE_storage_load(array $entities)";s:11:"description";s:69:"Act on content entities of a given type when loaded from the storage.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:101:"
  foreach ($entities as $entity) {
    $entity->foo = mymodule_add_something_uncached($entity);
  }
";}s:19:"hook_entity_presave";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:19:"hook_entity_presave";s:10:"definition";s:72:"function hook_entity_presave(Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:49:"Act on an entity before it is created or updated.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:290:"
  if ($entity instanceof ContentEntityInterface && $entity->isTranslatable()) {
    $route_match = \Drupal::routeMatch();
    \Drupal::service('content_translation.synchronizer')->synchronizeFields($entity, $entity->language()->getId(), $route_match->getParameter('source_langcode'));
  }
";}s:24:"hook_ENTITY_TYPE_presave";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_ENTITY_TYPE_presave";s:10:"definition";s:77:"function hook_ENTITY_TYPE_presave(Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:65:"Act on a specific type of entity before it is created or updated.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:245:"
  if ($entity->isTranslatable()) {
    $route_match = \Drupal::routeMatch();
    \Drupal::service('content_translation.synchronizer')->synchronizeFields($entity, $entity->language()->getId(), $route_match->getParameter('source_langcode'));
  }
";}s:18:"hook_entity_insert";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:18:"hook_entity_insert";s:10:"definition";s:71:"function hook_entity_insert(Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:36:"Respond to creation of a new entity.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:276:"
  // Insert the new entity into a fictional table of all entities.
  db_insert('example_entity')
    ->fields([
      'type' => $entity->getEntityTypeId(),
      'id' => $entity->id(),
      'created' => REQUEST_TIME,
      'updated' => REQUEST_TIME,
    ])
    ->execute();
";}s:23:"hook_ENTITY_TYPE_insert";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_ENTITY_TYPE_insert";s:10:"definition";s:76:"function hook_ENTITY_TYPE_insert(Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:57:"Respond to creation of a new entity of a particular type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:239:"
  // Insert the new entity into a fictional table of this type of entity.
  db_insert('example_entity')
    ->fields([
      'id' => $entity->id(),
      'created' => REQUEST_TIME,
      'updated' => REQUEST_TIME,
    ])
    ->execute();
";}s:18:"hook_entity_update";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:18:"hook_entity_update";s:10:"definition";s:71:"function hook_entity_update(Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:32:"Respond to updates to an entity.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:261:"
  // Update the entity's entry in a fictional table of all entities.
  db_update('example_entity')
    ->fields([
      'updated' => REQUEST_TIME,
    ])
    ->condition('type', $entity->getEntityTypeId())
    ->condition('id', $entity->id())
    ->execute();
";}s:23:"hook_ENTITY_TYPE_update";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_ENTITY_TYPE_update";s:10:"definition";s:76:"function hook_ENTITY_TYPE_update(Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:53:"Respond to updates to an entity of a particular type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:216:"
  // Update the entity's entry in a fictional table of this type of entity.
  db_update('example_entity')
    ->fields([
      'updated' => REQUEST_TIME,
    ])
    ->condition('id', $entity->id())
    ->execute();
";}s:30:"hook_entity_translation_create";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_entity_translation_create";s:10:"definition";s:89:"function hook_entity_translation_create(\Drupal\Core\Entity\EntityInterface $translation)";s:11:"description";s:44:"Acts when creating a new entity translation.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:112:"
  \Drupal::logger('example')->info('Entity translation created: @label', ['@label' => $translation->label()]);
";}s:35:"hook_ENTITY_TYPE_translation_create";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:35:"hook_ENTITY_TYPE_translation_create";s:10:"definition";s:94:"function hook_ENTITY_TYPE_translation_create(\Drupal\Core\Entity\EntityInterface $translation)";s:11:"description";s:63:"Acts when creating a new entity translation of a specific type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:117:"
  \Drupal::logger('example')->info('ENTITY_TYPE translation created: @label', ['@label' => $translation->label()]);
";}s:30:"hook_entity_translation_insert";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_entity_translation_insert";s:10:"definition";s:89:"function hook_entity_translation_insert(\Drupal\Core\Entity\EntityInterface $translation)";s:11:"description";s:48:"Respond to creation of a new entity translation.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:248:"
  $variables = [
    '@language' => $translation->language()->getName(),
    '@label' => $translation->getUntranslated()->label(),
  ];
  \Drupal::logger('example')->notice('The @language translation of @label has just been stored.', $variables);
";}s:35:"hook_ENTITY_TYPE_translation_insert";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:35:"hook_ENTITY_TYPE_translation_insert";s:10:"definition";s:94:"function hook_ENTITY_TYPE_translation_insert(\Drupal\Core\Entity\EntityInterface $translation)";s:11:"description";s:69:"Respond to creation of a new entity translation of a particular type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:248:"
  $variables = [
    '@language' => $translation->language()->getName(),
    '@label' => $translation->getUntranslated()->label(),
  ];
  \Drupal::logger('example')->notice('The @language translation of @label has just been stored.', $variables);
";}s:30:"hook_entity_translation_delete";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_entity_translation_delete";s:10:"definition";s:89:"function hook_entity_translation_delete(\Drupal\Core\Entity\EntityInterface $translation)";s:11:"description";s:39:"Respond to entity translation deletion.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:230:"
  $variables = [
    '@language' => $translation->language()->getName(),
    '@label' => $translation->label(),
  ];
  \Drupal::logger('example')->notice('The @language translation of @label has just been deleted.', $variables);
";}s:35:"hook_ENTITY_TYPE_translation_delete";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:35:"hook_ENTITY_TYPE_translation_delete";s:10:"definition";s:94:"function hook_ENTITY_TYPE_translation_delete(\Drupal\Core\Entity\EntityInterface $translation)";s:11:"description";s:60:"Respond to entity translation deletion of a particular type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:230:"
  $variables = [
    '@language' => $translation->language()->getName(),
    '@label' => $translation->label(),
  ];
  \Drupal::logger('example')->notice('The @language translation of @label has just been deleted.', $variables);
";}s:21:"hook_entity_predelete";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_entity_predelete";s:10:"definition";s:74:"function hook_entity_predelete(Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:27:"Act before entity deletion.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:547:"
  // Count references to this entity in a custom table before they are removed
  // upon entity deletion.
  $id = $entity->id();
  $type = $entity->getEntityTypeId();
  $count = db_select('example_entity_data')
    ->condition('type', $type)
    ->condition('id', $id)
    ->countQuery()
    ->execute()
    ->fetchField();

  // Log the count in a table that records this statistic for deleted entities.
  db_merge('example_deleted_entity_statistics')
    ->key(['type' => $type, 'id' => $id])
    ->fields(['count' => $count])
    ->execute();
";}s:26:"hook_ENTITY_TYPE_predelete";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:26:"hook_ENTITY_TYPE_predelete";s:10:"definition";s:79:"function hook_ENTITY_TYPE_predelete(Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:55:"Act before entity deletion of a particular entity type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:547:"
  // Count references to this entity in a custom table before they are removed
  // upon entity deletion.
  $id = $entity->id();
  $type = $entity->getEntityTypeId();
  $count = db_select('example_entity_data')
    ->condition('type', $type)
    ->condition('id', $id)
    ->countQuery()
    ->execute()
    ->fetchField();

  // Log the count in a table that records this statistic for deleted entities.
  db_merge('example_deleted_entity_statistics')
    ->key(['type' => $type, 'id' => $id])
    ->fields(['count' => $count])
    ->execute();
";}s:18:"hook_entity_delete";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:18:"hook_entity_delete";s:10:"definition";s:71:"function hook_entity_delete(Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:27:"Respond to entity deletion.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:208:"
  // Delete the entity's entry from a fictional table of all entities.
  db_delete('example_entity')
    ->condition('type', $entity->getEntityTypeId())
    ->condition('id', $entity->id())
    ->execute();
";}s:23:"hook_ENTITY_TYPE_delete";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_ENTITY_TYPE_delete";s:10:"definition";s:76:"function hook_ENTITY_TYPE_delete(Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:48:"Respond to entity deletion of a particular type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:208:"
  // Delete the entity's entry from a fictional table of all entities.
  db_delete('example_entity')
    ->condition('type', $entity->getEntityTypeId())
    ->condition('id', $entity->id())
    ->execute();
";}s:27:"hook_entity_revision_delete";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_entity_revision_delete";s:10:"definition";s:80:"function hook_entity_revision_delete(Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:36:"Respond to entity revision deletion.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:190:"
  $referenced_files_by_field = _editor_get_file_uuids_by_field($entity);
  foreach ($referenced_files_by_field as $field => $uuids) {
    _editor_delete_file_usage($uuids, $entity, 1);
  }
";}s:32:"hook_ENTITY_TYPE_revision_delete";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:32:"hook_ENTITY_TYPE_revision_delete";s:10:"definition";s:85:"function hook_ENTITY_TYPE_revision_delete(Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:57:"Respond to entity revision deletion of a particular type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:190:"
  $referenced_files_by_field = _editor_get_file_uuids_by_field($entity);
  foreach ($referenced_files_by_field as $field => $uuids) {
    _editor_delete_file_usage($uuids, $entity, 1);
  }
";}s:16:"hook_entity_view";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:16:"hook_entity_view";s:10:"definition";s:162:"function hook_entity_view(array &$build, \Drupal\Core\Entity\EntityInterface $entity, \Drupal\Core\Entity\Display\EntityViewDisplayInterface $display, $view_mode)";s:11:"description";s:49:"Act on entities being assembled before rendering.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:405:"
  // Only do the extra work if the component is configured to be displayed.
  // This assumes a 'mymodule_addition' extra field has been defined for the
  // entity bundle in hook_entity_extra_field_info().
  if ($display->getComponent('mymodule_addition')) {
    $build['mymodule_addition'] = [
      '#markup' => mymodule_addition($entity),
      '#theme' => 'mymodule_my_additional_field',
    ];
  }
";}s:21:"hook_ENTITY_TYPE_view";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_ENTITY_TYPE_view";s:10:"definition";s:167:"function hook_ENTITY_TYPE_view(array &$build, \Drupal\Core\Entity\EntityInterface $entity, \Drupal\Core\Entity\Display\EntityViewDisplayInterface $display, $view_mode)";s:11:"description";s:70:"Act on entities of a particular type being assembled before rendering.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:405:"
  // Only do the extra work if the component is configured to be displayed.
  // This assumes a 'mymodule_addition' extra field has been defined for the
  // entity bundle in hook_entity_extra_field_info().
  if ($display->getComponent('mymodule_addition')) {
    $build['mymodule_addition'] = [
      '#markup' => mymodule_addition($entity),
      '#theme' => 'mymodule_my_additional_field',
    ];
  }
";}s:22:"hook_entity_view_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_entity_view_alter";s:10:"definition";s:155:"function hook_entity_view_alter(array &$build, Drupal\Core\Entity\EntityInterface $entity, \Drupal\Core\Entity\Display\EntityViewDisplayInterface $display)";s:11:"description";s:44:"Alter the results of the entity build array.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:303:"
  if ($build['#view_mode'] == 'full' && isset($build['an_additional_field'])) {
    // Change its weight.
    $build['an_additional_field']['#weight'] = -10;

    // Add a #post_render callback to act on the rendered HTML of the entity.
    $build['#post_render'][] = 'my_module_node_post_render';
  }
";}s:27:"hook_ENTITY_TYPE_view_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_ENTITY_TYPE_view_alter";s:10:"definition";s:160:"function hook_ENTITY_TYPE_view_alter(array &$build, Drupal\Core\Entity\EntityInterface $entity, \Drupal\Core\Entity\Display\EntityViewDisplayInterface $display)";s:11:"description";s:73:"Alter the results of the entity build array for a particular entity type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:303:"
  if ($build['#view_mode'] == 'full' && isset($build['an_additional_field'])) {
    // Change its weight.
    $build['an_additional_field']['#weight'] = -10;

    // Add a #post_render callback to act on the rendered HTML of the entity.
    $build['#post_render'][] = 'my_module_node_post_render';
  }
";}s:24:"hook_entity_prepare_view";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_entity_prepare_view";s:10:"definition";s:96:"function hook_entity_prepare_view($entity_type_id, array $entities, array $displays, $view_mode)";s:11:"description";s:52:"Act on entities as they are being prepared for view.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:667:"
  // Load a specific node into the user object for later theming.
  if (!empty($entities) && $entity_type_id == 'user') {
    // Only do the extra work if the component is configured to be
    // displayed. This assumes a 'mymodule_addition' extra field has been
    // defined for the entity bundle in hook_entity_extra_field_info().
    $ids = [];
    foreach ($entities as $id => $entity) {
      if ($displays[$entity->bundle()]->getComponent('mymodule_addition')) {
        $ids[] = $id;
      }
    }
    if ($ids) {
      $nodes = mymodule_get_user_nodes($ids);
      foreach ($ids as $id) {
        $entities[$id]->user_node = $nodes[$id];
      }
    }
  }
";}s:27:"hook_entity_view_mode_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_entity_view_mode_alter";s:10:"definition";s:103:"function hook_entity_view_mode_alter(&$view_mode, Drupal\Core\Entity\EntityInterface $entity, $context)";s:11:"description";s:58:"Change the view mode of an entity that is being displayed.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:173:"
  // For nodes, change the view mode when it is teaser.
  if ($entity->getEntityTypeId() == 'node' && $view_mode == 'teaser') {
    $view_mode = 'my_custom_view_mode';
  }
";}s:37:"hook_ENTITY_TYPE_build_defaults_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:37:"hook_ENTITY_TYPE_build_defaults_alter";s:10:"definition";s:118:"function hook_ENTITY_TYPE_build_defaults_alter(array &$build, \Drupal\Core\Entity\EntityInterface $entity, $view_mode)";s:11:"description";s:72:"Alter entity renderable values before cache checking in drupal_render().";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:2:"

";}s:32:"hook_entity_build_defaults_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:32:"hook_entity_build_defaults_alter";s:10:"definition";s:113:"function hook_entity_build_defaults_alter(array &$build, \Drupal\Core\Entity\EntityInterface $entity, $view_mode)";s:11:"description";s:72:"Alter entity renderable values before cache checking in drupal_render().";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:2:"

";}s:30:"hook_entity_view_display_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_entity_view_display_alter";s:10:"definition";s:120:"function hook_entity_view_display_alter(\Drupal\Core\Entity\Display\EntityViewDisplayInterface $display, array $context)";s:11:"description";s:49:"Alter the settings used for displaying an entity.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:342:"
  // Leave field labels out of the search index.
  if ($context['entity_type'] == 'node' && $context['view_mode'] == 'search_index') {
    foreach ($display->getComponents() as $name => $options) {
      if (isset($options['label'])) {
        $options['label'] = 'hidden';
        $display->setComponent($name, $options);
      }
    }
  }
";}s:31:"hook_entity_display_build_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:31:"hook_entity_display_build_alter";s:10:"definition";s:59:"function hook_entity_display_build_alter(&$build, $context)";s:11:"description";s:67:"Alter the render array generated by an EntityDisplay for an entity.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:710:"
  // Append RDF term mappings on displayed taxonomy links.
  foreach (Element::children($build) as $field_name) {
    $element = &$build[$field_name];
    if ($element['#field_type'] == 'entity_reference' && $element['#formatter'] == 'entity_reference_label') {
      foreach ($element['#items'] as $delta => $item) {
        $term = $item->entity;
        if (!empty($term->rdf_mapping['rdftype'])) {
          $element[$delta]['#options']['attributes']['typeof'] = $term->rdf_mapping['rdftype'];
        }
        if (!empty($term->rdf_mapping['name']['predicates'])) {
          $element[$delta]['#options']['attributes']['property'] = $term->rdf_mapping['name']['predicates'];
        }
      }
    }
  }
";}s:24:"hook_entity_prepare_form";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_entity_prepare_form";s:10:"definition";s:140:"function hook_entity_prepare_form(\Drupal\Core\Entity\EntityInterface $entity, $operation, \Drupal\Core\Form\FormStateInterface $form_state)";s:11:"description";s:61:"Acts on an entity object about to be shown on an entity form.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:125:"
  if ($operation == 'edit') {
    $entity->label->value = 'Altered label';
    $form_state->set('label_altered', TRUE);
  }
";}s:29:"hook_ENTITY_TYPE_prepare_form";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:29:"hook_ENTITY_TYPE_prepare_form";s:10:"definition";s:145:"function hook_ENTITY_TYPE_prepare_form(\Drupal\Core\Entity\EntityInterface $entity, $operation, \Drupal\Core\Form\FormStateInterface $form_state)";s:11:"description";s:73:"Acts on a particular type of entity object about to be in an entity form.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:125:"
  if ($operation == 'edit') {
    $entity->label->value = 'Altered label';
    $form_state->set('label_altered', TRUE);
  }
";}s:30:"hook_entity_form_display_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_entity_form_display_alter";s:10:"definition";s:125:"function hook_entity_form_display_alter(\Drupal\Core\Entity\Display\EntityFormDisplayInterface $form_display, array $context)";s:11:"description";s:54:"Alter the settings used for displaying an entity form.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:232:"
  // Hide the 'user_picture' field from the register form.
  if ($context['entity_type'] == 'user' && $context['form_mode'] == 'register') {
    $form_display->setComponent('user_picture', [
      'region' => 'hidden',
    ]);
  }
";}s:27:"hook_entity_base_field_info";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_entity_base_field_info";s:10:"definition";s:90:"function hook_entity_base_field_info(\Drupal\Core\Entity\EntityTypeInterface $entity_type)";s:11:"description";s:65:"Provides custom base field definitions for a content entity type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:330:"
  if ($entity_type->id() == 'node') {
    $fields = [];
    $fields['mymodule_text'] = BaseFieldDefinition::create('string')
      ->setLabel(t('The text'))
      ->setDescription(t('A text property added by mymodule.'))
      ->setComputed(TRUE)
      ->setClass('\Drupal\mymodule\EntityComputedText');

    return $fields;
  }
";}s:33:"hook_entity_base_field_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:33:"hook_entity_base_field_info_alter";s:10:"definition";s:106:"function hook_entity_base_field_info_alter(&$fields, \Drupal\Core\Entity\EntityTypeInterface $entity_type)";s:11:"description";s:55:"Alter base field definitions for a content entity type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:221:"
  // Alter the mymodule_text field to use a custom class.
  if ($entity_type->id() == 'node' && !empty($fields['mymodule_text'])) {
    $fields['mymodule_text']->setClass('\Drupal\anothermodule\EntityComputedText');
  }
";}s:29:"hook_entity_bundle_field_info";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:29:"hook_entity_bundle_field_info";s:10:"definition";s:132:"function hook_entity_bundle_field_info(\Drupal\Core\Entity\EntityTypeInterface $entity_type, $bundle, array $base_field_definitions)";s:11:"description";s:71:"Provides field definitions for a specific bundle within an entity type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:358:"
  // Add a property only to nodes of the 'article' bundle.
  if ($entity_type->id() == 'node' && $bundle == 'article') {
    $fields = [];
    $fields['mymodule_text_more'] = BaseFieldDefinition::create('string')
      ->setLabel(t('More text'))
      ->setComputed(TRUE)
      ->setClass('\Drupal\mymodule\EntityComputedMoreText');
    return $fields;
  }
";}s:35:"hook_entity_bundle_field_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:35:"hook_entity_bundle_field_info_alter";s:10:"definition";s:117:"function hook_entity_bundle_field_info_alter(&$fields, \Drupal\Core\Entity\EntityTypeInterface $entity_type, $bundle)";s:11:"description";s:31:"Alter bundle field definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:247:"
  if ($entity_type->id() == 'node' && $bundle == 'article' && !empty($fields['mymodule_text'])) {
    // Alter the mymodule_text field to use a custom class.
    $fields['mymodule_text']->setClass('\Drupal\anothermodule\EntityComputedText');
  }
";}s:30:"hook_entity_field_storage_info";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_entity_field_storage_info";s:10:"definition";s:93:"function hook_entity_field_storage_info(\Drupal\Core\Entity\EntityTypeInterface $entity_type)";s:11:"description";s:61:"Provides field storage definitions for a content entity type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:655:"
  if (\Drupal::entityManager()->getStorage($entity_type->id()) instanceof DynamicallyFieldableEntityStorageInterface) {
    // Query by filtering on the ID as this is more efficient than filtering
    // on the entity_type property directly.
    $ids = \Drupal::entityQuery('field_storage_config')
      ->condition('id', $entity_type->id() . '.', 'STARTS_WITH')
      ->execute();
    // Fetch all fields and key them by field name.
    $field_storages = FieldStorageConfig::loadMultiple($ids);
    $result = [];
    foreach ($field_storages as $field_storage) {
      $result[$field_storage->getName()] = $field_storage;
    }

    return $result;
  }
";}s:36:"hook_entity_field_storage_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:36:"hook_entity_field_storage_info_alter";s:10:"definition";s:109:"function hook_entity_field_storage_info_alter(&$fields, \Drupal\Core\Entity\EntityTypeInterface $entity_type)";s:11:"description";s:58:"Alter field storage definitions for a content entity type.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:175:"
  // Alter the max_length setting.
  if ($entity_type->id() == 'node' && !empty($fields['mymodule_text'])) {
    $fields['mymodule_text']->setSetting('max_length', 128);
  }
";}s:21:"hook_entity_operation";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_entity_operation";s:10:"definition";s:75:"function hook_entity_operation(\Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:27:"Declares entity operations.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:204:"
  $operations = [];
  $operations['translate'] = [
    'title' => t('Translate'),
    'url' => \Drupal\Core\Url::fromRoute('foo_module.entity.translate'),
    'weight' => 50,
  ];

  return $operations;
";}s:27:"hook_entity_operation_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_entity_operation_alter";s:10:"definition";s:101:"function hook_entity_operation_alter(array &$operations, \Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:24:"Alter entity operations.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:201:"
  // Alter the title and weight.
  $operations['translate']['title'] = t('Translate @entity_type', [
    '@entity_type' => $entity->getEntityTypeId(),
  ]);
  $operations['translate']['weight'] = 99;
";}s:24:"hook_entity_field_access";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_entity_field_access";s:10:"definition";s:213:"function hook_entity_field_access($operation, \Drupal\Core\Field\FieldDefinitionInterface $field_definition, \Drupal\Core\Session\AccountInterface $account, \Drupal\Core\Field\FieldItemListInterface $items = NULL)";s:11:"description";s:25:"Control access to fields.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:211:"
  if ($field_definition->getName() == 'field_of_interest' && $operation == 'edit') {
    return AccessResult::allowedIfHasPermission($account, 'update field of interest');
  }
  return AccessResult::neutral();
";}s:30:"hook_entity_field_access_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_entity_field_access_alter";s:10:"definition";s:71:"function hook_entity_field_access_alter(array &$grants, array $context)";s:11:"description";s:52:"Alter the default access behavior for a given field.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:758:"
  /** @var \Drupal\Core\Field\FieldDefinitionInterface $field_definition */
  $field_definition = $context['field_definition'];
  if ($field_definition->getName() == 'field_of_interest' && $grants['node']->isForbidden()) {
    // Override node module's restriction to no opinion (neither allowed nor
    // forbidden). We don't want to provide our own access hook, we only want to
    // take out node module's part in the access handling of this field. We also
    // don't want to switch node module's grant to
    // AccessResultInterface::isAllowed() , because the grants of other modules
    // should still decide on their own if this field is accessible or not
    $grants['node'] = AccessResult::neutral()->inheritCacheability($grants['node']);
  }
";}s:29:"hook_entity_field_values_init";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:29:"hook_entity_field_values_init";s:10:"definition";s:92:"function hook_entity_field_values_init(\Drupal\Core\Entity\FieldableEntityInterface $entity)";s:11:"description";s:49:"Acts when initializing a fieldable entity object.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:148:"
  if ($entity instanceof \Drupal\Core\Entity\ContentEntityInterface && !$entity->foo->value) {
    $entity->foo->value = 'some_initial_value';
  }
";}s:34:"hook_ENTITY_TYPE_field_values_init";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:34:"hook_ENTITY_TYPE_field_values_init";s:10:"definition";s:97:"function hook_ENTITY_TYPE_field_values_init(\Drupal\Core\Entity\FieldableEntityInterface $entity)";s:11:"description";s:49:"Acts when initializing a fieldable entity object.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:83:"
  if (!$entity->foo->value) {
    $entity->foo->value = 'some_initial_value';
  }
";}s:28:"hook_entity_extra_field_info";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_entity_extra_field_info";s:10:"definition";s:39:"function hook_entity_extra_field_info()";s:11:"description";s:54:"Exposes "pseudo-field" components on content entities.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:988:"
  $extra = [];
  $module_language_enabled = \Drupal::moduleHandler()->moduleExists('language');
  $description = t('Node module element');

  foreach (NodeType::loadMultiple() as $bundle) {

    // Add also the 'language' select if Language module is enabled and the
    // bundle has multilingual support.
    // Visibility of the ordering of the language selector is the same as on the
    // node/add form.
    if ($module_language_enabled) {
      $configuration = ContentLanguageSettings::loadByEntityTypeBundle('node', $bundle->id());
      if ($configuration->isLanguageAlterable()) {
        $extra['node'][$bundle->id()]['form']['language'] = [
          'label' => t('Language'),
          'description' => $description,
          'weight' => 0,
        ];
      }
    }
    $extra['node'][$bundle->id()]['display']['language'] = [
      'label' => t('Language'),
      'description' => $description,
      'weight' => 0,
      'visible' => FALSE,
    ];
  }

  return $extra;
";}s:34:"hook_entity_extra_field_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:34:"hook_entity_extra_field_info_alter";s:10:"definition";s:51:"function hook_entity_extra_field_info_alter(&$info)";s:11:"description";s:52:"Alter "pseudo-field" components on content entities.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:entity";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/entity.api.php";s:4:"body";s:264:"
  // Force node title to always be at the top of the list by default.
  foreach (NodeType::loadMultiple() as $bundle) {
    if (isset($info['node'][$bundle->id()]['form']['title'])) {
      $info['node'][$bundle->id()]['form']['title']['weight'] = -20;
    }
  }
";}}s:9:"core:file";a:6:{s:18:"hook_file_download";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:18:"hook_file_download";s:10:"definition";s:33:"function hook_file_download($uri)";s:11:"description";s:66:"Control access to private file downloads and specify HTTP headers.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:file";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/file.api.php";s:4:"body";s:276:"
  // Check to see if this is a config download.
  $scheme = file_uri_scheme($uri);
  $target = file_uri_target($uri);
  if ($scheme == 'temporary' && $target == 'config.tar.gz') {
    return [
      'Content-disposition' => 'attachment; filename="config.tar.gz"',
    ];
  }
";}s:19:"hook_file_url_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:19:"hook_file_url_alter";s:10:"definition";s:35:"function hook_file_url_alter(&$uri)";s:11:"description";s:24:"Alter the URL to a file.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:file";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/file.api.php";s:4:"body";s:1244:"
  $user = \Drupal::currentUser();

  // User 1 will always see the local file in this example.
  if ($user->id() == 1) {
    return;
  }

  $cdn1 = 'http://cdn1.example.com';
  $cdn2 = 'http://cdn2.example.com';
  $cdn_extensions = ['css', 'js', 'gif', 'jpg', 'jpeg', 'png'];

  // Most CDNs don't support private file transfers without a lot of hassle,
  // so don't support this in the common case.
  $schemes = ['public'];

  $scheme = file_uri_scheme($uri);

  // Only serve shipped files and public created files from the CDN.
  if (!$scheme || in_array($scheme, $schemes)) {
    // Shipped files.
    if (!$scheme) {
      $path = $uri;
    }
    // Public created files.
    else {
      $wrapper = \Drupal::service('stream_wrapper_manager')->getViaScheme($scheme);
      $path = $wrapper->getDirectoryPath() . '/' . file_uri_target($uri);
    }

    // Clean up Windows paths.
    $path = str_replace('\\', '/', $path);

    // Serve files with one of the CDN extensions from CDN 1, all others from
    // CDN 2.
    $pathinfo = pathinfo($path);
    if (isset($pathinfo['extension']) && in_array($pathinfo['extension'], $cdn_extensions)) {
      $uri = $cdn1 . '/' . $path;
    }
    else {
      $uri = $cdn2 . '/' . $path;
    }
  }
";}s:32:"hook_file_mimetype_mapping_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:32:"hook_file_mimetype_mapping_alter";s:10:"definition";s:52:"function hook_file_mimetype_mapping_alter(&$mapping)";s:11:"description";s:75:"Alter MIME type mappings used to determine MIME type from a file extension.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:file";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/file.api.php";s:4:"body";s:323:"
  // Add new MIME type 'drupal/info'.
  $mapping['mimetypes']['example_info'] = 'drupal/info';
  // Add new extension '.info.yml' and map it to the 'drupal/info' MIME type.
  $mapping['extensions']['info'] = 'example_info';
  // Override existing extension mapping for '.ogg' files.
  $mapping['extensions']['ogg'] = 189;
";}s:24:"hook_archiver_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_archiver_info_alter";s:10:"definition";s:41:"function hook_archiver_info_alter(&$info)";s:11:"description";s:53:"Alter archiver information declared by other modules.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:file";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/file.api.php";s:4:"body";s:41:"
  $info['tar']['extensions'][] = 'tgz';
";}s:22:"hook_filetransfer_info";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_filetransfer_info";s:10:"definition";s:33:"function hook_filetransfer_info()";s:11:"description";s:69:"Register information about FileTransfer classes provided by a module.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:file";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/file.api.php";s:4:"body";s:149:"
  $info['sftp'] = [
    'title' => t('SFTP (Secure FTP)'),
    'class' => 'Drupal\Core\FileTransfer\SFTP',
    'weight' => 10,
  ];
  return $info;
";}s:28:"hook_filetransfer_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_filetransfer_info_alter";s:10:"definition";s:58:"function hook_filetransfer_info_alter(&$filetransfer_info)";s:11:"description";s:38:"Alter the FileTransfer class registry.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:file";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/file.api.php";s:4:"body";s:166:"
  // Remove the FTP option entirely.
  unset($filetransfer_info['ftp']);
  // Make sure the SSH option is listed first.
  $filetransfer_info['ssh']['weight'] = -10;
";}}s:9:"core:form";a:7:{s:24:"callback_batch_operation";a:10:{s:4:"type";s:8:"callback";s:4:"name";s:24:"callback_batch_operation";s:10:"definition";s:62:"function callback_batch_operation($multiple_params, &$context)";s:11:"description";s:33:"Perform a single batch operation.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:2:{i:0;s:23:"callback_batch_finished";i:1;s:23:"callback_batch_finished";}s:5:"group";s:9:"core:form";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/form.api.php";s:4:"body";s:1593:"
  $node_storage = \Drupal::entityTypeManager()->getStorage('node');
  $database = \Drupal::database();

  if (!isset($context['sandbox']['progress'])) {
    $context['sandbox']['progress'] = 0;
    $context['sandbox']['current_node'] = 0;
    $context['sandbox']['max'] = $database->query('SELECT COUNT(DISTINCT nid) FROM {node}')->fetchField();
  }

  // For this example, we decide that we can safely process
  // 5 nodes at a time without a timeout.
  $limit = 5;

  // With each pass through the callback, retrieve the next group of nids.
  $result = $database->queryRange("SELECT nid FROM {node} WHERE nid > :nid ORDER BY nid ASC", 0, $limit, [':nid' => $context['sandbox']['current_node']]);
  foreach ($result as $row) {

    // Here we actually perform our processing on the current node.
    $node_storage->resetCache([$row['nid']]);
    $node = $node_storage->load($row['nid']);
    $node->value1 = $options1;
    $node->value2 = $options2;
    node_save($node);

    // Store some result for post-processing in the finished callback.
    $context['results'][] = $node->title;

    // Update our progress information.
    $context['sandbox']['progress']++;
    $context['sandbox']['current_node'] = $node->nid;
    $context['message'] = t('Now processing %node', ['%node' => $node->title]);
  }

  // Inform the batch engine that we are not finished,
  // and provide an estimation of the completion level we reached.
  if ($context['sandbox']['progress'] != $context['sandbox']['max']) {
    $context['finished'] = $context['sandbox']['progress'] / $context['sandbox']['max'];
  }
";}s:23:"callback_batch_finished";a:10:{s:4:"type";s:8:"callback";s:4:"name";s:23:"callback_batch_finished";s:10:"definition";s:65:"function callback_batch_finished($success, $results, $operations)";s:11:"description";s:25:"Complete a batch process.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:1:{i:0;s:24:"callback_batch_operation";}s:5:"group";s:9:"core:form";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/form.api.php";s:4:"body";s:738:"
  if ($success) {
    // Here we do something meaningful with the results.
    $message = t("@count items were processed.", [
      '@count' => count($results),
      ]);
    $list = [
      '#theme' => 'item_list',
      '#items' => $results,
    ];
    $message .= drupal_render($list);
    drupal_set_message($message);
  }
  else {
    // An error occurred.
    // $operations contains the operations that remained unprocessed.
    $error_operation = reset($operations);
    $message = t('An error occurred while processing %error_operation with arguments: @arguments', [
      '%error_operation' => $error_operation[0],
      '@arguments' => print_r($error_operation[1], TRUE)
    ]);
    drupal_set_message($message, 'error');
  }
";}s:22:"hook_ajax_render_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_ajax_render_alter";s:10:"definition";s:45:"function hook_ajax_render_alter(array &$data)";s:11:"description";s:55:"Alter the Ajax command data that is sent to the client.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:form";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/form.api.php";s:4:"body";s:287:"
  // Inject any new status messages into the content area.
  $status_messages = ['#type' => 'status_messages'];
  $command = new \Drupal\Core\Ajax\PrependCommand('#block-system-main .content', \Drupal::service('renderer')->renderRoot($status_messages));
  $data[] = $command->render();
";}s:15:"hook_form_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:15:"hook_form_alter";s:10:"definition";s:92:"function hook_form_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state, $form_id)";s:11:"description";s:46:"Perform alterations before a form is rendered.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:form";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/form.api.php";s:4:"body";s:637:"
  if (isset($form['type']) && $form['type']['#value'] . '_node_settings' == $form_id) {
    $upload_enabled_types = \Drupal::config('mymodule.settings')->get('upload_enabled_types');
    $form['workflow']['upload_' . $form['type']['#value']] = [
      '#type' => 'radios',
      '#title' => t('Attachments'),
      '#default_value' => in_array($form['type']['#value'], $upload_enabled_types) ? 1 : 0,
      '#options' => [t('Disabled'), t('Enabled')],
    ];
    // Add a custom submit handler to save the array of types back to the config file.
    $form['actions']['submit']['#submit'][] = 'mymodule_upload_enabled_types_submit';
  }
";}s:23:"hook_form_FORM_ID_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_form_FORM_ID_alter";s:10:"definition";s:100:"function hook_form_FORM_ID_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state, $form_id)";s:11:"description";s:75:"Provide a form-specific alteration instead of the global hook_form_alter().";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:form";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/form.api.php";s:4:"body";s:410:"
  // Modification for the form with the given form ID goes here. For example, if
  // FORM_ID is "user_register_form" this code would run only on the user
  // registration form.

  // Add a checkbox to registration form about agreeing to terms of use.
  $form['terms_of_use'] = [
    '#type' => 'checkbox',
    '#title' => t("I agree with the website's terms and conditions."),
    '#required' => TRUE,
  ];
";}s:28:"hook_form_BASE_FORM_ID_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_form_BASE_FORM_ID_alter";s:10:"definition";s:105:"function hook_form_BASE_FORM_ID_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state, $form_id)";s:11:"description";s:61:"Provide a form-specific alteration for shared ('base') forms.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:form";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/form.api.php";s:4:"body";s:417:"
  // Modification for the form with the given BASE_FORM_ID goes here. For
  // example, if BASE_FORM_ID is "node_form", this code would run on every
  // node form, regardless of node type.

  // Add a checkbox to the node form about agreeing to terms of use.
  $form['terms_of_use'] = [
    '#type' => 'checkbox',
    '#title' => t("I agree with the website's terms and conditions."),
    '#required' => TRUE,
  ];
";}s:16:"hook_batch_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:16:"hook_batch_alter";s:10:"definition";s:34:"function hook_batch_alter(&$batch)";s:11:"description";s:52:"Alter batch information before a batch is processed.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:form";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/form.api.php";s:4:"body";s:1:"
";}}s:13:"core:language";a:2:{s:32:"hook_language_switch_links_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:32:"hook_language_switch_links_alter";s:10:"definition";s:86:"function hook_language_switch_links_alter(array &$links, $type, \Drupal\Core\Url $url)";s:11:"description";s:47:"Perform alterations on language switcher links.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:13:"core:language";s:4:"core";b:1;s:9:"file_path";s:45:"public://module_builder_data/language.api.php";s:4:"body";s:303:"
  $language_interface = \Drupal::languageManager()->getCurrentLanguage();

  if ($type == LanguageInterface::TYPE_CONTENT && isset($links[$language_interface->getId()])) {
    foreach ($links[$language_interface->getId()] as $link) {
      $link['attributes']['class'][] = 'active-language';
    }
  }
";}s:36:"hook_transliteration_overrides_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:36:"hook_transliteration_overrides_alter";s:10:"definition";s:69:"function hook_transliteration_overrides_alter(&$overrides, $langcode)";s:11:"description";s:56:"Provide language-specific overrides for transliteration.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:13:"core:language";s:4:"core";b:1;s:9:"file_path";s:45:"public://module_builder_data/language.api.php";s:4:"body";s:195:"
  // Provide special overrides for German for a custom site.
  if ($langcode == 'de') {
    // The core-provided transliteration of Ä is Ae, but we want just A.
    $overrides[0xC4] = 'A';
  }
";}}s:9:"core:menu";a:8:{s:32:"hook_menu_links_discovered_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:32:"hook_menu_links_discovered_alter";s:10:"definition";s:50:"function hook_menu_links_discovered_alter(&$links)";s:11:"description";s:69:"Alters all the menu links discovered by the menu link plugin manager.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:menu";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/menu.api.php";s:4:"body";s:650:"
  // Change the weight and title of the user.logout link.
  $links['user.logout']['weight'] = -10;
  $links['user.logout']['title'] = new \Drupal\Core\StringTranslation\TranslatableMarkup('Logout');
  // Conditionally add an additional link with a title that's not translated.
  if (\Drupal::moduleHandler()->moduleExists('search')) {
    $links['menu.api.search'] = [
      'title' => \Drupal::config('system.site')->get('name'),
      'route_name' => 'menu.api.search',
      'description' => new \Drupal\Core\StringTranslation\TranslatableMarkup('View popular search phrases for this site.'),
      'parent' => 'system.admin_reports',
    ];
  }
";}s:27:"hook_menu_local_tasks_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_menu_local_tasks_alter";s:10:"definition";s:57:"function hook_menu_local_tasks_alter(&$data, $route_name)";s:11:"description";s:65:"Alter local tasks displayed on the page before they are rendered.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:menu";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/menu.api.php";s:4:"body";s:396:"

  // Add a tab linking to node/add to all pages.
  $data['tabs'][0]['node.add_page'] = [
      '#theme' => 'menu_local_task',
      '#link' => [
          'title' => t('Example tab'),
          'url' => Url::fromRoute('node.add_page'),
          'localized_options' => [
              'attributes' => [
                  'title' => t('Add content'),
              ],
          ],
      ],
  ];
";}s:29:"hook_menu_local_actions_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:29:"hook_menu_local_actions_alter";s:10:"definition";s:55:"function hook_menu_local_actions_alter(&$local_actions)";s:11:"description";s:28:"Alter local actions plugins.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:menu";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/menu.api.php";s:4:"body";s:1:"
";}s:22:"hook_local_tasks_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_local_tasks_alter";s:10:"definition";s:46:"function hook_local_tasks_alter(&$local_tasks)";s:11:"description";s:26:"Alter local tasks plugins.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:menu";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/menu.api.php";s:4:"body";s:88:"
  // Remove a specified local task plugin.
  unset($local_tasks['example_plugin_id']);
";}s:27:"hook_contextual_links_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_contextual_links_alter";s:10:"definition";s:84:"function hook_contextual_links_alter(array &$links, $group, array $route_parameters)";s:11:"description";s:48:"Alter contextual links before they are rendered.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:menu";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/menu.api.php";s:4:"body";s:303:"
  if ($group == 'menu') {
    // Dynamically use the menu name for the title of the menu_edit contextual
    // link.
    $menu = \Drupal::entityManager()->getStorage('menu')->load($route_parameters['menu']);
    $links['menu_edit']['title'] = t('Edit menu: @label', ['@label' => $menu->label()]);
  }
";}s:35:"hook_contextual_links_plugins_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:35:"hook_contextual_links_plugins_alter";s:10:"definition";s:70:"function hook_contextual_links_plugins_alter(array &$contextual_links)";s:11:"description";s:48:"Alter the plugin definition of contextual links.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:menu";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/menu.api.php";s:4:"body";s:62:"
  $contextual_links['menu_edit']['title'] = 'Edit the menu';
";}s:28:"hook_system_breadcrumb_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_system_breadcrumb_alter";s:10:"definition";s:157:"function hook_system_breadcrumb_alter(\Drupal\Core\Breadcrumb\Breadcrumb &$breadcrumb, \Drupal\Core\Routing\RouteMatchInterface $route_match, array $context)";s:11:"description";s:69:"Perform alterations to the breadcrumb built by the BreadcrumbManager.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:menu";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/menu.api.php";s:4:"body";s:141:"
  // Add an item to the end of the breadcrumb.
  $breadcrumb->addLink(\Drupal\Core\Link::createFromRoute(t('Text'), 'example_route_name'));
";}s:15:"hook_link_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:15:"hook_link_alter";s:10:"definition";s:37:"function hook_link_alter(&$variables)";s:11:"description";s:31:"Alter the parameters for links.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"core:menu";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/menu.api.php";s:4:"body";s:249:"
  // Add a warning to the end of route links to the admin section.
  if (isset($variables['route_name']) && strpos($variables['route_name'], 'admin') !== FALSE) {
    $variables['text'] = t('@text (Warning!)', ['@text' => $variables['text']]);
  }
";}}s:11:"core:module";a:18:{s:14:"hook_hook_info";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:14:"hook_hook_info";s:10:"definition";s:25:"function hook_hook_info()";s:11:"description";s:55:"Defines one or more hooks that are exposed by a module.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:128:"
  $hooks['token_info'] = [
    'group' => 'tokens',
  ];
  $hooks['tokens'] = [
    'group' => 'tokens',
  ];
  return $hooks;
";}s:28:"hook_module_implements_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_module_implements_alter";s:10:"definition";s:63:"function hook_module_implements_alter(&$implementations, $hook)";s:11:"description";s:50:"Alter the registry of modules implementing a hook.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:487:"
  if ($hook == 'form_alter') {
    // Move my_module_form_alter() to the end of the list.
    // \Drupal::moduleHandler()->getImplementations()
    // iterates through $implementations with a foreach loop which PHP iterates
    // in the order that the items were added, so to move an item to the end of
    // the array, we remove it and then add it.
    $group = $implementations['my_module'];
    unset($implementations['my_module']);
    $implementations['my_module'] = $group;
  }
";}s:22:"hook_system_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_system_info_alter";s:10:"definition";s:92:"function hook_system_info_alter(array &$info, \Drupal\Core\Extension\Extension $file, $type)";s:11:"description";s:67:"Alter the information parsed from module and theme .info.yml files.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:160:"
  // Only fill this in if the .info.yml file does not define a 'datestamp'.
  if (empty($info['datestamp'])) {
    $info['datestamp'] = $file->getMTime();
  }
";}s:22:"hook_module_preinstall";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_module_preinstall";s:10:"definition";s:40:"function hook_module_preinstall($module)";s:11:"description";s:55:"Perform necessary actions before a module is installed.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:27:"
  mymodule_cache_clear();
";}s:22:"hook_modules_installed";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_modules_installed";s:10:"definition";s:41:"function hook_modules_installed($modules)";s:11:"description";s:54:"Perform necessary actions after modules are installed.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:121:"
  if (in_array('lousy_module', $modules)) {
    \Drupal::state()->set('mymodule.lousy_module_compatibility', TRUE);
  }
";}s:12:"hook_install";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:12:"hook_install";s:10:"definition";s:23:"function hook_install()";s:11:"description";s:49:"Perform setup tasks when the module is installed.";s:11:"destination";s:15:"%module.install";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:199:"
  // Create the styles directory and ensure it's writable.
  $directory = file_default_scheme() . '://styles';
  file_prepare_directory($directory, FILE_CREATE_DIRECTORY | FILE_MODIFY_PERMISSIONS);
";}s:24:"hook_module_preuninstall";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_module_preuninstall";s:10:"definition";s:42:"function hook_module_preuninstall($module)";s:11:"description";s:57:"Perform necessary actions before a module is uninstalled.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:27:"
  mymodule_cache_clear();
";}s:24:"hook_modules_uninstalled";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_modules_uninstalled";s:10:"definition";s:43:"function hook_modules_uninstalled($modules)";s:11:"description";s:56:"Perform necessary actions after modules are uninstalled.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:146:"
  if (in_array('lousy_module', $modules)) {
    \Drupal::state()->delete('mymodule.lousy_module_compatibility');
  }
  mymodule_cache_rebuild();
";}s:14:"hook_uninstall";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:14:"hook_uninstall";s:10:"definition";s:25:"function hook_uninstall()";s:11:"description";s:44:"Remove any information that the module sets.";s:11:"destination";s:15:"%module.install";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:128:"
  // Remove the styles directory and generated images.
  file_unmanaged_delete_recursive(file_default_scheme() . '://styles');
";}s:18:"hook_install_tasks";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:18:"hook_install_tasks";s:10:"definition";s:44:"function hook_install_tasks(&$install_state)";s:11:"description";s:68:"Return an array of tasks to be performed by an installation profile.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:3469:"
  // Here, we define a variable to allow tasks to indicate that a particular,
  // processor-intensive batch process needs to be triggered later on in the
  // installation.
  $myprofile_needs_batch_processing = \Drupal::state()->get('myprofile.needs_batch_processing', FALSE);
  $tasks = [
    // This is an example of a task that defines a form which the user who is
    // installing the site will be asked to fill out. To implement this task,
    // your profile would define a function named myprofile_data_import_form()
    // as a normal form API callback function, with associated validation and
    // submit handlers. In the submit handler, in addition to saving whatever
    // other data you have collected from the user, you might also call
    // \Drupal::state()->set('myprofile.needs_batch_processing', TRUE) if the
    // user has entered data which requires that batch processing will need to
    // occur later on.
    'myprofile_data_import_form' => [
      'display_name' => t('Data import options'),
      'type' => 'form',
    ],
    // Similarly, to implement this task, your profile would define a function
    // named myprofile_settings_form() with associated validation and submit
    // handlers. This form might be used to collect and save additional
    // information from the user that your profile needs. There are no extra
    // steps required for your profile to act as an "installation wizard"; you
    // can simply define as many tasks of type 'form' as you wish to execute,
    // and the forms will be presented to the user, one after another.
    'myprofile_settings_form' => [
      'display_name' => t('Additional options'),
      'type' => 'form',
    ],
    // This is an example of a task that performs batch operations. To
    // implement this task, your profile would define a function named
    // myprofile_batch_processing() which returns a batch API array definition
    // that the installer will use to execute your batch operations. Due to the
    // 'myprofile.needs_batch_processing' variable used here, this task will be
    // hidden and skipped unless your profile set it to TRUE in one of the
    // previous tasks.
    'myprofile_batch_processing' => [
      'display_name' => t('Import additional data'),
      'display' => $myprofile_needs_batch_processing,
      'type' => 'batch',
      'run' => $myprofile_needs_batch_processing ? INSTALL_TASK_RUN_IF_NOT_COMPLETED : INSTALL_TASK_SKIP,
    ],
    // This is an example of a task that will not be displayed in the list that
    // the user sees. To implement this task, your profile would define a
    // function named myprofile_final_site_setup(), in which additional,
    // automated site setup operations would be performed. Since this is the
    // last task defined by your profile, you should also use this function to
    // call \Drupal::state()->delete('myprofile.needs_batch_processing') and
    // clean up the state that was used above. If you want the user to pass
    // to the final Drupal installation tasks uninterrupted, return no output
    // from this function. Otherwise, return themed output that the user will
    // see (for example, a confirmation page explaining that your profile's
    // tasks are complete, with a link to reload the current page and therefore
    // pass on to the final Drupal installation tasks when the user is ready to
    // do so).
    'myprofile_final_site_setup' => [],
  ];
  return $tasks;
";}s:24:"hook_install_tasks_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_install_tasks_alter";s:10:"definition";s:58:"function hook_install_tasks_alter(&$tasks, $install_state)";s:11:"description";s:42:"Alter the full list of installation tasks.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:233:"
  // Replace the entire site configuration form provided by Drupal core
  // with a custom callback function defined by this installation profile.
  $tasks['install_configure_form']['function'] = 'myprofile_install_configure_form';
";}s:13:"hook_update_N";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:13:"hook_update_N";s:10:"definition";s:33:"function hook_update_N(&$sandbox)";s:11:"description";s:47:"Perform a single update between minor versions.";s:11:"destination";s:15:"%module.install";s:12:"dependencies";a:1:{i:0;s:24:"callback_batch_operation";}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:2048:"
  // For non-batch updates, the signature can simply be:
  // function hook_update_N() {

  // Example function body for adding a field to a database table, which does
  // not require a batch operation:
  $spec = [
    'type' => 'varchar',
    'description' => "New Col",
    'length' => 20,
    'not null' => FALSE,
  ];
  $schema = Database::getConnection()->schema();
  $schema->addField('mytable1', 'newcol', $spec);

  // Example of what to do if there is an error during your update.
  if ($some_error_condition_met) {
    throw new UpdateException('Something went wrong; here is what you should do.');
  }

  // Example function body for a batch update. In this example, the values in
  // a database field are updated.
  if (!isset($sandbox['progress'])) {
    // This must be the first run. Initialize the sandbox.
    $sandbox['progress'] = 0;
    $sandbox['current_pk'] = 0;
    $sandbox['max'] = Database::getConnection()->query('SELECT COUNT(myprimarykey) FROM {mytable1}')->fetchField() - 1;
  }

  // Update in chunks of 20.
  $records = Database::getConnection()->select('mytable1', 'm')
    ->fields('m', ['myprimarykey', 'otherfield'])
    ->condition('myprimarykey', $sandbox['current_pk'], '>')
    ->range(0, 20)
    ->orderBy('myprimarykey', 'ASC')
    ->execute();
  foreach ($records as $record) {
    // Here, you would make an update something related to this record. In this
    // example, some text is added to the other field.
    Database::getConnection()->update('mytable1')
      ->fields(['otherfield' => $record->otherfield . '-suffix'])
      ->condition('myprimarykey', $record->myprimarykey)
      ->execute();

    $sandbox['progress']++;
    $sandbox['current_pk'] = $record->myprimarykey;
  }

  $sandbox['#finished'] = empty($sandbox['max']) ? 1 : ($sandbox['progress'] / $sandbox['max']);

  // To display a message to the user when the update is completed, return it.
  // If you do not want to display a completion message, return nothing.
  return t('All foo bars were updated with the new suffix');
";}s:21:"hook_post_update_NAME";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_post_update_NAME";s:10:"definition";s:41:"function hook_post_update_NAME(&$sandbox)";s:11:"description";s:67:"Executes an update which is intended to update data, like entities.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:1077:"
  // Example of updating some content.
  $node = \Drupal\node\Entity\Node::load(123);
  $node->setTitle('foo');
  $node->save();

  $result = t('Node %nid saved', ['%nid' => $node->id()]);

  // Example of disabling blocks with missing condition contexts. Note: The
  // block itself is in a state which is valid at that point.
  // @see block_update_8001()
  // @see block_post_update_disable_blocks_with_missing_contexts()
  $block_update_8001 = \Drupal::keyValue('update_backup')->get('block_update_8001', []);

  $block_ids = array_keys($block_update_8001);
  $block_storage = \Drupal::entityManager()->getStorage('block');
  $blocks = $block_storage->loadMultiple($block_ids);
  /** @var $blocks \Drupal\block\BlockInterface[] */
  foreach ($blocks as $block) {
    // This block has had conditions removed due to an inability to resolve
    // contexts in block_update_8001() so disable it.

    // Disable currently enabled blocks.
    if ($block_update_8001[$block->id()]['status']) {
      $block->setStatus(FALSE);
      $block->save();
    }
  }

  return $result;
";}s:24:"hook_update_dependencies";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_update_dependencies";s:10:"definition";s:35:"function hook_update_dependencies()";s:11:"description";s:64:"Return an array of information about module update dependencies.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:909:"
  // Indicate that the mymodule_update_8001() function provided by this module
  // must run after the another_module_update_8003() function provided by the
  // 'another_module' module.
  $dependencies['mymodule'][8001] = [
    'another_module' => 8003,
  ];
  // Indicate that the mymodule_update_8002() function provided by this module
  // must run before the yet_another_module_update_8005() function provided by
  // the 'yet_another_module' module. (Note that declaring dependencies in this
  // direction should be done only in rare situations, since it can lead to the
  // following problem: If a site has already run the yet_another_module
  // module's database updates before it updates its codebase to pick up the
  // newest mymodule code, then the dependency declared here will be ignored.)
  $dependencies['yet_another_module'][8005] = [
    'mymodule' => 8002,
  ];
  return $dependencies;
";}s:24:"hook_update_last_removed";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_update_last_removed";s:10:"definition";s:35:"function hook_update_last_removed()";s:11:"description";s:64:"Return a number which is no longer available as hook_update_N().";s:11:"destination";s:15:"%module.install";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:153:"
  // We've removed the 8.x-1.x version of mymodule, including database updates.
  // The next update function is mymodule_update_8200().
  return 8103;
";}s:17:"hook_updater_info";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:17:"hook_updater_info";s:10:"definition";s:28:"function hook_updater_info()";s:11:"description";s:65:"Provide information on Updaters (classes that can update Drupal).";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:274:"
  return [
    'module' => [
      'class' => 'Drupal\Core\Updater\Module',
      'name' => t('Update modules'),
      'weight' => 0,
    ],
    'theme' => [
      'class' => 'Drupal\Core\Updater\Theme',
      'name' => t('Update themes'),
      'weight' => 0,
    ],
  ];
";}s:23:"hook_updater_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_updater_info_alter";s:10:"definition";s:44:"function hook_updater_info_alter(&$updaters)";s:11:"description";s:36:"Alter the Updater information array.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:156:"
  // Adjust weight so that the theme Updater gets a chance to handle a given
  // update task before module updaters.
  $updaters['theme']['weight'] = -1;
";}s:17:"hook_requirements";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:17:"hook_requirements";s:10:"definition";s:34:"function hook_requirements($phase)";s:11:"description";s:56:"Check installation requirements and do status reporting.";s:11:"destination";s:15:"%module.install";s:12:"dependencies";a:0:{}s:5:"group";s:11:"core:module";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/module.api.php";s:4:"body";s:1587:"
  $requirements = [];

  // Report Drupal version
  if ($phase == 'runtime') {
    $requirements['drupal'] = [
      'title' => t('Drupal'),
      'value' => \Drupal::VERSION,
      'severity' => REQUIREMENT_INFO
    ];
  }

  // Test PHP version
  $requirements['php'] = [
    'title' => t('PHP'),
    'value' => ($phase == 'runtime') ? \Drupal::l(phpversion(), new Url('system.php')) : phpversion(),
  ];
  if (version_compare(phpversion(), DRUPAL_MINIMUM_PHP) < 0) {
    $requirements['php']['description'] = t('Your PHP installation is too old. Drupal requires at least PHP %version.', ['%version' => DRUPAL_MINIMUM_PHP]);
    $requirements['php']['severity'] = REQUIREMENT_ERROR;
  }

  // Report cron status
  if ($phase == 'runtime') {
    $cron_last = \Drupal::state()->get('system.cron_last');

    if (is_numeric($cron_last)) {
      $requirements['cron']['value'] = t('Last run @time ago', ['@time' => \Drupal::service('date.formatter')->formatTimeDiffSince($cron_last)]);
    }
    else {
      $requirements['cron'] = [
        'description' => t('Cron has not run. It appears cron jobs have not been setup on your system. Check the help pages for <a href=":url">configuring cron jobs</a>.', [':url' => 'https://www.drupal.org/cron']),
        'severity' => REQUIREMENT_ERROR,
        'value' => t('Never run'),
      ];
    }

    $requirements['cron']['description'] .= ' ' . t('You can <a href=":cron">run cron manually</a>.', [':cron' => \Drupal::url('system.run_cron')]);

    $requirements['cron']['title'] = t('Cron maintenance tasks');
  }

  return $requirements;
";}}s:10:"core:theme";a:24:{s:37:"hook_form_system_theme_settings_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:37:"hook_form_system_theme_settings_alter";s:10:"definition";s:104:"function hook_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state)";s:11:"description";s:55:"Allow themes to alter the theme-specific settings form.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:320:"
  // Add a checkbox to toggle the breadcrumb trail.
  $form['toggle_breadcrumb'] = [
    '#type' => 'checkbox',
    '#title' => t('Display the breadcrumb'),
    '#default_value' => theme_get_setting('features.breadcrumb'),
    '#description'   => t('Show a trail of links from the homepage to the current page.'),
  ];
";}s:15:"hook_preprocess";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:15:"hook_preprocess";s:10:"definition";s:44:"function hook_preprocess(&$variables, $hook)";s:11:"description";s:41:"Preprocess theme variables for templates.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:870:"
  static $hooks;

  // Add contextual links to the variables, if the user has permission.

  if (!\Drupal::currentUser()->hasPermission('access contextual links')) {
    return;
  }

  if (!isset($hooks)) {
    $hooks = theme_get_registry();
  }

  // Determine the primary theme function argument.
  if (isset($hooks[$hook]['variables'])) {
    $keys = array_keys($hooks[$hook]['variables']);
    $key = $keys[0];
  }
  else {
    $key = $hooks[$hook]['render element'];
  }

  if (isset($variables[$key])) {
    $element = $variables[$key];
  }

  if (isset($element) && is_array($element) && !empty($element['#contextual_links'])) {
    $variables['title_suffix']['contextual_links'] = contextual_links_view($element);
    if (!empty($variables['title_suffix']['contextual_links'])) {
      $variables['attributes']['class'][] = 'contextual-links-region';
    }
  }
";}s:20:"hook_preprocess_HOOK";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:20:"hook_preprocess_HOOK";s:10:"definition";s:42:"function hook_preprocess_HOOK(&$variables)";s:11:"description";s:53:"Preprocess theme variables for a specific theme hook.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:167:"
  // This example is from rdf_preprocess_image(). It adds an RDF attribute
  // to the image hook's variables.
  $variables['attributes']['typeof'] = ['foaf:Image'];
";}s:27:"hook_theme_suggestions_HOOK";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_theme_suggestions_HOOK";s:10:"definition";s:54:"function hook_theme_suggestions_HOOK(array $variables)";s:11:"description";s:63:"Provides alternate named suggestions for a specific theme hook.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:118:"
  $suggestions = [];

  $suggestions[] = 'hookname__' . $variables['elements']['#langcode'];

  return $suggestions;
";}s:28:"hook_theme_suggestions_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_theme_suggestions_alter";s:10:"definition";s:83:"function hook_theme_suggestions_alter(array &$suggestions, array $variables, $hook)";s:11:"description";s:45:"Alters named suggestions for all theme hooks.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:165:"
  // Add an interface-language specific suggestion to all theme hooks.
  $suggestions[] = $hook . '__' . \Drupal::languageManager()->getCurrentLanguage()->getId();
";}s:33:"hook_theme_suggestions_HOOK_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:33:"hook_theme_suggestions_HOOK_alter";s:10:"definition";s:81:"function hook_theme_suggestions_HOOK_alter(array &$suggestions, array $variables)";s:11:"description";s:51:"Alters named suggestions for a specific theme hook.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:91:"
  if (empty($variables['header'])) {
    $suggestions[] = 'hookname__' . 'no_header';
  }
";}s:21:"hook_themes_installed";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_themes_installed";s:10:"definition";s:43:"function hook_themes_installed($theme_list)";s:11:"description";s:34:"Respond to themes being installed.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:77:"
  foreach ($theme_list as $theme) {
    block_theme_initialize($theme);
  }
";}s:23:"hook_themes_uninstalled";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_themes_uninstalled";s:10:"definition";s:47:"function hook_themes_uninstalled(array $themes)";s:11:"description";s:36:"Respond to themes being uninstalled.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:143:"
  // Remove some state entries depending on the theme.
  foreach ($themes as $theme) {
    \Drupal::state()->delete('example.' . $theme);
  }
";}s:14:"hook_extension";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:14:"hook_extension";s:10:"definition";s:25:"function hook_extension()";s:11:"description";s:65:"Declare a template file extension to be used with a theme engine.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:72:"
  // Extension for template base names in Twig.
  return '.html.twig';
";}s:20:"hook_render_template";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:20:"hook_render_template";s:10:"definition";s:57:"function hook_render_template($template_file, $variables)";s:11:"description";s:41:"Render a template using the theme engine.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:120:"
  $twig_service = \Drupal::service('twig');

  return $twig_service->loadTemplate($template_file)->render($variables);
";}s:23:"hook_element_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_element_info_alter";s:10:"definition";s:46:"function hook_element_info_alter(array &$info)";s:11:"description";s:57:"Alter the element type information returned from modules.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:133:"
  // Decrease the default size of textfields.
  if (isset($info['textfield']['#size'])) {
    $info['textfield']['#size'] = 40;
  }
";}s:13:"hook_js_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:13:"hook_js_alter";s:10:"definition";s:88:"function hook_js_alter(&$javascript, \Drupal\Core\Asset\AttachedAssetsInterface $assets)";s:11:"description";s:73:"Perform necessary alterations to the JavaScript before it is presented on";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:190:"
  // Swap out jQuery to use an updated version of the library.
  $javascript['core/assets/vendor/jquery/jquery.min.js']['data'] = drupal_get_path('module', 'jquery_update') . '/jquery.js';
";}s:23:"hook_library_info_build";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_library_info_build";s:10:"definition";s:34:"function hook_library_info_build()";s:11:"description";s:32:"Add dynamic library definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:1342:"
  $libraries = [];
  // Add a library whose information changes depending on certain conditions.
  $libraries['mymodule.zombie'] = [
    'dependencies' => [
      'core/backbone',
    ],
  ];
  if (Drupal::moduleHandler()->moduleExists('minifyzombies')) {
    $libraries['mymodule.zombie'] += [
      'js' => [
        'mymodule.zombie.min.js' => [],
      ],
      'css' => [
        'base' => [
          'mymodule.zombie.min.css' => [],
        ],
      ],
    ];
  }
  else {
    $libraries['mymodule.zombie'] += [
      'js' => [
        'mymodule.zombie.js' => [],
      ],
      'css' => [
        'base' => [
          'mymodule.zombie.css' => [],
        ],
      ],
    ];
  }

  // Add a library only if a certain condition is met. If code wants to
  // integrate with this library it is safe to (try to) load it unconditionally
  // without reproducing this check. If the library definition does not exist
  // the library (of course) not be loaded but no notices or errors will be
  // triggered.
  if (Drupal::moduleHandler()->moduleExists('vampirize')) {
    $libraries['mymodule.vampire'] = [
      'js' => [
        'js/vampire.js' => [],
      ],
      'css' => [
        'base' => [
          'css/vampire.css',
        ],
      ],
      'dependencies' => [
        'core/jquery',
      ],
    ];
  }
  return $libraries;
";}s:22:"hook_js_settings_build";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_js_settings_build";s:10:"definition";s:101:"function hook_js_settings_build(array &$settings, \Drupal\Core\Asset\AttachedAssetsInterface $assets)";s:11:"description";s:48:"Modify the JavaScript settings (drupalSettings).";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:114:"
  // Manipulate settings.
  if (isset($settings['dialog'])) {
    $settings['dialog']['autoResize'] = FALSE;
  }
";}s:22:"hook_js_settings_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_js_settings_alter";s:10:"definition";s:101:"function hook_js_settings_alter(array &$settings, \Drupal\Core\Asset\AttachedAssetsInterface $assets)";s:11:"description";s:74:"Perform necessary alterations to the JavaScript settings (drupalSettings).";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:187:"
  // Add settings.
  $settings['user']['uid'] = \Drupal::currentUser();

  // Manipulate settings.
  if (isset($settings['dialog'])) {
    $settings['dialog']['autoResize'] = FALSE;
  }
";}s:23:"hook_library_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_library_info_alter";s:10:"definition";s:57:"function hook_library_info_alter(&$libraries, $extension)";s:11:"description";s:41:"Alter libraries provided by an extension.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:1320:"
  // Update Farbtastic to version 2.0.
  if ($extension == 'core' && isset($libraries['jquery.farbtastic'])) {
    // Verify existing version is older than the one we are updating to.
    if (version_compare($libraries['jquery.farbtastic']['version'], '2.0', '<')) {
      // Update the existing Farbtastic to version 2.0.
      $libraries['jquery.farbtastic']['version'] = '2.0';
      // To accurately replace library files, the order of files and the options
      // of each file have to be retained; e.g., like this:
      $old_path = 'assets/vendor/farbtastic';
      // Since the replaced library files are no longer located in a directory
      // relative to the original extension, specify an absolute path (relative
      // to DRUPAL_ROOT / base_path()) to the new location.
      $new_path = '/' . drupal_get_path('module', 'farbtastic_update') . '/js';
      $new_js = [];
      $replacements = [
        $old_path . '/farbtastic.js' => $new_path . '/farbtastic-2.0.js',
      ];
      foreach ($libraries['jquery.farbtastic']['js'] as $source => $options) {
        if (isset($replacements[$source])) {
          $new_js[$replacements[$source]] = $options;
        }
        else {
          $new_js[$source] = $options;
        }
      }
      $libraries['jquery.farbtastic']['js'] = $new_js;
    }
  }
";}s:14:"hook_css_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:14:"hook_css_alter";s:10:"definition";s:82:"function hook_css_alter(&$css, \Drupal\Core\Asset\AttachedAssetsInterface $assets)";s:11:"description";s:51:"Alter CSS files before they are output on the page.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:102:"
  // Remove defaults.css file.
  unset($css[drupal_get_path('module', 'system') . '/defaults.css']);
";}s:21:"hook_page_attachments";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_page_attachments";s:10:"definition";s:51:"function hook_page_attachments(array &$attachments)";s:11:"description";s:67:"Add attachments (typically assets) to a page before it is rendered.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:291:"
  // Unconditionally attach an asset to the page.
  $attachments['#attached']['library'][] = 'core/domready';

  // Conditionally attach an asset to the page.
  if (!\Drupal::currentUser()->hasPermission('may pet kittens')) {
    $attachments['#attached']['library'][] = 'core/jquery';
  }
";}s:27:"hook_page_attachments_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_page_attachments_alter";s:10:"definition";s:57:"function hook_page_attachments_alter(array &$attachments)";s:11:"description";s:69:"Alter attachments (typically assets) to a page before it is rendered.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:249:"
  // Conditionally remove an asset.
  if (in_array('core/jquery', $attachments['#attached']['library'])) {
    $index = array_search('core/jquery', $attachments['#attached']['library']);
    unset($attachments['#attached']['library'][$index]);
  }
";}s:13:"hook_page_top";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:13:"hook_page_top";s:10:"definition";s:40:"function hook_page_top(array &$page_top)";s:11:"description";s:46:"Add a renderable array to the top of the page.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:62:"
  $page_top['mymodule'] = ['#markup' => 'This is the top.'];
";}s:16:"hook_page_bottom";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:16:"hook_page_bottom";s:10:"definition";s:46:"function hook_page_bottom(array &$page_bottom)";s:11:"description";s:49:"Add a renderable array to the bottom of the page.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:68:"
  $page_bottom['mymodule'] = ['#markup' => 'This is the bottom.'];
";}s:10:"hook_theme";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:10:"hook_theme";s:10:"definition";s:52:"function hook_theme($existing, $type, $theme, $path)";s:11:"description";s:51:"Register a module or theme's theme implementations.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:527:"
  return [
    'forum_display' => [
      'variables' => ['forums' => NULL, 'topics' => NULL, 'parents' => NULL, 'tid' => NULL, 'sortby' => NULL, 'forum_per_page' => NULL],
    ],
    'forum_list' => [
      'variables' => ['forums' => NULL, 'parents' => NULL, 'tid' => NULL],
    ],
    'forum_icon' => [
      'variables' => ['new_posts' => NULL, 'num_posts' => 0, 'comment_mode' => 0, 'sticky' => 0],
    ],
    'status_report' => [
      'render element' => 'requirements',
      'file' => 'system.admin.inc',
    ],
  ];
";}s:25:"hook_theme_registry_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:25:"hook_theme_registry_alter";s:10:"definition";s:52:"function hook_theme_registry_alter(&$theme_registry)";s:11:"description";s:64:"Alter the theme registry information returned from hook_theme().";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:319:"
  // Kill the next/previous forum topic navigation links.
  foreach ($theme_registry['forum_topic_navigation']['preprocess functions'] as $key => $value) {
    if ($value == 'template_preprocess_forum_topic_navigation') {
      unset($theme_registry['forum_topic_navigation']['preprocess functions'][$key]);
    }
  }
";}s:48:"hook_template_preprocess_default_variables_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:48:"hook_template_preprocess_default_variables_alter";s:10:"definition";s:70:"function hook_template_preprocess_default_variables_alter(&$variables)";s:11:"description";s:64:"Alter the default, hook-independent variables for all templates.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:theme";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/theme.api.php";s:4:"body";s:98:"
  $variables['is_admin'] = \Drupal::currentUser()->hasPermission('access administration pages');
";}}s:10:"core:token";a:4:{s:11:"hook_tokens";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:11:"hook_tokens";s:10:"definition";s:126:"function hook_tokens($type, $tokens, array $data, array $options, \Drupal\Core\Render\BubbleableMetadata $bubbleable_metadata)";s:11:"description";s:50:"Provide replacement values for placeholder tokens.";s:11:"destination";s:18:"%module.tokens.inc";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:token";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/token.api.php";s:4:"body";s:1793:"
  $token_service = \Drupal::token();

  $url_options = ['absolute' => TRUE];
  if (isset($options['langcode'])) {
    $url_options['language'] = \Drupal::languageManager()->getLanguage($options['langcode']);
    $langcode = $options['langcode'];
  }
  else {
    $langcode = NULL;
  }
  $replacements = [];

  if ($type == 'node' && !empty($data['node'])) {
    /** @var \Drupal\node\NodeInterface $node */
    $node = $data['node'];

    foreach ($tokens as $name => $original) {
      switch ($name) {
        // Simple key values on the node.
        case 'nid':
          $replacements[$original] = $node->nid;
          break;

        case 'title':
          $replacements[$original] = $node->getTitle();
          break;

        case 'edit-url':
          $replacements[$original] = $node->url('edit-form', $url_options);
          break;

        // Default values for the chained tokens handled below.
        case 'author':
          $account = $node->getOwner() ? $node->getOwner() : User::load(0);
          $replacements[$original] = $account->label();
          $bubbleable_metadata->addCacheableDependency($account);
          break;

        case 'created':
          $replacements[$original] = format_date($node->getCreatedTime(), 'medium', '', NULL, $langcode);
          break;
      }
    }

    if ($author_tokens = $token_service->findWithPrefix($tokens, 'author')) {
      $replacements += $token_service->generate('user', $author_tokens, ['user' => $node->getOwner()], $options, $bubbleable_metadata);
    }

    if ($created_tokens = $token_service->findWithPrefix($tokens, 'created')) {
      $replacements += $token_service->generate('date', $created_tokens, ['date' => $node->getCreatedTime()], $options, $bubbleable_metadata);
    }
  }

  return $replacements;
";}s:17:"hook_tokens_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:17:"hook_tokens_alter";s:10:"definition";s:125:"function hook_tokens_alter(array &$replacements, array $context, \Drupal\Core\Render\BubbleableMetadata $bubbleable_metadata)";s:11:"description";s:48:"Alter replacement values for placeholder tokens.";s:11:"destination";s:18:"%module.tokens.inc";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:token";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/token.api.php";s:4:"body";s:649:"
  $options = $context['options'];

  if (isset($options['langcode'])) {
    $url_options['language'] = \Drupal::languageManager()->getLanguage($options['langcode']);
    $langcode = $options['langcode'];
  }
  else {
    $langcode = NULL;
  }

  if ($context['type'] == 'node' && !empty($context['data']['node'])) {
    $node = $context['data']['node'];

    // Alter the [node:title] token, and replace it with the rendered content
    // of a field (field_title).
    if (isset($context['tokens']['title'])) {
      $title = $node->field_title->view('default');
      $replacements[$context['tokens']['title']] = drupal_render($title);
    }
  }
";}s:15:"hook_token_info";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:15:"hook_token_info";s:10:"definition";s:26:"function hook_token_info()";s:11:"description";s:71:"Provide information about available placeholder tokens and token types.";s:11:"destination";s:18:"%module.tokens.inc";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:token";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/token.api.php";s:4:"body";s:717:"
  $type = [
    'name' => t('Nodes'),
    'description' => t('Tokens related to individual nodes.'),
    'needs-data' => 'node',
  ];

  // Core tokens for nodes.
  $node['nid'] = [
    'name' => t("Node ID"),
    'description' => t("The unique ID of the node."),
  ];
  $node['title'] = [
    'name' => t("Title"),
  ];
  $node['edit-url'] = [
    'name' => t("Edit URL"),
    'description' => t("The URL of the node's edit page."),
  ];

  // Chained tokens for nodes.
  $node['created'] = [
    'name' => t("Date created"),
    'type' => 'date',
  ];
  $node['author'] = [
    'name' => t("Author"),
    'type' => 'user',
  ];

  return [
    'types' => ['node' => $type],
    'tokens' => ['node' => $node],
  ];
";}s:21:"hook_token_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_token_info_alter";s:10:"definition";s:38:"function hook_token_info_alter(&$data)";s:11:"description";s:70:"Alter the metadata about available placeholder tokens and token types.";s:11:"destination";s:18:"%module.tokens.inc";s:12:"dependencies";a:0:{}s:5:"group";s:10:"core:token";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/token.api.php";s:4:"body";s:497:"
  // Modify description of node tokens for our site.
  $data['tokens']['node']['nid'] = [
    'name' => t("Node ID"),
    'description' => t("The unique ID of the article."),
  ];
  $data['tokens']['node']['title'] = [
    'name' => t("Title"),
    'description' => t("The title of the article."),
  ];

  // Chained tokens for nodes.
  $data['tokens']['node']['created'] = [
    'name' => t("Date created"),
    'description' => t("The date the article was posted."),
    'type' => 'date',
  ];
";}}s:5:"devel";a:1:{s:28:"hook_devel_dumper_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_devel_dumper_info_alter";s:10:"definition";s:45:"function hook_devel_dumper_info_alter(&$info)";s:11:"description";s:57:"Alter devel dumper information declared by other modules.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"devel";s:4:"core";b:0;s:9:"file_path";s:42:"public://module_builder_data/devel.api.php";s:4:"body";s:48:"
  $info['default']['label'] = 'Altered label';
";}}s:6:"editor";a:3:{s:22:"hook_editor_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_editor_info_alter";s:10:"definition";s:48:"function hook_editor_info_alter(array &$editors)";s:11:"description";s:48:"Performs alterations on text editor definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:6:"editor";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/editor.api.php";s:4:"body";s:142:"
  $editors['some_other_editor']['label'] = t('A different name');
  $editors['some_other_editor']['library']['module'] = 'myeditoroverride';
";}s:29:"hook_editor_js_settings_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:29:"hook_editor_js_settings_alter";s:10:"definition";s:56:"function hook_editor_js_settings_alter(array &$settings)";s:11:"description";s:61:"Modifies JavaScript settings that are added for text editors.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:6:"editor";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/editor.api.php";s:4:"body";s:263:"
  if (isset($settings['editor']['formats']['basic_html'])) {
    $settings['editor']['formats']['basic_html']['editor'] = 'MyDifferentEditor';
    $settings['editor']['formats']['basic_html']['editorSettings']['buttons'] = ['strong', 'italic', 'underline'];
  }
";}s:28:"hook_editor_xss_filter_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_editor_xss_filter_alter";s:10:"definition";s:142:"function hook_editor_xss_filter_alter(&$editor_xss_filter_class, FilterFormatInterface $format, FilterFormatInterface $original_format = NULL)";s:11:"description";s:77:"Modifies the text editor XSS filter that will used for the given text format.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:6:"editor";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/editor.api.php";s:4:"body";s:216:"
  $filters = $format->filters()->getAll();
  if (isset($filters['filter_wysiwyg']) && $filters['filter_wysiwyg']->status) {
    $editor_xss_filter_class = '\Drupal\filter_wysiwyg\EditorXssFilter\WysiwygFilter';
  }
";}}s:5:"field";a:12:{s:21:"hook_field_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_field_info_alter";s:10:"definition";s:38:"function hook_field_info_alter(&$info)";s:11:"description";s:45:"Perform alterations on Field API field types.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"field";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/field.api.php";s:4:"body";s:147:"
  // Change the default widget for fields of type 'foo'.
  if (isset($info['foo'])) {
    $info['foo']['default widget'] = 'mymodule_widget';
  }
";}s:41:"hook_field_ui_preconfigured_options_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:41:"hook_field_ui_preconfigured_options_alter";s:10:"definition";s:80:"function hook_field_ui_preconfigured_options_alter(array &$options, $field_type)";s:11:"description";s:51:"Perform alterations on preconfigured field options.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"field";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/field.api.php";s:4:"body";s:633:"
  // If the field is not an "entity_reference"-based field, bail out.
  /** @var \Drupal\Core\Field\FieldTypePluginManager $field_type_manager */
  $field_type_manager = \Drupal::service('plugin.manager.field.field_type');
  $class = $field_type_manager->getPluginClass($field_type);
  if (!is_a($class, 'Drupal\Core\Field\Plugin\Field\FieldType\EntityReferenceItem', TRUE)) {
    return;
  }

  // Set the default formatter for media in entity reference fields to be the
  // "Rendered entity" formatter.
  if (!empty($options['media'])) {
    $options['media']['entity_view_display']['type'] = 'entity_reference_entity_view';
  }
";}s:39:"hook_field_storage_config_update_forbid";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:39:"hook_field_storage_config_update_forbid";s:10:"definition";s:170:"function hook_field_storage_config_update_forbid(\Drupal\field\FieldStorageConfigInterface $field_storage, \Drupal\field\FieldStorageConfigInterface $prior_field_storage)";s:11:"description";s:45:"Forbid a field storage update from occurring.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"field";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/field.api.php";s:4:"body";s:725:"
  if ($field_storage->module == 'options' && $field_storage->hasData()) {
    // Forbid any update that removes allowed values with actual data.
    $allowed_values = $field_storage->getSetting('allowed_values');
    $prior_allowed_values = $prior_field_storage->getSetting('allowed_values');
    $lost_keys = array_keys(array_diff_key($prior_allowed_values, $allowed_values));
    if (_options_values_in_use($field_storage->getTargetEntityTypeId(), $field_storage->getName(), $lost_keys)) {
      throw new \Drupal\Core\Entity\Exception\FieldStorageDefinitionUpdateForbiddenException(t('A list field (@field_name) with existing data cannot have its keys changed.', ['@field_name' => $field_storage->getName()]));
    }
  }
";}s:28:"hook_field_widget_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_field_widget_info_alter";s:10:"definition";s:51:"function hook_field_widget_info_alter(array &$info)";s:11:"description";s:46:"Perform alterations on Field API widget types.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"field";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/field.api.php";s:4:"body";s:116:"
  // Let a new field type re-use an existing widget.
  $info['options_select']['field_types'][] = 'my_field_type';
";}s:28:"hook_field_widget_form_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_field_widget_form_alter";s:10:"definition";s:108:"function hook_field_widget_form_alter(&$element, \Drupal\Core\Form\FormStateInterface $form_state, $context)";s:11:"description";s:56:"Alter forms for field widgets provided by other modules.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"field";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/field.api.php";s:4:"body";s:299:"
  // Add a css class to widget form elements for all fields of type mytype.
  $field_definition = $context['items']->getFieldDefinition();
  if ($field_definition->getType() == 'mytype') {
    // Be sure not to overwrite existing attributes.
    $element['#attributes']['class'][] = 'myclass';
  }
";}s:40:"hook_field_widget_WIDGET_TYPE_form_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:40:"hook_field_widget_WIDGET_TYPE_form_alter";s:10:"definition";s:120:"function hook_field_widget_WIDGET_TYPE_form_alter(&$element, \Drupal\Core\Form\FormStateInterface $form_state, $context)";s:11:"description";s:68:"Alter widget forms for a specific widget provided by another module.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"field";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/field.api.php";s:4:"body";s:269:"
  // Code here will only act on widgets of type WIDGET_TYPE.  For example,
  // hook_field_widget_mymodule_autocomplete_form_alter() will only act on
  // widgets of type 'mymodule_autocomplete'.
  $element['#autocomplete_route_name'] = 'mymodule.autocomplete_route';
";}s:39:"hook_field_widget_multivalue_form_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:39:"hook_field_widget_multivalue_form_alter";s:10:"definition";s:132:"function hook_field_widget_multivalue_form_alter(array &$elements, \Drupal\Core\Form\FormStateInterface $form_state, array $context)";s:11:"description";s:68:"Alter forms for multi-value field widgets provided by other modules.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"field";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/field.api.php";s:4:"body";s:300:"
  // Add a css class to widget form elements for all fields of type mytype.
  $field_definition = $context['items']->getFieldDefinition();
  if ($field_definition->getType() == 'mytype') {
    // Be sure not to overwrite existing attributes.
    $elements['#attributes']['class'][] = 'myclass';
  }
";}s:51:"hook_field_widget_multivalue_WIDGET_TYPE_form_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:51:"hook_field_widget_multivalue_WIDGET_TYPE_form_alter";s:10:"definition";s:144:"function hook_field_widget_multivalue_WIDGET_TYPE_form_alter(array &$elements, \Drupal\Core\Form\FormStateInterface $form_state, array $context)";s:11:"description";s:71:"Alter multi-value widget forms for a widget provided by another module.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"field";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/field.api.php";s:4:"body";s:458:"
  // Code here will only act on widgets of type WIDGET_TYPE. For example,
  // hook_field_widget_multivalue_mymodule_autocomplete_form_alter() will only
  // act on widgets of type 'mymodule_autocomplete'.
  // Change the autcomplete route for each autocomplete element within the
  // multivalue widget.
  foreach (Element::children($elements) as $delta => $element) {
    $elements[$delta]['#autocomplete_route_name'] = 'mymodule.autocomplete_route';
  }
";}s:31:"hook_field_formatter_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:31:"hook_field_formatter_info_alter";s:10:"definition";s:54:"function hook_field_formatter_info_alter(array &$info)";s:11:"description";s:49:"Perform alterations on Field API formatter types.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"field";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/field.api.php";s:4:"body";s:117:"
  // Let a new field type re-use an existing formatter.
  $info['text_default']['field_types'][] = 'my_field_type';
";}s:26:"hook_field_info_max_weight";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:26:"hook_field_info_max_weight";s:10:"definition";s:83:"function hook_field_info_max_weight($entity_type, $bundle, $context, $context_mode)";s:11:"description";s:75:"Returns the maximum weight for the entity components handled by the module.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"field";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/field.api.php";s:4:"body";s:206:"
  $weights = [];

  foreach (my_module_entity_additions($entity_type, $bundle, $context, $context_mode) as $addition) {
    $weights[] = $addition['weight'];
  }

  return $weights ? max($weights) : NULL;
";}s:30:"hook_field_purge_field_storage";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_field_purge_field_storage";s:10:"definition";s:95:"function hook_field_purge_field_storage(\Drupal\field\Entity\FieldStorageConfig $field_storage)";s:11:"description";s:53:"Acts when a field storage definition is being purged.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"field";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/field.api.php";s:4:"body";s:110:"
  db_delete('my_module_field_storage_info')
    ->condition('uuid', $field_storage->uuid())
    ->execute();
";}s:22:"hook_field_purge_field";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_field_purge_field";s:10:"definition";s:72:"function hook_field_purge_field(\Drupal\field\Entity\FieldConfig $field)";s:11:"description";s:34:"Acts when a field is being purged.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"field";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/field.api.php";s:4:"body";s:90:"
  db_delete('my_module_field_info')
    ->condition('id', $field->id())
    ->execute();
";}}s:8:"field_ui";a:4:{s:46:"hook_field_formatter_third_party_settings_form";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:46:"hook_field_formatter_third_party_settings_form";s:10:"definition";s:234:"function hook_field_formatter_third_party_settings_form(\Drupal\Core\Field\FormatterInterface $plugin, \Drupal\Core\Field\FieldDefinitionInterface $field_definition, $view_mode, $form, \Drupal\Core\Form\FormStateInterface $form_state)";s:11:"description";s:76:"Allow modules to add settings to field formatters provided by other modules.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:8:"field_ui";s:4:"core";b:1;s:9:"file_path";s:45:"public://module_builder_data/field_ui.api.php";s:4:"body";s:375:"
  $element = [];
  // Add a 'my_setting' checkbox to the settings form for 'foo_formatter' field
  // formatters.
  if ($plugin->getPluginId() == 'foo_formatter') {
    $element['my_setting'] = [
      '#type' => 'checkbox',
      '#title' => t('My setting'),
      '#default_value' => $plugin->getThirdPartySetting('my_module', 'my_setting'),
    ];
  }
  return $element;
";}s:43:"hook_field_widget_third_party_settings_form";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:43:"hook_field_widget_third_party_settings_form";s:10:"definition";s:228:"function hook_field_widget_third_party_settings_form(\Drupal\Core\Field\WidgetInterface $plugin, \Drupal\Core\Field\FieldDefinitionInterface $field_definition, $form_mode, $form, \Drupal\Core\Form\FormStateInterface $form_state)";s:11:"description";s:73:"Allow modules to add settings to field widgets provided by other modules.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:8:"field_ui";s:4:"core";b:1;s:9:"file_path";s:45:"public://module_builder_data/field_ui.api.php";s:4:"body";s:366:"
  $element = [];
  // Add a 'my_setting' checkbox to the settings form for 'foo_widget' field
  // widgets.
  if ($plugin->getPluginId() == 'foo_widget') {
    $element['my_setting'] = [
      '#type' => 'checkbox',
      '#title' => t('My setting'),
      '#default_value' => $plugin->getThirdPartySetting('my_module', 'my_setting'),
    ];
  }
  return $element;
";}s:43:"hook_field_formatter_settings_summary_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:43:"hook_field_formatter_settings_summary_alter";s:10:"definition";s:73:"function hook_field_formatter_settings_summary_alter(&$summary, $context)";s:11:"description";s:44:"Alters the field formatter settings summary.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:8:"field_ui";s:4:"core";b:1;s:9:"file_path";s:45:"public://module_builder_data/field_ui.api.php";s:4:"body";s:332:"
  // Append a message to the summary when an instance of foo_formatter has
  // mysetting set to TRUE for the current view mode.
  if ($context['formatter']->getPluginId() == 'foo_formatter') {
    if ($context['formatter']->getThirdPartySetting('my_module', 'my_setting')) {
      $summary[] = t('My setting enabled.');
    }
  }
";}s:40:"hook_field_widget_settings_summary_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:40:"hook_field_widget_settings_summary_alter";s:10:"definition";s:70:"function hook_field_widget_settings_summary_alter(&$summary, $context)";s:11:"description";s:41:"Alters the field widget settings summary.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:8:"field_ui";s:4:"core";b:1;s:9:"file_path";s:45:"public://module_builder_data/field_ui.api.php";s:4:"body";s:320:"
  // Append a message to the summary when an instance of foo_widget has
  // mysetting set to TRUE for the current view mode.
  if ($context['widget']->getPluginId() == 'foo_widget') {
    if ($context['widget']->getThirdPartySetting('my_module', 'my_setting')) {
      $summary[] = t('My setting enabled.');
    }
  }
";}}s:4:"file";a:6:{s:18:"hook_file_download";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:18:"hook_file_download";s:10:"definition";s:33:"function hook_file_download($uri)";s:11:"description";s:66:"Control access to private file downloads and specify HTTP headers.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"file";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/file.api.php";s:4:"body";s:276:"
  // Check to see if this is a config download.
  $scheme = file_uri_scheme($uri);
  $target = file_uri_target($uri);
  if ($scheme == 'temporary' && $target == 'config.tar.gz') {
    return [
      'Content-disposition' => 'attachment; filename="config.tar.gz"',
    ];
  }
";}s:19:"hook_file_url_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:19:"hook_file_url_alter";s:10:"definition";s:35:"function hook_file_url_alter(&$uri)";s:11:"description";s:24:"Alter the URL to a file.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"file";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/file.api.php";s:4:"body";s:1244:"
  $user = \Drupal::currentUser();

  // User 1 will always see the local file in this example.
  if ($user->id() == 1) {
    return;
  }

  $cdn1 = 'http://cdn1.example.com';
  $cdn2 = 'http://cdn2.example.com';
  $cdn_extensions = ['css', 'js', 'gif', 'jpg', 'jpeg', 'png'];

  // Most CDNs don't support private file transfers without a lot of hassle,
  // so don't support this in the common case.
  $schemes = ['public'];

  $scheme = file_uri_scheme($uri);

  // Only serve shipped files and public created files from the CDN.
  if (!$scheme || in_array($scheme, $schemes)) {
    // Shipped files.
    if (!$scheme) {
      $path = $uri;
    }
    // Public created files.
    else {
      $wrapper = \Drupal::service('stream_wrapper_manager')->getViaScheme($scheme);
      $path = $wrapper->getDirectoryPath() . '/' . file_uri_target($uri);
    }

    // Clean up Windows paths.
    $path = str_replace('\\', '/', $path);

    // Serve files with one of the CDN extensions from CDN 1, all others from
    // CDN 2.
    $pathinfo = pathinfo($path);
    if (isset($pathinfo['extension']) && in_array($pathinfo['extension'], $cdn_extensions)) {
      $uri = $cdn1 . '/' . $path;
    }
    else {
      $uri = $cdn2 . '/' . $path;
    }
  }
";}s:32:"hook_file_mimetype_mapping_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:32:"hook_file_mimetype_mapping_alter";s:10:"definition";s:52:"function hook_file_mimetype_mapping_alter(&$mapping)";s:11:"description";s:75:"Alter MIME type mappings used to determine MIME type from a file extension.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"file";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/file.api.php";s:4:"body";s:323:"
  // Add new MIME type 'drupal/info'.
  $mapping['mimetypes']['example_info'] = 'drupal/info';
  // Add new extension '.info.yml' and map it to the 'drupal/info' MIME type.
  $mapping['extensions']['info'] = 'example_info';
  // Override existing extension mapping for '.ogg' files.
  $mapping['extensions']['ogg'] = 189;
";}s:24:"hook_archiver_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_archiver_info_alter";s:10:"definition";s:41:"function hook_archiver_info_alter(&$info)";s:11:"description";s:53:"Alter archiver information declared by other modules.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"file";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/file.api.php";s:4:"body";s:41:"
  $info['tar']['extensions'][] = 'tgz';
";}s:22:"hook_filetransfer_info";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_filetransfer_info";s:10:"definition";s:33:"function hook_filetransfer_info()";s:11:"description";s:69:"Register information about FileTransfer classes provided by a module.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"file";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/file.api.php";s:4:"body";s:149:"
  $info['sftp'] = [
    'title' => t('SFTP (Secure FTP)'),
    'class' => 'Drupal\Core\FileTransfer\SFTP',
    'weight' => 10,
  ];
  return $info;
";}s:28:"hook_filetransfer_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_filetransfer_info_alter";s:10:"definition";s:58:"function hook_filetransfer_info_alter(&$filetransfer_info)";s:11:"description";s:38:"Alter the FileTransfer class registry.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"file";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/file.api.php";s:4:"body";s:166:"
  // Remove the FTP option entirely.
  unset($filetransfer_info['ftp']);
  // Make sure the SSH option is listed first.
  $filetransfer_info['ssh']['weight'] = -10;
";}}s:6:"filter";a:3:{s:22:"hook_filter_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_filter_info_alter";s:10:"definition";s:39:"function hook_filter_info_alter(&$info)";s:11:"description";s:42:"Perform alterations on filter definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:6:"filter";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/filter.api.php";s:4:"body";s:152:"
  // Alter the default settings of the URL filter provided by core.
  $info['filter_url']['default_settings'] = [
    'filter_url_length' => 100,
  ];
";}s:30:"hook_filter_secure_image_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_filter_secure_image_alter";s:10:"definition";s:48:"function hook_filter_secure_image_alter(&$image)";s:11:"description";s:37:"Alters images with an invalid source.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:6:"filter";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/filter.api.php";s:4:"body";s:534:"
  // Turn an invalid image into an error indicator.
  $image->setAttribute('src', base_path() . 'core/misc/icons/e32700/error.svg');
  $image->setAttribute('alt', t('Image removed.'));
  $image->setAttribute('title', t('This image has been removed. For security reasons, only images from the local domain are allowed.'));

  // Add a CSS class to aid in styling.
  $class = ($image->getAttribute('class') ? trim($image->getAttribute('class')) . ' ' : '');
  $class .= 'filter-image-invalid';
  $image->setAttribute('class', $class);
";}s:26:"hook_filter_format_disable";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:26:"hook_filter_format_disable";s:10:"definition";s:44:"function hook_filter_format_disable($format)";s:11:"description";s:53:"Perform actions when a text format has been disabled.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:6:"filter";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/filter.api.php";s:4:"body";s:29:"
  mymodule_cache_rebuild();
";}}s:4:"help";a:2:{s:9:"hook_help";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:9:"hook_help";s:10:"definition";s:86:"function hook_help($route_name, \Drupal\Core\Routing\RouteMatchInterface $route_match)";s:11:"description";s:25:"Provide online user help.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"help";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/help.api.php";s:4:"body";s:1148:"
  switch ($route_name) {
    // Main module help for the block module.
    case 'help.page.block':
      return '<p>' . t('Blocks are boxes of content rendered into an area, or region, of a web page. The default theme Bartik, for example, implements the regions "Sidebar first", "Sidebar second", "Featured", "Content", "Header", "Footer", etc., and a block may appear in any one of these areas. The <a href=":blocks">blocks administration page</a> provides a drag-and-drop interface for assigning a block to a region, and for controlling the order of blocks within regions.', [':blocks' => \Drupal::url('block.admin_display')]) . '</p>';

    // Help for another path in the block module.
    case 'block.admin_display':
      return '<p>' . t('This page provides a drag-and-drop interface for assigning a block to a region, and for controlling the order of blocks within regions. Since not all themes implement the same regions, or display regions in the same way, blocks are positioned on a per-theme basis. Remember that your changes will not be saved until you click the <em>Save blocks</em> button at the bottom of the page.') . '</p>';
  }
";}s:28:"hook_help_section_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_help_section_info_alter";s:10:"definition";s:45:"function hook_help_section_info_alter(&$info)";s:11:"description";s:60:"Perform alterations on help page section plugin definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"help";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/help.api.php";s:4:"body";s:117:"
  // Alter the header for the module overviews section.
  $info['hook_help']['header'] = t('Overviews of modules');
";}}s:5:"image";a:2:{s:28:"hook_image_effect_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_image_effect_info_alter";s:10:"definition";s:48:"function hook_image_effect_info_alter(&$effects)";s:11:"description";s:71:"Alter the information provided in \Drupal\image\Annotation\ImageEffect.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"image";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/image.api.php";s:4:"body";s:134:"
  // Override the Image module's 'Scale and Crop' effect label.
  $effects['image_scale_and_crop']['label'] = t('Bangers and Mash');
";}s:22:"hook_image_style_flush";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_image_style_flush";s:10:"definition";s:39:"function hook_image_style_flush($style)";s:11:"description";s:32:"Respond to image style flushing.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"image";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/image.api.php";s:4:"body";s:110:"
  // Empty cached data that contains information about the style.
  \Drupal::cache('mymodule')->deleteAll();
";}}s:14:"module_builder";a:1:{s:24:"hook_module_builder_info";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_module_builder_info";s:10:"definition";s:43:"function hook_module_builder_info($version)";s:11:"description";s:66:"Provide information about hook definition files to Module builder.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:14:"module_builder";s:4:"core";b:0;s:9:"file_path";s:51:"public://module_builder_data/module_builder.api.php";s:4:"body";s:999:"
  $data = array(
    // Hooks on behalf of Drupal core.
    'system' => array(
      'url' => 'http://cvs.drupal.org/viewvc.py/drupal/contributions/docs/developer/hooks/%file?view=co&pathrev=%branch',
      'branch' => 'DRUPAL-6--1',
      'group' => '#filenames',
      'hook_files' => array(
        // List of files we should slurp from the url for hook defs.
        // and the destination file for processed code.
        'core.php' =>    '%module.module',
        'node.php' =>    '%module.module',      
        'install.php' => '%module.install',      
      ),
    ),
    // We need to do our own stuff now we have a hook!
    'module_builder' => array(
      'url' => 'http://cvs.drupal.org/viewvc.py/drupal/contributions/modules/module_builder/hooks/%file?view=co&pathrev=%branch',
      'branch' => 'DRUPAL-6--2',
      'group' => 'module builder',      
      'hook_files' => array(
        'module_builder.php' => '%module.module_builder.inc',
      ),
    ),
  );
  
  return $data;
";}}s:4:"node";a:9:{s:16:"hook_node_grants";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:16:"hook_node_grants";s:10:"definition";s:78:"function hook_node_grants(\Drupal\Core\Session\AccountInterface $account, $op)";s:11:"description";s:60:"Inform the node access system what permissions the user has.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"node";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/node.api.php";s:4:"body";s:190:"
  if ($account->hasPermission('access private content')) {
    $grants['example'] = [1];
  }
  if ($account->id()) {
    $grants['example_author'] = [$account->id()];
  }
  return $grants;
";}s:24:"hook_node_access_records";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_node_access_records";s:10:"definition";s:67:"function hook_node_access_records(\Drupal\node\NodeInterface $node)";s:11:"description";s:57:"Set permissions for a node to be written to the database.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"node";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/node.api.php";s:4:"body";s:1136:"
  // We only care about the node if it has been marked private. If not, it is
  // treated just like any other node and we completely ignore it.
  if ($node->private->value) {
    $grants = [];
    // Only published Catalan translations of private nodes should be viewable
    // to all users. If we fail to check $node->isPublished(), all users would be able
    // to view an unpublished node.
    if ($node->isPublished()) {
      $grants[] = [
        'realm' => 'example',
        'gid' => 1,
        'grant_view' => 1,
        'grant_update' => 0,
        'grant_delete' => 0,
        'langcode' => 'ca'
      ];
    }
    // For the example_author array, the GID is equivalent to a UID, which
    // means there are many groups of just 1 user.
    // Note that an author can always view his or her nodes, even if they
    // have status unpublished.
    if ($node->getOwnerId()) {
      $grants[] = [
        'realm' => 'example_author',
        'gid' => $node->getOwnerId(),
        'grant_view' => 1,
        'grant_update' => 1,
        'grant_delete' => 1,
        'langcode' => 'ca'
      ];
    }

    return $grants;
  }
";}s:30:"hook_node_access_records_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_node_access_records_alter";s:10:"definition";s:82:"function hook_node_access_records_alter(&$grants, Drupal\node\NodeInterface $node)";s:11:"description";s:66:"Alter permissions for a node before it is written to the database.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"node";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/node.api.php";s:4:"body";s:521:"
  // Our module allows editors to mark specific articles with the 'is_preview'
  // field. If the node being saved has a TRUE value for that field, then only
  // our grants are retained, and other grants are removed. Doing so ensures
  // that our rules are enforced no matter what priority other grants are given.
  if ($node->is_preview) {
    // Our module grants are set in $grants['example'].
    $temp = $grants['example'];
    // Now remove all module grants but our own.
    $grants = ['example' => $temp];
  }
";}s:22:"hook_node_grants_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_node_grants_alter";s:10:"definition";s:94:"function hook_node_grants_alter(&$grants, \Drupal\Core\Session\AccountInterface $account, $op)";s:11:"description";s:67:"Alter user access rules when trying to view, edit or delete a node.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"node";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/node.api.php";s:4:"body";s:620:"
  // Our sample module never allows certain roles to edit or delete
  // content. Since some other node access modules might allow this
  // permission, we expressly remove it by returning an empty $grants
  // array for roles specified in our variable setting.

  // Get our list of banned roles.
  $restricted = \Drupal::config('example.settings')->get('restricted_roles');

  if ($op != 'view' && !empty($restricted)) {
    // Now check the roles for this account against the restrictions.
    foreach ($account->getRoles() as $rid) {
      if (in_array($rid, $restricted)) {
        $grants = [];
      }
    }
  }
";}s:16:"hook_node_access";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:16:"hook_node_access";s:10:"definition";s:112:"function hook_node_access(\Drupal\node\NodeInterface $node, $op, \Drupal\Core\Session\AccountInterface $account)";s:11:"description";s:26:"Controls access to a node.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"node";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/node.api.php";s:4:"body";s:1069:"
  $type = $node->bundle();

  switch ($op) {
    case 'create':
      return AccessResult::allowedIfHasPermission($account, 'create ' . $type . ' content');

    case 'update':
      if ($account->hasPermission('edit any ' . $type . ' content', $account)) {
        return AccessResult::allowed()->cachePerPermissions();
      }
      else {
        return AccessResult::allowedIf($account->hasPermission('edit own ' . $type . ' content', $account) && ($account->id() == $node->getOwnerId()))->cachePerPermissions()->cachePerUser()->addCacheableDependency($node);
      }

    case 'delete':
      if ($account->hasPermission('delete any ' . $type . ' content', $account)) {
        return AccessResult::allowed()->cachePerPermissions();
      }
      else {
        return AccessResult::allowedIf($account->hasPermission('delete own ' . $type . ' content', $account) && ($account->id() == $node->getOwnerId()))->cachePerPermissions()->cachePerUser()->addCacheableDependency($node);
      }

    default:
      // No opinion.
      return AccessResult::neutral();
  }
";}s:23:"hook_node_search_result";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_node_search_result";s:10:"definition";s:66:"function hook_node_search_result(\Drupal\node\NodeInterface $node)";s:11:"description";s:49:"Act on a node being displayed as a search result.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"node";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/node.api.php";s:4:"body";s:215:"
  $rating = db_query('SELECT SUM(points) FROM {my_rating} WHERE nid = :nid', ['nid' => $node->id()])->fetchField();
  return ['rating' => \Drupal::translation()->formatPlural($rating, '1 point', '@count points')];
";}s:22:"hook_node_update_index";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_node_update_index";s:10:"definition";s:65:"function hook_node_update_index(\Drupal\node\NodeInterface $node)";s:11:"description";s:42:"Act on a node being indexed for searching.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"node";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/node.api.php";s:4:"body";s:279:"
  $text = '';
  $ratings = db_query('SELECT title, description FROM {my_ratings} WHERE nid = :nid', [':nid' => $node->id()]);
  foreach ($ratings as $rating) {
    $text .= '<h2>' . Html::escape($rating->title) . '</h2>' . Xss::filter($rating->description);
  }
  return $text;
";}s:12:"hook_ranking";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:12:"hook_ranking";s:10:"definition";s:23:"function hook_ranking()";s:11:"description";s:72:"Provide additional methods of scoring for core search results for nodes.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"node";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/node.api.php";s:4:"body";s:862:"
  // If voting is disabled, we can avoid returning the array, no hard feelings.
  if (\Drupal::config('vote.settings')->get('node_enabled')) {
    return [
      'vote_average' => [
        'title' => t('Average vote'),
        // Note that we use i.sid, the search index's search item id, rather than
        // n.nid.
        'join' => [
          'type' => 'LEFT',
          'table' => 'vote_node_data',
          'alias' => 'vote_node_data',
          'on' => 'vote_node_data.nid = i.sid',
        ],
        // The highest possible score should be 1, and the lowest possible score,
        // always 0, should be 0.
        'score' => 'vote_node_data.average / CAST(%f AS DECIMAL)',
        // Pass in the highest possible voting score as a decimal argument.
        'arguments' => [\Drupal::config('vote.settings')->get('score_max')],
      ],
    ];
  }
";}s:21:"hook_node_links_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_node_links_alter";s:10:"definition";s:85:"function hook_node_links_alter(array &$links, NodeInterface $entity, array &$context)";s:11:"description";s:26:"Alter the links of a node.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"node";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/node.api.php";s:4:"body";s:404:"
  $links['mymodule'] = [
    '#theme' => 'links__node__mymodule',
    '#attributes' => ['class' => ['links', 'inline']],
    '#links' => [
      'node-report' => [
        'title' => t('Report'),
        'url' => Url::fromRoute('node_test.report', ['node' => $entity->id()], ['query' => ['token' => \Drupal::getContainer()->get('csrf_token')->get("node/{$entity->id()}/report")]]),
      ],
    ],
  ];
";}}s:7:"options";a:2:{s:23:"hook_options_list_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_options_list_alter";s:10:"definition";s:65:"function hook_options_list_alter(array &$options, array $context)";s:11:"description";s:55:"Alters the list of options to be displayed for a field.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:7:"options";s:4:"core";b:1;s:9:"file_path";s:44:"public://module_builder_data/options.api.php";s:4:"body";s:204:"
  // Check if this is the field we want to change.
  if ($context['fieldDefinition']->id() == 'field_option') {
    // Change the label of the empty option.
    $options['_none'] = t('== Empty ==');
  }
";}s:32:"callback_allowed_values_function";a:10:{s:4:"type";s:8:"callback";s:4:"name";s:32:"callback_allowed_values_function";s:10:"definition";s:147:"function callback_allowed_values_function(FieldStorageDefinitionInterface $definition, FieldableEntityInterface $entity = NULL, &$cacheable = TRUE)";s:11:"description";s:48:"Provide the allowed values for a 'list_*' field.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:7:"options";s:4:"core";b:1;s:9:"file_path";s:44:"public://module_builder_data/options.api.php";s:4:"body";s:309:"
  if (isset($entity) && ($entity->bundle() == 'not_a_programmer')) {
    $values = [
      1 => 'One',
      2 => 'Two',
    ];
  }
  else {
    $values = [
      'Group 1' => [
        0 => 'Zero',
        1 => 'One',
      ],
      'Group 2' => [
        2 => 'Two',
      ],
    ];
  }

  return $values;
";}}s:4:"path";a:3:{s:16:"hook_path_insert";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:16:"hook_path_insert";s:10:"definition";s:32:"function hook_path_insert($path)";s:11:"description";s:33:"Respond to a path being inserted.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"path";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/path.api.php";s:4:"body";s:125:"
  db_insert('mytable')
    ->fields([
      'alias' => $path['alias'],
      'pid' => $path['pid'],
    ])
    ->execute();
";}s:16:"hook_path_update";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:16:"hook_path_update";s:10:"definition";s:32:"function hook_path_update($path)";s:11:"description";s:32:"Respond to a path being updated.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"path";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/path.api.php";s:4:"body";s:186:"
  if ($path['alias'] != $path['original']['alias']) {
    db_update('mytable')
      ->fields(['alias' => $path['alias']])
      ->condition('pid', $path['pid'])
      ->execute();
  }
";}s:16:"hook_path_delete";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:16:"hook_path_delete";s:10:"definition";s:32:"function hook_path_delete($path)";s:11:"description";s:32:"Respond to a path being deleted.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"path";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/path.api.php";s:4:"body";s:78:"
  db_delete('mytable')
    ->condition('pid', $path['pid'])
    ->execute();
";}}s:8:"pathauto";a:5:{s:27:"hook_path_alias_types_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_path_alias_types_alter";s:10:"definition";s:57:"function hook_path_alias_types_alter(array &$definitions)";s:11:"description";s:38:"Alter pathauto alias type definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:8:"pathauto";s:4:"core";b:0;s:9:"file_path";s:45:"public://module_builder_data/pathauto.api.php";s:4:"body";s:1:"
";}s:31:"hook_pathauto_is_alias_reserved";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:31:"hook_pathauto_is_alias_reserved";s:10:"definition";s:68:"function hook_pathauto_is_alias_reserved($alias, $source, $langcode)";s:11:"description";s:73:"Determine if a possible URL alias would conflict with any existing paths.";s:11:"destination";s:20:"%module.pathauto.inc";s:12:"dependencies";a:0:{}s:5:"group";s:8:"pathauto";s:4:"core";b:0;s:9:"file_path";s:45:"public://module_builder_data/pathauto.api.php";s:4:"body";s:216:"
  // Check our module's list of paths and return TRUE if $alias matches any of
  // them.
  return (bool) \Drupal::database()->query("SELECT 1 FROM {mytable} WHERE path = :path", [':path' => $alias])->fetchField();
";}s:27:"hook_pathauto_pattern_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_pathauto_pattern_alter";s:10:"definition";s:63:"function hook_pathauto_pattern_alter(&$pattern, array $context)";s:11:"description";s:70:"Alter the pattern to be used before an alias is generated by Pathauto.";s:11:"destination";s:20:"%module.pathauto.inc";s:12:"dependencies";a:0:{}s:5:"group";s:8:"pathauto";s:4:"core";b:0;s:9:"file_path";s:45:"public://module_builder_data/pathauto.api.php";s:4:"body";s:243:"
  // Switch out any [node:created:*] tokens with [node:updated:*] on update.
  if ($context['module'] == 'node' && ($context['op'] == 'update')) {
    $pattern = preg_replace('/\[node:created(\:[^]]*)?\]/', '[node:updated$1]', $pattern);
  }
";}s:25:"hook_pathauto_alias_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:25:"hook_pathauto_alias_alter";s:10:"definition";s:60:"function hook_pathauto_alias_alter(&$alias, array &$context)";s:11:"description";s:47:"Alter Pathauto-generated aliases before saving.";s:11:"destination";s:20:"%module.pathauto.inc";s:12:"dependencies";a:0:{}s:5:"group";s:8:"pathauto";s:4:"core";b:0;s:9:"file_path";s:45:"public://module_builder_data/pathauto.api.php";s:4:"body";s:213:"
  // Add a suffix so that all aliases get saved as 'content/my-title.html'
  $alias .= '.html';

  // Force all aliases to be saved as language neutral.
  $context['language'] = Language::LANGCODE_NOT_SPECIFIED;
";}s:37:"hook_pathauto_punctuation_chars_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:37:"hook_pathauto_punctuation_chars_alter";s:10:"definition";s:67:"function hook_pathauto_punctuation_chars_alter(array &$punctuation)";s:11:"description";s:62:"Alter the list of punctuation characters for Pathauto control.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:8:"pathauto";s:4:"core";b:0;s:9:"file_path";s:45:"public://module_builder_data/pathauto.api.php";s:4:"body";s:183:"
  // Add the trademark symbol.
  $punctuation['trademark'] = array('value' => '™', 'name' => t('Trademark symbol'));

  // Remove the dollar sign.
  unset($punctuation['dollar']);
";}}s:6:"plugin";a:1:{s:26:"hook_plugin_selector_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:26:"hook_plugin_selector_alter";s:10:"definition";s:56:"function hook_plugin_selector_alter(array &$definitions)";s:11:"description";s:42:"Alters plugin selector plugin definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:6:"plugin";s:4:"core";b:0;s:9:"file_path";s:43:"public://module_builder_data/plugin.api.php";s:4:"body";s:178:"
  // Remove a plugin entirely.
  unset($definitions['foo_plugin_id']);

  // Replace a plugin's class with another.
  $definitions['foo_plugin_id']['class'] = FooPlugin::class;
";}}s:9:"quickedit";a:2:{s:27:"hook_quickedit_editor_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_quickedit_editor_alter";s:10:"definition";s:47:"function hook_quickedit_editor_alter(&$editors)";s:11:"description";s:55:"Allow modules to alter in-place editor plugin metadata.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"quickedit";s:4:"core";b:1;s:9:"file_path";s:46:"public://module_builder_data/quickedit.api.php";s:4:"body";s:160:"
  // Cleanly override editor.module's in-place editor plugin.
  $editors['editor']['class'] = 'Drupal\advanced_editor\Plugin\quickedit\editor\AdvancedEditor';
";}s:27:"hook_quickedit_render_field";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_quickedit_render_field";s:10:"definition";s:119:"function hook_quickedit_render_field(Drupal\Core\Entity\EntityInterface $entity, $field_name, $view_mode_id, $langcode)";s:11:"description";s:72:"Returns a renderable array for the value of a single field in an entity.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:9:"quickedit";s:4:"core";b:1;s:9:"file_path";s:46:"public://module_builder_data/quickedit.api.php";s:4:"body";s:183:"
  return [
    '#prefix' => '<div class="example-markup">',
    'field' => $entity->getTranslation($langcode)->get($field_name)->view($view_mode_id),
    '#suffix' => '</div>',
  ];
";}}s:3:"rdf";a:1:{s:19:"hook_rdf_namespaces";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:19:"hook_rdf_namespaces";s:10:"definition";s:30:"function hook_rdf_namespaces()";s:11:"description";s:52:"Allow modules to define namespaces for RDF mappings.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:3:"rdf";s:4:"core";b:1;s:9:"file_path";s:40:"public://module_builder_data/rdf.api.php";s:4:"body";s:480:"
  return [
    'content'  => 'http://purl.org/rss/1.0/modules/content/',
    'dc'       => 'http://purl.org/dc/terms/',
    'foaf'     => 'http://xmlns.com/foaf/0.1/',
    'og'       => 'http://ogp.me/ns#',
    'rdfs'     => 'http://www.w3.org/2000/01/rdf-schema#',
    'sioc'     => 'http://rdfs.org/sioc/ns#',
    'sioct'    => 'http://rdfs.org/sioc/types#',
    'skos'     => 'http://www.w3.org/2004/02/skos/core#',
    'xsd'      => 'http://www.w3.org/2001/XMLSchema#',
  ];
";}}s:6:"search";a:2:{s:22:"hook_search_preprocess";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_search_preprocess";s:10:"definition";s:56:"function hook_search_preprocess($text, $langcode = NULL)";s:11:"description";s:27:"Preprocess text for search.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:6:"search";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/search.api.php";s:4:"body";s:498:"
  // If the language is not set, get it from the language manager.
  if (!isset($langcode)) {
    $langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();
  }

  // If the langcode is set to 'en' then add variations of the word "testing"
  // which can also be found during English language searches.
  if ($langcode == 'en') {
    // Add the alternate verb forms for the word "testing".
    if ($text == 'we are testing') {
      $text .= ' test tested';
    }
  }

  return $text;
";}s:24:"hook_search_plugin_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_search_plugin_alter";s:10:"definition";s:54:"function hook_search_plugin_alter(array &$definitions)";s:11:"description";s:32:"Alter search plugin definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:6:"search";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/search.api.php";s:4:"body";s:104:"
  if (isset($definitions['node_search'])) {
    $definitions['node_search']['title'] = t('Nodes');
  }
";}}s:8:"shortcut";a:1:{s:25:"hook_shortcut_default_set";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:25:"hook_shortcut_default_set";s:10:"definition";s:44:"function hook_shortcut_default_set($account)";s:11:"description";s:72:"Return the name of a default shortcut set for the provided user account.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:8:"shortcut";s:4:"core";b:1;s:9:"file_path";s:45:"public://module_builder_data/shortcut.api.php";s:4:"body";s:314:"
  // Use a special set of default shortcuts for administrators only.
  $roles = \Drupal::entityManager()->getStorage('user_role')->loadByProperties(['is_admin' => TRUE]);
  $user_admin_roles = array_intersect(array_keys($roles), $account->getRoles());
  if ($user_admin_roles) {
    return 'admin-shortcuts';
  }
";}}s:6:"system";a:1:{s:29:"hook_system_themes_page_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:29:"hook_system_themes_page_alter";s:10:"definition";s:54:"function hook_system_themes_page_alter(&$theme_groups)";s:11:"description";s:29:"Alters theme operation links.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:6:"system";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/system.api.php";s:4:"body";s:341:"
  foreach ($theme_groups as $state => &$group) {
    foreach ($theme_groups[$state] as &$theme) {
      // Add a foo link to each list of theme operations.
      $theme->operations[] = [
        'title' => t('Foo'),
        'url' => Url::fromRoute('system.themes_page'),
        'query' => ['theme' => $theme->getName()]
      ];
    }
  }
";}}s:7:"toolbar";a:2:{s:12:"hook_toolbar";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:12:"hook_toolbar";s:10:"definition";s:23:"function hook_toolbar()";s:11:"description";s:30:"Add items to the toolbar menu.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:7:"toolbar";s:4:"core";b:1;s:9:"file_path";s:44:"public://module_builder_data/toolbar.api.php";s:4:"body";s:2949:"
  $items = [];

  // Add a search field to the toolbar. The search field employs no toolbar
  // module theming functions.
  $items['global_search'] = [
    '#type' => 'toolbar_item',
    'tab' => [
      '#type' => 'search',
      '#attributes' => [
        'placeholder' => t('Search the site'),
        'class' => ['search-global'],
      ],
    ],
    '#weight' => 200,
    // Custom CSS, JS or a library can be associated with the toolbar item.
    '#attached' => [
      'library' => [
        'search/global',
      ],
    ],
  ];

  // The 'Home' tab is a simple link, which is wrapped in markup associated
  // with a visual tab styling.
  $items['home'] = [
    '#type' => 'toolbar_item',
    'tab' => [
      '#type' => 'link',
      '#title' => t('Home'),
      '#url' => Url::fromRoute('<front>'),
      '#options' => [
        'attributes' => [
          'title' => t('Home page'),
          'class' => ['toolbar-icon', 'toolbar-icon-home'],
        ],
      ],
    ],
    '#weight' => -20,
  ];

  // A tray may be associated with a tab.
  //
  // When the tab is activated, the tray will become visible, either in a
  // horizontal or vertical orientation on the screen.
  //
  // The tray should contain a renderable array. An optional #heading property
  // can be passed. This text is written to a heading tag in the tray as a
  // landmark for accessibility.
  $items['commerce'] = [
    '#type' => 'toolbar_item',
    'tab' => [
      '#type' => 'link',
      '#title' => t('Shopping cart'),
      '#url' => Url::fromRoute('cart'),
      '#options' => [
        'attributes' => [
          'title' => t('Shopping cart'),
        ],
      ],
    ],
    'tray' => [
      '#heading' => t('Shopping cart actions'),
      'shopping_cart' => [
        '#theme' => 'item_list',
        '#items' => [/* An item list renderable array */],
      ],
    ],
    '#weight' => 150,
  ];

  // The tray can be used to render arbitrary content.
  //
  // A renderable array passed to the 'tray' property will be rendered outside
  // the administration bar but within the containing toolbar element.
  //
  // If the default behavior and styling of a toolbar tray is not desired, one
  // can render content to the toolbar element and apply custom theming and
  // behaviors.
  $items['user_messages'] = [
    // Include the toolbar_tab_wrapper to style the link like a toolbar tab.
    // Exclude the theme wrapper if custom styling is desired.
    '#type' => 'toolbar_item',
    'tab' => [
      '#type' => 'link',
      '#theme' => 'user_message_toolbar_tab',
      '#theme_wrappers' => [],
      '#title' => t('Messages'),
      '#url' => Url::fromRoute('user.message'),
      '#options' => [
        'attributes' => [
          'title' => t('Messages'),
        ],
      ],
    ],
    'tray' => [
      '#heading' => t('User messages'),
      'messages' => [/* renderable content */],
    ],
    '#weight' => 125,
  ];

  return $items;
";}s:18:"hook_toolbar_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:18:"hook_toolbar_alter";s:10:"definition";s:36:"function hook_toolbar_alter(&$items)";s:11:"description";s:55:"Alter the toolbar menu after hook_toolbar() is invoked.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:7:"toolbar";s:4:"core";b:1;s:9:"file_path";s:44:"public://module_builder_data/toolbar.api.php";s:4:"body";s:75:"
  // Move the User tab to the right.
  $items['commerce']['#weight'] = 5;
";}}s:4:"tour";a:2:{s:20:"hook_tour_tips_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:20:"hook_tour_tips_alter";s:10:"definition";s:92:"function hook_tour_tips_alter(array &$tour_tips, Drupal\Core\Entity\EntityInterface $entity)";s:11:"description";s:48:"Allow modules to alter tour items before render.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"tour";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/tour.api.php";s:4:"body";s:168:"
  foreach ($tour_tips as $tour_tip) {
    if ($tour_tip->get('id') == 'tour-code-test-1') {
      $tour_tip->set('body', 'Altered by hook_tour_tips_alter');
    }
  }
";}s:25:"hook_tour_tips_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:25:"hook_tour_tips_info_alter";s:10:"definition";s:42:"function hook_tour_tips_info_alter(&$info)";s:11:"description";s:46:"Allow modules to alter tip plugin definitions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"tour";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/tour.api.php";s:4:"body";s:159:"
  // Swap out the class used for this tip plugin.
  if (isset($info['text'])) {
    $info['class'] = 'Drupal\mymodule\Plugin\tour\tip\MyCustomTipPlugin';
  }
";}}s:6:"update";a:3:{s:26:"hook_update_projects_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:26:"hook_update_projects_alter";s:10:"definition";s:47:"function hook_update_projects_alter(&$projects)";s:11:"description";s:71:"Alter the list of projects before fetching data and comparing versions.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:6:"update";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/update.api.php";s:4:"body";s:1798:"
  // Hide a site-specific module from the list.
  unset($projects['site_specific_module']);

  // Add a disabled module to the list.
  // The key for the array should be the machine-readable project "short name".
  $projects['disabled_project_name'] = [
    // Machine-readable project short name (same as the array key above).
    'name' => 'disabled_project_name',
    // Array of values from the main .info.yml file for this project.
    'info' => [
      'name' => 'Some disabled module',
      'description' => 'A module not enabled on the site that you want to see in the available updates report.',
      'version' => '8.x-1.0',
      'core' => '8.x',
      // The maximum file change time (the "ctime" returned by the filectime()
      // PHP method) for all of the .info.yml files included in this project.
      '_info_file_ctime' => 1243888165,
    ],
    // The date stamp when the project was released, if known. If the disabled
    // project was an officially packaged release from drupal.org, this will
    // be included in the .info.yml file as the 'datestamp' field. This only
    // really matters for development snapshot releases that are regenerated,
    // so it can be left undefined or set to 0 in most cases.
    'datestamp' => 1243888185,
    // Any modules (or themes) included in this project. Keyed by machine-
    // readable "short name", value is the human-readable project name printed
    // in the UI.
    'includes' => [
      'disabled_project' => 'Disabled module',
      'disabled_project_helper' => 'Disabled module helper module',
      'disabled_project_foo' => 'Disabled module foo add-on module',
    ],
    // Does this project contain a 'module', 'theme', 'disabled-module', or
    // 'disabled-theme'?
    'project_type' => 'disabled-module',
  ];
";}s:24:"hook_update_status_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:24:"hook_update_status_alter";s:10:"definition";s:45:"function hook_update_status_alter(&$projects)";s:11:"description";s:59:"Alter the information about available updates for projects.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:6:"update";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/update.api.php";s:4:"body";s:767:"
  $settings = \Drupal::config('update_advanced.settings')->get('projects');
  foreach ($projects as $project => $project_info) {
    if (isset($settings[$project]) && isset($settings[$project]['check']) &&
        ($settings[$project]['check'] == 'never' ||
          (isset($project_info['recommended']) &&
            $settings[$project]['check'] === $project_info['recommended']))) {
      $projects[$project]['status'] = UPDATE_NOT_CHECKED;
      $projects[$project]['reason'] = t('Ignored from settings');
      if (!empty($settings[$project]['notes'])) {
        $projects[$project]['extra'][] = [
          'class' => ['admin-note'],
          'label' => t('Administrator note'),
          'data' => $settings[$project]['notes'],
        ];
      }
    }
  }
";}s:26:"hook_verify_update_archive";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:26:"hook_verify_update_archive";s:10:"definition";s:72:"function hook_verify_update_archive($project, $archive_file, $directory)";s:11:"description";s:61:"Verify an archive after it has been downloaded and extracted.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:6:"update";s:4:"core";b:1;s:9:"file_path";s:43:"public://module_builder_data/update.api.php";s:4:"body";s:209:"
  $errors = [];
  if (!file_exists($directory)) {
    $errors[] = t('The %directory does not exist.', ['%directory' => $directory]);
  }
  // Add other checks on the archive integrity here.
  return $errors;
";}}s:4:"user";a:5:{s:16:"hook_user_cancel";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:16:"hook_user_cancel";s:10:"definition";s:51:"function hook_user_cancel($edit, $account, $method)";s:11:"description";s:34:"Act on user account cancellations.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"user";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/user.api.php";s:4:"body";s:833:"
  switch ($method) {
    case 'user_cancel_block_unpublish':
      // Unpublish nodes (current revisions).
      module_load_include('inc', 'node', 'node.admin');
      $nodes = \Drupal::entityQuery('node')
        ->condition('uid', $account->id())
        ->execute();
      node_mass_update($nodes, ['status' => 0], NULL, TRUE);
      break;

    case 'user_cancel_reassign':
      // Anonymize nodes (current revisions).
      module_load_include('inc', 'node', 'node.admin');
      $nodes = \Drupal::entityQuery('node')
        ->condition('uid', $account->id())
        ->execute();
      node_mass_update($nodes, ['uid' => 0], NULL, TRUE);
      // Anonymize old revisions.
      db_update('node_field_revision')
        ->fields(['uid' => 0])
        ->condition('uid', $account->id())
        ->execute();
      break;
  }
";}s:30:"hook_user_cancel_methods_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_user_cancel_methods_alter";s:10:"definition";s:50:"function hook_user_cancel_methods_alter(&$methods)";s:11:"description";s:36:"Modify account cancellation methods.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"user";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/user.api.php";s:4:"body";s:676:"
  $account = \Drupal::currentUser();
  // Limit access to disable account and unpublish content method.
  $methods['user_cancel_block_unpublish']['access'] = $account->hasPermission('administer site configuration');

  // Remove the content re-assigning method.
  unset($methods['user_cancel_reassign']);

  // Add a custom zero-out method.
  $methods['mymodule_zero_out'] = [
    'title' => t('Delete the account and remove all content.'),
    'description' => t('All your content will be replaced by empty strings.'),
    // access should be used for administrative methods only.
    'access' => $account->hasPermission('access zero-out account cancellation method'),
  ];
";}s:27:"hook_user_format_name_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_user_format_name_alter";s:10:"definition";s:54:"function hook_user_format_name_alter(&$name, $account)";s:11:"description";s:48:"Alter the username that is displayed for a user.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"user";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/user.api.php";s:4:"body";s:130:"
  // Display the user's uid instead of name.
  if ($account->id()) {
    $name = t('User @uid', ['@uid' => $account->id()]);
  }
";}s:15:"hook_user_login";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:15:"hook_user_login";s:10:"definition";s:34:"function hook_user_login($account)";s:11:"description";s:24:"The user just logged in.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"user";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/user.api.php";s:4:"body";s:463:"
  $config = \Drupal::config('system.date');
  // If the user has a NULL time zone, notify them to set a time zone.
  if (!$account->getTimezone() && $config->get('timezone.user.configurable') && $config->get('timezone.user.warn')) {
    drupal_set_message(t('Configure your <a href=":user-edit">account time zone setting</a>.', [':user-edit' => $account->url('edit-form', ['query' => \Drupal::destination()->getAsArray(), 'fragment' => 'edit-timezone'])]));
  }
";}s:16:"hook_user_logout";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:16:"hook_user_logout";s:10:"definition";s:35:"function hook_user_logout($account)";s:11:"description";s:25:"The user just logged out.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:4:"user";s:4:"core";b:1;s:9:"file_path";s:41:"public://module_builder_data/user.api.php";s:4:"body";s:118:"
  db_insert('logouts')
    ->fields([
      'uid' => $account->id(),
      'time' => time(),
    ])
    ->execute();
";}}s:5:"views";a:38:{s:18:"hook_views_analyze";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:18:"hook_views_analyze";s:10:"definition";s:62:"function hook_views_analyze(Drupal\views\ViewExecutable $view)";s:11:"description";s:59:"Analyze a view to provide warnings about its configuration.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:281:"
  $messages = [];

  if ($view->display_handler->options['pager']['type'] == 'none') {
    $messages[] = Drupal\views\Analyzer::formatMessage(t('This view has no pager. This could cause performance issues when the view contains many items.'), 'warning');
  }

  return $messages;
";}s:15:"hook_views_data";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:15:"hook_views_data";s:10:"definition";s:26:"function hook_views_data()";s:11:"description";s:61:"Describe data tables and fields (or the equivalent) to Views.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:12305:"
  // This example describes how to write hook_views_data() for a table defined
  // like this:
  // CREATE TABLE example_table (
  //   nid INT(11) NOT NULL         COMMENT 'Primary key: {node}.nid.',
  //   plain_text_field VARCHAR(32) COMMENT 'Just a plain text field.',
  //   numeric_field INT(11)        COMMENT 'Just a numeric field.',
  //   boolean_field INT(1)         COMMENT 'Just an on/off field.',
  //   timestamp_field INT(8)       COMMENT 'Just a timestamp field.',
  //   langcode VARCHAR(12)         COMMENT 'Language code field.',
  //   PRIMARY KEY(nid)
  // );

  // Define the return array.
  $data = [];

  // The outermost keys of $data are Views table names, which should usually
  // be the same as the hook_schema() table names.
  $data['example_table'] = [];

  // The value corresponding to key 'table' gives properties of the table
  // itself.
  $data['example_table']['table'] = [];

  // Within 'table', the value of 'group' (translated string) is used as a
  // prefix in Views UI for this table's fields, filters, etc. When adding
  // a field, filter, etc. you can also filter by the group.
  $data['example_table']['table']['group'] = t('Example table');

  // Within 'table', the value of 'provider' is the module that provides schema
  // or the entity type that causes the table to exist. Setting this ensures
  // that views have the correct dependencies. This is automatically set to the
  // module that implements hook_views_data().
  $data['example_table']['table']['provider'] = 'example_module';

  // Some tables are "base" tables, meaning that they can be the base tables
  // for views. Non-base tables can only be brought in via relationships in
  // views based on other tables. To define a table to be a base table, add
  // key 'base' to the 'table' array:
  $data['example_table']['table']['base'] = [
    // Identifier (primary) field in this table for Views.
    'field' => 'nid',
    // Label in the UI.
    'title' => t('Example table'),
    // Longer description in the UI. Required.
    'help' => t('Example table contains example content and can be related to nodes.'),
    'weight' => -10,
  ];

  // Some tables have an implicit, automatic relationship to other tables,
  // meaning that when the other table is available in a view (either as the
  // base table or through a relationship), this table's fields, filters, etc.
  // are automatically made available without having to add an additional
  // relationship. To define an implicit relationship that will make your
  // table automatically available when another table is present, add a 'join'
  // section to your 'table' section. Note that it is usually only a good idea
  // to do this for one-to-one joins, because otherwise your automatic join
  // will add more rows to the view. It is also not a good idea to do this if
  // most views won't need your table -- if that is the case, define a
  // relationship instead (see below).
  //
  // If you've decided an automatic join is a good idea, here's how to do it;
  // the resulting SQL query will look something like this:
  //   ... FROM example_table et ... JOIN node_field_data nfd
  //   ON et.nid = nfd.nid AND ('extra' clauses will be here) ...
  // although the table aliases will be different.
  $data['example_table']['table']['join'] = [
    // Within the 'join' section, list one or more tables to automatically
    // join to. In this example, every time 'node_field_data' is available in
    // a view, 'example_table' will be too. The array keys here are the array
    // keys for the other tables, given in their hook_views_data()
    // implementations. If the table listed here is from another module's
    // hook_views_data() implementation, make sure your module depends on that
    // other module.
    'node_field_data' => [
      // Primary key field in node_field_data to use in the join.
      'left_field' => 'nid',
      // Foreign key field in example_table to use in the join.
      'field' => 'nid',
      // 'extra' is an array of additional conditions on the join.
      'extra' => [
        0 => [
          // Adds AND node_field_data.published = TRUE to the join.
          'field' => 'published',
          'value' => TRUE,
        ],
        1 => [
          // Adds AND example_table.numeric_field = 1 to the join.
          'left_field' => 'numeric_field',
          'value' => 1,
          // If true, the value will not be surrounded in quotes.
          'numeric' => TRUE,
        ],
        2 => [
          // Adds AND example_table.boolean_field <>
          // node_field_data.published to the join.
          'field' => 'published',
          'left_field' => 'boolean_field',
          // The operator used, Defaults to "=".
          'operator' => '!=',
        ],
      ],
    ],
  ];

  // You can also do a more complex join, where in order to get to a certain
  // base table defined in a hook_views_data() implementation, you will join
  // to a different table that Views knows how to auto-join to the base table.
  // For instance, if another module that your module depends on had
  // defined a table 'foo' with an automatic join to 'node_field_table' (as
  // shown above), you could join to 'node_field_table' via the 'foo' table.
  // Here's how to do this, and the resulting SQL query would look something
  // like this:
  //   ... FROM example_table et ... JOIN foo foo
  //   ON et.nid = foo.nid AND ('extra' clauses will be here) ...
  //   JOIN node_field_data nfd ON (definition of the join from the foo
  //   module goes here) ...
  // although the table aliases will be different.
  $data['example_table']['table']['join']['node_field_data'] = [
    // 'node_field_data' above is the base we're joining to in Views.
    // 'left_table' is the table we're actually joining to, in order to get to
    // 'node_field_data'. It has to be something that Views knows how to join
    // to 'node_field_data'.
    'left_table' => 'foo',
    'left_field' => 'nid',
    'field' => 'nid',
    // 'extra' is an array of additional conditions on the join.
    'extra' => [
      // This syntax matches additional fields in the two tables:
      // ... AND foo.langcode = example_table.langcode ...
      ['left_field' => 'langcode', 'field' => 'langcode'],
      // This syntax adds a condition on our table. 'operator' defaults to
      // '=' for non-array values, or 'IN' for array values.
      // ... AND example_table.numeric_field > 0 ...
      ['field' => 'numeric_field', 'value' => 0, 'numeric' => TRUE, 'operator' => '>'],
    ],
  ];

  // Other array elements at the top level of your table's array describe
  // individual database table fields made available to Views. The array keys
  // are the names (unique within the table) used by Views for the fields,
  // usually equal to the database field names.
  //
  // Each field entry must have the following elements:
  // - title: Translated label for the field in the UI.
  // - help: Description of the field in the UI.
  //
  // Each field entry may also have one or more of the following elements,
  // describing "handlers" (plugins) for the field:
  // - relationship: Specifies a handler that allows this field to be used
  //   to define a relationship to another table in Views.
  // - field: Specifies a handler to make it available to Views as a field.
  // - filter: Specifies a handler to make it available to Views as a filter.
  // - sort: Specifies a handler to make it available to Views as a sort.
  // - argument: Specifies a handler to make it available to Views as an
  //   argument, or contextual filter as it is known in the UI.
  // - area: Specifies a handler to make it available to Views to add content
  //   to the header, footer, or as no result behavior.
  //
  // Note that when specifying handlers, you must give the handler plugin ID
  // and you may also specify overrides for various settings that make up the
  // plugin definition. See examples below; the Boolean example demonstrates
  // setting overrides.

  // Node ID field, exposed as relationship only, since it is a foreign key
  // in this table.
  $data['example_table']['nid'] = [
    'title' => t('Example content'),
    'help' => t('Relate example content to the node content'),

    // Define a relationship to the node_field_data table, so views whose
    // base table is example_table can add a relationship to nodes. To make a
    // relationship in the other direction, you can:
    // - Use hook_views_data_alter() -- see the function body example on that
    //   hook for details.
    // - Use the implicit join method described above.
    'relationship' => [
      // Views name of the table to join to for the relationship.
      'base' => 'node_field_data',
      // Database field name in the other table to join on.
      'base field' => 'nid',
      // ID of relationship handler plugin to use.
      'id' => 'standard',
      // Default label for relationship in the UI.
      'label' => t('Example node'),
    ],
  ];

  // Plain text field, exposed as a field, sort, filter, and argument.
  $data['example_table']['plain_text_field'] = [
    'title' => t('Plain text field'),
    'help' => t('Just a plain text field.'),

    'field' => [
      // ID of field handler plugin to use.
      'id' => 'standard',
    ],

    'sort' => [
      // ID of sort handler plugin to use.
      'id' => 'standard',
    ],

    'filter' => [
      // ID of filter handler plugin to use.
      'id' => 'string',
    ],

    'argument' => [
      // ID of argument handler plugin to use.
      'id' => 'string',
    ],
  ];

  // Numeric field, exposed as a field, sort, filter, and argument.
  $data['example_table']['numeric_field'] = [
    'title' => t('Numeric field'),
    'help' => t('Just a numeric field.'),

    'field' => [
      // ID of field handler plugin to use.
      'id' => 'numeric',
    ],

    'sort' => [
      // ID of sort handler plugin to use.
      'id' => 'standard',
    ],

    'filter' => [
      // ID of filter handler plugin to use.
      'id' => 'numeric',
    ],

    'argument' => [
      // ID of argument handler plugin to use.
      'id' => 'numeric',
    ],
  ];

  // Boolean field, exposed as a field, sort, and filter. The filter section
  // illustrates overriding various settings.
  $data['example_table']['boolean_field'] = [
    'title' => t('Boolean field'),
    'help' => t('Just an on/off field.'),

    'field' => [
      // ID of field handler plugin to use.
      'id' => 'boolean',
    ],

    'sort' => [
      // ID of sort handler plugin to use.
      'id' => 'standard',
    ],

    'filter' => [
      // ID of filter handler plugin to use.
      'id' => 'boolean',
      // Override the generic field title, so that the filter uses a different
      // label in the UI.
      'label' => t('Published'),
      // Override the default BooleanOperator filter handler's 'type' setting,
      // to display this as a "Yes/No" filter instead of a "True/False" filter.
      'type' => 'yes-no',
      // Override the default Boolean filter handler's 'use_equal' setting, to
      // make the query use 'boolean_field = 1' instead of 'boolean_field <> 0'.
      'use_equal' => TRUE,
    ],
  ];

  // Integer timestamp field, exposed as a field, sort, and filter.
  $data['example_table']['timestamp_field'] = [
    'title' => t('Timestamp field'),
    'help' => t('Just a timestamp field.'),

    'field' => [
      // ID of field handler plugin to use.
      'id' => 'date',
    ],

    'sort' => [
      // ID of sort handler plugin to use.
      'id' => 'date',
    ],

    'filter' => [
      // ID of filter handler plugin to use.
      'id' => 'date',
    ],
  ];

  // Area example. Areas are not generally associated with actual data
  // tables and fields. This example is from views_views_data(), which defines
  // the "Global" table (not really a table, but a group of Fields, Filters,
  // etc. that are grouped into section "Global" in the UI). Here's the
  // definition of the generic "Text area":
  $data['views']['area'] = [
    'title' => t('Text area'),
    'help' => t('Provide markup text for the area.'),
    'area' => [
      // ID of the area handler plugin to use.
      'id' => 'text',
    ],
  ];

  return $data;
";}s:21:"hook_views_data_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_views_data_alter";s:10:"definition";s:44:"function hook_views_data_alter(array &$data)";s:11:"description";s:61:"Alter the table and field information from hook_views_data().";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:2039:"
  // Alter the title of the node_field_data:nid field in the Views UI.
  $data['node_field_data']['nid']['title'] = t('Node-Nid');

  // Add an additional field to the users_field_data table.
  $data['users_field_data']['example_field'] = [
    'title' => t('Example field'),
    'help' => t('Some example content that references a user'),

    'field' => [
      // ID of the field handler to use.
      'id' => 'example_field',
    ],
  ];

  // Change the handler of the node title field, presumably to a handler plugin
  // you define in your module. Give the ID of this plugin.
  $data['node_field_data']['title']['field']['id'] = 'node_title';

  // Add a relationship that will allow a view whose base table is 'foo' (from
  // another module) to have a relationship to 'example_table' (from my module),
  // via joining foo.fid to example_table.eid.
  //
  // This relationship has to be added to the 'foo' Views data, which my module
  // does not control, so it must be done in hook_views_data_alter(), not
  // hook_views_data().
  //
  // In Views data definitions, each field can have only one relationship. So
  // rather than adding this relationship directly to the $data['foo']['fid']
  // field entry, which could overwrite an existing relationship, we define
  // a dummy field key to handle the relationship.
  $data['foo']['unique_dummy_name'] = [
    'title' => t('Title seen while adding relationship'),
    'help' => t('More information about the relationship'),

    'relationship' => [
      // Views name of the table being joined to from foo.
      'base' => 'example_table',
      // Database field name in example_table for the join.
      'base field' => 'eid',
      // Real database field name in foo for the join, to override
      // 'unique_dummy_name'.
      'field' => 'fid',
      // ID of relationship handler plugin to use.
      'id' => 'standard',
      'label' => t('Default label for relationship'),
    ],
  ];

  // Note that the $data array is not returned – it is modified by reference.
";}s:21:"hook_field_views_data";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_field_views_data";s:10:"definition";s:88:"function hook_field_views_data(\Drupal\field\FieldStorageConfigInterface $field_storage)";s:11:"description";s:54:"Override the default Views data for a Field API field.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:464:"
  $data = views_field_default_views_data($field_storage);
  foreach ($data as $table_name => $table_data) {
    // Add the relationship only on the target_id field.
    $data[$table_name][$field_storage->getName() . '_target_id']['relationship'] = [
      'id' => 'standard',
      'base' => 'file_managed',
      'base field' => 'target_id',
      'label' => t('image from @field_name', ['@field_name' => $field_storage->getName()]),
    ];
  }

  return $data;
";}s:27:"hook_field_views_data_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_field_views_data_alter";s:10:"definition";s:108:"function hook_field_views_data_alter(array &$data, \Drupal\field\FieldStorageConfigInterface $field_storage)";s:11:"description";s:50:"Alter the Views data for a single Field API field.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:1206:"
  $entity_type_id = $field_storage->getTargetEntityTypeId();
  $field_name = $field_storage->getName();
  $entity_type = \Drupal::entityManager()->getDefinition($entity_type_id);
  $pseudo_field_name = 'reverse_' . $field_name . '_' . $entity_type_id;
  $table_mapping = \Drupal::entityManager()->getStorage($entity_type_id)->getTableMapping();

  list($label) = views_entity_field_label($entity_type_id, $field_name);

  $data['file_managed'][$pseudo_field_name]['relationship'] = [
    'title' => t('@entity using @field', ['@entity' => $entity_type->getLabel(), '@field' => $label]),
    'help' => t('Relate each @entity with a @field set to the image.', ['@entity' => $entity_type->getLabel(), '@field' => $label]),
    'id' => 'entity_reverse',
    'field_name' => $field_name,
    'entity_type' => $entity_type_id,
    'field table' => $table_mapping->getDedicatedDataTableName($field_storage),
    'field field' => $field_name . '_target_id',
    'base' => $entity_type->getBaseTable(),
    'base field' => $entity_type->getKey('id'),
    'label' => $field_name,
    'join_extra' => [
      0 => [
        'field' => 'deleted',
        'value' => 0,
        'numeric' => TRUE,
      ],
    ],
  ];
";}s:38:"hook_field_views_data_views_data_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:38:"hook_field_views_data_views_data_alter";s:10:"definition";s:111:"function hook_field_views_data_views_data_alter(array &$data, \Drupal\field\FieldStorageConfigInterface $field)";s:11:"description";s:42:"Alter the Views data on a per field basis.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:1261:"
  $field_name = $field->getName();
  $data_key = 'field_data_' . $field_name;
  $entity_type_id = $field->entity_type;
  $entity_type = \Drupal::entityManager()->getDefinition($entity_type_id);
  $pseudo_field_name = 'reverse_' . $field_name . '_' . $entity_type_id;
  list($label) = views_entity_field_label($entity_type_id, $field_name);
  $table_mapping = \Drupal::entityManager()->getStorage($entity_type_id)->getTableMapping();

  // Views data for this field is in $data[$data_key].
  $data[$data_key][$pseudo_field_name]['relationship'] = [
    'title' => t('@entity using @field', ['@entity' => $entity_type->getLabel(), '@field' => $label]),
    'help' => t('Relate each @entity with a @field set to the term.', ['@entity' => $entity_type->getLabel(), '@field' => $label]),
    'id' => 'entity_reverse',
    'field_name' => $field_name,
    'entity_type' => $entity_type_id,
    'field table' => $table_mapping->getDedicatedDataTableName($field),
    'field field' => $field_name . '_target_id',
    'base' => $entity_type->getBaseTable(),
    'base field' => $entity_type->getKey('id'),
    'label' => $field_name,
    'join_extra' => [
      0 => [
        'field' => 'deleted',
        'value' => 0,
        'numeric' => TRUE,
      ],
    ],
  ];
";}s:30:"hook_views_query_substitutions";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_views_query_substitutions";s:10:"definition";s:61:"function hook_views_query_substitutions(ViewExecutable $view)";s:11:"description";s:59:"Replace special strings in the query before it is executed.";s:11:"destination";s:27:"%module.views_execution.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:404:"
  // Example from views_views_query_substitutions().
  return [
    '***CURRENT_VERSION***' => \Drupal::VERSION,
    '***CURRENT_TIME***' => REQUEST_TIME,
    '***LANGUAGE_language_content***' => \Drupal::languageManager()->getCurrentLanguage(LanguageInterface::TYPE_CONTENT)->getId(),
    PluginBase::VIEWS_QUERY_LANGUAGE_SITE_DEFAULT => \Drupal::languageManager()->getDefaultLanguage()->getId(),
  ];
";}s:29:"hook_views_form_substitutions";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:29:"hook_views_form_substitutions";s:10:"definition";s:40:"function hook_views_form_substitutions()";s:11:"description";s:66:"Replace special strings when processing a view with form elements.";s:11:"destination";s:27:"%module.views_execution.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:90:"
  return [
    '<!--views-form-example-substitutions-->' => 'Example Substitution',
  ];
";}s:19:"hook_views_pre_view";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:19:"hook_views_pre_view";s:10:"definition";s:77:"function hook_views_pre_view(ViewExecutable $view, $display_id, array &$args)";s:11:"description";s:55:"Alter a view at the very beginning of Views processing.";s:11:"destination";s:27:"%module.views_execution.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:292:"

  // Modify contextual filters for my_special_view if user has 'my special permission'.
  $account = \Drupal::currentUser();

  if ($view->id() == 'my_special_view' && $account->hasPermission('my special permission') && $display_id == 'public_display') {
    $args[0] = 'custom value';
  }
";}s:20:"hook_views_pre_build";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:20:"hook_views_pre_build";s:10:"definition";s:51:"function hook_views_pre_build(ViewExecutable $view)";s:11:"description";s:75:"Act on the view before the query is built, but after displays are attached.";s:11:"destination";s:27:"%module.views_execution.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:293:"
  // Because of some inexplicable business logic, we should remove all
  // attachments from all views on Mondays.
  // (This alter could be done later in the execution process as well.)
  if (date('D') == 'Mon') {
    unset($view->attachment_before);
    unset($view->attachment_after);
  }
";}s:21:"hook_views_post_build";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_views_post_build";s:10:"definition";s:52:"function hook_views_post_build(ViewExecutable $view)";s:11:"description";s:53:"Act on the view immediately after the query is built.";s:11:"destination";s:27:"%module.views_execution.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:610:"
  // If the exposed field 'type' is set, hide the column containing the content
  // type. (Note that this is a solution for a particular view, and makes
  // assumptions about both exposed filter settings and the fields in the view.
  // Also note that this alter could be done at any point before the view being
  // rendered.)
  if ($view->id() == 'my_view' && isset($view->exposed_raw_input['type']) && $view->exposed_raw_input['type'] != 'All') {
    // 'Type' should be interpreted as content type.
    if (isset($view->field['type'])) {
      $view->field['type']->options['exclude'] = TRUE;
    }
  }
";}s:22:"hook_views_pre_execute";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_views_pre_execute";s:10:"definition";s:53:"function hook_views_pre_execute(ViewExecutable $view)";s:11:"description";s:72:"Act on the view after the query is built and just before it is executed.";s:11:"destination";s:27:"%module.views_execution.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:466:"
  // Whenever a view queries more than two tables, show a message that notifies
  // view administrators that the query might be heavy.
  // (This action could be performed later in the execution process, but not
  // earlier.)
  $account = \Drupal::currentUser();

  if (count($view->query->tables) > 2 && $account->hasPermission('administer views')) {
    drupal_set_message(t('The view %view may be heavy to execute.', ['%view' => $view->id()]), 'warning');
  }
";}s:23:"hook_views_post_execute";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:23:"hook_views_post_execute";s:10:"definition";s:54:"function hook_views_post_execute(ViewExecutable $view)";s:11:"description";s:62:"Act on the view immediately after the query has been executed.";s:11:"destination";s:27:"%module.views_execution.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:356:"
  // If there are more than 100 results, show a message that encourages the user
  // to change the filter settings.
  // (This action could be performed later in the execution process, but not
  // earlier.)
  if ($view->total_rows > 100) {
    drupal_set_message(t('You have more than 100 hits. Use the filter settings to narrow down your list.'));
  }
";}s:21:"hook_views_pre_render";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:21:"hook_views_pre_render";s:10:"definition";s:52:"function hook_views_pre_render(ViewExecutable $view)";s:11:"description";s:48:"Act on the view immediately before rendering it.";s:11:"destination";s:27:"%module.views_execution.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:183:"
  // Scramble the order of the rows shown on this result page.
  // Note that this could be done earlier, but not later in the view execution
  // process.
  shuffle($view->result);
";}s:22:"hook_views_post_render";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_views_post_render";s:10:"definition";s:87:"function hook_views_post_render(ViewExecutable $view, &$output, CachePluginBase $cache)";s:11:"description";s:31:"Post-process any rendered data.";s:11:"destination";s:27:"%module.views_execution.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:351:"
  // When using full pager, disable any time-based caching if there are fewer
  // than 10 results.
  if ($view->pager instanceof Drupal\views\Plugin\views\pager\Full && $cache instanceof Drupal\views\Plugin\views\cache\Time && count($view->result) < 10) {
    $cache->options['results_lifespan'] = 0;
    $cache->options['output_lifespan'] = 0;
  }
";}s:22:"hook_views_query_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:22:"hook_views_query_alter";s:10:"definition";s:77:"function hook_views_query_alter(ViewExecutable $view, QueryPluginBase $query)";s:11:"description";s:38:"Alter the query before it is executed.";s:11:"destination";s:27:"%module.views_execution.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:835:"
  // (Example assuming a view with an exposed filter on node title.)
  // If the input for the title filter is a positive integer, filter against
  // node ID instead of node title.
  if ($view->id() == 'my_view' && is_numeric($view->exposed_raw_input['title']) && $view->exposed_raw_input['title'] > 0) {
    // Traverse through the 'where' part of the query.
    foreach ($query->where as &$condition_group) {
      foreach ($condition_group['conditions'] as &$condition) {
        // If this is the part of the query filtering on title, chang the
        // condition to filter on node ID.
        if ($condition['field'] == 'node.title') {
          $condition = [
            'field' => 'node.nid',
            'value' => $view->exposed_raw_input['title'],
            'operator' => '=',
          ];
        }
      }
    }
  }
";}s:29:"hook_views_preview_info_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:29:"hook_views_preview_info_alter";s:10:"definition";s:74:"function hook_views_preview_info_alter(array &$rows, ViewExecutable $view)";s:11:"description";s:35:"Alter the view preview information.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:280:"
  // Adds information about the tables being queried by the view to the query
  // part of the info box.
  $rows['query'][] = [
    t('<strong>Table queue</strong>'),
    count($view->query->table_queue) . ': (' . implode(', ', array_keys($view->query->table_queue)) . ')',
  ];
";}s:37:"hook_views_ui_display_top_links_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:37:"hook_views_ui_display_top_links_alter";s:10:"definition";s:96:"function hook_views_ui_display_top_links_alter(array &$links, ViewExecutable $view, $display_id)";s:11:"description";s:59:"Alter the links displayed at the top of the view edit form.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:136:"
  // Put the export link first in the list.
  if (isset($links['export'])) {
    $links = ['export' => $links['export']] + $links;
  }
";}s:27:"hook_views_invalidate_cache";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:27:"hook_views_invalidate_cache";s:10:"definition";s:38:"function hook_views_invalidate_cache()";s:11:"description";s:64:"Allow modules to respond to the invalidation of the Views cache.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:56:"
  \Drupal\Core\Cache\Cache::invalidateTags(['views']);
";}s:31:"hook_views_plugins_access_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:31:"hook_views_plugins_access_alter";s:10:"definition";s:57:"function hook_views_plugins_access_alter(array &$plugins)";s:11:"description";s:50:"Modify the list of available views access plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:109:"
  // Remove the available plugin because the users should not have access to it.
  unset($plugins['role']);
";}s:41:"hook_views_plugins_argument_default_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:41:"hook_views_plugins_argument_default_alter";s:10:"definition";s:67:"function hook_views_plugins_argument_default_alter(array &$plugins)";s:11:"description";s:60:"Modify the list of available views default argument plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:108:"
  // Remove the available plugin because the users should not have access to it.
  unset($plugins['php']);
";}s:43:"hook_views_plugins_argument_validator_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:43:"hook_views_plugins_argument_validator_alter";s:10:"definition";s:69:"function hook_views_plugins_argument_validator_alter(array &$plugins)";s:11:"description";s:63:"Modify the list of available views argument validation plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:108:"
  // Remove the available plugin because the users should not have access to it.
  unset($plugins['php']);
";}s:30:"hook_views_plugins_cache_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_views_plugins_cache_alter";s:10:"definition";s:56:"function hook_views_plugins_cache_alter(array &$plugins)";s:11:"description";s:49:"Modify the list of available views cache plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:73:"
  // Change the title.
  $plugins['time']['title'] = t('Custom title');
";}s:42:"hook_views_plugins_display_extenders_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:42:"hook_views_plugins_display_extenders_alter";s:10:"definition";s:68:"function hook_views_plugins_display_extenders_alter(array &$plugins)";s:11:"description";s:60:"Modify the list of available views display extender plugins.";s:11:"destination";s:14:"%module.module";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:94:"
  // Alter the title of an existing plugin.
  $plugins['time']['title'] = t('Custom title');
";}s:32:"hook_views_plugins_display_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:32:"hook_views_plugins_display_alter";s:10:"definition";s:58:"function hook_views_plugins_display_alter(array &$plugins)";s:11:"description";s:51:"Modify the list of available views display plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:95:"
  // Alter the title of an existing plugin.
  $plugins['rest_export']['title'] = t('Export');
";}s:37:"hook_views_plugins_exposed_form_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:37:"hook_views_plugins_exposed_form_alter";s:10:"definition";s:63:"function hook_views_plugins_exposed_form_alter(array &$plugins)";s:11:"description";s:56:"Modify the list of available views exposed form plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:119:"
  // Remove the available plugin because the users should not have access to it.
  unset($plugins['input_required']);
";}s:29:"hook_views_plugins_join_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:29:"hook_views_plugins_join_alter";s:10:"definition";s:55:"function hook_views_plugins_join_alter(array &$plugins)";s:11:"description";s:48:"Modify the list of available views join plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:81:"
  // Print out all join plugin names for debugging purposes.
  debug($plugins);
";}s:30:"hook_views_plugins_pager_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_views_plugins_pager_alter";s:10:"definition";s:56:"function hook_views_plugins_pager_alter(array &$plugins)";s:11:"description";s:49:"Modify the list of available views pager plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:88:"
  // Remove the sql based plugin to force good performance.
  unset($plugins['full']);
";}s:30:"hook_views_plugins_query_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_views_plugins_query_alter";s:10:"definition";s:56:"function hook_views_plugins_query_alter(array &$plugins)";s:11:"description";s:49:"Modify the list of available views query plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:82:"
  // Print out all query plugin names for debugging purposes.
  debug($plugins);
";}s:28:"hook_views_plugins_row_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:28:"hook_views_plugins_row_alter";s:10:"definition";s:54:"function hook_views_plugins_row_alter(array &$plugins)";s:11:"description";s:47:"Modify the list of available views row plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:164:"
  // Change the used class of a plugin.
  $plugins['entity:node']['class'] = 'Drupal\node\Plugin\views\row\NodeRow';
  $plugins['entity:node']['module'] = 'node';
";}s:30:"hook_views_plugins_style_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_views_plugins_style_alter";s:10:"definition";s:56:"function hook_views_plugins_style_alter(array &$plugins)";s:11:"description";s:49:"Modify the list of available views style plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:102:"
  // Change the theme hook of a plugin.
  $plugins['html_list']['theme'] = 'custom_views_view_list';
";}s:31:"hook_views_plugins_wizard_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:31:"hook_views_plugins_wizard_alter";s:10:"definition";s:57:"function hook_views_plugins_wizard_alter(array &$plugins)";s:11:"description";s:50:"Modify the list of available views wizard plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:102:"
  // Change the title of a plugin.
  $plugins['node_revision']['title'] = t('Node revision wizard');
";}s:29:"hook_views_plugins_area_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:29:"hook_views_plugins_area_alter";s:10:"definition";s:55:"function hook_views_plugins_area_alter(array &$plugins)";s:11:"description";s:56:"Modify the list of available views area handler plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:104:"
  // Change the 'title' handler class.
  $plugins['title']['class'] = 'Drupal\\example\\ExampleClass';
";}s:33:"hook_views_plugins_argument_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:33:"hook_views_plugins_argument_alter";s:10:"definition";s:59:"function hook_views_plugins_argument_alter(array &$plugins)";s:11:"description";s:60:"Modify the list of available views argument handler plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:104:"
  // Change the 'title' handler class.
  $plugins['title']['class'] = 'Drupal\\example\\ExampleClass';
";}s:30:"hook_views_plugins_field_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:30:"hook_views_plugins_field_alter";s:10:"definition";s:56:"function hook_views_plugins_field_alter(array &$plugins)";s:11:"description";s:57:"Modify the list of available views field handler plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:104:"
  // Change the 'title' handler class.
  $plugins['title']['class'] = 'Drupal\\example\\ExampleClass';
";}s:31:"hook_views_plugins_filter_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:31:"hook_views_plugins_filter_alter";s:10:"definition";s:57:"function hook_views_plugins_filter_alter(array &$plugins)";s:11:"description";s:58:"Modify the list of available views filter handler plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:104:"
  // Change the 'title' handler class.
  $plugins['title']['class'] = 'Drupal\\example\\ExampleClass';
";}s:37:"hook_views_plugins_relationship_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:37:"hook_views_plugins_relationship_alter";s:10:"definition";s:63:"function hook_views_plugins_relationship_alter(array &$plugins)";s:11:"description";s:64:"Modify the list of available views relationship handler plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:104:"
  // Change the 'title' handler class.
  $plugins['title']['class'] = 'Drupal\\example\\ExampleClass';
";}s:29:"hook_views_plugins_sort_alter";a:10:{s:4:"type";s:4:"hook";s:4:"name";s:29:"hook_views_plugins_sort_alter";s:10:"definition";s:55:"function hook_views_plugins_sort_alter(array &$plugins)";s:11:"description";s:56:"Modify the list of available views sort handler plugins.";s:11:"destination";s:17:"%module.views.inc";s:12:"dependencies";a:0:{}s:5:"group";s:5:"views";s:4:"core";b:1;s:9:"file_path";s:42:"public://module_builder_data/views.api.php";s:4:"body";s:104:"
  // Change the 'title' handler class.
  $plugins['title']['class'] = 'Drupal\\example\\ExampleClass';
";}}}