<?php 
class Critere {
    //----Formulaire----//
    use Controller; 
    public function index(){
        $tableauCriteres = new Criteres();
        $liste = $tableauCriteres->getCriteres();
        $listeProduitsTelephone = $tableauCriteres->getIdProduits('telephone'); 
        $listeProduitsTablette = $tableauCriteres->getIdProduits('tablette');
        $nom = $_SESSION['nom'];
        $id = $_SESSION['id'];
        $this->view("criteres", ['liste'=>$liste , 'listeProduitsTelephone'=>$listeProduitsTelephone, 'listeProduitsTablette'=>$listeProduitsTablette, 'nom'=>$nom , 'id'=>$id]);
    }
}