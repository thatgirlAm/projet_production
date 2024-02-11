<?php

require_once(__DIR__.'../models/ModelProduit.php')
class HomeController {
    public  function index() {
        $modelProduit = new ModelProduit();
    }
}