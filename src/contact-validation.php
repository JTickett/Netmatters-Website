<?php

// This file is used to validate the contact form submission.
// It is called by the contact-us.php file, and returns a JSON response.
// Typically it isn't viewed directly, but is called by the contact-us.php file.

require_once 'database.php';

// Debug
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Define log directory relative to project root
$logPath = dirname(__DIR__) . '/logs/php-error.log';
ini_set('error_log', $logPath);

header('Content-Type: application/json');
ob_start();

// Default response
$response = ["success" => false, "message" => ""];

// If this is a POST request, process the form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    // Capture and sanitize input
    $name = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $company = trim($_POST['company'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $marketing = (int)($_POST['marketing'] ?? 0);


    $result = insertContactSubmission($name, $company, $email, $phone, $message, $marketing);
    var_dump($result); die();

    $output = ob_get_clean(); 
    echo json_encode($result);
    exit;
}

// Otherwise output these bits of information
echo "Error reporting level: " . error_reporting() . "\n";
echo "Display errors: " . ini_get('display_errors') . "\n";
echo "Error log: " . ini_get('error_log') . "\n";

?>