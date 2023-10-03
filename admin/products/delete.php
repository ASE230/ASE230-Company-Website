<?php
  require_once('products.php');
  $name = urldecode($_GET["name"]);

  if($_POST) {
    $delete = $_POST['delete'];

    if($delete === '1') {
      deleteProduct('../../data/prodsandservs.json', $name);
      header('Location: index.php');
      exit();
    } else {
      header('Location: detail.php?name='.$name);
      exit();
    }
  }
?>

<html lang="en">
<head>
  <title>Delete Award</title>
</head>
<body>
  <h1>Delete Post <?= $name ?>?</h1>
  <form method="POST">
    <button type="submit" name="delete" value="1">Yes</button>
    <button type="submit" name="delete" value="0">Cancel</button>
  </form>
</body>
</html>