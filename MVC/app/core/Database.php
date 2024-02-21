<?php

/*--------Nous avons créé une Trait au lieu d'une classe pour qu'elle
----------soit utilisable ("extensible") plusieurs fois------------*/
Trait Database{

    //----Fonction pour se connecter à la base de données-----------/
    private function connect(){
        $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
        $connexion = new PDO($string, DBUSER,DBPASS);
        return $connexion;
    }

}