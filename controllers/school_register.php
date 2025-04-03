<?php
header('Content-Type: application/json');

// Include database connection
require_once '../config/database.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $designation = $_POST['designation'] ?? '';
    $school_name = $_POST['school_name'] ?? '';
    $principal_name = $_POST['principal_name'] ?? '';
    $city = $_POST['city'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    
    // Validate required fields
    $required_fields = ['name', 'email', 'designation', 'school_name', 'principal_name', 'city', 'mobile'];
    $missing_fields = [];
    
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $missing_fields[] = $field;
        }
    }
    
    if (!empty($missing_fields)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Please fill all required fields: ' . implode(', ', $missing_fields)
        ]);
        exit;
    }
    
    // Get database connection
    $conn = getConnection();
    
    // Check if connection is successful
    if (is_array($conn) && isset($conn['error'])) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Database connection failed. Please try again later.'
        ]);
        exit;
    }
    
    try {
        // Check if school already exists
        $stmt = $conn->prepare("SELECT id FROM schools WHERE email = ? OR school_name = ?");
        $stmt->execute([$email, $school_name]);
        
        if ($stmt->rowCount() > 0) {
            echo json_encode([
                'status' => 'error',
                'message' => 'A school with this email or name is already registered.'
            ]);
            exit;
        }
        
        // Insert new school
        $stmt = $conn->prepare("INSERT INTO schools (name, email, designation, school_name, principal_name, city, mobile) 
                               VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        $stmt->execute([
            $name,
            $email,
            $designation,
            $school_name,
            $principal_name,
            $city,
            $mobile
        ]);
        
        echo json_encode([
            'status' => 'success',
            'message' => 'Your Registration for QUEST 2025 is Completed.'
        ]);
    } catch (PDOException $e) {
        error_log("Database Error: " . $e->getMessage());
        echo json_encode([
            'status' => 'error',
            'message' => 'Registration failed. Please try again later.'
        ]);
    }
} else {
    // If not POST request
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
}
?> 