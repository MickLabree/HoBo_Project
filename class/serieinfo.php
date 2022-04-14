<?php
require_once 'DbConfig.php';

class SerieInfo extends DbConfig {

    public function getSerie(){
        $sql = "SELECT * FROM serie";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getSeries(){
        $sql = "SELECT * FROM serie LIMIT 6";
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

    public function getSeasonOfSerie($id){
        $sql = "SELECT * FROM seizoen
                JOIN serie on serie.SerieID = seizoen.SerieID
                WHERE seizoen.SerieID = :serie";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':serie', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAfleveringen($afleveringen, $seizoen){
        $sql = "SELECT *, seizoen.Rang as sRang FROM seizoen
                JOIN serie on serie.SerieID = seizoen.SerieID
                JOIN aflevering on aflevering.SeizID = seizoen.SeizoenID
                WHERE serie.SerieID = :serie AND seizoen.Rang = :seizoen";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':serie', $afleveringen);
        $stmt->bindParam(':seizoen', $seizoen);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getLigma($afleveringen){
        $sql = "SELECT *, seizoen.Rang as sRang FROM seizoen
                JOIN serie on serie.SerieID = seizoen.SerieID
                JOIN aflevering on aflevering.SeizID = seizoen.SeizoenID
                WHERE serie.SerieID = :serie LIMIT 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':serie', $afleveringen);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}


?>