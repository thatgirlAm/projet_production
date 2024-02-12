<?php

//--ok--//

require_once(__DIR__.'/../models/UserModel.php');

if(isset($_POST['addresse_mail']) && isset($_POST["mdp"])){
    if(strlen($_POST['addresse_mail'])>0 && strlen($_POST['mdp'])){
        $userModel = new UserModel();
        $result = $userModel->check_login($_POST['addresse_mail'], $_POST['mdp']);
        if(isset($result['addresse_mail'])){
            session_start();
            $_SESSION['addresse_mail'] = $result['addresse_mail'];
            $_SESSION['nom'] = $result['nom'];
            $_SESSION['id'] = $result['id'];

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

if(isset($_SESSION['addresse_mail'])){
    
    if(isset($_SESSION['nom'])){
        $message_accueil = 'Bienvenue ' . $_SESSION['nom'];
    }
    else{
        $message_accueil = 'Bienvenue';
    }


    require_once(__DIR__.'/../models/ModelProduit.php');

    $produit = new ProduitModel();
    $liste = $produit->getProduits();
    require_once(__DIR__.'/../views/accueil.php');
    }
    
else{
    require_once(__DIR__.'/../views/connexion.php');
}

