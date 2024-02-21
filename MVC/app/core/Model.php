<?php

//--------------Non instanciable (pas de table spécifique)-----------//
Trait Model {
    use Database;
    protected $limit=10;
    protected $offset=0;
    protected $orderType = "desc";
    protected $orderColumn = "id";
    
    //----------------Fonction query pour les requêtes--------------//
   public function query($query, $data =[]){
        $connexion = $this->connect();
        $statement = $connexion->prepare($query);
        $check = $statement->execute($data);
        //--------Cas où on a des données à retourner--------------//
        if ($check){
            $result = $statement->fetchAll();
            if(is_array($result) && count($result)){
                return $result ;
            }
        }
    //----Cas où on a pas de données à retourner (Update, Insert)--//
        return false;
    }
    public function get_row($query, $data =[]){
        $connexion = $this->connect();
        $statement = $connexion->prepare($query);
        $check = $statement->execute($data);
        if ($check){
            $result = $statement->fetchAll();
            if(is_array($result) && count($result) > 0){
            return $result[0] ;
        }
    }
    return false;
    }
    //-------------------Requête avec Where-----------------------//
    public function where($data, $data_not = []){
        /*------------$data représente les données que l'on recherche-----------//
        -----$data_not représente le tableau de données dont on ne voudrait pas-*/
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query='select * from $this->table where ';
        foreach ($keys as $key){
            $query .= $key.'=:'.$key .' && ';
        }
        foreach ($keys_not as $key){
            $query .= $key.'!=:'.$key.' && ';
        }
        $query = trim($query, " && ");
        $query .= ' order by $this-> orderColumn $this->orderType limit $this->limit offset $this->offset';
        $data = array_merge($data, $data_not);
        return $this->query($query, $data) ; 
    }

    //----------------------------Fonction Find All--------------------------//
    public function findAll(){
        $query="select * from $this->table order by $this->orderColumn $this->orderType limit $this->limit offset $this->offset";
        return $this->query($query) ; 
    }

    
    //---------Exactement comme where mais avec une condition à la fin----------//
   
    public function first($data, $data_not = []){
         /*-----------$data représente les données que l'on recherche------------//
        -----$data_not représente le tableau de données dont on ne voudrait pas-*/
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query="select * from $this->table where ";
        foreach ($keys as $key){
            $query .= $key."=:".$key ." && ";
        }
        foreach ($keys_not as $key){
            $query .= $key."!=:".$key." && ";
        }
       $query = trim($query, " && ");
        $query .= " limit $this->limit offset $this->offset";
        $data = array_merge($data, $data_not);
        $result = $this->query($query, $data) ; 
        if ($result){
            return $result;
        }
        return false ;
    }
    
    //----------------------------Fonction Update-------------------------------//
    public function update($id, $data, $id_column = 'id'){
        //----------$data représente le tableau de données que l'on modifie----//
        //----Vérification de la modification de colonnes autorisées(on ne modifie pas l'id par exemple)-----//
        if(!empty($this->allowedColumns)){
            foreach($data as $key=>$value){
                if(!in_array($key, $this->allowedColumns))
                    unset($data[$key]);
            }
        }
        $keys = array_keys($data);
        $query="update $this->table set ";
        foreach ($keys as $key){
            $query .= $key."=:".$key ;
        }
        $query .= " where $id_column = :$id_column ";
        $data[$id_column]= $id;
        $this->query($query, $data) ;
        return false ; 
    }
    
    //-------------------------Fonction Delete-------------------------------//
    public function delete($id, $id_column = 'id'){
        $data[$id_column]= $id;
        $query = "delete from $this->table where $id_column = :$id_column";
        $this->query($query, $data) ;
        return false;    }   

    //-------------------------Fonction Insert-------------------------------//
    public function insert($data){
        //----Vérification de la modification de colonnes autorisées(on ne modifie pas l'id par exemple)-----//
        if(!empty($this->allowedColumns)){
            foreach($data as $key=>$value){
                if(!in_array($key, $this->allowedColumns))
                    unset($data[$key]);
            }
        }
        $keys = array_keys($data);
        $query="insert into $this->table(".implode(",", $keys).") values(:".implode(",:", $keys).")";
        $this->query($query,$data);
        return false; 
    } 
}