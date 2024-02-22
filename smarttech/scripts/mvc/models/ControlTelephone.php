<?php

require_once(__DIR__.'./DBModel.php');
class ControlTelephone extends DBModel{
    
    // Jointure entre la table 'critere' et la table 'produit_critere'
    $query = "SELECT pc.id_critere
    FROM produit_critere AS pc
    INNER JOIN critere AS c ON pc.id_critere = c.id";

    $result = $mysqli->query($query);

    // Jointure entre la table 'produit' et la table 'produit_critere'
    $query = "SELECT pc.id_produit
    FROM produit_critere AS pc
    INNER JOIN produit AS p ON pc.id_produit = p.id";
    
    $result = $mysqli->query($query);

    // Jointure entre la table 'produit_critere' et la table 'operation'
    $query = "SELECT o.id_produit, o.id_critere
    FROM operation AS o
    INNER JOIN produit_critere AS pc ON pc.id_produit = o.id_produit AND pc.id_critere = o.id_critere";
    
    $result = $mysqli->query($query);

    // cette fonction permet de selectionner tous les telephones qui n'ont pas été controlés mais qui ont une date de control
    public function GetNCTelephones () {  
    $request = 'SELECT id FROM produit WHERE type=:telephone AND date IS NOT NULL'
    $statement = $this->db->prepare($request);
    $statement->execute([]); 
    return $statement->fetchAll();

}
    // fonction qui permet de rajouter une ligne dans la table operations (dans le cas ou les deux criteres sont validés)
    public function insertOperation($id_produit) {
    $id_critere = 3; 
    $id_critere_rejete = NULL; 
    $request = "INSERT INTO operation (id_produit, id_critere, id_critere_rejete) VALUES (:id_produit, :id_critere, :id_critere_rejete)";
    $statement = $this->db->prepare($request);
    $statement->execute([':id_produit' => $id_produit, ':id_critere' => $id_critere, ':id_critere_rejete' => $id_critere_rejete]);
    }

    // fonction qui permet de rajouter une ligne dans la table operations (dans le cas ou le premier critere n'est pas validé)
    public function insertOperationA($id_produit) {
    $id_critere = 2; 
    $id_critere_rejete = 1; 
    $request = "INSERT INTO operation (id_produit, id_critere, id_critere_rejete) VALUES (:id_produit, :id_critere, :id_critere_rejete)";
    $statement = $this->db->prepare($request);
    $statement->execute([':id_produit' => $id_produit, ':id_critere' => $id_critere, ':id_critere_rejete' => $id_critere_rejete]);
    }


    // fonction qui permet de rajouter une ligne dans la table operations (dans le cas ou le deuxieme critere n'est pas validé)
    public function insertOperationB($id_produit) {
    $id_critere = 1; 
    $id_critere_rejete = 2; 
    $request = "INSERT INTO operation (id_produit, id_critere, id_critere_rejete) VALUES (:id_produit, :id_critere, :id_critere_rejete)";
    $statement = $this->db->prepare($request);
    $statement->execute([':id_produit' => $id_produit, ':id_critere' => $id_critere, ':id_critere_rejete' => $id_critere_rejete]);
}

    // fonction qui permet de rajouter une ligne dans la table operations (dans le cas ou les deux criteres ne sont pas validés)
    public function insertOperationC($id_produit) {
    $id_critere = NULL; 
    $id_critere_rejete = 3; 
    $request = "INSERT INTO operation (id_produit, id_critere, id_critere_rejete) VALUES (:id_produit, :id_critere, :id_critere_rejete)";
    $statement = $this->db->prepare($request);
    $statement->execute([':id_produit' => $id_produit, ':id_critere' => $id_critere, ':id_critere_rejete' => $id_critere_rejete]);
    }
    


    // Fonction qui permet a l'operateur de definir si les criteres sont validés ou pas
    public function control(bool $a, bool $b) {
        $NCtelephones = $this->GetNCTelephones();  // Prend tous les telephones qui n'ont pas de date de controle
        foreach($NCtelephones as $NCtelephone) {
            if($a == true && $b == true) {
                $this->insertOperation($NCtelephone['id']); // Utilise la fonction de rajout de ligne pour les deux criteres validés
            } else if ($a == true && $b == false) {
                $this->insertOperationB($NCtelephone['id']); // Utilise la fonction de rajout de ligne pour le critere B non validé
            } else if ($a == false && $b == true) {
                $this->insertOperationA($NCtelephone['id']); // utilise la fonction de rajout de ligne pour le critere A non validé
            } else {
                $this->insertOperationC($NCtelephone['id']); // utilise la fonction de rajout de ligne pour les deux criteres non validés
            }
        }
    }
}

// je me suis aidé de chatGPT pour faire ce code. A tester je ne sait pas si ça marche (id_critere risque de ne pas etre coherent entre toutes les tables jointes et le code)
// Le code pour tablette sera quasiment le meme que celui la.