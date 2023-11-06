<?php
  require_once('pages.php');

  $id = $_GET['id'];
  $pages_class = new pages("../../data/pages.csv");
  $pages = $pages_class->get_all_pages();
  $header = array_shift($pages);
  $page = $pages[$id];
?>
<html lang="en">
<head>
  <title>Page Details</title>
</head>
<body>
  <h1>Filename</h1>
  <?= $page[0] ?>
  <h2>Actions</h2>
  <a href="edit.php?id=<?= $id ?>">Edit</a><br />
  <a href="delete.php?id=<?= $id ?>">Delete</a><br />
  <a href="index.php"><- list</a>
  <h1>Page Preview</h1>
  <div style='border: 1px solid black;'>
    <?= $page[1] ?>
  </div>
</body>
</html>