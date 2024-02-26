<?php 

class ValidationConformite{
    use Controller ; 
    public function index(){
        $validationConformite = new ValConformite() ;
        $data = array(
            'id'=>$_SESSION['id'],
            'date'=> $_POST['date'],
            'listeCritereChecked'=> $_POST['critereChecked'], 
            'idProduit'=>$_POST['idProduit'], 
            'listeCriteresUnchecked'=>$_POST['criteresUnchecked']);
        if(isset(
            $_POST['date'],
            $_POST ['id'],
            $_POST['listeCritereChecked'], 
            $_POST['idProduit'], 
            $_POST['listeCriteresUnchecked'])){
                $commentaire = $_POST['commentaireOperateur'];
                $idOperateur = $_POST['id'];
                $critereChecked = $_POST['listeCritereChecked'];
                $idProduit = $_POST['idProduit'];
                $critereUnchecked = $_POST['listeCritereUnchecked'];
                $statut = 1;   
                $id_manager = 00;
                $validation_operateur = 1;
                $validation_manageur = 1;
               
                $data = array('id_manager'=>$id_manager,
                'validation_operateur'=>$validation_operateur, 
                'validation_manageur'=>$validation_manageur,
                'commentaire'=>$commentaire,
                'statut'=>$statut, 
                'id_operateur'=>$idOperateur, 
                'id_critere_ok'=>$critereChecked, 
                'id_produit'=>$idProduit, 
                'id_critere_rejete'=>$critereUnchecked);
                $validationConformite->insertData($data);
             
            $this->view('ValidationConformite');
        }

}}