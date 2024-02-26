<?php

class PlanificationTelephone{
    use Controller;
    public function index(){
        $page = new PlanifTelephone();
        $data = $page->getPlanifTelephone();
        $this->view('planificationTelephone', $data);
    }
}