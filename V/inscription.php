<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="V/CSS/connexion.css" rel="stylesheet"/>
</head>
<body>
    <h1>Inscription</h1>

    <form id="inscriptionForm">
        <label for="nom">Codename :</label>
        <input type="text" id="nom" name="nom" required> <br>

        <label for="mdp">Password :</label>
        <input type="password" id="mdp" name="mdp" required> <br>

        <button type="submit">S'inscrire</button>
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