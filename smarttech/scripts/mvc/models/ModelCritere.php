<?php 

require_once(__DIR__."./DBModel.php");

class CritereModel extends DBModel {
    public function getCriteres(): array {
        $request = 'SELECT * FROM critere' ;
        $statement = $this->db->prepare($request);
        $statement->execute();
        $liste = $statement->fetchAll();
        return $liste;
    }


    
}
