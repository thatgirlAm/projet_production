<?php 
class Critere {
    //----Formulaire----//
    use Controller; 
    public function index(){
        $tableauCriteres = new Criteres();
        $liste = $tableauCriteres->getCriteres();
        $listeProduitsTelephone = $tableauCriteres->getIdProduits('telephone'); 
        $listeProduitsTablette = $tableauCriteres->getIdProduits('tablette');
        $this->view("Criteres", ['liste'=>$liste , 'listeProduitsTelephone'=>$listeProduitsTelephone, 'listeProduitsTablette'=>$listeProduitsTablette]);
    }
}