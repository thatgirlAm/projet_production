<?php
//require_once(__DIR__.'/../models/UserModel.php');
//$userModel = new UserModel();

require_once(__DIR__.'/../models/ModelProduit.php');

echo "1";
$produit = new ProduitModel();

echo "2";
$produit2 = new ProduitModel();
$liste = $produit->getProduits();
session_start();
require_once(__DIR__.'/../views/includes.php');
require_once(__DIR__.'/../views/accueil.php');
