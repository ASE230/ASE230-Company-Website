<?php
  require_once('../../lib/csv.php');

  class pages {
    private $filepath;

    private function __construct($filepath) {
      $this->filepath = $filepath;
    }

    public function get_all_pages() {
      return readCSV($this->filepath);
    }

    public function get_page($name) {
      $pages = $this->get_all_pages();
      
      foreach($pages as $page) {
        if($page === $name) {
          return $pages;
        }
      }
  
      return null;
    }

    public function update_page($id, $content) {
      $pages = readCSV($this->filepath);
  
      $id = $id + 1;
  
      if($content !== null) {
        $pages[$id][1] = $content;
      }
  
      writeCSV($this->filepath, $pages);
    }
  
    public function delete_page($id) {
      $pages = readCSV($this->filepath);
      
      array_splice($pages, $id + 1, 1);
      writeCSV($this->filepath, $pages);
    }
  
    public function create_page($filename, $content) {
      $pages = readCSV($this->filepath);
      $page = [$filename, $content];
      
      array_push($pages, $page);
  
      writeCSV($this->filepath, $pages);
    }
  }
?>