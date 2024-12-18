<?php

/**
 * This Class is used to hold the form data, and also contains some methods to validate the data.
 * It may also be used to handle responses too.
 * It is required by the contact-validation.php file.
 *
 * @author   James Tickett
 */


class FormData {

    // This is a static variable that holds the status messages.
    private static $statusMessages = [
        // Generic status messages
        "success" => "Your message has been sent!",
        "error" => "There was an error sending your message.",
        "fast" => "Please wait until submitting the form again.", // This is used to prevent spamming the form

        // Missing field messages
        "requiredName" => "The name field is required.",
        "requiredEmail" => "The email field is required.",
        "requiredTelephone" => "The telephone field is required.",
        "requiredCaptcha" => "The captcha field is required.",
        "requiredMessage" => "The message field is required.",

        // Invalid field messages
        "invalidEmail" => "The email format is invalid.", // This can be triggered by "test@test"
        "invalidMessage" => "The message must be at least 5 characters.",
        "invalidTelephone" => "The telephone format is incorrect.",
    ];

    public $name;
    public $company;
    public $email;
    public $phone;
    public $message;
    public $marketing;

    public $responseStatuses = [];

    // Add a static getter method
    public static function getStatusMessage($key) {
        return self::$statusMessages[$key] ?? null;
    }

    // Sanitise the data.
    public function sanitiseFields() {

        $this->name = trim($this->name ?? '');
        $this->company = trim($this->company ?? '');
        $this->email = trim($this->email ?? '');
        $this->phone = trim($this->phone ?? '');
        $this->message = trim($this->message ?? '');
        $this->marketing = (int)($this->marketing ?? 0);
    }

    public function validateFields() {
        // This method also needs to be responsible for first checking if the required fields are filled.
        // If they are not, it should return an error message, *BUT* it should also return the fields that are *invalid* too.

        if (empty($this->name)) {
            $this->responseStatuses[] = self::$statusMessages["requiredName"];
        }

    }

    public function isNameValid() {
        return strlen($this->name) >= 5;
    }
}



?>