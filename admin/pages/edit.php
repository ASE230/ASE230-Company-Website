<?php
  require_once('pages.php');

  $id = $_GET['id'];
  $content;

  if($id == 'Mission') {
    $content = getMissionStatement();
  } else {
    $content = getOverview();
  }

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_content = $_POST['_content'];

    if($id == 'Mission') {
      updateMissionStatement($_content);
      header('Location: detail.php?id='.$id);
      exit();
    } else {
      updateOverview($_content);
      header('Location: detail.php?id='.$id);
      exit();
    }
  }
?>

<html lang="en">
<head>
  <title>Edit Details</title>
</head>
<body>
  <form method="POST" action="edit.php?id=<?= $id ?>">
    <textarea name="_content" cols="96" rows="4"><?= $content ?></textarea><br />
    <button type="submit">Save</button>
    <a href="detail.php?id=<?= $id ?>">Cancel</a>
  </form>
</body>
</html>