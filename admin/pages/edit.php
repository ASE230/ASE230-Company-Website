<?php
  require_once('pages.php');

  $id = $_GET['id'];
  $pages = getAllPages("../../data/pages.csv");
  $header = array_shift($pages);
  $page = $pages[$id];

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'];

    updatePage($id, $content);

    header('Location: detail.php?id='.$id);
    exit();
  }
?>

<html lang="en">
<head>
  <title>Edit Details</title>
</head>
<body>
<form method="POST" action="edit.php?id=<?= $id ?>">
  <label>Page Content</label><br />
  <textarea name="content" cols="96" rows="4"><?= $page[1] ?></textarea><br />
  <button type="submit">Save</button>
  <a href="detail.php?id=<?= $id ?>">Cancel</a>
  </form>
</body>
</html>