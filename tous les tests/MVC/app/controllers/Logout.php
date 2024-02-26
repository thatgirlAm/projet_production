<?php

class Logout{
    use Controller;
    public function index() {
        if (isset($_POST['logout'])) {
            session_start();
            session_destroy();
             redirect('login');
        }
       
    }
}