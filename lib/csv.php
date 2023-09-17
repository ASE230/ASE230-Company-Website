<?php
  function displayAwards($filePath = './data/awards.csv') {
    $csvData = file_get_contents($filePath);
    $lines = explode("\n", $csvData);

    // remove the header from the file
    array_shift($lines);

    foreach ($lines as $line) {
      $data = str_getcsv($line);

      if (count($data) === 2) {
        $year = trim($data[0]);
        $description = trim($data[1], '"');

        echo "<li>($year) - $description</li>";
      }
    }
  }
?>