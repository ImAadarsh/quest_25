<?php
// Database configuration
define('DB_CONNECTION', 'mysql');
define('DB_HOST', '82.180.142.204');
define('DB_PORT', '3306');
define('DB_DATABASE', 'u954141192_quest');
define('DB_USERNAME', 'u954141192_quest');
define('DB_PASSWORD', 'Endeavour@2023');

// Create connection
function getConnection() {
    try {
        $conn = new PDO(
            DB_CONNECTION . ":host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_DATABASE,
            DB_USERNAME,
            DB_PASSWORD
        );
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        // Return error message
        return ["error" => "Connection failed: " . $e->getMessage()];
    }
}
?> 