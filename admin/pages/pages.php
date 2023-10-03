<?php
  require_once('../../lib/csv.php');

  function getAllPages($filepath) {
    return readCSV($filepath);
  }

  function getPage($filepath, $name) {
    $pages = getAllPages($filepath);
    
    foreach($pages as $page) {
      if($page === $name) {
        return $pages;
      }
    }

    return null;
  }

  function updatePage($id, $content) {
    $filePath = "../../data/pages.csv";
    $pages = readCSV($filePath);

    $id = $id + 1;

    if($content !== null) {
      $pages[$id][1] = $content;
    }

    writeCSV($filePath, $pages);
  }

  function deletePage($id) {
    $pages = readCSV("../../data/pages.csv");
    
    array_splice($pages, $id + 1, 1);
    writeCSV("../../data/pages.csv", $pages);
  }

  function createPage($filename, $content) {
    $pages = readCSV("../../data/pages.csv");
    $page = [$filename, $content];
    
    array_push($pages, $page);

    writeCSV("../../data/pages.csv", $pages);
  }
?>