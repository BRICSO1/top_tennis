<?php
include("protect.php");
include("connexion.php");
/**
 * Ce scrpt ajoute les joueurs lorsque qu'on crée un base de donnés 
 */
$table="CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    points int (100) NOT NULL,
    nationality VARCHAR(255) NOT NULL,
);";
$players = [
    ["Prenom" => "Jannik", "Nom" => "Sinner", "Nationalite" => "Italien", "Points" => 9525],
    ["Prenom" => "Carlos", "Nom" => "Alcaraz", "Nationalite" => "Espagnol", "Points" => 8560],
    ["Prenom" => "Novak", "Nom" => "Djokovic", "Nationalite" => "Serbe", "Points" => 8360],
    ["Prenom" => "Alexender", "Nom" => "Zverev", "Nationalite" => "Allemand", "Points" => 6885],
    ["Prenom" => "Daniil", "Nom" => "Medvedev", "Nationalite" => "Russe", "Points" => 6485],
    ["Prenom" => "Andrey", "Nom" => "Rublev", "Nationalite" => "Russe", "Points" => 4710],
    ["Prenom" => "Casper", "Nom" => "Ruud", "Nationalite" => "Norvège", "Points" => 4025],
    ["Prenom" => "Hubert", "Nom" => "Hurkacz", "Nationalite" => "Pologne", "Points" => 3995],
    ["Prenom" => "Alex", "Nom" => "De Minaur", "Nationalite" => "Australie", "Points" => 3845],
    ["Prenom" => "Grigor", "Nom" => "Dimitrov", "Nationalite" => "Bulgarie", "Points" => 3775]
];

$requete = "INSERT INTO `players_of_tennis` (`id`, `firstname`, `lastname`, `points`, `nationality`) VALUES (NULL, ?, ?, ?, ?) and ALTER TABLE `players_of_tennis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
";
$statement = $pdo->prepare($requete);

// Parcours du tableau et insertion des données
foreach ($players as $player) {
    echo "Joueur inséré : " . $player["Prenom"] . " " . $player["Nom"] . "<br>";
    $statement->execute([
        $player["Prenom"],
        $player["Nom"],
        $player["Points"],
        $player["Nationalite"]
    ]);
}

echo "Aucune donnée de joueurs.";
