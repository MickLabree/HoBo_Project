<?php

require_once "DbConfig.php";

class User extends DbConfig{
    public function create($data){

        try{
            if($data['password'] != $data['conf-password']){
                throw new Exception("Wachtwoorden komen niet overeen.");
            }
            $sql = "INSERT INTO klant (voornaam, achternaam, email, password, AboID) VALUES (:voornaam, :achternaam, :email, :password, :abo)";
            $encryptedPassword = password_hash($data['password'], PASSWORD_BCRYPT, ['cost' => 12]);
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(":voornaam", $data['voornaam']);
            $stmt->bindParam(":achternaam", $data['achternaam']);
            $stmt->bindParam(":email", $data['email']);
            $stmt->bindParam(":abo", $data['option']);
            $stmt->bindParam(":password", $encryptedPassword);
            if(!$stmt->execute()){
                throw new Exception("Account kon niet aangemaakt worden");
            }
            header("Location: login.php");
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function login($data){
        try {
            $user = $this->getUser($data['email']);
            if (!$user) {
                throw new Exception('Gebruiker bestaat niet.');
            }
            if(!password_verify($data['password'], $user->password)){
                throw new Exception("wachtwoord is incorrect.");
            }
            session_start();
            $_SESSION['ingelogd'] = true;
            $_SESSION['email'] = $user->email;
            header("Location: index.php");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getUsers(){
        $sql = "SELECT * FROM klant";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getUser($email){
        $sql = "SELECT * FROM klant WHERE email = :email";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

}

























?>