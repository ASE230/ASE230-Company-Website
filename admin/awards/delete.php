<?php
  require_once('awards.php');
  $id = $_GET['id'];

  if($_POST) {
    $delete = $_POST['delete'];

    if($delete === '1') {
      deleteAward($id);
      header('Location: index.php');
      exit();
    } else {
      header('Location: detail.php?id=$id');
      exit();
    }
  }
?>

<html lang="en">
<head>
  <title>Delete Award</title>
</head>
<body>
  <h1>Delete Post <?= $id ?>?</h1>
  <form method="POST">
    <button type="submit" name="delete" value="1">Yes</button>
    <button type="submit" name="delete" value="0">Cancel</button>
  </form>
</body>
</html>