<?php

//----Cas où on se connecte au localHost ou à un server distant----//

if($_SERVER['SERVER_NAME']=='tai'){
    define('ROOT', 'http://tai/projet_production/MVC/public/');

    //----Identifiants en local----//
    define('DBNAME','smarttech');
    define('DBHOST','tai');
    define('DBUSER','root');
    define('DBPASS','');
}
else {
    define('ROOT','https://devweb.estia.fr/tai/tai_crocodile/project/');

    //--Identificants en serveur--//
    define('DBNAME','tai_crocodile');
    define('DBHOST','65.109.84.104');
    define('DBUSER','tai_crocodile');
    define('DBPASS','SNUJ6GYBGS');
}

//----Noms et description de la plateforme----//
define("APP_NAME", "SmartTech");
define("APP_DESC","La HighTech francaise !");

//----Mode débug, erreurs----/
define("DEBUG", true);
define("ERROR_LOGIN", "<div class='loginError'>USER NOT FOUND : check the email or the password and try again.</div><style>.loginError{color : red ;}</style>");