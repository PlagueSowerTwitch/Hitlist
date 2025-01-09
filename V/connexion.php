<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="V/CSS/connexion.css" rel="stylesheet"/>
    <title>Connexion</title>
</head>
<body>
    <h1>Sign In</h1>
    <form method="POST" action="index.php?page=connexion">
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Sign In</button>
    </form>
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
?>