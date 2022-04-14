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

    public function getInfo($klantNr){
        $sql = "SELECT serie.SerieTitel, aflevering.AflTitel, stream.d_eind FROM serie 
        JOIN seizoen ON serie.SerieID = seizoen.serieID 
        JOIN aflevering ON seizoen.SeizoenID = aflevering.SeizID 
        JOIN stream ON aflevering.AfleveringID = stream.AflID 
        JOIN klant ON klant.KlantNR = stream.KlantID 
        WHERE klant.KlantNr = :klantNr ORDER BY stream.d_eind DESC LIMIT 10;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':klantNr', $klantNr);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }



    public function favorite($data){
        try{
            $sql = "INSERT INTO klant (favorite) VALUES (:favorite)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(":favorite", $data['favorite']);
            if(!$stmt->execute()){
                throw new Exception("Account kon niet aangemaakt worden");
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

}


?>