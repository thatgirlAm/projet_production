<?php

class PlanifTablette{
    use Model; 
    protected $table = 'produit';
    function getPlanifTablette(){
        $data = array('type'=>'tablette', 'date'=> 'null');
        $liste = $this->where($data);
        return $liste;
    }
}