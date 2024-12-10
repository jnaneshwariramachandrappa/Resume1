document.getElementById('registrationForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the form from submitting

    let errorMessage = ''; // To collect error messages

    // Get form fields
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const address = document.getElementById('address').value;
    const dob = document.getElementById('dob').value;
    const currentlyStudying = document.getElementById('currentlyStudying').value;
    const nptelCourse = document.getElementById('nptelCourse').value;
    const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked');
    const paymentAmount = document.getElementById('paymentAmount').value;
    const terms = document.getElementById('terms').checked;

    // Basic validation for empty fields
    if (!name || !email || !phone || !address || !dob || !currentlyStudying || !nptelCourse || !paymentAmount || !terms) {
        errorMessage += 'Please fill out all required fields.<br>';
    }

    // Validate email format
    if (!validateEmail(email)) {
        errorMessage += 'Please enter a valid email address.<br>';
    }

    // Validate phone number (simple validation for digits)
    if (!/^\d+$/.test(phone)) {
        errorMessage += 'Please enter a valid phone number (only numbers allowed).<br>';
    }

    // Validate payment method selection
    if (!paymentMethod) {
        errorMessage += 'Please select a payment method.<br>';
    }

    // If no errors, proceed with form submission
    if (errorMessage) {
        document.querySelector('.error') ? document.querySelector('.error').innerHTML = errorMessage : '';
    } else {
        alert('Form submitted successfully!');
        // You can add your form submission logic here
    }
});

// Helper function to validate email format
function validateEmail(email) {
    const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return re.test(email);
}
