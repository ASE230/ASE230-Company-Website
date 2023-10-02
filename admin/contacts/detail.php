<?php
  require_once('contacts.php');

  $contacts = getAllContacts("../../data/contacts.json");

  if (isset($_GET["name"])) {
    $nameToDisplay = $_GET["name"];
    $foundContact = null;

    // Find the contact with the matching "Name" in the JSON data
    foreach ($contacts as $contact) {
        if ($contact["name"] === $nameToDisplay) {
            $foundContact = $contact;
            break; // Exit the loop once the contact is found
        }
    }
  }
?>

<html lang="en">
<head>
  <title>Detail</title>
</head>
<body>
<?php if (isset($foundContact)) { ?>
        <h1>Contact Details</h1>
        <ul>
            <li><strong>Name:</strong> <?= $foundContact["name"]; ?></li>
            <li><strong>Email:</strong> <?= $foundContact["email"]; ?></li>
            <li><strong>Subject:</strong> <?= $foundContact["subject"]; ?></li>
            <li><strong>Comments:</strong> <?= $foundContact["comments"]; ?></li>
        </ul>
    <?php } else { ?>
        <p>Contact not found.</p>
    <?php } ?>

  <h2>Actions</h2>
  <a href="index.php"><- list</a>
</body>
</html>