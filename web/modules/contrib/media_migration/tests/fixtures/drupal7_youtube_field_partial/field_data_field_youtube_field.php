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

$connection->schema()->createTable('field_data_field_youtube_field', array(
  'fields' => array(
    'entity_type' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '128',
      'default' => '',
    ),
    'bundle' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '128',
      'default' => '',
    ),
    'deleted' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'tiny',
      'default' => '0',
    ),
    'entity_id' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
    'revision_id' => array(
      'type' => 'int',
      'not null' => FALSE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
    'language' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '32',
      'default' => '',
    ),
    'delta' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'unsigned' => TRUE,
    ),
    'field_youtube_field_input' => array(
      'type' => 'varchar',
      'not null' => FALSE,
      'length' => '1024',
    ),
    'field_youtube_field_video_id' => array(
      'type' => 'varchar',
      'not null' => FALSE,
      'length' => '15',
    ),
  ),
  'primary key' => array(
    'entity_type',
    'entity_id',
    'deleted',
    'delta',
    'language',
  ),
  'indexes' => array(
    'entity_type' => array(
      'entity_type',
    ),
    'bundle' => array(
      'bundle',
    ),
    'deleted' => array(
      'deleted',
    ),
    'entity_id' => array(
      'entity_id',
    ),
    'revision_id' => array(
      'revision_id',
    ),
    'language' => array(
      'language',
    ),
    'field_youtube_field_video_id' => array(
      'field_youtube_field_video_id',
    ),
  ),
  'mysql_character_set' => 'utf8mb3',
));

$connection->insert('field_data_field_youtube_field')
->fields(array(
  'entity_type',
  'bundle',
  'deleted',
  'entity_id',
  'revision_id',
  'language',
  'delta',
  'field_youtube_field_input',
  'field_youtube_field_video_id',
))
->values(array(
  'entity_type' => 'node',
  'bundle' => 'youtubecontent',
  'deleted' => '0',
  'entity_id' => '40',
  'revision_id' => '40',
  'language' => 'und',
  'delta' => '0',
  'field_youtube_field_input' => 'https://www.youtube.com/watch?v=OnQlnRdtoYQ&t=131s&ab_channel=EvolvingWeb',
  'field_youtube_field_video_id' => 'OnQlnRdtoYQ',
))
->values(array(
  'entity_type' => 'node',
  'bundle' => 'youtubecontent',
  'deleted' => '0',
  'entity_id' => '50',
  'revision_id' => '50',
  'language' => 'und',
  'delta' => '0',
  'field_youtube_field_input' => 'https://youtu.be/4wKpHh6tolA',
  'field_youtube_field_video_id' => '4wKpHh6tolA',
))
->execute();
