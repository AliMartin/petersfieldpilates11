<?php

$settings['update_free_access'] = FALSE;
$settings['file_private_path'] = DRUPAL_ROOT . '/private-files';
$settings['file_temp_path'] = DRUPAL_ROOT . '/tmp';
$settings['config_sync_directory'] = DRUPAL_ROOT . '/sync';

$settings['trusted_host_patterns'] = [
  '^petersfieldpilates\.com$',
  '^.+\.petersfieldpilates\.com$',
  '^petersfieldpilates\.hyperluminal\.co\.uk$',
  '^.+\.petersfieldpilates\.hyperluminal\.co\.uk$',
  '^petersfieldpilates11\.ddev\.site$',
  '^.+\.petersfieldpilates11\.ddev\.site$',
];
