<?php

class Home {
    use Controller ; 
    public function index(){
        //----Chargement de la finction view()----//
        $this->view('home');
    }

}
