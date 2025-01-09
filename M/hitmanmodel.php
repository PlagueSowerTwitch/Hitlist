<?php

include_once 'bdd.php';

class Hitman {
    private $db;

    public function __construct() {
        $this->db = Bdd::connexion();
    }

    /**
     * 
     * @param string $email
     * @param string $password
     * @return array|bool
     */
    public function connexion($email, $password) {
        $query = "SELECT * FROM hitman WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute() && $stmt->rowCount() === 1) {
            $hitman = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $hitman['password'])) {
                return $hitman;
            }
        }

        return false;
    }

    /**
     *
     * @param string $codename
     * @param string $email
     * @param string $password
     * @param string $nationality
     * @param string|null $description
     * @param string|null $image
     * @return bool
     */
    public function inscription($codename, $email, $password, $nationality, $description = null, $image = null) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO hitman (codename, email, password, nationality, description, image) 
                  VALUES (:codename, :email, :password, :nationality, :description, :image)";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':codename', $codename);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':nationality', $nationality);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);

        return $stmt->execute();
    }

    /**
     *
     * @param int $hitmanId
     * @return array|bool
     */
    public function getHitmanById($hitmanId) {
        $query = "SELECT * FROM hitman WHERE hitman_id = :hitman_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':hitman_id', $hitmanId);

        if ($stmt->execute() && $stmt->rowCount() === 1) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        return false;
    }
}
