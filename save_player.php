<?php
include("./connexion.php");
// Récupérer les données du formulaire
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$country = $_POST['nationality'];
$points= $_POST['points'];


$sql = "INSERT INTO players_of_tennis (firstname, lastname, nationality, points) VALUES ('$first_name', '$last_name', '$country','$points')";

// Exécuter la requête et vérifier si l'insertion a réussi

?>
<!doctype>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>votre joueur à bien été rentrer</title>
    <link href="./top.css" rel="stylesheet">
</head>
<body>
<br><br><br><br>
    <div class="ad_player">
        <?php
        if ($conn->query($sql) === TRUE) {
            echo "Votre joueur à bien été inserer dans le tableau.";
        } else {
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }
        ?>
        <a href="./top.php">Retour au menu principal</a>
    </div>
</body>
</html>