<?php
if (isset($_POST['submit'])) {
    // Récupération du login
    $commentaire = $_POST['commentaire'];
    
    // Ajout du commentaire dans le fichier
    if (file_put_contents($file, $commentaire . PHP_EOL, FILE_APPEND | LOCK_EX) !== false) {
        // Redirection vers save_comment.php après ajout du commentaire
        header('Location: save_comment.php');
        exit(); // Assure que le script s'arrête après la redirection
    } else {
        // Gestion d'une erreur d'écriture dans le fichier
        echo "<p>Erreur lors de l'ajout du commentaire.</p>";
    }
}
else {
    header('Location: save_comment.php');
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
<p>C'est bon vous êtes connecté</p>
<a href="./top.php">retour à l'acceuil</a>
</body>
</html>