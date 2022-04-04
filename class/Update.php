<?php

require_once "DbConfig.php";

class Update extends DbConfig{

    public function edit($data){
        try{
            $sql = "UPDATE klant SET  Voornaam=:Voornaam, Tussenvoegsel=:Tussenvoegsel, Achternaam=:Achternaam, Email=:Email, Genre=:Genre, Password=:Password WHERE Email= :Email";
            $encryptedPassword = password_hash($data['Password'], PASSWORD_BCRYPT, ['cost' => 12]);
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(":Genre", $data['Genre']);
            $stmt->bindParam(":Voornaam", $data['Voornaam']);
            $stmt->bindParam(":Tussenvoegsel", $data['Tussenvoegsel']);
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

    

    public function getUpdate($email){
        $sql = "SELECT * FROM klant WHERE Email = :rami";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":rami", $email);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    

    public function getGenre(){
        $sql = "SELECT * FROM Genre";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

?>