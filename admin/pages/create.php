<?php
  require_once('pages.php');
  $id = $_GET['id'];

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'];

    if($id == 'Mission') {
      createMissionStatement($content);
      header('Location: index.php');
      exit();
    } else {
      createOverview($content);
      header('Location: index.php');
      exit();
    }
  }

?>

<html lang="en">
<head>
  <title>Create Page</title>
</head>
<body>
  <h1>Create <?= $id; ?></h1>
  <form action="create.php?id=<?= $id ?>" method="POST">
    <textarea name="content" cols="96" rows="4"></textarea><br />
    <button type="submit">Create</button>
    <a href="index.php">Cancel</a>
  </form>
</body>
</html>