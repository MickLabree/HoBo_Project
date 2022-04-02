<?php
require_once 'DbConfig.php';

class SerieInfo extends DbConfig {

    public function getSerieInfo(){
        if ($link .'.'. $serieId == $serieId) {
            echo $link;
        }
    }

    public function getSerie(){
        $sql = "SELECT * FROM serie WHERE SerieID>10 ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getImageUrl($id){
        return substr("0000" . $id, -5) . ".jpg"; //000044
    }

}


?>