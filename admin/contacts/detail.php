<?php
  require_once('contacts.php');

  $contacts = JSONHelper::readData();

  if (isset($_GET["counter"])) {
    $counterCount = $_GET["counter"];
    $foundContact = null;

    foreach ($contacts as $contact) {
        if ($contact["counter"] === $counterCount) {
            $foundContact = $contact;
            break;
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