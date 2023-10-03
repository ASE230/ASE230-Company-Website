<?php
    require_once('products.php');

    $jsonFilePath = '../../data/prodsandservs.json';

    $products = getAllProducts($jsonFilePath);

    if (isset($_GET["name"])) {
        $productName = urldecode($_GET["name"]);

        if (isset($products[$productName])) {
            $product = $products[$productName];
        } else {
            $product = null;
        }
    } else {
        $product = null;
    }
?>

<html lang="en">
<head>
    <title>Product Details</title>
</head>
<body>
    <?php if ($product !== null) { ?>
        <h1>Product Details</h1>
        <ul>
            <li><strong>Name:</strong> <?= $productName; ?></li>
            <li><strong>Description:</strong> <?= $product['Description']; ?></li>
            <li><strong>Applications:</strong></li>
            <ul>
                <?php foreach ($product['Applications'] as $application => $description) { ?>
                    <li><strong><?= $application; ?>:</strong> <?= $description; ?></li>
                <?php } ?>
            </ul>
        </ul>
    <?php } else { ?>
        <p>Product not found.</p>
    <?php } ?>

    <h2>Actions</h2>
    <a href="edit.php?name=<?= urlencode($productName); ?>">Edit</a><br />
    <a href="delete.php?name=<?= urlencode($productName); ?>">Delete</a><br />
    <br />
    <a href="index.php">Back to Products</a>
</body>
</html>
