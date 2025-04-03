<?php
// Include database connection
require_once 'config/database.php';

// Get database connection
$conn = getConnection();

// Check if connection is successful
if (is_array($conn) && isset($conn['error'])) {
    echo "Database connection failed: " . $conn['error'];
    exit;
}

try {
    // Check if schools table exists
    $stmt = $conn->query("SHOW TABLES LIKE 'schools'");
    if ($stmt->rowCount() == 0) {
        echo "Table 'schools' does not exist. Creating it now...<br>";
        
        // Create schools table
        $sql = "CREATE TABLE schools (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            designation VARCHAR(255) NOT NULL,
            school_name VARCHAR(255) NOT NULL,
            principal_name VARCHAR(255) NOT NULL,
            city VARCHAR(255) NOT NULL,
            mobile VARCHAR(20) NOT NULL,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
        
        $conn->exec($sql);
        echo "Table 'schools' created successfully.<br>";
    } else {
        echo "Table 'schools' already exists.<br>";
        
        // Check table structure
        $stmt = $conn->query("DESCRIBE schools");
        $columns = $stmt->fetchAll(PDO::FETCH_COLUMN);
        
        echo "Table structure:<br>";
        echo "<pre>";
        print_r($columns);
        echo "</pre>";
    }
    
    // Test inserting a record
    echo "Testing insert operation...<br>";
    $stmt = $conn->prepare("INSERT INTO schools (name, email, designation, school_name, principal_name, city, mobile) 
                           VALUES (?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->execute([
        'Test User',
        'test@example.com',
        'Test Designation',
        'Test School',
        'Test Principal',
        'Test City',
        '1234567890'
    ]);
    echo "Test record inserted successfully.<br>";
    
    // Delete the test record
    $stmt = $conn->prepare("DELETE FROM schools WHERE email = ?");
    $stmt->execute(['test@example.com']);
    echo "Test record deleted successfully.<br>";
    
    echo "Database connection and operations working correctly!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?> 