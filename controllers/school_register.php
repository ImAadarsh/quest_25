<?php
header('Content-Type: application/json');

// Include database connection
require_once '../config/database.php';

// Use Composer autoloader if available
$composer_autoload = '../vendor/autoload.php';
if (file_exists($composer_autoload)) {
    require_once $composer_autoload;
}

// Manual include of PHPMailer if autoloader is not available
if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
    require_once '../vendor/phpmailer/phpmailer/src/Exception.php';
    require_once '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require_once '../vendor/phpmailer/phpmailer/src/SMTP.php';
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Function to send confirmation email
function sendConfirmationEmail($name, $email, $school_name, $preferred_month) {
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ipnforum@gmail.com';
        $mail->Password = 'xmiyrxmduguqclin';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Set additional headers to avoid spam filters
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->XMailer = 'IPN FORUM Mailer';
        
        // Add custom headers for better deliverability
        $mail->addCustomHeader('List-Unsubscribe', '<mailto:team@ipnindia.in?subject=Unsubscribe>');
        $mail->addCustomHeader('Precedence', 'bulk');
        $mail->addCustomHeader('X-Auto-Response-Suppress', 'OOF, AutoReply');
        
        // Recipients
        $mail->setFrom('ipnforum@gmail.com', 'QUEST 2025');
        $mail->addAddress($email, $name);
        $mail->addReplyTo('info@eduace.in', 'QUEST 2025 Team');
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'QUEST 2025 - School Registration Confirmation';
        
        // Email body
        $message = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Registration Confirmation</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    line-height: 1.6;
                    color: #333;
                    max-width: 600px;
                    margin: 0 auto;
                    padding: 20px;
                }
                .header {
                    text-align: center;
                    margin-bottom: 20px;
                }
                .logo {
                    max-width: 200px;
                    margin: 0 auto;
                }
                .content {
                    background-color: #f9f9f9;
                    padding: 20px;
                    border-radius: 5px;
                }
                .footer {
                    margin-top: 20px;
                    font-size: 12px;
                    text-align: center;
                    color: #777;
                }
                h1 {
                    color: #2a5885;
                }
                .links {
                    margin: 20px 0;
                    padding: 15px;
                    background-color: #eaf1f7;
                    border-radius: 5px;
                }
                .links h3 {
                    margin-top: 0;
                    color: #2a5885;
                }
                .links a {
                    display: block;
                    margin: 10px 0;
                    color: #0056b3;
                    text-decoration: none;
                }
                .links a:hover {
                    text-decoration: underline;
                }
                .button {
                    display: inline-block;
                    background-color: #2a5885;
                    color: white !important;
                    padding: 10px 20px;
                    border-radius: 5px;
                    text-decoration: none;
                    margin: 10px 0;
                }
            </style>
        </head>
        <body>
            <div class="header">
                <img src="https://2025.questeduace.in/quest_png.png" alt="QUEST 2025 Logo" class="logo">
            </div>
            <div class="content">
                <h1>Registration Confirmation</h1>
                <p>Dear ' . $name . ',</p>
                <p>Thank you for registering <strong>' . $school_name . '</strong> for QUEST 2025! Your registration has been successfully completed.</p>
                <p>Your preferred month for the Classroom Round is: <strong>' . $preferred_month . '</strong></p>
                <p>Our team will contact you soon with further details about the event schedule and participation guidelines.</p>
                
                <div class="links">
                    <h3>Important Links</h3>
                    <p>Please visit the following links for more information about QUEST 2025:</p>
                    <a href="https://2025.questeduace.in/journey.php" target="_blank">QUEST Journey - Learn about the competition stages</a>
                    <a href="https://2025.questeduace.in/rules_2025.pdf" target="_blank">Rules & Guidelines - Download PDF</a>
                    <a href="https://2025.questeduace.in/contact.php" target="_blank">Contact Us - Get in touch with our team</a>
                </div>
                
                <p>If you have any questions, please don\'t hesitate to contact us at:</p>
                <p>Email: <a href="mailto:info@eduace.in">info@eduace.in</a></p>
                <p>Phone: +91 77538 88063 / +91 90268 03330</p>
            </div>
            <div class="footer">
                <p>&copy; ' . date('Y') . ' QUEST 2025. All rights reserved.</p>
                <p>This is an automated email, please do not reply.</p>
            </div>
        </body>
        </html>
        ';
        
        $mail->Body = $message;
        $mail->AltBody = strip_tags(str_replace(['<br>', '</p>'], ["\n", "\n\n"], $message));
        
        // Send the email
        return $mail->send();
        
    } catch (Exception $e) {
        error_log("Email Error: " . $mail->ErrorInfo);
        return false;
    }
}

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
    $preferred_month = $_POST['preferred_month'] ?? '';
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($designation) || empty($school_name) || 
        empty($principal_name) || empty($city) || empty($mobile) || empty($preferred_month)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required']);
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
        $stmt = $conn->prepare("SELECT id FROM schools WHERE email = ?");
        $stmt->execute([$email, $school_name]);
        
        if ($stmt->rowCount() > 0) {
            echo json_encode([
                'status' => 'error',
                'message' => 'School already registered'
            ]);
            exit;
        }
        
        // Insert new school
        $stmt = $conn->prepare("INSERT INTO schools (name, email, designation, school_name, principal_name, city, mobile, preferred_month, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");
        
        $result = $stmt->execute([
            $name,
            $email,
            $designation,
            $school_name,
            $principal_name,
            $city,
            $mobile,
            $preferred_month
        ]);
        
        if ($result) {
            // Send confirmation email
            $emailSent = sendConfirmationEmail($name, $email, $school_name, $preferred_month);
            
            if ($emailSent) {
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Registration successful! A confirmation email has been sent to your email address.'
                ]);
            } else {
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Registration successful! However, we were unable to send a confirmation email.'
                ]);
            }
        } else {
            throw new Exception("Database insert failed");
        }
    } catch (PDOException $e) {
        error_log("Database Error: " . $e->getMessage());
        echo json_encode([
            'status' => 'error',
            'message' => 'Registration failed. Please try again later.'
        ]);
    } catch (Exception $e) {
        error_log("Error: " . $e->getMessage());
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