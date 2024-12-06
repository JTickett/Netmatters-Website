document.addEventListener('DOMContentLoaded', function() {

    // create session variable
    var hasError = false;

    // get the form element
    const form = document.getElementById('email-form');

    // assign form elements to variables
    const name = form.elements['name'];
    const company = form.elements['company'];
    const email = form.elements['email'];
    const phone = form.elements['phone'];
    const message = form.elements['message'];

    email.willValidate = false;

    name.addEventListener('input', function() {
        if (name.value === '') {
            name.classList.add('has-error');
            hasError = true;
            console.log('Added has-error to name');
        } else {
            name.classList.remove('has-error');
            hasError = false;
            console.log('Removed has-error from name');
        }
    });

    email.addEventListener('input', function() {
        if (email.value === '') {
            email.classList.add('has-error');
            hasError = true;
            console.log('Added has-error to email');
        } else {
            email.classList.remove('has-error');
            hasError = false;
            console.log('Removed has-error from email');
        }
    });

    phone.addEventListener('input', function() {
        if (phone.value === '') {
            phone.classList.add('has-error');
            hasError = true;
            console.log('Added has-error to phone');
        } else {
            phone.classList.remove('has-error');
            hasError = false;
            console.log('Removed has-error from phone');
        }
    }); 

    message.addEventListener('input', function() {
        if (message.value === '') {
            message.classList.add('has-error');
            hasError = true;
            console.log('Added has-error to message');
        } else {
            message.classList.remove('has-error');
            hasError = false;
            console.log('Removed has-error from message');
        }
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

