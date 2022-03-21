<?php

require_once "DbConfig.php";

class Post extends DbConfig{

    public function getPost(){
        $sql = "SELECT * FROM posts";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}

?>