<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once('products.php');

    $products = getAllProducts('../../data/prodsandservs.json');
?>

<html lang="en">
<head>
    <title>Products</title>
</head>
<body>
    <a href="create.php">Create Product</a>
    <table>
        <thead>
            <tr>
                <th>Action</th>
                <th>Name</th>
                <th>Description</th>
                <th>Applications</th>
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