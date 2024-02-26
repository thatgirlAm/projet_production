<?php

class PlanifTelephone{
    use Model; 
    protected $table = 'produit';
    function getPlanifTelephone(){
        $data = array('type'=>'telephone', 'date'=> '');
        $liste = $this->where($data);
        return $liste;
    }
}