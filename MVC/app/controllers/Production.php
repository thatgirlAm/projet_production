<?php

class Production {
    use Controller ; 
    public function index(){
        //----Chargement de la finction view()----//
        $this->view('production');
    }

}
