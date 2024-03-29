<?php
//--ok--//
class DBModel{
    protected $db = null;
    protected $connected = false;

    public function __construct(){
        $this->connected = $this->connect_to_db();
}

    private function connect_to_db(){
        require (__DIR__."/private/env_settings.php");
        
        try {
            $this->db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $pwd, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            return true;
    }
    catch(Exception $e){
        return false;
    }
}

}