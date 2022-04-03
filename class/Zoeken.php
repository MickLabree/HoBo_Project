<?php
  require_once "DbConfig.php";

  class Zoeken extends DbConfig {

    public function zoeken($term) {
      $term = $term.'%';
      $sql = "SELECT * FROM serie WHERE SerieTitel LIKE :term";
      $stmt = $this->connect()->prepare($sql);
      $stmt->bindParam(":term", $term);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getSeries() {
      $sql = "SELECT SerieTitel FROM serie LIMIT 100";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getSerie(){
      $sql = "SELECT * FROM serie LIMIT 20";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
  }

  public function getImageUrl($id){
      return substr("0000" . $id, -5) . ".jpg"; //000044
  }

  }

?>