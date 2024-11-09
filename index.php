<?php

// Load the Kirby CMS system
require __DIR__ . '/kirby/bootstrap.php';

// Define the environment for conditional configurations (optional)
if ($_SERVER['SERVER_NAME'] === 'literate-chainsaw.test') {
    define('KIRBY_ENV', 'development');
} else {
    define('KIRBY_ENV', 'production');
}

// Enable error reporting in development mode (optional)
if (KIRBY_ENV === 'development') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}

// Create and render the Kirby instance
echo (new Kirby)->render();
