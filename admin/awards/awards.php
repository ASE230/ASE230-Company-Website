<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require_once('../../lib/csv.php');

  class awards {
    private $filepath;

    private function __construct($filepath) {
      $this -> filepath = $filepath;
    }

    public function get_all_awards() {
      return readCSV($this -> filepath);
    }

    public function get_award($id) {
      $all_awards = readCSV($this -> filepath);
  
      if($id >= 0 && $id < count($all_awards)) {
        return $all_awards[$id];
      }
  
      return null;
    }

    public function update_award($id, $year, $description) {
      $awards = readCSV($this -> filepath);
  
      $id = $id + 1;
  
      if($year !== null) {
        $awards[$id][0] = $year;
      }
  
      if($description !== null) {
        $awards[$id][1] = $description;
      }
  
      writeCSV($this -> filepath, $awards);
    }

    public function create_award($year, $description) {
      $awards = readCSV($this -> filepath);
      $award = [$year, $description];
      
      array_push($awards, $award);
  
      writeCSV($this -> filepath, $awards);
    }
  
    public function delete_award($id) {
      $awards = readCSV($this -> filepath);
      
      array_splice($awards, $id + 1, 1);
      writeCSV($this -> filepath, $awards);
    }
  }
?>