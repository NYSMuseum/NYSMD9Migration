<?php
// @codingStandardsIgnoreFile
/**
 * @file
 * A database agnostic dump for testing purposes.
 *
 * This file was generated by the Drupal 9.1.9 db-tools.php script.
 */

use Drupal\Core\Database\Database;

$connection = Database::getConnection();

$connection->insert('node_comment_statistics')
->fields(array(
  'nid',
  'cid',
  'last_comment_timestamp',
  'last_comment_name',
  'last_comment_uid',
  'comment_count',
))
->values(array(
  'nid' => '112',
  'cid' => '0',
  'last_comment_timestamp' => '1622704732',
  'last_comment_name' => NULL,
  'last_comment_uid' => '3',
  'comment_count' => '0',
))
->execute();
