<?php

class CompteRendu {
    use Controller;
    protected $table = "operation";
    
    public function index(){
        $compteRendu = new Operation();
        if(isset($_POST['commentaireOperateur']) && (!empty($_POST['commentaireOperateur']))){
            $commentaireOperateur = $compteRendu->getCommentaire($_POST);    
        }
        else{
            $commentaireOperateur = 'Pas de commentaire opérateur'; 
        }
        $infos = $compteRendu->getInformations($_POST);
        $data = array('infos'=>$infos, 'commentaireOperateur' => $commentaireOperateur);

        $this->view('CompteRendu', $data);

    }}