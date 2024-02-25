<?php

class Operation {
    use Model;
    protected $commentaire;
    protected $table = "critere";
    protected $idOperateur;
    protected $idManager;  
    protected $criteresChecked = [];
    protected $criteresUnchecked = []; 
    protected $liste = []; 

    public function __construct() {
        $this->liste = $this->findSpecific(['id' => 'id']); 
    }
    
    function getCommentaire($post) {
        if (!empty($post)) {
            $this->commentaire = $post['commentaireOperateur'];
        } else {
            $this->commentaire = 'Pas de commantaire Opérateur';
        }
        return $this->commentaire;
    }
    function getInformations($post) {
        $operateur = isset($post['operateur']) ? $post['operateur'] : 'Aucun Opérateur choisi';
        $critereChecked = []; 
        $critereUnChecked = [];
    
        if (!empty($post) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $checkedIds = isset($post['criteres']) ? $post['criteres'] : [];
            $this->liste = $this->findSpecific(['id' => 'id']);
    
            foreach ($this->liste as $critere) {
                $critereId = $critere['id'];
                if (in_array($critereId, $checkedIds)) {
                    $critereChecked[] = $critereId;
                } else {
                    $critereUnChecked[] = $critereId;
                }
            }
    
            if ($critereUnChecked == []) {
                $critereUnChecked = ['Aucun critère non validé'];
            }
            if ($critereChecked == []) {
                $critereChecked = ['Aucun critère validé'];
            }
        }
    
        $data = [
            'operateur' => $operateur,
            'critereChecked' => $critereChecked,
            'critereUnchecked' => $critereUnChecked
        ];
    
        return $data;
    }
    // A faire 
    public function getInfosCompteRendu(){

    }
    
}
