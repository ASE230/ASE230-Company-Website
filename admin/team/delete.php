<?php
  require_once('team.php');
  $name = urldecode($_GET["name"]);
  $team = getTeam('../../data/teammembers.json');

  if($_POST) {
    $delete = $_POST['delete'];

    if($delete === '1') {
      deleteMember('../../data/teammembers.json', $name);
      header('Location: index.php');
      exit();
    } else {
      header('Location: detail.php?name='.$name);
      exit();
    }
  }
?>

<html lang="en">
<head>
  <title>Delete Member</title>
</head>
<body>
  <h1>Delete Member <?= $team[$name]['Name']; ?>?</h1>
  <form method="POST">
    <button type="submit" name="delete" value="1">Yes</button>
    <button type="submit" name="delete" value="0">Cancel</button>
  </form>
</body>
</html>