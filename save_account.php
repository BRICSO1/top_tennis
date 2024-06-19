<?php
if (isset($_POST['submit'])) {
    // Récupération du commentaire
    $commentaire = $_POST['login'];
    
    // Ajout du commentaire dans le fichier
    if (file_put_contents($commentaire . PHP_EOL, FILE_APPEND | LOCK_EX) !== false) {
        // Redirection vers top.php après ajout du commentaire
        header('Location: top.php');
        exit(); // Assure que le script s'arrête après la redirection
    }
}
else {
    header('Location: top.php');
    exit();
}
?>
