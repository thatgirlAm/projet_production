<?php

class PlanificationTablette{
    use Controller;
    public function index(){
        $page = new PlanifTablette();
        $data = $page->getPlanifTablette();
        $this->view('PlanificationTablette', $data);
    }
}