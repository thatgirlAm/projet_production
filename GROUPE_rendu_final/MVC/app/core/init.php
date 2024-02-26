<?php

//---------La fonction suivante va charger un document lorsqu'il semble manquer------------------------//
//-----Ceci est facilité par le fait que les classes portent le même nom que le nom qui les contient---//
spl_autoload_register(function($classname){
     $filename = __DIR__."/../models/".ucfirst($classname).".php"; 
     require $filename;
    });

//----Fichiers de base (core)----//
require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';