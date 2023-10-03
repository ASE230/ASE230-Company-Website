<?php
  require_once('pages.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filename = $_POST['filename'];
    $content = $_POST['content'];

    createPage($filename, $content);

    header('Location: index.php');
    exit();
  }

?>

<html lang="en">
<head>
  <title>Create Page</title>
</head>
<body>
  <h1>Create Page</h1>
  <form action="create.php" method="POST">
    <label>Page Name</label><br />
    <input name="filename" type="text" /><br />
    <label>Page Content</label><br />
    <textarea name="content" cols="96" rows="4"></textarea><br />
    <button type="submit">Create</button>
    <a href="index.php">Cancel</a>
  </form>
</body>
</html>