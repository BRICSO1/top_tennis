<?php
$requete = "INSERT INTO `players_of_tennis` (`id`, `firstname`, `lastname`, `points`, `nationality`) VALUES (NULL, ?, ?, ?, ?)";
$statement = $pdo->prepare($requete);
$statement->execute([
    $players
]);