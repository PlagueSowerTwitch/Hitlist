<?php
include_once 'bdd.php';

class Hitmanmodel {
    private $bdd;

    public function __construct() {
        $this->bdd = Bdd::connexion();
    }
    
    public function inscription($codename, $email, $password, $nationality, $description = null, $image = null) 
{
    $query = $this->bdd->prepare(
        "INSERT INTO hitman (codename, email, password, nationality, description, image) 
         VALUES (:codename, :email, :password, :nationality, :description, :image)"
    );
    return $query->execute([
        ':codename' => $codename,
        ':email' => $email,
        ':password' => $password,
        ':nationality' => $nationality,
        ':description' => $description,
        ':image' => $image
    ]);
}


    public function getHitmanByEmail($hitmanEmail) {
        $gethitman = $this->bdd->prepare("SELECT * FROM hitman WHERE email = ?");
        $gethitman->execute([$hitmanEmail]);
        return $gethitman->fetch(PDO::FETCH_ASSOC);
    }

}
/*public function connexion($email, $password) {
        $query = "SELECT * FROM hitman WHERE email = :email";
        $stmt = $this->bdd->prepare($query);
        $stmt->bindParam(':email', $email);
    
        if ($stmt->execute()) {
            $hitman = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($hitman && password_verify($password, $hitman['password'])) {
                return $hitman;
            } else {
                echo "Mot de passe incorrect pour " . $email;
            }
        }
    
        return false; // Connexion échouée
    }*/
?>