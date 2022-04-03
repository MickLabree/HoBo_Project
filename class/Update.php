<?php

require_once "DbConfig.php";

class Update extends DbConfig{

    public function edit($data){
        try{
            $sql = "UPDATE klant SET  Voornaam=:Voornaam, Achternaam=:Achternaam, Email=:Email, Password=:Password WHERE KlantNr= :KlantNr";
            $encryptedPassword = password_hash($data['Password'], PASSWORD_BCRYPT, ['cost' => 12]);
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(":KlantNr", $data['KlantNr']);
            $stmt->bindParam(":Voornaam", $data['Voornaam']);
            $stmt->bindParam(":Achternaam", $data['Achternaam']);
            $stmt->bindParam(":Email", $data['Email']);
            $stmt->bindParam(":Password", $encryptedPassword);
            if(!$stmt->execute()){
                throw new Exception("Gegevens niet veranderd");
            }
            // header("Location: login.php");
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    

    public function getUpdate(){
        $sql = "SELECT id FROM test";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    
}

?>