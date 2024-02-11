<?php

require_once(__DIR__.'../models/DBModel.php')
'''class ModelProduit extends DBModel{
   function choix (string $choix){
        $choix = 0 ; 

    }
    $request = "SELECT * FROM produit WHERE produit.type=:choix.type"
    $statement = $this->db->prepare($request);
    $statement->execute()

    protected $produit;

    public function setProduit($produit){
        $this->produit = $produit;
    }
    public function __construct($produit) {
        $this->setProduit($produit);'''


