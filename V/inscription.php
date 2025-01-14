<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="V/CSS/connexion.css" rel="stylesheet"/>
</head>
<body>
    <h1>Sign Up</h1>

    <form id="inscriptionForm">
    <label for="nom">Codename :</label>
    <input type="text" id="nom" name="nom" required> <br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required> <br>

    <label for="nationality">Nationality :</label>
    <select id="nationality" name="nationality" required>
        <option value="" disabled selected>Select your nationality</option>
        <option value="mx">Mexican</option>
        <option value="us">American</option>
        <option value="it">Italian</option>
        <option value="ru">Russian</option>
        <option value="other">Other</option>
    </select> <br>

    <label for="description">Description :</label>
    <textarea id="description" name="description" rows="4" cols="50" placeholder="Write about yourself..."></textarea> <br>

    <label for="image">Profile Image :</label>
    <input type="file" id="image" name="image" accept="image/*"> <br>

    <label for="mdp">Password :</label>
    <input type="password" id="mdp" name="mdp" required> <br>

    <button type="submit">Sign Up</button>
</form>


    <p id="errorMessage" style="color: red; display: none;"></p>

    <script>
        document.getElementById('inscriptionForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const mdp = document.getElementById('mdp').value;

            const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{12,}$/;

            if (!regex.test(mdp)) {
                const errorMessage = document.getElementById('errorMessage');
                errorMessage.textContent = "Erreur : Mot de passe non conforme. Assurez-vous qu'il contient :\n" +
                    " - Au moins une lettre minuscule\n" +
                    " - Au moins une lettre majuscule\n" +
                    " - Au moins un chiffre\n" +
                    " - Au moins un caractère spécial\n" +
                    " - Une longueur minimale de 12 caractères.";
                errorMessage.style.display = "block";
            } else {
                this.submit();
            }
        });
    </script>
</body>
</html>
<?php
if (isset($_SESSION['hitman_id']) && isset($_SESSION['hitman_codename'])) {
    echo "Vous êtes connecté en tant que " . $_SESSION['hitman_codename'];
} else {
    echo "Vous n'êtes pas connecté.";
}
echo "<pre>";
print_r($_POST);
echo "</pre>";
