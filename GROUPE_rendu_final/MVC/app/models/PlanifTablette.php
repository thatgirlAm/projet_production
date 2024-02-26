<?php

class PlanifTablette{
    use Model; 
    protected $table = 'produit';
    function getPlanifTablette(){
        $data = array("type"=>'tablette');
        $liste = $this->where($data);
        return $liste;
    }
}