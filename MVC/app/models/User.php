<?php

class User{
    use Model;

    //----Définition de la table concernée----//
    protected $table = 'employe';
    //----Colonnes dont la modification est acceptée----//
    protected $allowedColumns=[
        'nom',
        'addresse_mail',
        'mdp'
    ];

        function check_login(string $addresse_mail, string $mdp)
        {
            $result = [];
            if(!$this->connect()){
                return $result;
            }
        $data = array(
            'addresse_mail'=>$addresse_mail,
            'mdp'=> $mdp); 
        $entries = $this->first($data);
            print_r($entries) ;
        if (!empty($entries)){
            $result["addresse_mail"] = $entries[0]["addresse_mail"];
            $result["id"] = $entries[0]["id"];
            $result["nom"] = $entries[0]["nom"];
        } 
        else{
            echo ERROR_LOGIN ; 
        }
        
       return $result; 
        }

        function getService($nom){
            $query = "SELECT service.nom FROM employe JOIN service ON employe.id_service = service.id WHERE employe.nom = :nom";
            $result = $this->query($query);
            return $result ;
        }
    
       
}
