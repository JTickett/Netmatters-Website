<?php

require_once 'contact-validation.php';
require_once 'database.php';


// Debug
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . 'utilities/php-error.log');


$name = 'John Doe'; 
$company = 'Acme Inc.';
$email = 'john.doe@example.com';
$phone = '1234567890';
$message = 'Hello, world!';

insertContactSubmission($name, $company, $email, $phone, $message);

?>