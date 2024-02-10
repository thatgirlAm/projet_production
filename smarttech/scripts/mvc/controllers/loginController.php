<?php

//--ok--//

require_once(__DIR__.'/../models/UserModel.php');

if(isset($_POST['adresse_mail']) && isset($_POST["mdp"])){
    if(strlen($_POST['adresse_mail'])>0 && strlen($_POST['mdp'])){
        $userModel = new UserModel();
        $result = $userModel->check_login($_POST['adresse_mail'], $_POST['mdp']);
        if(isset($result['adresse_mail'])){
            session_start();
            $_SESSION['nom'] = $result['nom'];
        }
        else{
            $msg_erreur = "mot de passe ou adresse mail invalide. Réessayer.";
        }
    }
    else{
        $msg_erreur = "mot de passe ou adresse mail invalide. Réessayer.";
    }
}

if(isset($_POST['logout'])){
    session_start();
    session_destroy();
}

require_once(__DIR__.'/../views/includes.php');

if(isset($_SESSION['nom'])){
    require_once(__DIR__.'/../views/accueil.php');
}
else{
    require_once(__DIR__.'/../views/connexion.php');
}

