<?php
// Main router for the Buzz AMS application

// Autoload dependencies
require 'vendor/autoload.php';

// Load configuration
$config = require 'config.php';

// Initialize application
$app = new uzzamsramework\Application($config);

// Set the default route
$app->setDefaultRoute('/home');

// Run the application
$app->run();
?>