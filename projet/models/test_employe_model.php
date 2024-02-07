<?php

    require_once(__DIR__."/scripts/php/models/employemodel.php");

    $employemodel = new employemodel();

    // teste avec login et mdp correctes
    $nom = "troufi";
    $mdp = "AAHJ1/";
    
    $result = $employemodel->check_employe($login, $mdp);
    print_r($result);

    // teste avec login incorrect
    $nom = "tr0ufi";
    $mdp = "AAHJ1/";
    
    $result = $employemodel->check_employe($login, $mdp);
    print_r($result);

    // teste avec mot de passe incorrect
    $nom = "troufi";
    $mdp = "123";
    
    $result = $employemodel->check_employe($login, $mdp);
    print_r($result);
?>