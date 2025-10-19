<?php
// Prevent direct access
if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}

// Database Configuration
define('DB_HOST', 'localhost');      // Change if using a remote server
define('DB_NAME', 'carbon_cms');     // Your database name
define('DB_USER', 'root');           // Your database username
define('DB_PASS', '');               // Your database password

// Website Info
define('SITE_NAME', 'Carbon International');
define('SITE_URL', 'http://localhost/carbon-cms'); 

// Debug Mode (Turn off in production)
define('ENABLE_DEBUG', false);

// Secure Database Connection (PDO)
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    error_log($e->getMessage());
    die('Database connection failed.');
}

// Start Secure Session
session_start();
if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

// Error Reporting (Only for development)
if (ENABLE_DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}
?>
