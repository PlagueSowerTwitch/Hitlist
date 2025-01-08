<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

switch ($page) {
    case 'accueil':
        include 'V/accueil.php';
        break;
    
    case 'livret':
        include_once 'control/bookcontrol.php';
        //$messages = new messagescontroller();
        $messages->getmessages();
        break;
    case 'inscription':
        include_once 'control/usercontrol.php';
        //$users = new UsersController;
        $users->inscription();
        break;
    case 'connexion':
        include_once 'control/usercontrol.php';
        //$users = new UsersController;
        $users->connexion();
        break;
    case 'deconnexion':
        $_SESSION = array();
        header("Location: index.php");
        break;


    default:
        include 'vue/404.php';
}
