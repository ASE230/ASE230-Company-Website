<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require_once('pages.php');

  $pages_class = new pages("../../data/pages.csv");

  $pages = $pages_class->get_all_pages();
  $header = array_shift($pages);
?>

<html lang="en">
<head>
  <title>Pages</title>
</head>
<body>
  <a href="create.php">Create Page</a>
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
      <?php foreach($pages as $idx => $page) { ?> 
        <tr>
          <td>
            <a href="detail.php?id=<?= $idx; ?>">
              Details
            </a>
          </td>
          <td>
            <?= $page[0]; ?>
          </td>
          <td></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>