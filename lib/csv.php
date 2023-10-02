<?php
  function readCSV($filepath) {
    $filecontent = [];
    $file = fopen($filepath, "r");
    
    while(($data = fgetcsv($file)) !== FALSE) {
      $filecontent[] = $data;
    }

    fclose($file);

    return $filecontent;
  }

  function writeCSV($filepath, $filedata) {
    $file = fopen($filepath, "w");

    foreach($filedata as $row) {
      fputcsv($file, $row);
    }

    fclose($file);
  }

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