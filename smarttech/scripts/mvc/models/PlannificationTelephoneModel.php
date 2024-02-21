<?php

require_once(__DIR__.'./DBModel.php');
class PlannificationTelephone extends DBModel{
        // Requete qui nous donne tous l'id des telephones non planifiés
    public function getTelephones(): array{
        $request = 'SELECT id FROM produit WHERE type=:telephone AND date= none';
        $statement = $this->db->prepare($request);
        $statement->execute([]); 
        return $statement->fetchAll();
    }
    public function updateDateTelephone(string $date): bool {
        // Requete pour mettre à jour la date des telephones"
        $telephones = $this->getTelephones();
        $updateRequest = 'UPDATE produit SET date = :nouvelle_date WHERE id = :id';
        $statement = $this->db->prepare($updateRequest);
        foreach ($telephones as $telephone) {  // Foreach sert a mettre a jour seulement les telephones non planifiés
            $id = $telephone['id'];
            $statement->execute([
                "nouvelle_date" => $date,
                "id" => $id
            ]);
        }
    }
}

// POUR AMAELLE: J'ai modifié la table produits dans la base de donnés de ma branche, j'ai rajouté une quatrieme collone 'date'. A toi de voir si tu met dans le main