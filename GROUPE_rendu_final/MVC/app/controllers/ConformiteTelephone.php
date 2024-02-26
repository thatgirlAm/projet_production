<?php 

class ConformiteTelephone{
    use Controller;
    public function index(){
        $page = new ConformTelephone();
        $data = $page->getConformiteTelephone();
        $this->view('conformiteTelephone', $data);
    }
}