<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);

    echo "
    <html>
    <head>
        <title>Form Submission</title>
        <link rel='stylesheet' href='styles.css'>
    </head>
    <body>
        <div class='form-container'>
            <h1>Submitted Information</h1>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Date of Birth:</strong> $dob</p>
            <p><strong>Gender:</strong> $gender</p>
            <a href='index.html'>Go Back</a>
        </div>
    </body>
    </html>";
}
?>
