<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tennis_website";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

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
    <div class="ad_player">
        <a href="./top.php">retour au menu principal</a>
        <?php
        if ($conn->query($sql) === TRUE) {
            echo "votre joueur à bien été inserer dans le tableau.";
        } else {
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }
        ?>
    </div>
</body>
</html>