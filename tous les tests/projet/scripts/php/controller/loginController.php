<?php
require_once(__DIR__."/scripts/php/models/employemodel.php");

if (isset($_POST['login']) && isset($_POST['pwd'])) {
    if (strlen($_POST['login']) > 0 && strlen($_POST['pwd']) > 0) {
        $userModel = new UserModel();
        $result = $userModel->check_login($_POST['login'], $_POST['pwd']);
        if (isset($result['firstname'])) {
            session_start();
            $_SESSION['firstname'] = $result['firstname'];
            $_SESSION['lastname'] = $result['lastname'];
        }
        else {
            $something_to_say = "Invalid login and/or password.";  
        }
    }
    else {
        $something_to_say = "Missing login and/or password";
    }
}

if (isset($_POST['logout'])) {
    session_start();
    session_destroy();
}

require_once(__DIR__."/scripts/php/views/includes.php");

if (isset($_SESSION['firstname'])) {
    require_once(__DIR__."/scripts/php/views/welcomePage.php");
}
else {
    require_once(__DIR__."/scripts/php/views/loginExample.php");
}
