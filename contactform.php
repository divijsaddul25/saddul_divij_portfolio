<?php

$response = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lname = $_POST['lname'] ?? '';
    $fname = $_POST['fname'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $errors = [];

    if (empty($fname)) {
        $errors[] = "First name is required.";
    }
    if (empty($lname)) {
        $errors[] = "Last name is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (count($errors) > 0) {
        $response['errors'] = $errors;
    } else {
        $response['message'] = "Merci";
    }
}

echo json_encode($response);

?>
