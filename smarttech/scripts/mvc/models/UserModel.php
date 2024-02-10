<?php

require_once("DBModel.php");
class Usermodel extends DBModel{

    function check_login(string $addresse_mail, string $mdp)
    {
        $result = [];
        if(!$this->connected){
            return $result;
        }
    $request = "SELECT * FROM employe WHERE addresse_mail=:addresse_mail = AND mdp=MD5(:mdp)";
    $statement = $this->db->prepare($request);
        $statement->execute([
            "addresse_mail" => $addresse_mail,
            "mdp" => $mdp
        ]);
    $entries = $statement ->fetchAll();
    if (count($entries)==1){
        $result["nom"] = $entries[0]["nom"];
    } 
    return $result;
    }
   
}