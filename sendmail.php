<?php

require_once('includes/connect.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$msg = $_POST['comments'];

$errors = [];
$fname = trim($fname);
$lname = trim($lname);
$email = trim($email);
$msg = trim($msg);

if (empty($lname)) {
    $errors['lname'] = 'Last Name can\'t be empty';
}

if (empty($fname)) {
    $errors['fname'] = 'First Name can\'t be empty';
}

if (empty($msg)) {
    $errors['comments'] = 'Comment field can\'t be empty';
}

if (empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

if (empty($errors)) {
    try {
   
        $query = "INSERT INTO contacts (lname, fname, email, comments) VALUES (:lname, :fname, :email, :msg)";
   
        $stmt = $connect->prepare($query);
        
        $stmt->bindParam(':lname', $lname);
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':msg', $msg);

        if ($stmt->execute()) {
            
            $to = 'divijsaddul@protonmail.com';
            $subject = 'Message from your Portfolio site!';
            $message = "You have received a new contact form submission:\n\n";
            $message .= "Name: " . $fname . " " . $lname . "\n";
            $message .= "Email: " . $email . "\n\n";
            $message .= $msg;

        
            mail($to, $subject, $message);

            header('Location: index.php');
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
   
    foreach ($errors as $error) {
        echo $error . '<br>';
    }
}
?>
