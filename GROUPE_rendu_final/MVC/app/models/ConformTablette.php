<?php

class ConformTablette{
    use Model;
    protected $table = 'produit'; 

    public function getConformiteTablette(){
        $data = array('type'=>'tablette');
        $data_not = array('date'=> 'null');
        $liste = $this->where($data, $data_not);
        return $liste;
    }
}