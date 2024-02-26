<?php

class Accueil{
    use Controller;
    public function index(){
        $this->view("Accueil");
        if (isset($_POST['logout'])) {
            session_start();
            session_destroy();
        }
    }
    
}