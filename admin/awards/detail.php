<?php
  require_once('awards.php');

  $id = $_GET['id'];

  $awards = getAllAwards("../../data/awards.csv");
  $header = array_shift($awards);
  $award = $awards[$id];
?>

<html lang="en">
<head>
  <title>Detail</title>
</head>
<body>
  <h1>Award Details</h1>
  <strong><label>Year</label></strong>
  <p><?= $award[0] ?></p>
  <strong><label>Description</label></strong>
  <p><?= $award[1] ?></p>

  <h2>Actions</h2>
  <a href="edit.php?id=<?= $id ?>">Edit</a><br />
  <a href="delete.php?id=<?= $id ?>">Delete</a><br />
  <br />
  <a href="index.php"><- list</a>
</body>
</html>