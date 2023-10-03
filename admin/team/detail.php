<?php
    require_once('team.php');

    $jsonFilePath = '../../data/teammembers.json';

    $team = getTeam($jsonFilePath);

    if (isset($_GET["name"])) {
        $memberName = urldecode($_GET["name"]);

        if (isset($team[$memberName])) {
            $member = $team[$memberName];
        } else {
            $member = null;
        }
    } else {
        $member = null;
    }
?>

<html lang="en">
<head>
    <title>Member Details</title>
</head>
<body>
    <?php if ($member !== null) { ?>
        <h1>Member Details</h1>
        <ul>
            <li><strong>Name: </strong><?= $member['Name']; ?></li>
            <li><strong>Position: </strong><?= $member['Role']; ?></li>
            <li><strong>Description: </strong><?= $member['Description']; ?></li>
        </ul>
    <?php } else { ?>
        <p>Member not found.</p>
    <?php } ?>

    <h2>Actions</h2>
    <a href="edit.php?name=<?= urlencode($memberName); ?>">Edit</a><br />
    <a href="delete.php?name=<?= urlencode($memberName); ?>">Delete</a><br />
    <br />
    <a href="index.php">Back to Team</a>
</body>
</html>
