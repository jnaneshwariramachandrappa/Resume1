<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $address = htmlspecialchars(trim($_POST['address']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $dob = htmlspecialchars(trim($_POST['dob']));
    $college = htmlspecialchars(trim($_POST['college']));
    $currentlyStudying = htmlspecialchars(trim($_POST['currentlyStudying']));
    $nptelCourse = htmlspecialchars(trim($_POST['nptelCourse']));
    $paymentMethod = htmlspecialchars(trim($_POST['paymentMethod']));
    $paymentAmount = htmlspecialchars(trim($_POST['paymentAmount']));
    $terms = isset($_POST['terms']) ? 'Accepted' : 'Not Accepted';

    // Simple validation
    if (empty($name) || empty($email) || empty($phone) || empty($address) || empty($gender) || empty($dob) || empty($college) || empty($currentlyStudying) || empty($nptelCourse) || empty($paymentMethod) || empty($paymentAmount) || !isset($_POST['terms'])) {
        echo "All fields are required. Please fill out the form correctly.";
        exit;
    }

    // Store the data (e.g., save to a file, database, etc.)
    // For now, we'll just output it for demonstration purposes
    echo "<h2>Form Submitted Successfully!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>College:</strong> $college</p>";
    echo "<p><strong>Currently Studying:</strong> $currentlyStudying</p>";
    echo "<p><strong>Course:</strong> $nptelCourse</p>";
    echo "<p><strong>Payment Method:</strong> $paymentMethod</p>";
    echo "<p><strong>Payment Amount:</strong> $paymentAmount</p>";
    echo "<p><strong>Terms & Conditions:</strong> $terms</p>";
} else {
    echo "Invalid request method.";
}
?>
