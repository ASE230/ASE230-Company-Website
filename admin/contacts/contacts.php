<?php

require_once('../../lib/json.php');

function getAllContacts($filePath) {
    return readJSON($filePath);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the POST data
    $postData = array(
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "subject" => $_POST["subject"],
        "comments" => $_POST["comments"]
    );

    writeJSON('../../data/contacts.json', $postData);

    // For example, you can send a response back to the JavaScript code:
    echo "Data received by the server: Name: " . $name . ", Email: " . $email . ", Subject: " . $subject . ", Comments: " . $comments;
} else {
    // Handle other HTTP methods or provide an error message if needed
    echo "This page only handles POST requests.";
}
?>
