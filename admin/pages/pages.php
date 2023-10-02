<?php
  require_once('../../lib/txt.php');

  function getMissionStatement($filePath = '../../data/missionstatement.txt') {
    return readTXT($filePath);
  }

  function getOverview($filePath = '../../data/overview.txt') {
    return readTXT($filePath);
  }

  function createMissionStatement($content) {
    writeTXT("../../data/missionstatement.txt", $content);
  }

  function createOverview($content) {
    writeTXT("../../data/overview.txt", $content);
  }

  function updateMissionStatement($statement) {
    $filePath = '../../data/missionstatement.txt';

    writeTXT($filePath, $statement);
  }

  function updateOverview($overview) {
    $filePath = '../../data/overview.txt';

    writeTXT($filePath, $overview);
  }

  function deleteMission() {
    writeTXT("../../data/missionstatement.txt", "");
  } 

  function deleteOverview() {
    writeTXT("../../data/overview.txt", "");
  }
?>