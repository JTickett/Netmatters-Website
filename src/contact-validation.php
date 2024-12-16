<?php

/**
 * This file is used to validate the contact form submission.
 * It is called by the contact-us.php file, and returns a JSON response.
 * Typically it isn't viewed directly, but is called by the contact-us.php file.
 *
 * PHP version 7.4
 *
 * @category Validation
 * @package  ContactFormValidation
 * @author   Your Name <your.email@example.com>
 */




// This is also known as a 'struct' in other languages
// This is used to return the status of the form submission
$statusMessages = [
    // Generic status messages
    "success" => "Your message has been sent!",
    "error" => "There was an error sending your message.",
    "fast" => "Please wait until submitting the form again.", // This is used to prevent spamming the form

    // Missing field messages
    "requiredEmail" => "The email field is required.",
    "requiredCaptcha" => "The captcha field is required.",
    "requiredMessage" => "The message field is required.",
    "requiredName" => "The name field is required.",
    "requiredTelephone" => "The telephone field is required.",

    // Invalid field messages
    "invalidEmail" => "The email format is invalid.", // This can be triggered by "test@test"
    "invalidMessage" => "The message must be at least 5 characters.",
    "invalidTelephone" => "The telephone format is incorrect.",
];

echo $status["success"];

// TODO: This Class should be in a separate file (FormData.php)
// Define a class to hold the form data
class FormData {
    public $name;
    public $company;
    public $email;
    public $phone;
    public $message;
    public $marketing;

    public function isNameValid() {
        return strlen($this->name) >= 5;
    }
}




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

    $formData = new FormData();

    // Just capture the data from the POST request
    $formData->name = $_POST['name'];
    $formData->company = $_POST['company'];
    $formData->email = $_POST['email'];
    $formData->phone = $_POST['phone'];
    $formData->message = $_POST['message'];
    $formData->marketing = $_POST['marketing'];

    // Sanitise the data.
    // Trimming whitespace, converting NULLs to blanks, and casting booleans to int
    $formData->name = trim($formData->name ?? '');
    $formData->company = trim($formData->company ?? '');
    $formData->email = trim($formData->email ?? '');
    $formData->phone = trim($formData->phone ?? '');
    $formData->message = trim($formData->message ?? '');
    $formData->marketing = (int)($formData->marketing ?? 0);

    // Validate the data.
    // (JS should do this, but we can't be dependant on it since it's client side)
    // TODO: The validation functions should be in the Form class


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