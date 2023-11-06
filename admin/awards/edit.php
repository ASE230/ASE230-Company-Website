<?php
  require_once('awards.php');

  $id = $_GET['id'];

  $awards_class = new awards("../../data/awards.csv");
  $awards = $awards_class->get_all_awards();
  $header = array_shift($awards);
  $award = $awards[$id];

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $year = $_POST['year'];
    $description = $_POST['description'];

    $awards_class->update_award($id, $year, $description);

    header('Location: detail.php?id='.$id);
    exit();
  }
?>

<html lang="en">
<head>
  <title>Edit Award</title>
</head>
<body>
  <form method="POST" action="edit.php?id=<?= $id ?>">
    <label>Year</label>
    <input type="number" name="year" value="<?= $award[0] ?>" /> <br />
    <label>Description</label><br />
    <textarea name="description" cols="96" rows="4"><?= $award[1] ?></textarea><br />
    <button type="submit">Save</button>
    <a href="detail.php?id=<?= $id ?>">Cancel</a>
  </form>
</body>
</html>