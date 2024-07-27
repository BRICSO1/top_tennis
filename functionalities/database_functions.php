<?php
require (__DIR__. '/database_connexion.php');
function players(): array
{

    $sql = "SELECT * FROM players_of_tennis";
    $stmt = db()->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}