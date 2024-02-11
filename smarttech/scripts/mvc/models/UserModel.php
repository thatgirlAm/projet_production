<?php
//--ok--//
require_once (__DIR__ . '/DBModel.php');

class Usermodel extends DBModel{

    function check_login(string $addresse_mail, string $mdp)
    {
        $result = [];
        if(!$this->connected){
            return $result;
        }
    $request = "SELECT * FROM employe WHERE addresse_mail=:addresse_mail  AND mdp=:mdp";
    $statement = $this->db->prepare($request);
    $statement->execute([
        "addresse_mail" => $addresse_mail,
        "mdp" => $mdp
        ]);
    $entries = $statement ->fetchAll();
    if (count($entries)==1){
        $result["addresse_mail"] = $entries[0]["addresse_mail"];
    } 
    return $result;
    }
   
}