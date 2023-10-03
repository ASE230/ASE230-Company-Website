<?php
require_once('team.php');

$team = getTeam();
?>

<html lang="en">
<head>
    <title>Team</title>
</head>
<body>
    <a href="create.php">Create Team Member</a>
    <table>
        <thead>
            <tr>
                <th>Action</th>
                <th>Name</th>
                <th>Position</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($team as $member => $info) { ?>
                <tr>
                    <td>
                        <a href="detail.php?name=<?= urlencode($member); ?>">
                            Details
                        </a>
                    </td>
                    <td><?= $info['Name']; ?></td>
                    <td><?= $info['Role']; ?></td>
                    <td><?= $info['Description']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>