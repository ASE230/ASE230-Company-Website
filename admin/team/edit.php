<?php
  require_once('team.php');

  $name = $_GET['name'];
  $jsonFilePath = '../../data/teammembers.json';

  $team = getTeam();

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $memberName = $_POST['memberName'];
    $position = $_POST['memberPosition'];
    $description = $_POST['memberDescription'];

    $memberData = array(
        'Name' => $memberName,
        'Role' => $position,
        'Description' => $description
    );

    updateMember($jsonFilePath, $name, $memberData);

    header('Location: detail.php?name='.$name);
    exit();
  }
?>

<html lang="en">
<head>
  <title>Edit Product</title>
</head>
<body>
  <form method="POST" action="edit.php?name=<?= $name ?>">
    <label>Name</label>
    <input type="text" name="memberName" value="<?= getTeam()[$name]['Name'] ?>" /> <br />
    <label>Position</label><br />
    <input type="text" name="memberPosition" value="<?= getTeam()[$name]['Role'] ?>" /> <br />
    <label>Description</label><br />
    <textarea name="memberDescription" cols="96" rows="4"><?= getTeam()[$name]['Description'] ?></textarea><br />
    <button type="submit">Save</button>
    <a href="detail.php?name=<?= $name ?>">Cancel</a>
  </form>
</body>
</html>