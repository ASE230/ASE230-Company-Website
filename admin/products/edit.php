<?php
  require_once('products.php');

  $name = $_GET['name'];
  $jsonFilePath = '../../data/prodsandservs.json';
  $counter = 1;

  $products = getAllProducts($jsonFilePath);

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = $_POST['productName'];
    $description = $_POST['description'];
    $application1 = $_POST['application1'];
    $application2 = $_POST['application2'];
    $application3 = $_POST['application3'];
    $application1Desc = $_POST['application1Desc'];
    $application2Desc = $_POST['application2Desc'];
    $application3Desc = $_POST['application3Desc'];

    $productData = array(
        'Description' => $description,
        'Applications' => array(
            $application1 => $application1Desc,
            $application2 => $application2Desc,
            $application3 => $application3Desc
        )
    );

    editProduct($jsonFilePath, $name, $productName, $productData);

    header('Location: detail.php?name='.$productName);
    exit();
  }
?>

<html lang="en">
<head>
  <title>Edit Product</title>
</head>
<body>
  <form method="POST" action="edit.php?name=<?= $name ?>">
    <label>Name</label>
    <input type="text" name="productName" value="<?= $name ?>" /> <br />
    <label>Description</label><br />
    <textarea name="description" cols="96" rows="4"><?= getProduct($jsonFilePath, $name)['Description'] ?></textarea><br />
    <?php 
    foreach (getProduct($jsonFilePath, $name)['Applications'] as $application => $description) {
        echo '<label>Application' . $counter . '</label>';
        echo '<input type="text" name="application' . $counter . '" value="' . $application . '" /> <br />';
        echo '<label>Application' . $counter . ' Description</label><br />';
        echo '<textarea name="application' . $counter . 'Desc" cols="96" rows="4">' . $description . '</textarea><br />';
        $counter++;
    }
    ?>
    <button type="submit">Save</button>
    <a href="detail.php?name=<?= $name ?>">Cancel</a>
  </form>
</body>
</html>