<?php
  require_once "DbConfig.php";

  class Zoeken extends DbConfig {

    public function zoeken($term) {
      $term = $term.'%';
      $sql = "SELECT SerieTitel FROM serie WHERE SerieTitel LIKE :term";
      $stmt = $this->connect()->prepare($sql);
      $stmt->bindParam(":term", $term);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getSeries() {
      $sql = "SELECT SerieTitel FROM serie";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

  }

?>