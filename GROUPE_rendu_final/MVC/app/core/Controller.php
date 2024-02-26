<?php 

Trait Controller {
    public function view($name, $data = []) {
        $filename = __DIR__."/../../app/views/".$name.".view.php";
        if (file_exists($filename)){
            extract($data);
            require($filename);
        }
        else{
            $filename = __DIR__."/../../app/views/404.view.php";
            require $filename;
        }
    }
}