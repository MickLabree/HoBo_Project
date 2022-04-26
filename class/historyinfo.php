<?php
require_once "DbConfig.php";

class History extends DbConfig{

        public function getHistory(){
        $sql = "SELECT DATE_FORMAT(d_start, '%d-%m %h:%i') tijd, r.serietitel, aflTitel, Voornaam, Achternaam, d_start, d_eind FROM
        stream s
        JOIN aflevering a ON s.AflID = a.AfleveringID
        JOIN seizoen z ON a.SeizID = z.SeizoenID
        JOIN serie r ON z.SerieID = r.SerieID
        JOIN klant k ON k.KlantNr=s.KlantID
        WHERE KlantID = 10003; ORDER BY stream.d_start  ASC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
?>