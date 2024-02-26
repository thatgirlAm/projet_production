<?php 

class ConformiteTablette{
    use Controller;
    public function index(){
        $page = new ConformTablette();
        $data = $page->getConformiteTablette();
        $this->view('ConformiteTablette', $data);
    }
}