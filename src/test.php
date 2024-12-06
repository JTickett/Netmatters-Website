<?php

require_once 'contact-validation.php';

// Debug
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . 'utilities/php-error.log');

header('Content-Type: application/json');

ob_start();

insertContactSubmission('John Doe', 'Acme Inc.', 'john.doe@example.com', '1234567890', 'Hello, world!');

?>