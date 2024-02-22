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
        if (!empty($entries)){
            $result["addresse_mail"] = $entries[0]["addresse_mail"];
            $result["id"] = $entries[0]["id"];
        } 
        else{
            echo ERROR_LOGIN ; 
        }
        
       return $result; 
        }
    
       
}
