<?php
  require_once('awards.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $year = $_POST['year'];
    $description = $_POST['description'];

    createAward($year, $description);

    header('Location: index.php');
    exit();
  }
?>

<html lang="en">
<head>
  <title>Create Award</title>
</head>
<body>
  <h1>Create Award</h1>
  <form action="create.php" method="POST">
    <label>Year</label>
    <input type="number" name="year" value="2023"/> <br />
    <label>Description</label><br />
    <textarea name="description" cols="96" rows="4" placeholder="Description goes here"></textarea><br />
    <button type="submit">Create</button>
    <a href="index.php">Cancel</a>
  </form>
</body>
</html>