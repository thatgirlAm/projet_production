<?php

require_once("dbmodel.php");

class employemodel extends dbModel {


    function check_employe(string $login, string $mot_de_passe) {
        $result = [];
        if (!$this->connected) {
            return $result;
        }
        $request = "SELECT * FROM employes WHERE login:nom AND mot_de_passe = MD5(:mdp)";
        $statement = $this->db->prepare($request);

        $statement->execute([
            "nom" => $login,
            "mdp" => $mot_de_passe
        ]);

        $entries = $statement->fetchAll();
        if (count($entries) == 1) {
            $result["adresse_mail"] = $entries[0]['adresse_mail'];
            $result["id_service"] = $entries[0]['id_service'];
        }
        return $result;
    }

}