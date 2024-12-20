<?php

/**
 * This Class is used to hold the form data, and also contains some methods to validate the data.
 * It may also be used to handle responses too.
 * It is required by the contact-validation.php file.
 *
 * @author   James Tickett
 */

 const PHONE_REGEX = '/^[0-9]{10,15}$/';
 const EMAIL_REGEX = '/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

class FormData {

    // This is a static variable that holds the status messages.
    private static $statusMessages = [
        // Generic status messages
        "success" => "Your message has been sent!", 
        "error" => "There was an error sending your message.", // I may use this for DB error messages or other Exceptions
        "fast" => "Please wait until submitting the form again.", // This is used to prevent spamming the form, but unknown trigger specific error

        // Missing field messages
        "missingName" => "The name field is required.",
        "missingEmail" => "The email field is required.",
        "missingTelephone" => "The telephone field is required.",
        "missingCaptcha" => "The captcha field is required.", // Unknown how to trigger this
        "missingMessage" => "The message field is required.",

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

    // Sanitise the data.
    public function sanitiseFields() {
        //error_log('Sanitising fields: ' . $this->name . ' ' . $this->company . ' ' . $this->email . ' ' . $this->phone . ' ' . $this->message . ' ' . $this->marketing);
        $this->name = trim($this->name ?? '');
        $this->company = trim($this->company ?? '');
        $this->email = trim($this->email ?? '');
        $this->phone = trim($this->phone ?? '');
        $this->message = trim($this->message ?? '');
        $this->marketing = filter_var($this->marketing ?? false, FILTER_VALIDATE_BOOLEAN);
        //error_log('Sanitised fields: ' . $this->name . ' ' . $this->company . ' ' . $this->email . ' ' . $this->phone . ' ' . $this->message . ' ' . $this->marketing);
    }

    public function validateFields() {
        // This method also needs to be responsible for first checking if the required fields are filled.
        // If they are not, it should return an error message, *BUT* it should also return the fields that are *invalid* too.

        if (empty($this->name)) {
            $this->responseStatuses[] = self::$statusMessages["missingName"];
        }

        if (empty($this->email)) {
            $this->responseStatuses[] = self::$statusMessages["missingEmail"]; 
        } else if (!$this->isEmailValid()) {
            $this->responseStatuses[] = self::$statusMessages["invalidEmail"];
        }

        if (empty($this->phone)) {
            $this->responseStatuses[] = self::$statusMessages["missingTelephone"];
        } else if (!$this->isPhoneValid()) {
            $this->responseStatuses[] = self::$statusMessages["invalidTelephone"];
        }

        if (empty($this->message)) {
            $this->responseStatuses[] = self::$statusMessages["missingMessage"];
        } else if (!$this->isMessageValid()) {
            $this->responseStatuses[] = self::$statusMessages["invalidMessage"];
        }

    }

    public function isEmailValid() {
        // This is the ideal method you would normally use, but Kayleigh needs a custom regex to deny "test@test"
        // return filter_var($this->email, FILTER_VALIDATE_EMAIL);
        return preg_match(EMAIL_REGEX, $this->email);
    }

    public function isPhoneValid() {
        return preg_match(PHONE_REGEX, $this->phone);
    }   

    public function isMessageValid() {
        return strlen($this->message) >= 5;
    }


}



?>