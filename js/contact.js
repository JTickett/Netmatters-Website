document.addEventListener('DOMContentLoaded', function() {

    // create session variable
    var hasError = false;

    const kayleighsSpecialRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const phoneRegex = /^[0-9]{10,15}$/;

    // get the form element
    const form = document.getElementById('email-form');

    // assign form elements to variables
    const nameField = form.elements['name'];
    const companyField = form.elements['company'];
    const emailField = form.elements['email'];
    const phoneField = form.elements['phone'];
    const messageField = form.elements['message'];

    email.willValidate = false;

    function isNameValid() {
        // Get the name value
        $name = nameField.value.trim();

        // Check if it's blank
        if ($name === '') {
            nameField.classList.add('has-error');
            hasError = true;
            console.log('Name field blank');
            return false;
        } else {
            nameField.classList.remove('has-error');
            hasError = false;
            console.log('Name field valid');

            // There doesn't need to be any more validation here
            return true;
        }
    }

    // Not sure if this is needed or not since it's not a required field, but it may need some sanitisation done to it
    function isCompanyValid() {
        const company = companyField.value.trim();
        if (company === '') {
            companyField.classList.add('has-error');
            hasError = true;
            console.log('Company field blank');
            return false;
        } else {
            companyField.classList.remove('has-error');
            hasError = false;
            console.log('Company field valid');
            return true;
        }
    }

    function isEmailValid() {
        const email = emailField.value.trim();
        if (email === '') {
            emailField.classList.add('has-error');
            hasError = true;
            console.log('Email field blank');
            return false;
        } else if (!kayleighsSpecialRegex.test(email)) {
            emailField.classList.add('has-error');
            hasError = true;
            console.log('Email field invalid');
            return false;
        } else {
            emailField.classList.remove('has-error');
            hasError = false;
            console.log('Email field valid');

            // The field is valid
            return true;
        }
    }

    function isPhoneValid() {
        const phone = phoneField.value.trim();
        if (phone === '') {
            phoneField.classList.add('has-error');
            hasError = true;
            console.log('Phone field blank');
            return false;
        } else if (!phoneRegex.test(phone)) {
            phoneField.classList.add('has-error');
            hasError = true;
            console.log('Phone field invalid');
            return false;
        } else {
            phoneField.classList.remove('has-error');
            hasError = false;
            console.log('Phone field valid');
            return true;
        }
    }

    // From what I can tell, this field doesn't check for a max length, however I did break it by using too many characters lol
    function isMessageValid() {
        const message = messageField.value.trim();
        if (message === '') {
            messageField.classList.add('has-error');
            hasError = true;
            console.log('Message field blank');
            return false;
        } else if (message.length <= 5) {
            messageField.classList.add('has-error');
            hasError = true;
            console.log('Message field too short');
            return false;
        } else {
            messageField.classList.remove('has-error');
            hasError = false;
            console.log('Message field valid');
            return true;
        }
    }

    nameField.addEventListener('input', function() {
        isNameValid();
    });
    
    companyField.addEventListener('input', function() {
        isCompanyValid();
    });
    
    emailField.addEventListener('input', function() {
        isEmailValid();
    });

    phoneField.addEventListener('input', function() {
        isPhoneValid();
    });

    messageField.addEventListener('input', function() {
        isMessageValid();
    });



    // add an event listener to the form
    form.addEventListener('submit', function(event) {
        event.preventDefault();



        console.log('hasError: ' + hasError);

        if (hasError) {
            //alert('Please fill in all required fields');
            console.log('Alerted user to fill in all required fields');
        } else {
            //alert('Form submitted');
            console.log('Form submitted');
        }
    });



});

