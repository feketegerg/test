<?php

include_once "listModel.class.php";

class ListContr extends listModel{

    public function updateListElements($newPosition,$side,$index){
        $this->setListElements($newPosition,$side,$index);
    }
}