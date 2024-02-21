<?php

/*Erreur */
class _404 {
    use Controller;
    public function index(){
        echo "404 : la page n'a pas été trouvée";
    }

}
