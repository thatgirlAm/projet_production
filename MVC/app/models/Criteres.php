<?php 

class Criteres {
    use Model; 
    protected $table=  "critere";   
    public function getCriteres(){ 
        return $this->findAll();
    }
    public function getListeOperateurs(){
        $listeOperateurs = $this->where(array('id_service'=>1),[],'employe');
        return  $listeOperateurs;
    }

}