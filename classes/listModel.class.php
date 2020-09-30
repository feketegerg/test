<?php

include_once "dbh.class.php";

class ListModel extends Dbh{

    protected function getListElements($side){

        $sql = "SELECT * FROM listElements WHERE side = ?";

        $stmt = $this->dbConnection()->prepare($sql);
        $stmt->execute([$side]);
        $result = $stmt->fetchAll();
        return $result;
    }

    protected function setListElements($newPosition,$side,$index){

        $sql = "UPDATE listelements SET position = ?, side = ? WHERE id = ?";

        $stmt = $this->dbConnection()->prepare($sql);
        $stmt->execute([$newPosition, $side, $index]);
    }
}