<?php

require_once('contacts.php');

$contacts = getAllContacts('../../data/contacts.json');

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
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact) { ?>
                <tr>
                    <td>
                        <a href="detail.php?counter=<?= urlencode($contact['counter']); ?>">
                            Details
                        </a>
                    </td>
                    <td><?= $contact['name']; ?></td>
                    <td><?= $contact['email']; ?></td>
                    <td><?= $contact['subject']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>