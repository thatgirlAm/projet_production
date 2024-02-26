<?php
require_once(__DIR__.'./DBModel.php');
class ProductionProduit extends DBModel{
    public function getProduitProduction(): array{
        $request = 'SELECT * FROM produit WHERE produit.type=:$typededonnées';
        $statement = $this->db->prepare($request);
        $statement->execute(); 
        return $statement->fetchAll();
    }

}