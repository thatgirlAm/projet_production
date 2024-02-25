<?php 

class ValidationConformite{
    use Controller ; 
    public function index(){
        $validationConformite = new ValConformite() ;
        $data = array(
            'id'=>$_POST['id'],
            'date'=> $_POST['date'],
            'idOperateur'=>$_POST ['idOperateur'],
            'critereChecked'=> $_POST['critereChecked'], 
            'idProduit'=>$_POST['idProduit'], 
            'criteresUnchecked'=>$_POST['criteresUnchecked'],
            'idCompteRendu'=>$_POST['idCompteRendu'],
            'statut'=>$_POST['statut'],
            'commentaireManager'=>$_POST['commentaireManager'],
            'idManager'=>$_POST['idManager']);
        
        if(isset(
            $_POST['date'],
            $_POST ['idOperateur'],
            $_POST['critereChecked'], 
            $_POST['idProduit'], 
            $_POST['criteresUnchecked'],
            $_POST['statut'],
            $_POST['commentaireManager'],
            $_POST['idManager'])){
                $idOperateur = $_POST['idOperateur'];
                $critereChecked = $_POST['critereChecked'];
                $idProduit = $_POST['idProduit'];
                $critereUnchecked = $_POST['critereUnchecked'];
                $statut = $_POST['statut'];
                $commentaireManager=$_POST['commentaireManager'];
                $idManager=$_POST['idManager'];
                $data = array($idOperateur, $critereChecked, $idProduit, $critereUnchecked,
                $statut, $commentaireManager, $idManager);
            $validationConformite->insertData($data);
            $this->view('ValidationConformite');
        }

}}