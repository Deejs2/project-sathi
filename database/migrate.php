<?php

// Include the database configuration
require_once __DIR__ . '/../config/config.php';

// Function to include migration files and execute the up method<?php
function runMigration($fileName) {
  require_once __DIR__ . '/migrations/' . $fileName;
  // Correctly remove the timestamp and underscores, then convert to CamelCase
  $className = preg_replace_callback('/_([a-z])/', function ($match) {
      return strtoupper($match[1]);
  }, ucfirst(substr($fileName, 18, -4))); // Adjusted to correctly skip the timestamp and underscore

  // Check if 'Create' prefix is already present
  if (substr($className, 0, 6) !== 'Create') {
      $className = 'Create' . $className; // Prepend 'Create' only if not present
  }

  if (class_exists($className)) {
      $migrationInstance = new $className();
      $migrationInstance->up();
  } else {
      echo "Migration class {$className} not found.\n";
  }
}

// List of migration files to run
$migrationFiles = [
    '2023_07_07_000001_create_users_table.php',
    '2023_07_07_000002_create_contact_us_table.php',
    '2023_07_08_000001_create_packages_table.php',
    '2023_07_08_000002_create_features_table.php',
    '2023_07_08_000003_create_price_ranges_table.php'
];

// Execute each migration
foreach ($migrationFiles as $file) {
    runMigration($file);
}

$seeders = [
  'UserSeeder',
  'PackageSeeder',
  'FeatureSeeder',
];

foreach ($seeders as $seeder) {
  require_once __DIR__ . '/seeders/' . $seeder . '.php';
  $seederClass = new $seeder;
  $seederClass->run();
}