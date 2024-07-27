<?php
// Paramètres de configuration
$charset = 'utf8mb4';
$host = 'localhost'; // Adresse du serveur MySQL
$dbname = 'tennis_website'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur MySQL
$password = ''; // Mot de passe MySQL

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

// Options PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $username, $password, $options);
$requete = "SELECT * FROM players_of_tennis";
$statement = $pdo->prepare($requete);
$statement->execute();
$players = $statement->fetchAll(PDO::FETCH_ASSOC);
