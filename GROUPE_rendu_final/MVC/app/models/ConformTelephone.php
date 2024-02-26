<?php

class ConformTelephone{
    use Model;
    protected $table = 'produit'; 

    public function getConformiteTelephone(){
        $data = array('type'=>'telephone');
        $data_not = array('date'=> 'null');
        $liste = $this->where($data, $data_not);
        return $liste;
    }
}