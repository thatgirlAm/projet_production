<?php

//----Page Login----//
class Login {
    use Controller ; 

    public function index(){
        //----Chargement de la fonction view()----//
        
        $this->view('login');
        if(isset($_POST['addresse_mail']) && isset($_POST["mdp"])){
            if(strlen($_POST['addresse_mail'])>0 && strlen($_POST['mdp'])){
                $userModel = new User;
                $result = $userModel->check_login($_POST['addresse_mail'],$_POST["mdp"]);
                if(isset($result['addresse_mail'])){
                    $_SESSION['addresse_mail'] = $result['addresse_mail'];
                    $_SESSION['id'] = $result['id'];
                    redirect('home'); 
                }
            }
        }
    }
}

