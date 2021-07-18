<?php

# Put these settings: 

$settings['trusted_host_patterns'] = [
  '^nastya\.backend-education\.hulk\.nixdev\.co$',
 ];


$databases['default']['default'] = array (
  'database' => 'gallery',
  'username' => 'gallery',
  'password' => 'gallery',
  'prefix' => '',
  'host' => '127.0.0.1',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);




 $settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

/*
 * Disable Drupal (>=8.0) caching during development
 * https://www.drupal.org/node/2598914
 *
 */

// Change the following to be TRUE if you want to work with enabled css- and js-aggregation:
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

// Uncomment these lines to disable the render cache and disable dynamic page cache:
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

// Add the following lines
$settings['cache']['bins']['page'] = 'cache.backend.null';

// If you do not want to install test modules and themes, set the following to FALSE:
$settings['extension_discovery_scan_tests'] = FALSE;

