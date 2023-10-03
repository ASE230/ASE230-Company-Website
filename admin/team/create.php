<?php
  require_once('team.php');

  $jsonFilePath = '../../data/teammembers.json';
  $team = getTeam();
  $name = count($team);

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $memberName = $_POST['memberName'];
    $position = $_POST['memberPosition'];
    $description = $_POST['memberDescription'];

    $memberData = array(
        'Name' => $memberName,
        'Role' => $position,
        'Description' => $description
    );

    createMember($jsonFilePath, $name, $memberData);

    header('Location: detail.php?name='.$name);
    exit();
  }
?>

<html lang="en">
<head>
  <title>Create Product</title>
</head>
<body>
  <form method="POST" action="create.php?name=<?= $name ?>">
    <label>Name</label>
    <input type="text" name="memberName" value="" /> <br />
    <label>Position</label><br />
    <input type="text" name="memberPosition" value="" /> <br />
    <label>Description</label><br />
    <textarea name="memberDescription" cols="96" rows="4"></textarea><br />
    <button type="submit">Save</button>
    <a href="detail.php?name=<?= $name ?>">Cancel</a>
  </form>
</body>
</html>