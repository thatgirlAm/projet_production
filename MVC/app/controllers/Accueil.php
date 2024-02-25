<?php

class Accueil{
    use Controller;
    public function index(){
        $this->view("Accueil");
    }
}