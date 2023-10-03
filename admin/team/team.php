<?php
  require_once('../../lib/json.php');

  function getTeam() {
    $team = readJSON("../../data/teammembers.json");
    return $team;
  }

  function getTeamMember($id) {
    $team = getTeam();

    if(isset($team[$id])) {
      return $team[$id];
    } else {
      return null;
    }
  }

  function addMember($member) {
    writeJSON("../../data/teammembers.json", $member);
  }

  function updateMember($filepath, $memberName, $newData) {
    $team = getTeam($filepath);

    if (isset($team[$memberName])) {
        $team[$memberName] = $newData;
        $updatedJsonContents = json_encode($team, JSON_PRETTY_PRINT);

        if ($updatedJsonContents === false) {
            return false;
        }

        if (file_put_contents($filepath, $updatedJsonContents) === false) {
            return false;
        }

        return true;
    } else {
        return false;
    }
}

  function deleteMember($filepath, $memberName) {
    $team = getTeam($filepath);

    if (isset($team[$memberName])) {
        unset($team[$memberName]);
        $updatedJsonContents = json_encode($team, JSON_PRETTY_PRINT);

        if ($updatedJsonContents === false) {
            return false;
        }

        if (file_put_contents($filepath, $updatedJsonContents) === false) {
            return false;
        }

        return true;
    } else {
        return false;
    }
}

function createMember($filepath, $memberName, $memberData) {
    $team = getTeam();

    if (isset($team[$memberName])) {
        return false;
    }

    $team[$memberName] = $memberData;

    $updatedJsonContents = json_encode($team, JSON_PRETTY_PRINT);

    if ($updatedJsonContents === false) {
        return false;
    }

    if (file_put_contents($filepath, $updatedJsonContents) === false) {
        return false;
    }

    return true;
}    
?>