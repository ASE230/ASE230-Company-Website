<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require_once('../../lib/csv.php');

  function getAllAwards($filePath) {
    return readCSV($filePath);
  }

  function getAward($filePath, $id) {
    $allAwards = readCSV($filePath);

    if($id >= 0 && $id < count($allAwards)) {
      return $allAwards[$id];
    }

    return null;
  }

  function updateAward($id, $year, $description) {
    $filePath = "../../data/awards.csv";
    $awards = readCSV($filePath);

    $id = $id + 1;

    if($year !== null) {
      $awards[$id][0] = $year;
    }

    if($description !== null) {
      $awards[$id][1] = $description;
    }

    writeCSV($filePath, $awards);
  }

  function createAward($year, $description) {
    $awards = readCSV("../../data/awards.csv");
    $award = [$year, $description];
    
    array_push($awards, $award);

    writeCSV("../../data/awards.csv", $awards);
  }

  function deleteAward($id) {
    $awards = readCSV("../../data/awards.csv");
    
    array_splice($awards, $id + 1, 1);
    writeCSV("../../data/awards.csv", $awards);
  }

?>