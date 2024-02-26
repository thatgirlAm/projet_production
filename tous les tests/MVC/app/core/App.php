<?php 
class Application{

    private $controller = 'Disclaimer';
    private $method = 'index';

    private function splitURL(){
        $url = $_GET['url'] ?? 'disclaimer';
        $url= explode("/", trim($url, " /"));
        return $url;
    }

    private function loadController(){
        $url = $this->splitURL();
        $filename = "../app/controllers/".ucfirst($url[0]).".php";
        //----Selection du controlleur demandé si il existe----//
        if (file_exists($filename)){
            require($filename);
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }
        else{
            $filename = "../app/controllers/_404.php";
            require $filename;
            $this->controller ="_404";
        }
        $controller = new $this->controller;

        //----Selection de la méthode demandée si elle existe----//
        if(!empty($url[1])){
            if(method_exists($controller, $url[1]))
            {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        call_user_func_array([$controller, $this->method], $url);
    }

    public function run(){
        $this->loadController();
    }
}