<?php

class Operation {
    use Model;
    protected $commentaire;
    function getCommentaire($post){
        if (!empty($post)){
            $this->commentaire = $post;
        }
        else{
            $this->commentaire = '';
        }
        return $this->commentaire;
    }
}