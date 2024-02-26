<?php
session_start();
require("MVC/app/core/init.php");

DEBUG ? ini_set('display_errors', 1) : ini_set('display_errors', 0);

$app = new Application();
$app->run();


