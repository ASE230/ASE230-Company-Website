<?php
  require_once('pages.php');

  $missionStatement = getMissionStatement();
  $overview = getOverview();
?>

<html lang="en">
<head>
  <title>Pages</title>
</head>
<body>
  <h1>Mission Statement</h1>
  <p><?= $missionStatement; ?></p>
  <a href="detail.php?id=Mission">View</a>
  <a href="create.php?id=Mission">Create</a>


  <h1>Overview</h1>
  <p><?= $overview; ?></p>
  <a href="detail.php?id=Overview">View</a>
  <a href="create.php?id=Overview">Create</a>
</body>
</html>