<?php

include_once 'M/targetmodel.php';

class TargetController {

    private $db;
    private $target_model;

    public function __construct() {
        $this->db = Bdd::connexion(); 
        $this->target_model = new Targetmodel($this->db);
    }

    public function index() {

        if (!isset($_SESSION['hitman_id'])) {
            die("Accès interdit. Besoin d'un niveau d'accès SECRET_DEFENSE. Veuillez vous connecter pour avoir accès aux informations relatives à vos missions.");
        }

        $hitman_id = $_SESSION['hitman_id'];
        $query = "SELECT nationality FROM hitman WHERE hitman_id = :hitman_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":hitman_id", $hitman_id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $hitman = $stmt->fetch(PDO::FETCH_ASSOC);
            $nationality = $hitman['nationality'];

            $targets = $this->target_model->getTargetsByNationality($nationality);

            require_once 'V/hitlist.php';
        } else {
            echo "Hitman non trouvé.";
        }
    }
}
?>