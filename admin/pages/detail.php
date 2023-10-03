<?php
  require_once('pages.php');

  $id = $_GET['id'];
  $content;

  if($id == 'Mission') {
    $content = getMissionStatement();
  } else {
    $content = getOverview();
  }
?>
<html lang="en">
<head>
  <title>Detail</title>
</head>
<body>
  <h1><?= $id ?> Details.</h1>
  <textarea name="content" rows="8"><?= $content; ?></textarea><br />
  <a href="edit.php?id=<?= $id; ?>">Edit</a><br />
  <a href="delete.php?id=<?= $id; ?>">Delete</a><br />

  <a href="index.php"><- Back</a>
</body>
</html>