<?php 

class Criteres {
    use Model; 
    protected $table=  "critere";   
    public function getCriteres(){ 
        return $this->findSpecific(['enonce'=>'enonce', 'id'=>'id']);  
    }
    public function getListeOperateurs(){
        $listeOperateurs = $this->where(array('id_service'=>1),[],'employe');
        return  $listeOperateurs;
    }
    public function getIdProduits($type){
        $listeProduits = $this->where(array('type'=>$type),[],'produit');
        return  $listeProduits;
    }

}