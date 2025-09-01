<?php
// Database configuration (for future use)
define('DB_HOST', 'localhost');
define('DB_NAME', 'thatwild_scoreboard');
define('DB_USER', 'root');
define('DB_PASS', '');

// Site configuration
define('SITE_NAME', 'ThatWild');
define('SITE_URL', 'http://localhost/thatwild-scoreboard');

// Error reporting (set to 0 for production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session for user management
session_start();
?>
