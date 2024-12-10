<?php

require_once 'database.php';


// Debug
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('error_log', __DIR__ . '/php-error.log');

header('Content-Type: application/json');
ob_start();

$response = ["success" => false, "message" => ""];



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


echo "Error reporting level: " . error_reporting() . "\n";
echo "Display errors: " . ini_get('display_errors') . "\n";
echo "Error log: " . ini_get('error_log') . "\n";


?>