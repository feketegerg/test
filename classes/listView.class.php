<?php

include_once "listModel.class.php";

class ListView extends listModel{
    public function showListElements($side){
        $results = $this->getListElements($side);

        foreach ($results as $result){
            echo "  <tr element-index='".$result['id']."' element-position='".$result['position']."
                    ' side='".$result['side']."'>
                    <td>".$result['elementText']."</td>
                    </tr>";
        }
    }
    
}