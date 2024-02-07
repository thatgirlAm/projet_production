<?php

require_once("dbmodel.php");

class employemodel extends dbModel {


    function check_employé(string $login, string $mot_de_passe) {
        $result = [];
        if (!$this->connected) {
            return $result;
        }
        $request = "SELECT * FROM employés WHERE login:nom AND mot_de_passe = MD5(:MDP)";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "nom" => $nom,
            "MDP" => $mot_de_passe
        ]);
        $entries = $statement->fetchAll();
        if (count($entries) == 1) {
            $result["adresse_mail"] = $entries[0]['adresse_mail'];
            $result["id_service"] = $entries[0]['id_service'];
        }
        return $result;
    }
    
}