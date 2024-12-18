document.addEventListener('DOMContentLoaded', function() {

    // Create session variable
    var hasError = false;

    const kayleighsSpecialRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const phoneRegex = /^[0-9]{10,15}$/;

    // Get the form element
    const form = document.getElementById('email-form');

    // Assign form elements to variables
    const nameField = form.elements['name'];
    const companyField = form.elements['company'];
    const emailField = form.elements['email'];
    const phoneField = form.elements['phone'];
    const messageField = form.elements['message'];
    const marketing = form.elements['marketing'];

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

    function isFormValid() {
        
        var nameValid = isNameValid();
        var emailValid = isEmailValid();
        var phoneValid = isPhoneValid();
        var messageValid = isMessageValid();

        if (nameValid && emailValid && phoneValid && messageValid) {
            return true;
        } else {
            return false;
        }
    }

    nameField.addEventListener('input', function() {
        isNameValid();
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

        // If any of the fields are invalid, alert the user
        if (isFormValid()) {
            //alert('Please fill in all required fields');
            console.log('Form Submitting...');
            submitForm(nameField.value.trim(), companyField.value.trim(), emailField.value.trim(), phoneField.value.trim(), messageField.value.trim(), marketing.checked);
        } else {
            //alert('Form submitted');
            console.log('Alert user to fill in all required fields');
        }
    });



});

function submitForm(name, company, email, phone, message, marketing) {

    const formData = new FormData();
    formData.append("name", name);
    formData.append("company", company);
    formData.append("email", email);
    formData.append("phone", phone);
    formData.append("message", message);
    formData.append("marketing", marketing);

    fetch("src/contact-validation.php", {
        method: "POST",
        body: formData
    })
    .then(console.log('Response!'))
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success message
            successMessage.innerHTML = data.message;
            // successMessageBox.style.display = "block";
            // errorMessageBox.style.display = "none";
            form.reset();
        } else {
            console.log('Error!');
            console.log(data);
            // Show error message
            // errorMessages.textContent = data.message || "An error occurred. Please try again later.";
            // errorMessageBox.style.display = "block";
            // successMessageBox.style.display = "none";
        }
    })
    .catch(error => {
        //console.error("Error:", error); // Log fetch errors
        // errorMessages.innerHTML = "An unexpected error occurred. Please try again.";
        // errorMessageBox.style.display = "block";
        // successMessageBox.style.display = "none";
    });

}

