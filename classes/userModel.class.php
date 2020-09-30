<?php

include_once "dbh.class.php";

class UserModel extends Dbh{

    //Felhasználó lekérdezése
    protected function getUser($uname){

        $sql = "SELECT * FROM users WHERE uname = ?";

        $stmt = $this->dbConnection()->prepare($sql);
        $stmt->execute([$uname]);
        $result = $stmt->fetchAll();
        return $result;
    }
}