<?php

require_once('contacts.php');

$contacts = getAllProducts('../../data/contacts.json');

?>

<html lang="en">
<head>
    <title>Contact Requests</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Action</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $name => $info) { ?>
                <tr>
                    <td>
                        <a href="detail.php?name=<?= urlencode($name); ?>">
                            Details
                        </a>
                    </td>
                    <td><?= $name; ?></td>
                    <td><?= $info['Description']; ?></td>
                    <td>
                        <?php
                            foreach ($info['Applications'] as $application => $description) {
                                echo "<strong>$application:</strong> $description<br>";
                            }
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>