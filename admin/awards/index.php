<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  require_once('awards.php');

  $awards_class = new awards("../../data/awards.csv");
  $awards = $awards_class->get_all_awards();
  $header = array_shift($awards);
?>

<html lang="en">
<head>
  <title>Awards</title>
</head>
<body>
  <a href="create.php">Create Award</a>
  <table>
    <thead>
      <tr>
        <th>Action</th>
        <?php foreach($header as $head) { ?>
          <th><?= $head ?></th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
      <?php foreach($awards as $idx => $award) { ?>
        <tr>
          <td>
            <a href="detail.php?id=<?= $idx; ?>">
              Details
            </a>
          </td>
          <td>
            <?= $award[0]; ?>
          </td>
          <td>
            <?= $award[1]; ?>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>