<?php

include_once 'M/hitmanmodel.php';

class HitmanController 
{
    private $model;

    public function __construct() 
    {
        $this->model = new Hitmanmodel();
    }

    public function getFromInscription()
    {
        include_once 'V/Inscription.php';

    }

    public function getFromConnexion()
    {
    include_once 'V/Connexion.php';
    }

    public function connexion()
{
    if (isset($_POST['email'], $_POST['password'])) 
    { 
        $email = $_POST['email'];
        $password = $_POST['password'];

        $hitman = $this->model->getHitmanByEmail($email);

        if ($hitman && password_verify($password, $hitman['password'])) 
        {
            $_SESSION['user']['id'] = $hitman['id'];
            $_SESSION['user']['name'] = $hitman['codename']; 
            $_SESSION['user']['logged_in'] = true;

            header("Location: ?page=hitlist");
            exit();
        } 
        else 
        {
            echo "Email ou mot de passe incorrect";
            $this->getFromConnexion();
        }
    }         
    else 
    {
        $this->getFromConnexion();
    }
}


    public function inscription()
    {
        if (isset($_POST['codename'], $_POST['email'], $_POST['password'], $_POST['nationality']))
            {
            $codename = $_POST['codename'];
            $email = $_POST['email'];
            $nationality = $_POST['nationality'];
            $description = $_POST['description'] ?? null;
            $image = $_POST['image'] ?? null;
            $mdp = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if($this->model->inscription($codename, $email, $mdp, $nationality, $description, $image))
            {
                echo "Inscription Réussie";
                header("Location: ?page=inscription");

            } 
            else
            {
                echo "Erreur dans l'inscription";
                $this->getFromInscription();
            }

        }
        else
        {
            $this->getFromInscription();
        }

    }
}

    /*public function connexion() 
    {

        if (isset($_POST['email'], $_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $hitmanModel = new Hitmanmodel();
            $hitman = $hitmanModel->getHitmanByEmail($email);
    
            if ($hitman && password_verify($password, $hitman['password'])) {
                $_SESSION['hitman_id'] = $hitman['hitman_id'];
                $_SESSION['hitman_codename'] = $hitman['codename'];
                
                $message = "Good to see you again agent " . $hitman['codename'];
                $_SESSION['welcome_message'] = $message;
    
                header('Location: index.php?page=hitlist');
                exit;
            } else {
                $error = "Email ou mot de passe incorrect.";
                include 'V/connexion.php';
            }
        } else {
            echo"TETE DE NOEILLE";
            include 'V/connexion.php';
        }
    }*/

    /*public function inscriptions() {
        if (isset($_POST['codename'], $_POST['email'], $_POST['password'], $_POST['nationality'])) {
            $codename = $_POST['codename'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nationality = $_POST['nationality'];
            $description = $_POST['description'] ?? null;
            $image = $_POST['image'] ?? null;

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $hitmanModel = new Hitmanmodel();
            $success = $hitmanModel->inscription($codename, $email, $passwordHash, $nationality, $description, $image); // Enregistrement dans la base de données
    
            if ($success) {
                echo "Inscription réussie. Vous pouvez maintenant vous connecter.";
                header('Location: index.php?page=connexion');
                exit;
            } else {
                echo "Erreur lors de l'inscription. Veuillez réessayer.";
                include 'V/inscription.php';
            }
        } else {
            echo "ERREEEEUUUR";
            include 'V/inscription.php';
        }
    }*/

