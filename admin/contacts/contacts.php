<?php

require_once('../../lib/json.php');
require_once('../../lib/jsonhelper.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the POST data
    $postData = array(
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "subject" => $_POST["subject"],
        "comments" => $_POST["comments"],
        "counter" => $_POST["counter"]
    );

    JSONHelper::createRecord($postData);

} else {
}
?>
