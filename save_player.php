<?php
include(__DIR__ . '/functionalities/database_functions.php');

// Récupérer les données du formulaire et les sécuriser
$first_name = htmlspecialchars($_POST['first_name']);
$last_name = htmlspecialchars($_POST['last_name']);
$country = htmlspecialchars($_POST['nationality']);
$points = intval($_POST['points']);

// Préparer la requête SQL
$sql = $conn->prepare("INSERT INTO players_of_tennis (firstname, lastname, nationality, points) VALUES ('$first_name', '$last_name', '$country','$points')");
$sql->bind_param("sssi", $first_name, $last_name, $country, $points);

// Exécuter la requête et vérifier si l'insertion a réussi
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre joueur a bien été inséré</title>
    <link href="/assets/css/top.css" rel="stylesheet">
</head>
<body>
<br><br><br><br>
    <div class="ad_player">
        <?php
        if ($sql->execute() === TRUE) {
            echo "Votre joueur a bien été inséré dans le tableau.";
        } else {
            echo "Erreur : " . $sql->error;
        }
        $sql->close();
        $conn->close();
        ?>
        <a href="./index.php">Retour au menu principal</a>
    </div>
</body>
</html>