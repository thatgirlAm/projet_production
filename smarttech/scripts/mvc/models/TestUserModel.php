<?php

    require_once(__DIR__."/UserModel.php");

    $usermodel = new usermodel();

    // test avec adresse_mail et mdp correctes
    $addresse_mail = "troufi@gmail.com";
    $mdp = "AAHJ1/";
    
    $result = $usermodel->check_login($addresse_mail, $mdp);
    print_r($result);

    // test avec addresse_mail incorrect
    $addresse_mail= "troUfi@gmail.com";
    $mdp = "AAHJ1/";
    
    $result = $usermodel->check_login($addresse_mail, $mdp);
    print_r($result);

    // test avec mot de passe incorrect
    $addresse_mail= "troufi@gmail.com";
    $mdp = "123";
    
    $result = $userodel->check_login($addresse_mail, $mdp);
    print_r($result);
?>