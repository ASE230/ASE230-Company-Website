<?php
  require_once('pages.php');

  $id = $_GET['id'];
  $pages_class = new pages("../../data/pages.csv");

  if($_POST) {
    $delete = $_POST['delete'];

    if($delete === '1') {
      $pages_class->delete_page($id);
      header('Location: index.php');
      exit();
    } else {
      header('Location: detail.php?id='.$id);
      exit();
    }
  }
?>

<html lang="en">
<head>
  <title>Delete Page</title>
</head>
<body>
  <h1>Delete Page <?= $id ?>?</h1>
  <form method="POST">
    <button type="submit" name="delete" value="1">Yes</button>
    <button type="submit" name="delete" value="0">Cancel</button>
  </form>
</body>
</html>