<?php

class dbmodel {

    // let's hide or connection from others
    protected $db = null;
    protected $connected = false;

    // Connexion a la base de données

     public function __construct() {
        $this->connected = $this->connect_to_db();
     }

    private function connect_to_db() {   // fonction qui permet à Db de ce connecter, si la connexion a bien été établie, on return TRUE 
        require_once __DIR__. "/../env_settings.php";     
        try {
            $this->db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $pwd, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            return true;
        }
        catch (Exception $e) {
            return false;
        }
    }


    // other useful methods to interact with the database
    // AND that are common to all models
    // should be implemented here


}

