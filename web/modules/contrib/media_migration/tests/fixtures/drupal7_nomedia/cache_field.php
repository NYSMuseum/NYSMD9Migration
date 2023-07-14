<?php
// phpcs:ignoreFile
/**
 * @file
 * A database agnostic dump for testing purposes.
 *
 * This file was generated by the Drupal 9.2.10 db-tools.php script.
 */

use Drupal\Core\Database\Database;

$connection = Database::getConnection();

$connection->schema()->createTable('cache_field', array(
  'fields' => array(
    'cid' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'data' => array(
      'type' => 'blob',
      'not null' => FALSE,
      'size' => 'big',
    ),
    'expire' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'created' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'serialized' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'small',
      'default' => '0',
    ),
  ),
  'primary key' => array(
    'cid',
  ),
  'indexes' => array(
    'expire' => array(
      'expire',
    ),
  ),
  'mysql_character_set' => 'utf8',
));
