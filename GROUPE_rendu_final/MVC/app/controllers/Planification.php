<?php

class Planification {
    use Controller;

    public function index(){
        $this->view('planification');
        
        if(isset($_POST['datepicker']) && isset($_POST['id'])) {
            $newDate = $_POST['datepicker'];
            $id = $_POST['id'];

            $produit = new Planif();
            $produit->update($id, ['date' => $newDate]);
        }
    }
}