<?php
include_once 'bdd.php';

class Targetmodel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getTargetsByNationality($nationality) {
        $query = "SELECT * FROM target WHERE nationality = :nationality";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":nationality", $nationality);
        $stmt->execute();
        return $stmt;
    }
}
?>
