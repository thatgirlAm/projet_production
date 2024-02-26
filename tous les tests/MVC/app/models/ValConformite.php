<?php

class ValConformite{
    use Model;
        protected $table = "operation";
    public function insertData($data){
        return $this->insert($data);
    }
}