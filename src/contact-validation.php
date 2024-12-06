<?php

require_once 'database.php';


// get the form data
$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//make an empty array
$errors = [];

// validate the form data
if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    $errors[] = 'Please fill in all required fields';
} else {
    echo 'Form submitted';
}






?>