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
            $this->commentaire = $post;
        } else {
            $this->commentaire = '';
        }
        return $this->commentaire;
    }

    function getInformations($post) {
        $operateur = isset($post['operateur']) ? $post['operateur'] : null;
    $critereChecked = []; 
    $critereUnChecked = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    }

    $data = [
        'operateur' => $operateur,
        'critereChecked' => $critereChecked,
        'critereUnchecked' => $critereUnChecked
    ];

    return $data;
}
}