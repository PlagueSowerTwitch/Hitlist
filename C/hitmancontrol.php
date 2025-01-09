<?php

include_once 'M/hitmanmodel.php';

class HitmanController {
    private $db;

    public function __construct() {
        $this->db = Bdd::connexion();
    }

    public function connexion() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $hitmanModel = new Hitman();
            $hitman = $hitmanModel->connexion($email, $password);

            if ($hitman) {
                $_SESSION['hitman_id'] = $hitman['hitman_id'];
                $_SESSION['hitman_codename'] = $hitman['codename'];
                header('Location: index.php?page=hitlist');
                exit;
            } else {
                $error = "Email ou mot de passe incorrect.";
                include 'V/connexion.php';
            }
        } else {
            include 'V/connexion.php';
        }
    }  

    public function inscription() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $codename = $_POST['codename'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nationality = $_POST['nationality'];
            $description = $_POST['description'] ?? null;
            $image = $_POST['image'] ?? null;
    
            $hitmanModel = new Hitman();
            $success = $hitmanModel->inscription($codename, $email, $password, $nationality, $description, $image);
    
            if ($success) {
                header('Location: index.php?page=connexion');
                exit;
            } else {
                echo "Erreur lors de l'inscription. Veuillez réessayer.";
            }
        } else {
            include 'V/inscription.php';
        }
    }
}
