<?php

class Accueil{
    use Controller;
    public function index(){
        $this->view("accueil");
        if (isset($_POST['logout'])) {
            session_start();
            session_destroy();
        }
    }
    
}