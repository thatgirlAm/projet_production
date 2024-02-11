<?php 

require_once(__DIR__."./DBModel.php");

class ListeProduits {
    private $sort="oldest";
    public function  __construct($sort="oldest") {
    $this->sort=$sort;  
    }

    public function sort($dir): self {
        return new self($dir);
    }

    public function getSort(): string {
        return $this->sort;
    }

    public function getProduits(): array {
        if ($this->sort== "newest"){
            $order = 'ORDER BY id DESC';
        }

        else if  ($this->sort == "oldest"){
            $order = 'ORDER BY id ASC';
        }

        else{
            $order = '';
        }
    $request = 'SELECT * FROM produit '.$order;
    $statement = $this->db->prepare($request);
    $statement->execute();

    return $statement->fetchAll();
    }
    }