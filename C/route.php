<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

switch ($page) {
    case 'accueil':
        include 'V/accueil.php';
        break;
    
    case 'hitlist':
        include_once 'C/targetcontrol.php';
        $controller = new TargetController();
        $controller->index();
        break;

    case 'inscription':
        include_once 'C/hitmancontrol.php';
        $controller = new HitmanController();
        $controller->inscription();
        break;
    
    case 'connexion':
        include_once 'C/hitmancontrol.php';
        $controller = new HitmanController();
        $controller->connexion();
        try {
            $controller->connexion();
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
        break;

    default:
        include 'V/404.php';
}
