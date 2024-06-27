<?php
include("./protect.php");

if (isset($_POST['submit'])) {
    // Récupération du commentaire
    $commentaire = htmlspecialchars($_POST['commentaire'], ENT_QUOTES, 'UTF-8'); // Sanitize input

    // Définition du fichier dans lequel les commentaires seront sauvegardés
    $file = 'commentaires.txt'; // Replace with your file path

    // Ajout du commentaire dans le fichier
    if (file_put_contents($file, $commentaire . PHP_EOL, FILE_APPEND | LOCK_EX) !== false) {
        // Redirection vers save_comment.php après ajout du commentaire
        echo("c'est bon votre commantaire a été enrgitré");
    } else {
        // Gestion d'une erreur d'écriture dans le fichier
        echo "<p>Erreur lors de l'ajout du commentaire.</p>";
    }
} else {
    header('Location: top.php');
    exit();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="./top.php">Retour à l'accueil</a>
</body>
</html>