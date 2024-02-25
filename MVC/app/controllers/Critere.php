<?php 
class Critere {
    //----Formulaire----//
    use Controller; 
    public function index(){
        $tableauCriteres = new Criteres();
        $liste = $tableauCriteres->getCriteres();
        $listeOperateurs = $tableauCriteres->getListeOperateurs();
        $this->view("Criteres", ['liste'=>$liste, 'listeOperateurs'=>$listeOperateurs]);
    }
}