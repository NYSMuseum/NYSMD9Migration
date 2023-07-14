<?php
// phpcs:ignoreFile
/**
 * @file
 * A database agnostic dump for testing purposes.
 *
 * This file was generated by the Drupal 9.2.6 db-tools.php script.
 */

use Drupal\Core\Database\Database;

$connection = Database::getConnection();

$connection->insert('field_config_instance')
->fields(array(
  'id' => '3273427',
  'field_id' => '3273427',
  'field_name' => 'field_vid_emb',
  'entity_type' => 'node',
  'bundle' => 'vef_content',
  'data' => 'a:7:{s:5:"label";s:7:"vid emb";s:6:"widget";a:5:{s:6:"weight";s:1:"2";s:4:"type";s:23:"video_embed_field_video";s:6:"module";s:17:"video_embed_field";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:4:{s:17:"allowed_providers";a:2:{s:7:"youtube";s:7:"youtube";s:5:"vimeo";s:5:"vimeo";}s:17:"description_field";i:0;s:18:"description_length";s:3:"128";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:17:"video_embed_field";s:8:"settings";a:3:{s:11:"video_style";s:6:"normal";s:11:"description";i:1;s:20:"description_position";s:6:"bottom";}s:6:"module";s:17:"video_embed_field";s:6:"weight";i:2;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}',
  'deleted' => '0',
))
->execute();
