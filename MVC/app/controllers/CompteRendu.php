<?php

class CompteRendu {
    use Controller;
    protected $table = "operation";
    public function index(){
    
        if(isset($_POST['commentaireOperateur']) && (!empty($_POST['commentaireOperateur']))){
            $compteRendu = new Operation;
            $commentaireOperateur = $compteRendu->getCommentaire($_POST['commentaireOperateur']);    
        }
        else{
            $commentaireOperateur = 'Pas de commentaire opérateur'; 
        }
        $infos = $compteRendu->getInformations($_POST);
        $data = array('infos'=>$infos, 'commentaireOperateur' => $commentaireOperateur);

        $this->view('CompteRendu', $data);

    }}