<?php
//--ok--//
require_once (__DIR__ . '/DBModel.php');

class ProduitsValidesModel extends DBModel{

    function check_produits(int $id, string $type, int $etat)
    {
    $result = [];
    $request = "SELECT * FROM produit WHERE id=:id  AND type=:type AND etat=:etat";
    $statement = $this->db->prepare($request);
    $statement->execute([
        "id" => $id,
        "type" => $type
        "etat" => $etat
        ]);
    $entries = $statement ->fetchAll();

    if (etat == 1){  // Cela renvoi les produits validés
        $result["id"] = $entries[0]["id"]; 
        $result["type"] = $entries[0]["type"];
        $result["etat"] = $entries[0]["etat"];
    } 
    return $result;
    }
   
}