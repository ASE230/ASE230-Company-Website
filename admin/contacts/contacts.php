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
        "comments" => $_POST["comments"],
        "counter" => $_POST["counter"]
    );

    writeJSON('../../data/contacts.json', $postData);

} else {
}
?>
