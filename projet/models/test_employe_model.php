<?php

    require_once(__DIR__."/scripts/php/models/employemodel.php");

    $employemodel = new employemodel();

    // test avec login et mdp correctes
    $login = "troufi";
    $mot_de_passe = "AAHJ1/";
    
    $result = $employemodel->check_employe($login, $mot_de_passe);
    print_r($result);

    // test avec login incorrect
    $login= "tr0ufi";
    $mot_de_passe = "AAHJ1/";
    
    $result = $employemodel->check_employe($login, $mot_de_passe);
    print_r($result);

    // test avec mot de passe incorrect
    $login = "troufi";
    $mot_de_passe = "123";
    
    $result = $employemodel->check_employe($login, $mot_de_passe);
    print_r($result);
?>