<?php
  function readTXT($filePath) {
    $filecontents = file_get_contents($filePath);
    return $filecontents;
  }

  function writeTXT($filePath, $content) {
    $file = fopen($filePath, "w");
    fwrite($file, $content);
    fclose($file);
  }

  function displayOverview($filePath = './data/overview.txt') {
    // Check if the file exists
    if (!file_exists($filePath)) {
      echo "File not found.";
      return;
    }

    $fileContents = file_get_contents($filePath);

    // Output with line breaks
    echo nl2br($fileContents);
  }

  function displayMissionStatement($filePath = './data/missionstatement.txt') {
    // Check if the file exists
    if (!file_exists($filePath)) {
      echo "File not found.";
      return;
    }

    $fileContents = file_get_contents($filePath);

    // Output with line breaks
    echo nl2br($fileContents);
  }
?>
