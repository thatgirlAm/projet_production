<?php

require_once(__DIR__.'/../models/ModelProduit.php');

$produit = new ProduitModel();
$liste = $produit->getProduits();
session_start();
require_once(__DIR__.'/../views/includes.php');
require_once(__DIR__.'/../views/accueil.php');
