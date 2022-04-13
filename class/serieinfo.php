<?php
require_once 'DbConfig.php';

class SerieInfo extends DbConfig {

    public function getSerie(){
        $sql = "SELECT * FROM serie";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getImageUrl($id){
        return substr("0000" . $id, -5) . ".jpg"; //000044
    }

    public function getSeriesByGenre($genre){
        $sql = "SELECT * FROM genre
                JOIN serie_genre ON
                genre.GenreID = serie_genre.GenreID
                JOIN serie ON
                serie_genre.SerieID = serie.SerieID
                WHERE GenreNaam = :genre";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':genre', $genre);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAfleveringen($afleveringen, $seizoen){
        $sql = "SELECT * FROM seizoen
                JOIN serie on serie.SerieID = seizoen.SeizoenID
                JOIN aflevering on aflevering.SeizID = seizoen.SeizoenID
                WHERE serie.SerieID = :serie AND seizoen.SeizoenID = :seizoen";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':serie', $afleveringen);
        $stmt->bindParam(':seizoen', $seizoen);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}


?>