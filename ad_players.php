<?php
include("connextion.php");
/**
 * Ce scrpt ajoute les joueurs lorsque qu'on crée un base de donnés 
 */
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

$requete = "INSERT INTO `players_of_tennis` (`id`, `firstname`, `lastname`, `points`, `nationality`) VALUES (NULL, ?, ?, ?, ?)";
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
