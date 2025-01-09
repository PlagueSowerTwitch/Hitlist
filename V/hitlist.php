<?php

if ($targets->rowCount() > 0) {
    while ($target = $targets->fetch(PDO::FETCH_ASSOC)) {
        echo "<div>";
        echo "<h2>" . htmlspecialchars($target['name']) . "</h2>";
        if ($target['image']) {
            echo "<img src='" . htmlspecialchars($target['image']) . "' alt='Image de la cible' style='max-width: 200px;'><br>";
        }
        echo "<p>" . htmlspecialchars($target['description']) . "</p>";
        echo "<p><strong>Nationalité :</strong> " . htmlspecialchars($target['nationality']) . "</p>";
        echo "</div><hr>";
    }
} else {
    echo "<p>Aucune cible trouvée avec cette nationalité.</p>";
}
?>
