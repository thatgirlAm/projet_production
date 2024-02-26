<?php 

class ValidationConformite{
    use Controller ; 
    public function index(){
        $validationConformite = new ValConformite() ;
        $data = array(
            'id'=>$_SESSION['id'],
            'date'=> $_POST['date'],
            'critereChecked'=> $_POST['critereChecked'], 
            'idProduit'=>$_POST['idProduit'], 
            'criteresUnchecked'=>$_POST['criteresUnchecked']);
        if(isset(
            $_POST['date'],
            $_POST ['id'],
            $_POST['critereChecked'], 
            $_POST['idProduit'], 
            $_POST['criteresUnchecked'])){
                $idOperateur = $_POST['id'];
                $critereChecked = $_POST['critereChecked'];
                $idProduit = $_POST['idProduit'];
                $critereUnchecked = $_POST['critereUnchecked'];
                $data = array($idOperateur, $critereChecked, $idProduit, $critereUnchecked);
            $validationConformite->insertData($data);
            $this->view('ValidationConformite');
        }

}}