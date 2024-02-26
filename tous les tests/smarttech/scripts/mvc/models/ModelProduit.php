<?php 

require_once(__DIR__."./DBModel.php");

class ProduitModel extends DBModel {
    public function getProduits(): array {
        $request = 'SELECT * FROM produit' ;
        $statement = $this->db->prepare($request);
        $statement->execute();
        $liste = $statement->fetchAll();
        return $liste;
    }
    }
